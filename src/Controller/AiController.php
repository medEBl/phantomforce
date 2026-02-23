<?php

namespace App\Controller;

use App\Service\AiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AiController extends AbstractController
{
    #[Route('/ai/test', name: 'app_ai_test')]
    public function test(AiService $ai): Response
    {
        // Test 1: Recommandations
        $recommendations = $ai->getGameRecommendations('Elden Ring');
        
        // Test 2: Description
        $description = $ai->generateGameDescription('Cyberpunk 2077', 'RPG');
        
        // Test 3: Sentiment
        $review = "Ce jeu est incroyable ! Les graphismes sont magnifiques et l'histoire est captivante. Je le recommande vivement !";
        $sentiment = $ai->analyzeSentiment($review);
        
        return $this->render('ai/test.html.twig', [
            'recommendations' => $recommendations,
            'description' => $description,
            'sentiment' => $sentiment
        ]);
    }

    #[Route('/ai/recommend/{gameName}', name: 'app_ai_recommend')]
    public function recommend(string $gameName, AiService $ai): Response
    {
        $recommendations = $ai->getGameRecommendations($gameName);
        
        return $this->render('ai/recommendations.html.twig', [
            'gameName' => $gameName,
            'recommendations' => $recommendations
        ]);
    }

    #[Route('/ai/describe/{gameName}/{genre}', name: 'app_ai_describe')]
    public function describe(string $gameName, string $genre, AiService $ai): Response
    {
        $description = $ai->generateGameDescription($gameName, $genre);
        
        return $this->render('ai/description.html.twig', [
            'gameName' => $gameName,
            'description' => $description
        ]);
    }
}