<?php

namespace App\Controller\Front;

use App\Entity\Agent;
use App\Entity\ReponseQuestionnaire;
use App\Form\ReponseQuestionnaireType;
use App\Repository\QuestionnaireAgentRepository;
use App\Repository\ReponseQuestionnaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/front/agents')]
class ReponseQuestionnaireController extends AbstractController
{
    /**
     * READ: Show the answers if they exist.
     */
    #[Route('/{id}/questionnaire', name: 'front_agent_questionnaire', methods: ['GET'])]
    public function show(
        Agent $agent,
        QuestionnaireAgentRepository $questionnaireRepo,
        ReponseQuestionnaireRepository $repRepo
    ): Response {
        
        $user = $this->getUser();
        if ($user && method_exists($agent, 'getPlayer') && $agent->getPlayer() !== $user) {
            throw $this->createAccessDeniedException('Not your agent.');
        }

        // 1. Get the game name from the Agent
        $game = trim((string) $agent->getGame());
        
        // 2. Try to find the Questionnaire
        $questionnaire = $questionnaireRepo->findOneBy(['game' => $game]);

        // 🛑 DEBUG: If not found, STOP and show why.
        if (!$questionnaire) {
            dd([
                'STATUS' => 'ERROR: Mismatch Detected',
                'Your Agent plays' => $game,
                'We looked in "questionnaire_agent" table for' => $game,
                'Result' => 'Not Found. Please check spelling in database (e.g. "fortnitre" vs "Fortnite")'
            ]);
        }

        // 3. Check if User has answered
        $reponse = $repRepo->findOneBy([
            'agent' => $agent,
            'questionnaire' => $questionnaire,
        ]);

        // 4. If NO answers found, redirect to EDIT page
        if (!$reponse) {
            return $this->redirectToRoute('front_agent_questionnaire_edit', ['id' => $agent->getId()]);
        }

        // 5. Show answers
        return $this->render('front/questionnaire_show.html.twig', [
            'agent' => $agent,
            'questionnaire' => $questionnaire,
            'reponse' => $reponse,
        ]);
    }

    /**
     * WRITE: Create or Update answers.
     */
    #[Route('/{id}/questionnaire/edit', name: 'front_agent_questionnaire_edit', methods: ['GET', 'POST'])]
    public function edit(
        Agent $agent,
        Request $request,
        QuestionnaireAgentRepository $questionnaireRepo,
        ReponseQuestionnaireRepository $repRepo,
        EntityManagerInterface $em
    ): Response {
        
        $user = $this->getUser();
        if ($user && method_exists($agent, 'getPlayer') && $agent->getPlayer() !== $user) {
            throw $this->createAccessDeniedException('Not your agent.');
        }

        // 1. Get the Current Questionnaire for this game
        $game = trim((string) $agent->getGame());
        $currentQuestionnaire = $questionnaireRepo->findOneBy(['game' => $game]);

        if (!$currentQuestionnaire) {
            $this->addFlash('danger', 'No questionnaire found for ' . $game);
            return $this->redirectToRoute('front_agent_index');
        }

        // 2. Find ANY existing answer for this Agent (Don't check questionnaire ID yet)
        $reponse = $repRepo->findOneBy(['agent' => $agent]);

        if (!$reponse) {
            // Case A: No answers yet -> Create New
            $reponse = new ReponseQuestionnaire();
            $reponse->setAgent($agent);
            $reponse->setQuestionnaire($currentQuestionnaire);
        } else {
            // Case B: Found existing answers -> Update the link to the current questionnaire
            // This ensures the Form uses the correct questions
            $reponse->setQuestionnaire($currentQuestionnaire);
        }

        // 3. Create Form (It will now be pre-filled with data from Case B)
        $form = $this->createForm(ReponseQuestionnaireType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponse->setAgent($agent);
            $reponse->setQuestionnaire($currentQuestionnaire);

            $em->persist($reponse);
            $em->flush();

            $this->addFlash('success', 'Answers saved successfully.');
            return $this->redirectToRoute('front_agent_index');
        }

        return $this->render('front/questionnaire.html.twig', [
            'agent' => $agent,
            'questionnaire' => $currentQuestionnaire,
            'form' => $form->createView(),
        ]);
    }
}