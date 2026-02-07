<?php
// src/Controller/Back/DashboardController.php
namespace App\Controller\Back;

use App\Repository\MatchyRepository;
use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_back_dashboard')]
    public function index(MatchyRepository $matchyRepository, TeamRepository $teamRepository): Response
    {
        $recentMatches = $matchyRepository->findBy([], ['match_date' => 'DESC'], 5);
        
        $stats = [
            'total_matches' => $matchyRepository->count([]),
            'ongoing_matches' => $matchyRepository->count(['status' => 'ongoing']),
            'planned_matches' => $matchyRepository->count(['status' => 'planned']),
            'finished_matches' => $matchyRepository->count(['status' => 'finished']),
            'teams_count' => $teamRepository->count([]),
        ];
        
        return $this->render('back/dashboard/index.html.twig', [
            'stats' => $stats,
            'recent_matches' => $recentMatches,
        ]);
    }
}