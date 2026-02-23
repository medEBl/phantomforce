<?php

namespace App\Controller\Api;

use App\Entity\Payment;
use App\Entity\ShopItem;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/payments', name: 'api_payments_')]
class PaymentApiController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private EmailService $emailService;

    public function __construct(
        EntityManagerInterface $entityManager,
        EmailService $emailService
    ) {
        $this->entityManager = $entityManager;
        $this->emailService = $emailService;
    }

    #[Route('/process', name: 'process', methods: ['POST'])]
    public function processPayment(Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
            
            if (!$data) {
                return $this->json(['error' => 'Données invalides'], Response::HTTP_BAD_REQUEST);
            }

            $payment = new Payment();
            $payment->setAmount((string) $data['amount']);
            $payment->setPaymentMethod($data['paymentMethod']);
            $payment->setTransactionRef('API-' . uniqid());
            $payment->setPaymentStatus('success');

            if (isset($data['shopItemId'])) {
                $shopItem = $this->entityManager->getRepository(ShopItem::class)->find($data['shopItemId']);
                $payment->setShopItem($shopItem);
            }

            $this->entityManager->persist($payment);
            $this->entityManager->flush();

            $customerEmail = $data['customerEmail'] ?? 'client@test.com';
            $this->emailService->sendPaymentConfirmation($payment, $customerEmail);

            return $this->json([
                'status' => 'success',
                'message' => 'Paiement réussi',
                'data' => [
                    'id' => $payment->getId(),
                    'transactionRef' => $payment->getTransactionRef(),
                    'amount' => $payment->getAmount(),
                    'status' => $payment->getPaymentStatus()
                ]
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return $this->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/list', name: 'list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $payments = $this->entityManager->getRepository(Payment::class)->findAll();
        
        $data = [];
        foreach ($payments as $payment) {
            $data[] = [
                'id' => $payment->getId(),
                'transactionRef' => $payment->getTransactionRef(),
                'amount' => $payment->getAmount(),
                'status' => $payment->getPaymentStatus(),
                'method' => $payment->getPaymentMethod()
            ];
        }

        return $this->json($data);
    }

    #[Route('/{id}/status', name: 'status', methods: ['GET'])]
    public function getPaymentStatus(Payment $payment): JsonResponse
    {
        return $this->json([
            'id' => $payment->getId(),
            'transactionRef' => $payment->getTransactionRef(),
            'amount' => $payment->getAmount(),
            'status' => $payment->getPaymentStatus(),
            'method' => $payment->getPaymentMethod()
        ]);
    }
}