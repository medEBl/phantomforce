<?php

namespace App\Controller;

use App\Entity\QuestionnaireAgent;
use App\Form\QuestionnaireAgentType;
use App\Repository\QuestionnaireAgentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/questionnaire/agent')] // Check your actual route prefix
final class QuestionnaireAgentController extends AbstractController
{
    #[Route('/', name: 'app_questionnaire_agent_index', methods: ['GET'])]
    public function index(Request $request, QuestionnaireAgentRepository $repository): Response
    {
        // 1. Get parameters from URL
        $q = $request->query->get('q');
        $sort = $request->query->get('sort', 'game'); // Default sort by Game
        $dir = $request->query->get('dir', 'ASC');

        // 2. Call your custom searchAndSort method
        // (Since you implemented it, we don't need the 'method_exists' check anymore)
        $questionnaires = $repository->searchAndSort($q, $sort, $dir);

        return $this->render('questionnaire_agent/index.html.twig', [
            'questionnaire_agents' => $questionnaires,
            'q' => $q,
            'sort' => $sort,
            'dir' => $dir,
        ]);
    }

    #[Route('/new', name: 'app_questionnaire_agent_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $questionnaireAgent = new QuestionnaireAgent();
        $form = $this->createForm(QuestionnaireAgentType::class, $questionnaireAgent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($questionnaireAgent);
            $entityManager->flush();

            return $this->redirectToRoute('app_questionnaire_agent_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('questionnaire_agent/new.html.twig', [
            'questionnaire_agent' => $questionnaireAgent,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_questionnaire_agent_show', methods: ['GET'])]
    public function show(QuestionnaireAgent $questionnaireAgent): Response
    {
        return $this->render('questionnaire_agent/show.html.twig', [
            'questionnaire_agent' => $questionnaireAgent,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_questionnaire_agent_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, QuestionnaireAgent $questionnaireAgent, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(QuestionnaireAgentType::class, $questionnaireAgent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_questionnaire_agent_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('questionnaire_agent/edit.html.twig', [
            'questionnaire_agent' => $questionnaireAgent,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_questionnaire_agent_delete', methods: ['POST'])]
    public function delete(Request $request, QuestionnaireAgent $questionnaireAgent, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $questionnaireAgent->getId(), $request->request->get('_token'))) {
            $entityManager->remove($questionnaireAgent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_questionnaire_agent_index', [], Response::HTTP_SEE_OTHER);
    }
    public function findDistinctGames(): array
    {
        return $this->createQueryBuilder('q')
            ->select('DISTINCT q.game')
            ->orderBy('q.game', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();
    }
    public function isCompleted(): bool 
    {
        return $this->field1 !== null
            && $this->field2 !== null
            && $this->field3 !== null;
    }


}
