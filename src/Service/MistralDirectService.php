<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class MistralDirectService
{
    private $httpClient;
    private $logger;

    public function __construct(HttpClientInterface $httpClient, LoggerInterface $logger)
    {
        $this->httpClient = $httpClient;
        $this->logger = $logger;
    }

    public function generateGameDescription(string $gameName, string $genre): string
    {
        $apiKey = $_ENV['MISTRAL_API_KEY'] ?? null;
        
        if (!$apiKey) {
            return "Description non disponible.";
        }

        try {
            $response = $this->httpClient->request('POST', 'https://api.mistral.ai/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'mistral-tiny',
                    'messages' => [
                        [
                            'role' => 'user',
                            'content' => "Génère une description courte et accrocheuse pour le jeu '$gameName' (genre: $genre) pour un site e-commerce. La description doit faire 2-3 phrases."
                        ]
                    ],
                    'temperature' => 0.7,
                    'max_tokens' => 150
                ]
            ]);

            $data = $response->toArray();
            
            return $data['choices'][0]['message']['content'] ?? "Description non disponible.";
            
        } catch (\Exception $e) {
            $this->logger->error('Mistral API Error: ' . $e->getMessage());
            return "Description non disponible.";
        }
    }
}