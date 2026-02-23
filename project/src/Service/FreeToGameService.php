<?php
// src/Service/FreeToGameService.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class FreeToGameService
{
    private $httpClient;
    
    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }
    
    /**
     * Récupérer la liste des jeux
     */
    public function getGames(array $filters = []): array
    {
        try {
            $response = $this->httpClient->request('GET', 'https://www.freetogame.com/api/games', [
                'query' => $filters
            ]);
            
            $data = $response->toArray();
            
            // Si c'est un tableau vide, c'est que l'API a répondu mais sans données
            if (empty($data)) {
                // Tentative sans filtres pour vérifier
                return $this->getAllGames();
            }
            
            return $data;
        } catch (\Exception $e) {
            // Log l'erreur
            error_log('FreeToGame API Error: ' . $e->getMessage());
            return [];
        }
    }
    
    /**
     * Récupérer TOUS les jeux sans filtre
     */
    public function getAllGames(): array
    {
        try {
            $response = $this->httpClient->request('GET', 'https://www.freetogame.com/api/games');
            return $response->toArray();
        } catch (\Exception $e) {
            return [];
        }
    }
    
    /**
     * Récupérer les détails d'un jeu
     */
    public function getGameDetails(int $id): ?array
    {
        try {
            $response = $this->httpClient->request('GET', "https://www.freetogame.com/api/game", [
                'query' => ['id' => $id]
            ]);
            
            return $response->toArray();
        } catch (\Exception $e) {
            return null;
        }
    }
    
    /**
     * Récupérer les jeux par filtre
     */
    public function getGamesByFilter(string $platform = 'all', string $category = 'all', string $sort = 'release-date'): array
    {
        try {
            $query = [];
            
            if ($platform !== 'all') {
                $query['platform'] = $platform;
            }
            
            if ($category !== 'all') {
                $query['category'] = $category;
            }
            
            $query['sort-by'] = $sort;
            
            $response = $this->httpClient->request('GET', 'https://www.freetogame.com/api/games', [
                'query' => $query
            ]);
            
            return $response->toArray();
        } catch (\Exception $e) {
            return [];
        }
    }
}