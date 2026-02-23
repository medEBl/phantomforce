<?php

namespace App\Controller;

  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\MistralDirectService;

class GameApiController extends AbstractController
{
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    #[Route('/games/popular', name: 'app_games_popular')]
public function popularGames(): Response
{
    $apiKey = $_ENV['RAWG_API_KEY'] ?? '';
    
    try {
        $response = $this->httpClient->request('GET', 'https://api.rawg.io/api/games', [
            'query' => [
                'key' => $apiKey,
                'page_size' => 20,
                'ordering' => '-rating'
            ]
        ]);
        
        $data = $response->toArray();
        $games = $data['results'] ?? [];
        
        // 🔥 LISTE DES JEUX À EXCLURE (par nom)
        $excludedGames = [
            
        ];
        
        // Filtrer les jeux
        $filteredGames = array_filter($games, function($game) use ($excludedGames) {
            foreach ($excludedGames as $badName) {
                // Vérifie si le nom du jeu contient un mot exclu
                if (stripos($game['name'], $badName) !== false) {
                    return false;
                }
            }
            return true;
        });
        
        // Réindexer le tableau
        $filteredGames = array_values($filteredGames);
        
        return $this->render('game/popular.html.twig', [
            'games' => $filteredGames
        ]);
        
    } catch (\Exception $e) {
        $this->addFlash('error', 'Erreur API: ' . $e->getMessage());
        return $this->render('game/popular.html.twig', ['games' => []]);
    }
}
    #[Route('/game/{id}', name: 'app_game_detail')]
public function gameDetail(int $id, MistralDirectService $ai): Response
{
    $apiKey = $_ENV['RAWG_API_KEY'] ?? '';
    
    try {
        // 1. Appel API
        $response = $this->httpClient->request('GET', "https://api.rawg.io/api/games/{$id}", [
            'query' => ['key' => $apiKey]
        ]);
        
        // 2. Vérification du code HTTP
        if ($response->getStatusCode() !== 200) {
            throw new \Exception('API a retourné code ' . $response->getStatusCode());
        }
        
        // 3. Conversion en tableau
        $game = $response->toArray();
        
        // 4. Vérification des données
        if (empty($game)) {
            throw new \Exception('Données du jeu vides');
        }
        
        // 5. Génération description IA
        $genre = $game['genres'][0]['name'] ?? 'Jeu vidéo';
        $aiDescription = $ai->generateGameDescription($game['name'], $genre);
        
        // 6. Recommandations vides pour éviter l'erreur
        $recommendations = [];
        
        // 7. Affichage du template
        return $this->render('game/detail.html.twig', [
            'game' => $game,
            'ai_description' => $aiDescription,
            'recommendations' => $recommendations
        ]);
        
    } catch (\Exception $e) {
        // 👇 AFFICHE L'ERREUR au lieu de rediriger
        dump('❌ ERREUR CATASTROPHIQUE : ' . $e->getMessage());
        dump('Fichier : ' . $e->getFile());
        dump('Ligne : ' . $e->getLine());
        dump('Trace : ' . $e->getTraceAsString());
        die();
    }
}
    
    #[Route('/games/search', name: 'app_games_search')]
    public function searchGames(Request $request): Response
    {
        $search = $request->query->get('q', '');
        $apiKey = $_ENV['RAWG_API_KEY'] ?? '';
        
        if (empty($search)) {
            return $this->render('game/search.html.twig');
        }
        
        try {
            $response = $this->httpClient->request('GET', 'https://api.rawg.io/api/games', [
                'query' => [
                    'key' => $apiKey,
                    'search' => $search,
                    'page_size' => 12
                ]
            ]);
            
            $data = $response->toArray();
            $games = $data['results'] ?? [];
            
            return $this->render('game/search.html.twig', [
                'games' => $games,
                'search' => $search
            ]);
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur de recherche');
            return $this->render('game/search.html.twig');
        }
    }
}