<?php

namespace App\Controller\Front;

use App\Entity\Agent;
use App\Form\AgentEditType;
use App\Form\FrontAgentCreateType;
use App\Repository\AgentRepository;
use App\Repository\ReponseQuestionnaireRepository; // ✅ Import this!
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/front/agents')]
class AgentProfileController extends AbstractController
{
    #[Route('/', name: 'front_agent_index', methods: ['GET'])]
    public function index(
        AgentRepository $repo, 
        \App\Repository\ReponseQuestionnaireRepository $repRepo
    ): Response
    {
        $agents = $repo->findAll();
        $responses = $repRepo->findAll();

        $answeredIds = [];
        foreach ($responses as $r) {
            if ($r->getAgent()) {
                $answeredIds[] = $r->getAgent()->getId();
            }
        }

        // ✅ FIXED PATH: Changed 'front/agent/index.html.twig' to 'front/index.html.twig'
        // If your folder starts with a capital F, use 'Front/index.html.twig'
        return $this->render('front/index.html.twig', [ 
            'agents' => $agents,
            'answeredIds' => $answeredIds,
        ]);
    }
    #[Route('/new', name: 'front_agent_new', methods: ['GET','POST'])]
    public function new(Request $request, EntityManagerInterface $em, AgentRepository $repo): Response
    {
        $agent = new Agent();
        $agent->setDateOfCreation(new \DateTime());

        $form = $this->createForm(FrontAgentCreateType::class, $agent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existing = $repo->findOneBy([
                'player' => $agent->getPlayer(),
                'game'   => $agent->getGame(),
            ]);

            if ($existing) {
                $this->addFlash('danger', 'You already created an agent for this game.');
                return $this->redirectToRoute('front_agent_new');
            }

            $em->persist($agent);
            $em->flush();

            $this->addFlash('success', 'Agent created.');
            return $this->redirectToRoute('front_agent_index');
        }

        return $this->render('front/agent_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'front_agent_show', methods: ['GET'])]
    public function show(
        Agent $agent,
        ReponseQuestionnaireRepository $repRepo // ✅ Inject Repo here too
    ): Response
    {
        // ✅ Fetch answers so they can be displayed on the profile page
        $reponse = $repRepo->findOneBy(['agent' => $agent]);

        return $this->render('front/show.html.twig', [
            'agent' => $agent,
            'reponse' => $reponse, // ✅ Pass answers to the view
        ]);
    }

    #[Route('/{id}/edit', name: 'front_agent_edit', methods: ['GET','POST'])]
    public function edit(Request $request, Agent $agent, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(AgentEditType::class, $agent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Agent updated.');
            return $this->redirectToRoute('front_agent_index');
        }

        return $this->render('front/edit.html.twig', [
            'agent' => $agent,
            'form'  => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'front_agent_delete', methods: ['POST'])]
    public function delete(Request $request, Agent $agent, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete_agent_' . $agent->getId(), $request->request->get('_token'))) {
            $em->remove($agent);
            $em->flush();
            $this->addFlash('success', 'Agent deleted.');
        }

        return $this->redirectToRoute('front_agent_index');
    }
}