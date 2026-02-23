<?php
// src/Controller/FreeToGameController.php

namespace App\Controller;

use App\Service\FreeToGameService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/games')]
class FreeToGameController extends AbstractController
{
    #[Route('/', name: 'app_games_index')]
    public function index(FreeToGameService $freeToGame, Request $request): Response
    {
        $platform = $request->query->get('platform', 'all');
        $category = $request->query->get('category', 'all');
        $sort = $request->query->get('sort', 'release-date');
        
        // Essayer d'abord avec les filtres
        $games = $freeToGame->getGamesByFilter($platform, $category, $sort);
        
        // Si aucun jeu trouvé, prendre tous les jeux
        if (empty($games)) {
            $games = $freeToGame->getAllGames();
            
            // Trier manuellement si nécessaire
            if ($sort === 'alphabetical') {
                usort($games, function($a, $b) {
                    return strcmp($a['title'], $b['title']);
                });
            } elseif ($sort === 'release-date') {
                usort($games, function($a, $b) {
                    return strtotime($b['release_date']) - strtotime($a['release_date']);
                });
            }
        }
        
        return $this->render('games/index.html.twig', [
            'games' => $games,
            'current_platform' => $platform,
            'current_category' => $category,
            'current_sort' => $sort,
            'categories' => [
                'all' => 'Tous',
                'mmorpg' => 'MMORPG',
                'shooter' => 'Shooter',
                'moba' => 'MOBA',
                'battle-royale' => 'Battle Royale',
                'card' => 'Cartes',
                'fighting' => 'Combat',
                'racing' => 'Course',
                'sports' => 'Sport',
                'strategy' => 'Stratégie'
            ],
            'platforms' => [
                'all' => 'Toutes',
                'pc' => 'PC',
                'browser' => 'Navigateur'
            ]
        ]);
    }
    
    #[Route('/{id}', name: 'app_games_show')]
    public function show(int $id, FreeToGameService $freeToGame): Response
    {
        $game = $freeToGame->getGameDetails($id);
        
        if (!$game) {
            throw $this->createNotFoundException('Jeu non trouvé');
        }
        
        return $this->render('games/show.html.twig', [
            'game' => $game
        ]);
    }
}