<?php

namespace App\Controller\Front;

use App\Entity\TournamentReward;
use App\Form\TournamentRewardType;
use App\Repository\TournamentRewardRepository;
use App\Repository\TournamentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/tournament/{tournamentId}/reward')]
class TournamentRewardController extends AbstractController
{
    #[Route('/', name: 'app_tournament_reward_index', methods: ['GET'])]
    public function index(int $tournamentId, TournamentRepository $tournamentRepository): Response
    {
        $tournament = $tournamentRepository->find($tournamentId);
        if (!$tournament) {
            throw $this->createNotFoundException('Tournoi non trouvé');
        }

        return $this->render('tournament/reward/index.html.twig', [
            'tournament' => $tournament,
            'rewards' => $tournament->getRewards(),
        ]);
    }

    #[Route('/new', name: 'app_tournament_reward_new', methods: ['GET', 'POST'])]
    public function new(Request $request, int $tournamentId, TournamentRepository $tournamentRepository, EntityManagerInterface $entityManager): Response
    {
        $tournament = $tournamentRepository->find($tournamentId);
        if (!$tournament) {
            throw $this->createNotFoundException('Tournoi non trouvé');
        }

        $reward = new TournamentReward();
        $reward->setTournament($tournament);

        $form = $this->createForm(TournamentRewardType::class, $reward);
        $form->remove('tournament');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reward);
            $entityManager->flush();

            $this->addFlash('success', 'Récompense ajoutée avec succès.');
            return $this->redirectToRoute('app_tournament_reward_index', ['tournamentId' => $tournamentId]);
        }

        return $this->render('tournament/reward/new.html.twig', [
            'tournament' => $tournament,
            'reward' => $reward,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tournament_reward_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $tournamentId, TournamentReward $reward, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TournamentRewardType::class, $reward);
        $form->remove('tournament');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Récompense mise à jour.');
            return $this->redirectToRoute('app_tournament_reward_index', ['tournamentId' => $tournamentId]);
        }

        return $this->render('tournament/reward/edit.html.twig', [
            'tournament' => $reward->getTournament(),
            'reward' => $reward,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tournament_reward_delete', methods: ['POST'])]
    public function delete(Request $request, int $tournamentId, TournamentReward $reward, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reward->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reward);
            $entityManager->flush();
            $this->addFlash('success', 'Récompense supprimée.');
        }

        return $this->redirectToRoute('app_tournament_reward_index', ['tournamentId' => $tournamentId]);
    }
}
