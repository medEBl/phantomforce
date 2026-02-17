<?php

namespace App\Controller;

use App\Repository\MatchyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MapController extends AbstractController
{
    #[Route('/map', name: 'app_map')]
    public function index(MatchyRepository $matchyRepository): Response
    {
        // Récupérer tous les matchs
        $matches = $matchyRepository->findAll();
        
        // Filtrer les matchs qui ont des coordonnées valides pour la carte
        $matchesWithLocation = array_filter($matches, function($match) {
            return $match->hasValidCoordinates();
        });
        
        return $this->render('map/simple_map.html.twig', [
            'matches' => $matchesWithLocation,
            'allMatches' => $matches
        ]);
    }
}