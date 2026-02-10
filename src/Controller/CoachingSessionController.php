<?php

namespace App\Controller;

use App\Entity\CoachingSession;
use App\Form\CoachingSessionType;
use App\Repository\CoachingSessionRepository;
use App\Repository\TrainingPlanRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/coaching/session')]
final class CoachingSessionController extends AbstractController
{
    #[Route(name: 'app_coaching_session_index', methods: ['GET'])]
    public function index(
        CoachingSessionRepository $coachingSessionRepository,
        TrainingPlanRepository $trainingPlanRepository
    ): Response {
        return $this->render('coaching_session/index.html.twig', [
            'coaching_sessions' => $coachingSessionRepository->findAll(),
            'training_plans' => $trainingPlanRepository->findAll(),
            
        ]);
    }

    #[Route('/new', name: 'app_coaching_session_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $coachingSession = new CoachingSession();
        $form = $this->createForm(CoachingSessionType::class, $coachingSession);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($coachingSession);
            $entityManager->flush();

            return $this->redirectToRoute('app_coaching_session_index');
        }

        return $this->render('coaching_session/new.html.twig', [
            'coaching_session' => $coachingSession,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coaching_session_show', methods: ['GET'])]
    public function show(CoachingSession $coachingSession): Response
    {
        return $this->render('coaching_session/show.html.twig', [
            'coaching_session' => $coachingSession,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_coaching_session_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        CoachingSession $coachingSession,
        EntityManagerInterface $entityManager
    ): Response {
        $form = $this->createForm(CoachingSessionType::class, $coachingSession);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_coaching_session_index');
        }

        return $this->render('coaching_session/edit.html.twig', [
            'coaching_session' => $coachingSession,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coaching_session_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        CoachingSession $coachingSession,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete'.$coachingSession->getId(), $request->request->get('_token'))) {
            $entityManager->remove($coachingSession);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_coaching_session_index');
    }
    #[Route('/coaching/session/{id}/meet', name: 'app_coaching_session_meet')]
public function meet(CoachingSession $coachingSession): Response
{
    // Nom unique de la room
    $roomName = 'CoachingSession_' . $coachingSession->getId();

    return $this->render('coaching_session/meet.html.twig', [
        'room_name' => $roomName,
        'session' => $coachingSession,
    ]);
}
}
