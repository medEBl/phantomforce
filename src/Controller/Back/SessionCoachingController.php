<?php
// src/Controller/Back/SessionCoachingController.php

namespace App\Controller\Back;

use App\Entity\CoachingSession;
use App\Form\CoachingSessionType;
use App\Repository\CoachingSessionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back/session-coaching')]
class SessionCoachingController extends AbstractController
{
    #[Route('/sessions', name: 'app_back_coaching_session_manage', methods: ['GET'])]
    public function index(CoachingSessionRepository $coachingSessionRepository): Response
    {
        return $this->render('back/session_coaching/index.html.twig', [
            'coaching_sessions' => $coachingSessionRepository->findAll(),
        ]);
    }

    #[Route('/nouvelle', name: 'app_back_coaching_session_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $coachingSession = new CoachingSession();
        $form = $this->createForm(CoachingSessionType::class, $coachingSession);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($coachingSession);
            $entityManager->flush();

            $this->addFlash('success', 'Session de coaching créée avec succès.');

            return $this->redirectToRoute('app_back_coaching_session_manage', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/session_coaching/new.html.twig', [
            'coaching_session' => $coachingSession,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_back_coaching_session_show', methods: ['GET'])]
    public function show(CoachingSession $coachingSession): Response
    {
        return $this->render('back/session_coaching/show.html.twig', [
            'coaching_session' => $coachingSession,
        ]);
    }

    #[Route('/{id}/modifier', name: 'app_back_coaching_session_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CoachingSession $coachingSession, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CoachingSessionType::class, $coachingSession);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Session de coaching modifiée avec succès.');

            return $this->redirectToRoute('app_back_coaching_session_manage', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/session_coaching/edit.html.twig', [
            'coaching_session' => $coachingSession,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_back_coaching_session_delete', methods: ['POST'])]
    public function delete(Request $request, CoachingSession $coachingSession, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coachingSession->getId(), $request->request->get('_token'))) {
            $entityManager->remove($coachingSession);
            $entityManager->flush();

            $this->addFlash('success', 'Session de coaching supprimée avec succès.');
        }

        return $this->redirectToRoute('app_back_coaching_session_manage', [], Response::HTTP_SEE_OTHER);
    }
}