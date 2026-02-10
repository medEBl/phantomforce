<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_matchy_index')]
    public function index(): Response
    {
        return $this->render('dashboard.html.twig');
    }

    #[Route('/champions', name: 'app_champions')]
    public function champions(): Response
    {
        return new Response('Page Champions (Placeholder)');
    }

    #[Route('/teams', name: 'app_teams')]
    public function teams(): Response
    {
        return new Response('Page Équipes (Placeholder)');
    }

    #[Route('/admin/teams', name: 'app_back_team_index')]
    public function backTeams(): Response
    {
        return new Response('Admin Page Équipes (Placeholder)');
    }

    #[Route('/matches', name: 'app_matches')]
    public function matches(): Response
    {
        return new Response('Page Matchs (Placeholder)');
    }

    #[Route('/coaching', name: 'app_coaching')]
    public function coaching(): Response
    {
        return new Response('Page Coaching (Placeholder)');
    }

    #[Route('/shop', name: 'app_shop')]
    public function shop(): Response
    {
        return new Response('Page Boutique (Placeholder)');
    }

    #[Route('/newsletter/subscribe', name: 'app_newsletter_subscribe', methods: ['POST'])]
    public function newsletterSubscribe(): Response
    {
        return new Response('Newsletter (Placeholder)');
    }

    #[Route('/help', name: 'app_help')]
    public function help(): Response
    {
        return new Response('Centre d\'aide (Placeholder)');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return new Response('Contact (Placeholder)');
    }

    #[Route('/faq', name: 'app_faq')]
    public function faq(): Response
    {
        return new Response('FAQ (Placeholder)');
    }

    #[Route('/legal', name: 'app_legal')]
    public function legal(): Response
    {
        return new Response('Mentions légales (Placeholder)');
    }

    #[Route('/privacy', name: 'app_privacy')]
    public function privacy(): Response
    {
        return new Response('Confidentialité (Placeholder)');
    }

    #[Route('/cookies', name: 'app_cookies')]
    public function cookies(): Response
    {
        return new Response('Cookies (Placeholder)');
    }

    #[Route('/terms', name: 'app_terms')]
    public function terms(): Response
    {
        return new Response('CGU (Placeholder)');
    }
}


