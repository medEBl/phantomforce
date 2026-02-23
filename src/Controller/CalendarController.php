<?php

namespace App\Controller;

use App\Repository\CoachingSessionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendarController extends AbstractController
{
    #[Route('/calendar', name: 'app_calendar')]
    public function index(CoachingSessionRepository $coachingSessionRepository): Response
    {
        // Récupérer toutes les sessions
        $sessions = $coachingSessionRepository->findAll();
        
        // Préparer les événements pour le calendrier
        $events = [];
        foreach ($sessions as $session) {
            // Calculer la date de fin à partir de la durée
            $startDate = $session->getSessionDate();
            $endDate = clone $startDate;
            $endDate->modify('+' . $session->getDuration() . ' minutes');
            
            $events[] = [
                'id' => $session->getId(),
                'title' => 'Session #' . $session->getId(),
                'start' => $startDate->format('Y-m-d H:i:s'),
                'end' => $endDate->format('Y-m-d H:i:s'),
                'description' => $session->getNotes(),
                'color' => '#ff2d2d'
            ];
        }
        
        return $this->render('calendar/index.html.twig', [
            'events' => json_encode($events),
            'sessions' => $sessions
        ]);
    }
}