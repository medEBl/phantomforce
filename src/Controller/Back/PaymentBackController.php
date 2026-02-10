<?php

namespace App\Controller\Back;

use App\Entity\Payment;
use App\Form\PaymentType;
use App\Repository\PaymentRepository;
use App\Repository\ShopItemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back/payment')]
class PaymentBackController extends AbstractController
{
    #[Route('/', name: 'app_back_payment_index', methods: ['GET'])]
    public function index(PaymentRepository $paymentRepository): Response
    {
        return $this->render('back/payment/index.html.twig', [
            'payments' => $paymentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_back_payment_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request, 
        EntityManagerInterface $entityManager,
        ShopItemRepository $shopItemRepository
    ): Response
    {
        $payment = new Payment();
        $form = $this->createForm(PaymentType::class, $payment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($payment);
            $entityManager->flush();

            $this->addFlash('success', 'Le paiement a été créé avec succès.');

            return $this->redirectToRoute('app_back_payment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/payment/new.html.twig', [
            'payment' => $payment,
            'form' => $form->createView(),
            'shop_items_available' => $shopItemRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_back_payment_show', methods: ['GET'])]
    public function show(Payment $payment): Response
    {
        return $this->render('back/payment/show.html.twig', [
            'payment' => $payment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_back_payment_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request, 
        Payment $payment, 
        EntityManagerInterface $entityManager,
        ShopItemRepository $shopItemRepository
    ): Response
    {
        $form = $this->createForm(PaymentType::class, $payment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Le paiement a été modifié avec succès.');

            return $this->redirectToRoute('app_back_payment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/payment/edit.html.twig', [
            'payment' => $payment,
            'form' => $form->createView(),
            'shop_items_available' => $shopItemRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_back_payment_delete', methods: ['POST'])]
    public function delete(
        Request $request, 
        Payment $payment, 
        EntityManagerInterface $entityManager
    ): Response
    {
        if ($this->isCsrfTokenValid('delete'.$payment->getId(), $request->request->get('_token'))) {
            $entityManager->remove($payment);
            $entityManager->flush();
            
            $this->addFlash('success', 'Le paiement a été supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Token CSRF invalide. La suppression a été annulée.');
        }

        return $this->redirectToRoute('app_back_payment_index', [], Response::HTTP_SEE_OTHER);
    }
}