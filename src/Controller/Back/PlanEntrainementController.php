<?php
// src/Controller/Back/PlanEntrainementController.php

namespace App\Controller\Back;

use App\Entity\TrainingPlan;
use App\Form\TrainingPlanType;
use App\Repository\TrainingPlanRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back/entrainement')]
class PlanEntrainementController extends AbstractController
{
    #[Route('/plans', name: 'app_back_training_plan_manage', methods: ['GET'])]
    public function index(TrainingPlanRepository $trainingPlanRepository): Response
    {
        return $this->render('back/entrainement/index.html.twig', [
            'training_plans' => $trainingPlanRepository->findAll(),
        ]);
    }

    #[Route('/nouveau', name: 'app_back_training_plan_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $trainingPlan = new TrainingPlan();
        $form = $this->createForm(TrainingPlanType::class, $trainingPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($trainingPlan);
            $entityManager->flush();

            $this->addFlash('success', 'Plan d\'entraînement créé avec succès.');

            return $this->redirectToRoute('app_back_training_plan_manage', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/entrainement/new.html.twig', [
            'training_plan' => $trainingPlan,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_back_training_plan_show', methods: ['GET'])]
    public function show(TrainingPlan $trainingPlan): Response
    {
        return $this->render('back/entrainement/show.html.twig', [
            'training_plan' => $trainingPlan,
        ]);
    }

    #[Route('/{id}/modifier', name: 'app_back_training_plan_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TrainingPlan $trainingPlan, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TrainingPlanType::class, $trainingPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Plan d\'entraînement modifié avec succès.');

            return $this->redirectToRoute('app_back_training_plan_manage', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/entrainement/edit.html.twig', [
            'training_plan' => $trainingPlan,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_back_training_plan_delete', methods: ['POST'])]
    public function delete(Request $request, TrainingPlan $trainingPlan, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trainingPlan->getId(), $request->request->get('_token'))) {
            $entityManager->remove($trainingPlan);
            $entityManager->flush();

            $this->addFlash('success', 'Plan d\'entraînement supprimé avec succès.');
        }

        return $this->redirectToRoute('app_back_training_plan_manage', [], Response::HTTP_SEE_OTHER);
    }
}