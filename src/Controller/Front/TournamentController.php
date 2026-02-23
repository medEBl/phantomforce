<?php

namespace App\Controller\Front;

use App\Repository\TournamentRepository;
use App\Service\NotificationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TournamentController extends AbstractController
{
    #[Route('/tournaments', name: 'app_tournaments')]
    public function list(Request $request, TournamentRepository $tournamentRepository, \App\Service\QRCodeService $qrCodeService): Response
    {
        $filters = [
            'query' => $request->query->get('query') ?? $request->query->get('q'),
            'game' => $request->query->get('game'),
            'phase' => $request->query->get('phase'),
            'isActive' => $request->query->get('isActive'),
            'minDate' => $request->query->get('minDate'),
            'maxDate' => $request->query->get('maxDate'),
            'sort' => $request->query->get('sort', 'startDate'),
            'order' => $request->query->get('order', 'DESC'),
        ];

        $tournaments = $tournamentRepository->findWithAdvancedSearch($filters);

        // Generate QR codes only for tournaments with open registrations AND space available
        $qrCodes = [];
        foreach ($tournaments as $tournament) {
            if ($tournament->getPhase() === 'registrations_open' && $tournament->getRegistrations()->count() < $tournament->getMaxTeams()) {
                $registrationLink = $this->generateUrl('app_tournament_register', ['id' => $tournament->getId()], \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL);
                $qrCodes[$tournament->getId()] = $qrCodeService->generateTournamentQRCode($registrationLink);
            }
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('tournament/_list_content.html.twig', [
                'tournaments' => $tournaments,
                'qrCodes' => $qrCodes,
            ]);
        }

        return $this->render('tournament/list.html.twig', [
            'tournaments' => $tournaments,
            'qrCodes' => $qrCodes,
            'searchQuery' => $filters['query'],
            'currentSort' => $filters['sort'],
            'currentOrder' => $filters['order'],
        ]);
    }

    #[Route('/tournament/new', name: 'app_tournament_new', methods: ['GET', 'POST'])]
    public function new(Request $request, \Doctrine\ORM\EntityManagerInterface $entityManager, NotificationService $notificationService): Response
    {
        $tournament = new \App\Entity\Tournament();
        $form = $this->createForm(\App\Form\TournamentType::class, $tournament);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tournament);
            $entityManager->flush();

            // Trigger notification
            try {
                $notificationService->sendTournamentCreatedNotification($tournament);
            } catch (\Exception $e) {
                // Silently fail or log for demo purposes
                $this->addFlash('warning', 'Erreur lors de l\'envoi de l\'email (Mailer non configuré).');
            }

            $this->addFlash('success', 'Tournoi créé avec succès.');
            return $this->redirectToRoute('app_tournaments');
        }

        return $this->render('tournament/new.html.twig', [
            'tournament' => $tournament,
            'form' => $form,
        ]);
    }

    #[Route('/tournament/{id}/edit', name: 'app_tournament_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, \App\Entity\Tournament $tournament, \Doctrine\ORM\EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(\App\Form\TournamentType::class, $tournament);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Tournoi mis à jour.');
            return $this->redirectToRoute('app_tournaments');
        }

        return $this->render('tournament/edit.html.twig', [
            'tournament' => $tournament,
            'form' => $form,
        ]);
    }

    #[Route('/tournament/{id}/delete', name: 'app_tournament_delete', methods: ['POST'])]
    public function delete(Request $request, \App\Entity\Tournament $tournament, \Doctrine\ORM\EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $tournament->getId(), $request->request->get('_token'))) {
            $entityManager->remove($tournament);
            $entityManager->flush();
            $this->addFlash('success', 'Tournoi supprimé.');
        }

        return $this->redirectToRoute('app_tournaments');
    }

    #[Route('/tournament/{id}/detail', name: 'app_tournament_detail', methods: ['GET'])]
    public function show(\App\Entity\Tournament $tournament): Response
    {
        return $this->render('tournament/detail.html.twig', [
            'tournament' => $tournament,
        ]);
    }

    #[Route('/tournament/{id}/toggle', name: 'app_tournament_toggle', methods: ['POST'])]
    public function toggleStatus(\App\Entity\Tournament $tournament, \Doctrine\ORM\EntityManagerInterface $entityManager): Response
    {
        $tournament->setIsActive(!$tournament->isActive());
        $entityManager->flush();

        $status = $tournament->isActive() ? 'activé' : 'désactivé';
        $this->addFlash('success', "Le tournoi a été $status.");

        return $this->redirectToRoute('app_tournaments');
    }

    #[Route('/tournament/{id}/register', name: 'app_tournament_register', methods: ['GET', 'POST'])]
    public function register(Request $request, \App\Entity\Tournament $tournament, \Doctrine\ORM\EntityManagerInterface $entityManager): Response
    {
        // Only allow registration if the phase is 'registrations_open'
        if ($tournament->getPhase() !== 'registrations_open') {
            $this->addFlash('warning', 'Les inscriptions pour ce tournoi ne sont pas ouvertes.');
            return $this->redirectToRoute('app_tournaments');
        }

        // Check if maxTeams limit is reached
        if ($tournament->getRegistrations()->count() >= $tournament->getMaxTeams()) {
            $this->addFlash('danger', 'Le nombre maximum d\'équipes a été atteint pour ce tournoi.');
            return $this->redirectToRoute('app_tournaments');
        }

        $registration = new \App\Entity\Registration();
        $registration->setTournament($tournament);

        $form = $this->createForm(\App\Form\RegistrationType::class, $registration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($registration);
            $entityManager->flush();

            $this->addFlash('success', 'Votre équipe "' . $registration->getTeamName() . '" a été inscrite avec succès !');
            return $this->redirectToRoute('app_tournaments');
        }

        return $this->render('tournament/register.html.twig', [
            'tournament' => $tournament,
            'form' => $form->createView(),
            'currentTeams' => $tournament->getRegistrations()->count(),
            'maxTeams' => $tournament->getMaxTeams(),
        ]);
    }

    #[Route('/stats', name: 'app_tournament_stats', methods: ['GET'])]
    public function statistics(TournamentRepository $tournamentRepository): Response
    {
        $allTournaments = $tournamentRepository->findAll();

        $totalTournaments = count($allTournaments);
        $activeCount = 0;
        $totalPrizePool = 0;
        $games = [];

        foreach ($allTournaments as $t) {
            if ($t->isActive())
                $activeCount++;

            $gameName = $t->getGame();
            if (!isset($games[$gameName]))
                $games[$gameName] = 0;
            $games[$gameName]++;

            foreach ($t->getRewards() as $reward) {
                // Simplified extraction of numeric value from string (e.g. "500$" -> 500)
                $val = (float) filter_var($reward->getRewardValue(), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $totalPrizePool += $val;
            }
        }

        arsort($games);
        $topGame = key($games) ?: 'N/A';

        return $this->render('tournament/stats.html.twig', [
            'total' => $totalTournaments,
            'active' => $activeCount,
            'inactive' => $totalTournaments - $activeCount,
            'topGame' => $topGame,
            'totalPrizePool' => $totalPrizePool,
        ]);
    }
}
