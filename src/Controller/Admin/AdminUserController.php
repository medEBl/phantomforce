<?php
// src/Controller/Admin/AdminUserController.php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\UserType;
use App\Form\UserFilterType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/admin/users')]
#[IsGranted('ROLE_ADMIN')]
class AdminUserController extends AbstractController
{
    private $userRepository;
    private $entityManager;

    public function __construct(UserRepository $userRepository, EntityManagerInterface $entityManager)
    {
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'admin_user_index', methods: ['GET'])]
    public function index(
        Request $request,
        PaginatorInterface $paginator
    ): Response
    {
        $filterForm = $this->createForm(UserFilterType::class);
        $filterForm->handleRequest($request);

        $queryBuilder = $this->userRepository->createQueryBuilder('u');
        
        // Apply filters
        if ($filterForm->isSubmitted() && $filterForm->isValid()) {
            $data = $filterForm->getData();
            
            if ($data['search']) {
                $queryBuilder->andWhere('u.email LIKE :search OR u.username LIKE :search OR u.fullName LIKE :search')
                    ->setParameter('search', '%' . $data['search'] . '%');
            }
            
            if ($data['role'] && $data['role'] !== 'all') {
                $queryBuilder->andWhere('u.role = :role')
                    ->setParameter('role', $data['role']);
            }
            
            if ($data['status'] && $data['status'] !== 'all') {
                $queryBuilder->andWhere('u.isActive = :status')
                    ->setParameter('status', $data['status'] === 'active');
            }
            
            if ($data['country'] && $data['country'] !== 'all') {
                $queryBuilder->andWhere('u.country = :country')
                    ->setParameter('country', $data['country']);
            }
        }

        // Sorting
        $sortField = $request->query->get('sort', 'u.createdAt');
        $sortDirection = $request->query->get('direction', 'DESC');
        
        $allowedFields = ['u.id', 'u.email', 'u.username', 'u.role', 'u.createdAt', 'u.achievementPoints'];
        $sortField = in_array($sortField, $allowedFields) ? $sortField : 'u.createdAt';
        
        $queryBuilder->orderBy($sortField, $sortDirection);

        // Pagination
        $users = $paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            15 // Items per page
        );

        // Stats
        $stats = $this->userRepository->getUserStatistics();

        return $this->render('admin/user/index.html.twig', [
            'users' => $users,
            'filter_form' => $filterForm->createView(),
            'stats' => $stats,
            'sort_field' => $sortField,
            'sort_direction' => $sortDirection,
            'export_url' => $this->generateUrl('admin_user_export', $request->query->all()),
        ]);
    }

    #[Route('/new', name: 'admin_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle password if provided
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $user->setPassword(
                    $passwordHasher->hashPassword($user, $plainPassword)
                );
            }

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            $this->addFlash('success', 'User created successfully.');
            
            if ($request->request->get('save_and_new')) {
                return $this->redirectToRoute('admin_user_new');
            }

            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'admin_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        $activityLogs = $this->getActivityLogs($user);
        
        return $this->render('admin/user/show.html.twig', [
            'user' => $user,
            'activity_logs' => $activityLogs,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserPasswordHasherInterface $passwordHasher): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle password if provided
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $user->setPassword(
                    $passwordHasher->hashPassword($user, $plainPassword)
                );
            }

            $this->entityManager->flush();

            $this->addFlash('success', 'User updated successfully.');

            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'admin_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($user);
            $this->entityManager->flush();
            
            $this->addFlash('success', 'User deleted successfully.');
        }

        return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/toggle-status', name: 'admin_user_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('toggle-status'.$user->getId(), $request->request->get('_token'))) {
            $user->setIsActive(!$user->isActive());
            $this->entityManager->flush();
            
            $status = $user->isActive() ? 'activated' : 'deactivated';
            $this->addFlash('success', "User {$status} successfully.");
        }

        return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/export/csv', name: 'admin_user_export_csv', methods: ['GET'])]
    public function exportCsv(Request $request): Response
    {
        $users = $this->userRepository->findBy([], ['createdAt' => 'DESC']);
        
        $csvData = "ID,Email,Username,Full Name,Role,Country,Status,Created At,Last Login\n";
        
        foreach ($users as $user) {
            $csvData .= sprintf(
                "%d,%s,%s,%s,%s,%s,%s,%s,%s\n",
                $user->getId(),
                $user->getEmail(),
                $user->getUsername(),
                $user->getFullName(),
                $user->getRole(),
                $user->getCountry(),
                $user->isActive() ? 'Active' : 'Inactive',
                $user->getCreatedAt()->format('Y-m-d H:i:s'),
                $user->getLastLoginAt() ? $user->getLastLoginAt()->format('Y-m-d H:i:s') : 'Never'
            );
        }
        
        $response = new Response($csvData);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="users_' . date('Y-m-d') . '.csv"');
        
        return $response;
    }

    #[Route('/export/pdf', name: 'admin_user_export_pdf', methods: ['GET'])]
    public function exportPdf(Request $request): Response
    {
        $users = $this->userRepository->findBy([], ['createdAt' => 'DESC']);
        
        // Configure Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($options);
        
        $html = $this->renderView('admin/user/export_pdf.html.twig', [
            'users' => $users,
            'export_date' => new \DateTime(),
        ]);
        
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        
        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="users_report_' . date('Y-m-d') . '.pdf"');
        
        return $response;
    }

    #[Route('/api/search', name: 'admin_user_api_search', methods: ['GET'])]
    public function apiSearch(Request $request): JsonResponse
    {
        $searchTerm = $request->query->get('q', '');
        
        if (strlen($searchTerm) < 2) {
            return $this->json([]);
        }
        
        $users = $this->userRepository->searchByTerm($searchTerm, 10);
        
        $results = [];
        foreach ($users as $user) {
            $results[] = [
                'id' => $user->getId(),
                'text' => sprintf('%s (%s)', $user->getEmail(), $user->getUsername()),
                'email' => $user->getEmail(),
                'username' => $user->getUsername(),
            ];
        }
        
        return $this->json($results);
    }

    #[Route('/stats', name: 'admin_user_stats', methods: ['GET'])]
    public function stats(): JsonResponse
    {
        $stats = $this->userRepository->getUserStatistics();
        
        return $this->json($stats);
    }

   // Ajoutez cette méthode à votre AdminUserController.php

#[Route('/bulk/actions', name: 'admin_user_bulk_actions', methods: ['POST'])]
public function bulkActions(Request $request): Response
{
    $userIds = $request->request->get('user_ids', '[]');
    $action = $request->request->get('action');
    
    // Log pour débogage
    error_log("Bulk action received: action=$action, user_ids=$userIds");
    
    if (!$this->isCsrfTokenValid('bulk_actions', $request->request->get('_token'))) {
        $this->addFlash('error', 'Invalid CSRF token.');
        return $this->redirectToRoute('admin_user_index');
    }
    
    $userIds = json_decode($userIds, true);
    
    if (empty($userIds) || !$action) {
        $this->addFlash('error', 'No users selected or action not specified.');
        return $this->redirectToRoute('admin_user_index');
    }
    
    // Empêcher la suppression de soi-même
    if ($action === 'delete' && in_array($this->getUser()->getId(), $userIds)) {
        $this->addFlash('error', 'You cannot delete yourself.');
        return $this->redirectToRoute('admin_user_index');
    }
    
    $users = $this->userRepository->findBy(['id' => $userIds]);
    
    if (empty($users)) {
        $this->addFlash('error', 'No users found.');
        return $this->redirectToRoute('admin_user_index');
    }
    
    $message = '';
    
    try {
        switch ($action) {
            case 'activate':
                foreach ($users as $user) {
                    $user->setIsActive(true);
                }
                $message = count($users) . ' user(s) activated successfully.';
                break;
                
            case 'deactivate':
                foreach ($users as $user) {
                    // Empêcher la désactivation de soi-même
                    if ($user->getId() !== $this->getUser()->getId()) {
                        $user->setIsActive(false);
                    }
                }
                $message = count($users) . ' user(s) deactivated successfully.';
                break;
                
            case 'delete':
                foreach ($users as $user) {
                    if ($user->getId() !== $this->getUser()->getId()) {
                        $this->entityManager->remove($user);
                    }
                }
                $message = count($users) . ' user(s) deleted successfully.';
                break;
                
            default:
                $this->addFlash('error', 'Invalid action.');
                return $this->redirectToRoute('admin_user_index');
        }
        
        $this->entityManager->flush();
        $this->addFlash('success', $message);
        
    } catch (\Exception $e) {
        error_log("Bulk action error: " . $e->getMessage());
        $this->addFlash('error', 'An error occurred: ' . $e->getMessage());
    }
    
    return $this->redirectToRoute('admin_user_index');
}
}