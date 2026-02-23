<?php

namespace App\Controller\Api;

use App\Entity\Payment;
use App\Entity\ShopItem;
use App\Service\StripeService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/stripe')]
class StripeApiController extends AbstractController
{
    #[Route('/create-intent', name: 'api_stripe_create_intent', methods: ['POST'])]
    public function createIntent(Request $request, StripeService $stripeService, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['amount']) || !isset($data['shop_item_id'])) {
            return $this->json(['success' => false, 'error' => 'Données manquantes'], Response::HTTP_BAD_REQUEST);
        }

        $shopItem = $em->getRepository(ShopItem::class)->find($data['shop_item_id']);
        if (!$shopItem) {
            return $this->json(['success' => false, 'error' => 'Article non trouvé'], Response::HTTP_NOT_FOUND);
        }

        $payment = new Payment();
        $payment->setAmount($data['amount']);
        $payment->setPaymentMethod('stripe');
        $payment->setPaymentStatus('pending');
        $payment->setShopItem($shopItem);

        $em->persist($payment);
        $em->flush();

        $result = $stripeService->createPaymentIntent($payment);

        if ($result['success']) {
            return $this->json([
                'success' => true,
                'client_secret' => $result['client_secret'],
                'payment_id' => $payment->getId()
            ]);
        }

        return $this->json(['success' => false, 'error' => $result['error']], Response::HTTP_BAD_REQUEST);
    }
    #[Route('/test-payment', name: 'api_stripe_test', methods: ['POST'])]
public function testPayment(StripeService $stripeService): JsonResponse
{
    try {
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Test Game',
                    ],
                    'unit_amount' => 1000, // 10.00 EUR
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://127.0.0.1:8000/payment/success',
            'cancel_url' => 'http://127.0.0.1:8000/payment/cancel',
        ]);

        return $this->json([
            'success' => true,
            'session_id' => $session->id
        ]);
        
    } catch (\Exception $e) {
        return $this->json([
            'success' => false,
            'error' => $e->getMessage()
        ]);
    }
}

}