<?php

namespace App\Service;

use LLPhant\Chat\OpenAIChat;
use LLPhant\OpenAIConfig;
use Psr\Log\LoggerInterface;

class AiService
{
    private $chat;
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $apiKey = $_ENV['OPENAI_API_KEY'] ?? $_SERVER['OPENAI_API_KEY'] ?? null;
        
        if (!$apiKey) {
            throw new \Exception('OPENAI_API_KEY non définie dans .env');
        }
        
        // Configuration explicite de LLPhant
        $config = new OpenAIConfig();
        $config->apiKey = $apiKey;
        $config->model = 'gpt-3.5-turbo';
        
        $this->chat = new OpenAIChat($config);
        $this->logger = $logger;
        
        // Log pour confirmer l'initialisation
        $this->logger->info('AiService initialisé avec succès');
    }

    /**
     * Génère des recommandations de jeux
     */
    public function getGameRecommendations(string $gameName): array
    {
        if (empty($gameName)) {
            $this->logger->warning('getGameRecommendations appelé avec un nom de jeu vide');
            return [];
        }
        
        $prompt = "En tant qu'expert en jeux vidéo, recommande-moi 5 jeux similaires à '$gameName'. 
                   Pour chaque jeu, donne le nom et une phrase d'explication. 
                   Format : Nom du jeu - Explication";
        
        try {
            $this->logger->info('Envoi requête IA pour recommandations', ['game' => $gameName]);
            $response = $this->chat->generateText($prompt);
            $this->logger->info('Réponse IA reçue', ['response_length' => strlen($response)]);
            
            return $this->parseRecommendations($response);
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur LLPhant dans getGameRecommendations', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return [];
        }
    }

    /**
     * Génère une description pour un jeu
     */
    public function generateGameDescription(string $gameName, string $genre): string
    {
        if (empty($gameName)) {
            $this->logger->warning('generateGameDescription appelé avec un nom de jeu vide');
            return "Description non disponible.";
        }
        
        $prompt = "Génère une description courte et accrocheuse pour le jeu '$gameName' 
                   (genre: $genre) pour un site e-commerce.
                   La description doit faire 2-3 phrases et donner envie d'acheter.
                   Sois créatif et captivant.";
        
        try {
            $this->logger->info('Envoi requête IA pour description', ['game' => $gameName, 'genre' => $genre]);
            $response = $this->chat->generateText($prompt);
            $this->logger->info('Description générée avec succès', ['game' => $gameName]);
            
            return $response;
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur LLPhant dans generateGameDescription', [
                'game' => $gameName,
                'message' => $e->getMessage()
            ]);
            return "Description non disponible.";
        }
    }

    /**
     * Analyse le sentiment d'un avis
     */
    public function analyzeSentiment(string $review): array
    {
        if (empty($review)) {
            $this->logger->warning('analyzeSentiment appelé avec un avis vide');
            return [
                'sentiment' => 'neutre',
                'score' => 0.5,
                'mots_cles' => []
            ];
        }
        
        $prompt = "Analyse le sentiment de cet avis de joueur et réponds UNIQUEMENT avec un JSON contenant :
                   - sentiment (positif, negatif, neutre)
                   - score (entre 0 et 1)
                   - mots_cles (3 mots importants)
                   
                   Avis: $review";
        
        try {
            $this->logger->info('Envoi requête IA pour analyse sentiment');
            $response = $this->chat->generateText($prompt);
            
            $json = $this->extractJson($response);
            $result = json_decode($json, true);
            
            if (!$result) {
                $this->logger->warning('Réponse IA non-JSON', ['response' => $response]);
                return [
                    'sentiment' => 'neutre',
                    'score' => 0.5,
                    'mots_cles' => []
                ];
            }
            
            return $result;
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur LLPhant dans analyzeSentiment', [
                'message' => $e->getMessage()
            ]);
            return [
                'sentiment' => 'neutre',
                'score' => 0.5,
                'mots_cles' => []
            ];
        }
    }

    /**
     * Extrait le JSON de la réponse
     */
    private function extractJson(string $response): string
    {
        // Cherche un bloc JSON entre ```json et ```
        if (preg_match('/```json\s*(\{.*?\})\s*```/s', $response, $matches)) {
            return $matches[1];
        }
        
        // Cherche un bloc JSON entre ``` et ```
        if (preg_match('/```\s*(\{.*?\})\s*```/s', $response, $matches)) {
            return $matches[1];
        }
        
        // Sinon, cherche un objet JSON simple
        if (preg_match('/\{.*\}/s', $response, $matches)) {
            return $matches[0];
        }
        
        return '{}';
    }

    /**
     * Parse les recommandations
     */
    private function parseRecommendations(string $text): array
    {
        $lines = explode("\n", trim($text));
        $recommendations = [];
        
        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) continue;
            
            // Format: "Nom du jeu - Explication" ou "1. Nom du jeu - Explication"
            if (preg_match('/(?:\d+\.\s*)?(.+?)\s*[-:]\s*(.+)/', $line, $matches)) {
                $recommendations[] = [
                    'name' => trim($matches[1]),
                    'reason' => trim($matches[2])
                ];
            }
        }
        
        return $recommendations;
    }
}