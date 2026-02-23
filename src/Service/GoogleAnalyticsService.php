<?php

namespace App\Service;

use App\Entity\Payment;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GoogleAnalyticsService
{
    private $httpClient;
    private $logger;
    private $measurementId;
    private $apiSecret;

    public function __construct(
        HttpClientInterface $httpClient,
        LoggerInterface $logger,
        string $measurementId,
        string $apiSecret
    ) {
        $this->httpClient = $httpClient;
        $this->logger = $logger;
        $this->measurementId = $measurementId;
        $this->apiSecret = $apiSecret;
    }

    public function trackPurchase(Payment $payment): void
    {
        $shopItem = $payment->getShopItem();
        
        $eventData = [
            'client_id' => uniqid(),
            'events' => [[
                'name' => 'purchase',
                'params' => [
                    'transaction_id' => $payment->getTransactionRef(),
                    'value' => (float) $payment->getAmount(),
                    'currency' => 'EUR',
                    'items' => [[
                        'item_id' => $shopItem ? (string) $shopItem->getId() : 'N/A',
                        'item_name' => $shopItem ? $shopItem->getItemName() : 'Unknown',
                        'price' => $shopItem ? (float) $shopItem->getPrice() : (float) $payment->getAmount(),
                        'quantity' => $shopItem ? $shopItem->getQuantity() : 1
                    ]]
                ]
            ]]
        ];

        try {
            $response = $this->httpClient->request('POST', 'https://www.google-analytics.com/mp/collect', [
                'query' => [
                    'api_secret' => $this->apiSecret,
                    'measurement_id' => $this->measurementId
                ],
                'json' => $eventData
            ]);
            
            $this->logger->info('Google Analytics event sent', [
                'transaction' => $payment->getTransactionRef()
            ]);
            
        } catch (\Exception $e) {
            $this->logger->error('Google Analytics error: ' . $e->getMessage());
        }
    }

    public function trackPageView(string $pagePath, string $pageTitle): void
    {
        // Pour le tracking côté serveur (si besoin)
        $eventData = [
            'client_id' => uniqid(),
            'events' => [[
                'name' => 'page_view',
                'params' => [
                    'page_title' => $pageTitle,
                    'page_location' => $pagePath
                ]
            ]]
        ];

        try {
            $this->httpClient->request('POST', 'https://www.google-analytics.com/mp/collect', [
                'query' => [
                    'api_secret' => $this->apiSecret,
                    'measurement_id' => $this->measurementId
                ],
                'json' => $eventData
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Google Analytics page view error: ' . $e->getMessage());
        }
    }
}