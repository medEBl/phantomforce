<?php

namespace App\Controller;

use App\Entity\Team;
use App\Form\TeamType;
use App\Repository\TeamRepository;
use App\Repository\AgentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/team')]
class TeamController extends AbstractController
{
    #[Route('/', name: 'app_team_index', methods: ['GET'])]
    public function index(TeamRepository $teamRepository): Response
    {
        return $this->render('team/index.html.twig', [
            'teams' => $teamRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_team_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, AgentRepository $agentRepository): Response
    {
        $team = new Team();
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les membres sélectionnés dans le formulaire
            $selectedMembers = $form->get('members')->getData();
            
            // Pour chaque membre sélectionné, définir l'équipe
            foreach ($selectedMembers as $agent) {
                $agent->setTeam($team);
                $entityManager->persist($agent);
            }
            
            $entityManager->persist($team);
            $entityManager->flush();

            $this->addFlash('success', 'Équipe créée avec succès !');
            return $this->redirectToRoute('app_team_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('team/new.html.twig', [
            'team' => $team,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_team_show', methods: ['GET'])]
    public function show(Team $team): Response
    {
        return $this->render('team/show.html.twig', [
            'team' => $team,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_team_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Team $team, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les membres actuels avant modification
        $originalMembers = $team->getMembers()->toArray();
        
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les nouveaux membres sélectionnés
            $selectedCollection = $form->get('members')->getData();
            $selectedMembers = $selectedCollection ? $selectedCollection->toArray() : [];
            
            // Retirer l'équipe des anciens membres qui ne sont plus sélectionnés
            foreach ($originalMembers as $agent) {
                if (!in_array($agent, $selectedMembers)) {
                    $agent->setTeam(null);
                    $entityManager->persist($agent);
                }
            }
            
            // Ajouter l'équipe aux nouveaux membres
            foreach ($selectedMembers as $agent) {
                if (!in_array($agent, $originalMembers)) {
                    $agent->setTeam($team);
                    $entityManager->persist($agent);
                }
            }
            
            $entityManager->flush();

            $this->addFlash('success', 'Équipe modifiée avec succès !');
            return $this->redirectToRoute('app_team_show', ['id' => $team->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('team/edit.html.twig', [
            'team' => $team,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_team_delete', methods: ['POST'])]
    public function delete(Request $request, Team $team, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$team->getId(), $request->request->get('_token'))) {
            
            // ÉTAPE 1 : Désassocier TOUS les membres de l'équipe (sans les supprimer)
            foreach ($team->getMembers() as $agent) {
                $agent->setTeam(null);
                $entityManager->persist($agent);
            }
            
            // ÉTAPE 2 : Nettoyer les matchs où cette équipe est vainqueur
            foreach ($team->getMatchesWon() as $match) {
                $match->setWinnerTeam(null);
                $entityManager->persist($match);
            }
            
            // ÉTAPE 3 : Désassocier l'équipe des matchs où elle est team1
            foreach ($team->getMatchesAsTeam1() as $match) {
                $match->setTeam1(null);
                $entityManager->persist($match);
            }
            
            // ÉTAPE 4 : Désassocier l'équipe des matchs où elle est team2
            foreach ($team->getMatchesAsTeam2() as $match) {
                $match->setTeam2(null);
                $entityManager->persist($match);
            }
            
            // ÉTAPE 5 : Maintenant on peut supprimer l'équipe
            $entityManager->remove($team);
            $entityManager->flush();
            
            $this->addFlash('success', 'Équipe supprimée avec succès ! Tous les agents ont été conservés.');
        }

        return $this->redirectToRoute('app_team_index', [], Response::HTTP_SEE_OTHER);
    }
}