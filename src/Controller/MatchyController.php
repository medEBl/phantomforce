<?php
// src/Controller/MatchyController.php
namespace App\Controller;

use App\Entity\Matchy;
use App\Form\MatchyType;
use App\Repository\MatchyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/matchy')]
class MatchyController extends AbstractController
{
    #[Route('/', name: 'app_matchy_index', methods: ['GET'])]
    public function index(MatchyRepository $matchyRepository): Response
    {
        // CHANGER CETTE LIGNE :
        // return $this->render('matchy/index.html.twig', [
        return $this->render('front/matchy/index.html.twig', [
            'matchies' => $matchyRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_matchy_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $matchy = new Matchy();
        $form = $this->createForm(MatchyType::class, $matchy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($matchy);
            $entityManager->flush();

            return $this->redirectToRoute('app_matchy_index', [], Response::HTTP_SEE_OTHER);
        }

        // CHANGER CETTE LIGNE :
        // return $this->render('matchy/new.html.twig', [
        return $this->render('front/matchy/new.html.twig', [
            'matchy' => $matchy,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matchy_show', methods: ['GET'])]
    public function show(Matchy $matchy): Response
    {
        // CHANGER CETTE LIGNE :
        // return $this->render('matchy/show.html.twig', [
        return $this->render('front/matchy/show.html.twig', [
            'matchy' => $matchy,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_matchy_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Matchy $matchy, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MatchyType::class, $matchy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_matchy_index', [], Response::HTTP_SEE_OTHER);
        }

        // CHANGER CETTE LIGNE :
        // return $this->render('matchy/edit.html.twig', [
        return $this->render('front/matchy/edit.html.twig', [
            'matchy' => $matchy,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matchy_delete', methods: ['POST'])]
    public function delete(Request $request, Matchy $matchy, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$matchy->getId(), $request->request->get('_token'))) {
            $entityManager->remove($matchy);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_matchy_index', [], Response::HTTP_SEE_OTHER);
    }
}