<?php

namespace App\Controller\Admin;

use App\Service\NotificationService;
use App\Entity\Tournament;
use App\Form\TournamentType;
use App\Repository\TournamentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/tournament')]
class TournamentController extends AbstractController
{
    #[Route('/', name: 'app_back_matchy_index', methods: ['GET'])]
    public function index(Request $request, TournamentRepository $tournamentRepository): Response
    {
        $filters = [
            'query' => $request->query->get('query') ?? $request->query->get('q'),
            'game' => $request->query->get('game'),
            'phase' => $request->query->get('phase'),
            'isActive' => $request->query->get('isActive'),
            'minDate' => $request->query->get('minDate'),
            'maxDate' => $request->query->get('maxDate'),
            'sort' => $request->query->get('sort', 'startDate'),
            'order' => $request->query->get('order', 'DESC'),
        ];

        $tournaments = $tournamentRepository->findWithAdvancedSearch($filters);

        if ($request->isXmlHttpRequest()) {
            return $this->render('admin/tournament/_table_body.html.twig', [
                'tournaments' => $tournaments,
            ]);
        }

        return $this->render('admin/tournament/index.html.twig', [
            'tournaments' => $tournaments,
            'filters' => $filters,
            'searchQuery' => $filters['query'],
            'currentSort' => $filters['sort'],
            'currentOrder' => $filters['order'],
        ]);
    }

    #[Route('/new', name: 'app_back_matchy_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, NotificationService $notificationService): Response
    {
        $tournament = new Tournament();
        $form = $this->createForm(TournamentType::class, $tournament);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tournament);
            $entityManager->flush();

            // Trigger notification
            try {
                $notificationService->sendTournamentCreatedNotification($tournament);
            } catch (\Exception $e) {
                // Silently fail or log for demo purposes
                $this->addFlash('warning', 'Erreur lors de l\'envoi de l\'email (Mailer non configuré).');
            }

            $this->addFlash('success', 'Tournoi créé avec succès.');
            return $this->redirectToRoute('app_back_matchy_index');
        }

        return $this->render('admin/tournament/new.html.twig', [
            'tournament' => $tournament,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_back_matchy_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tournament $tournament, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TournamentType::class, $tournament);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Tournoi mis à jour.');
            return $this->redirectToRoute('app_back_matchy_index');
        }

        return $this->render('admin/tournament/edit.html.twig', [
            'tournament' => $tournament,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'app_back_matchy_delete', methods: ['POST'])]
    public function delete(Request $request, Tournament $tournament, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $tournament->getId(), $request->request->get('_token'))) {
            $entityManager->remove($tournament);
            $entityManager->flush();
            $this->addFlash('success', 'Tournoi supprimé.');
        }

        return $this->redirectToRoute('app_back_matchy_index');
    }

    #[Route('/{id}/toggle', name: 'app_back_matchy_toggle', methods: ['POST'])]
    public function toggleStatus(Tournament $tournament, EntityManagerInterface $entityManager): Response
    {
        $tournament->setIsActive(!$tournament->isActive());
        $entityManager->flush();

        $status = $tournament->isActive() ? 'activé' : 'désactivé';
        $this->addFlash('success', "Le tournoi a été $status.");

        return $this->redirectToRoute('app_back_matchy_index');
    }
}
