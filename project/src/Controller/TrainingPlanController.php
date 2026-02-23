<?php

namespace App\Controller;

use App\Entity\TrainingPlan;
use App\Entity\User;
use App\Entity\Team;
use App\Form\TrainingPlanType;
use App\Repository\TrainingPlanRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/training/plan')]
final class TrainingPlanController extends AbstractController
{
    #[Route(name: 'app_training_plan_index', methods: ['GET'])]
    public function index(TrainingPlanRepository $trainingPlanRepository): Response
    {
        return $this->render('training_plan/index.html.twig', [
            'training_plans' => $trainingPlanRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_training_plan_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $trainingPlan = new TrainingPlan();
        
        // Définir une date par défaut (aujourd'hui en DateTimeImmutable)
        $trainingPlan->setCreatedAt(new \DateTimeImmutable());
        
        $form = $this->createForm(TrainingPlanType::class, $trainingPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer la date du formulaire
            $createdAt = $form->get('created_at')->getData();
            
            // Convertir en DateTimeImmutable si c'est un DateTime
            if ($createdAt instanceof \DateTime) {
                $trainingPlan->setCreatedAt(\DateTimeImmutable::createFromMutable($createdAt));
            }
            
            $entityManager->persist($trainingPlan);
            $entityManager->flush();

            $this->addFlash('success', 'Plan d\'entraînement créé avec succès !');
            return $this->redirectToRoute('app_coaching_session_index', [], Response::HTTP_SEE_OTHER);
        }

        // Récupérer les listes pour les aperçus dans le template
        $coaches = $entityManager->getRepository(User::class)->findBy(['role' => 'COACH']);
        $teams = $entityManager->getRepository(Team::class)->findAll();

        return $this->render('training_plan/new.html.twig', [
            'training_plan' => $trainingPlan,
            'form' => $form->createView(),
            'coaches' => $coaches,
            'teams' => $teams,
        ]);
    }

    #[Route('/{id}', name: 'app_training_plan_show', methods: ['GET'])]
    public function show(TrainingPlan $trainingPlan): Response
    {
        return $this->render('training_plan/show.html.twig', [
            'training_plan' => $trainingPlan,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_training_plan_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TrainingPlan $trainingPlan, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TrainingPlanType::class, $trainingPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer la date du formulaire
            $createdAt = $form->get('created_at')->getData();
            
            // Convertir en DateTimeImmutable si c'est un DateTime
            if ($createdAt instanceof \DateTime) {
                $trainingPlan->setCreatedAt(\DateTimeImmutable::createFromMutable($createdAt));
            }
            
            $entityManager->flush();

            $this->addFlash('success', 'Plan d\'entraînement modifié avec succès !');
            return $this->redirectToRoute('app_coaching_session_index', [], Response::HTTP_SEE_OTHER);
        }

        // Récupérer les listes pour les aperçus dans le template
        $coaches = $entityManager->getRepository(User::class)->findBy(['role' => 'COACH']);
        $teams = $entityManager->getRepository(Team::class)->findAll();

        return $this->render('training_plan/edit.html.twig', [
            'training_plan' => $trainingPlan,
            'form' => $form->createView(),
            'coaches' => $coaches,
            'teams' => $teams,
        ]);
    }

    #[Route('/{id}', name: 'app_training_plan_delete', methods: ['POST'])]
    public function delete(Request $request, TrainingPlan $trainingPlan, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trainingPlan->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($trainingPlan);
            $entityManager->flush();
            $this->addFlash('success', 'Plan d\'entraînement supprimé avec succès !');
        }

        return $this->redirectToRoute('app_training_plan_index', [], Response::HTTP_SEE_OTHER);
    }
}