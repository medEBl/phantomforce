<?php

namespace App\Service;

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Psr\Log\LoggerInterface;

class GeminiAiService
{
    private $client;
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $apiKey = $_ENV['GEMINI_API_KEY'] ?? null;
        
        if (!$apiKey) {
            throw new \Exception('GEMINI_API_KEY non définie dans .env');
        }
        
        $this->client = new Client($apiKey);
        $this->logger = $logger;
    }

    public function generateGameDescription(string $gameName, string $genre): string
    {
        try {
            $prompt = "Génère une description courte et accrocheuse pour le jeu '$gameName' (genre: $genre) pour un site e-commerce. La description doit faire 2-3 phrases.";
            
            $response = $this->client->geminiPro()->generateContent(
                new TextPart($prompt)
            );
            
            return $response->text();
            
        } catch (\Exception $e) {
            $this->logger->error('Gemini Error: ' . $e->getMessage());
            return "Description non disponible.";
        }
    }
}