<?php

namespace App\Controller\Admin;

use App\Repository\TournamentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_back_dashboard')]
    public function index(TournamentRepository $tournamentRepository): Response
    {
        $tournaments = $tournamentRepository->findAll();
        $totalTournaments = count($tournaments);
        $activeCount = 0;

        $totalPrizePool = 0;
        foreach ($tournaments as $t) {
            if ($t->isActive())
                $activeCount++;
            foreach ($t->getRewards() as $reward) {
                $val = (float) filter_var($reward->getRewardValue(), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $totalPrizePool += $val;
            }
        }

        return $this->render('admin/dashboard/index.html.twig', [
            'totalTournaments' => $totalTournaments,
            'activeTournaments' => $activeCount,
            'totalPrizePool' => $totalPrizePool,
        ]);
    }
}
