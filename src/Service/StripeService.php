<?php

namespace App\Service;

use App\Entity\Payment;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\StripeClient;

class StripeService
{
    private $stripe;
    private $entityManager;

    public function __construct(string $stripeSecretKey, EntityManagerInterface $entityManager)
    {
        $this->stripe = new \Stripe\StripeClient($stripeSecretKey);
        $this->entityManager = $entityManager;
    }

    public function createPaymentIntent(Payment $payment): array
    {
        try {
            $intent = $this->stripe->paymentIntents->create([
                'amount' => $payment->getAmount() * 100,
                'currency' => 'eur',
                'metadata' => [
                    'payment_id' => $payment->getId(),
                    'game' => $payment->getShopItem()?->getItemName()
                ]
            ]);

            return [
                'success' => true,
                'client_secret' => $intent->client_secret,
                'id' => $intent->id
            ];

        } catch (\Exception $e) {
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }

    public function confirmPaymentIntent(string $paymentIntentId, array $paymentMethod): array
    {
        try {
            $intent = $this->stripe->paymentIntents->confirm($paymentIntentId, [
                'payment_method' => $paymentMethod['id']
            ]);

            return [
                'success' => true,
                'status' => $intent->status,
                'transaction_id' => $intent->id
            ];

        } catch (\Exception $e) {
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}