<?php

namespace App\Service;

use App\Entity\Tournament;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class NotificationService
{
    private MailerInterface $mailer;
    private \Doctrine\ORM\EntityManagerInterface $entityManager;

    public function __construct(MailerInterface $mailer, \Doctrine\ORM\EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
    }

    public function sendTournamentCreatedNotification(Tournament $tournament): void
    {
        $conn = $this->entityManager->getConnection();

        try {
            // Fetch all users using raw SQL
            $emails = $conn->fetchAllAssociative("SELECT email FROM `user` WHERE is_active = 1");
        } catch (\Exception $e) {
            // If table doesn't exist yet, we can't send emails to users
            return;
        }

        if (empty($emails)) {
            return;
        }

        foreach ($emails as $userData) {
            $email = (new Email())
                ->from('vandago26@gmail.com')
                ->to($userData['email'])
                ->subject('🏆 Nouveau Tournoi Organisé : ' . $tournament->getName())
                ->html(sprintf(
                    '<h1>Nouveau tournoi disponible !</h1>
                    <p>Un nouveau tournoi a été créé sur ARENA.</p>
                    <p><strong>Nom :</strong> %s</p>
                    <p><strong>Jeu :</strong> %s</p>
                    <p><strong>Date de début :</strong> %s</p>
                    <p>Connectez-vous pour vous inscrire !</p>
                    <br>
                    <p>Cordialement,<br>L\'équipe ARENA Admin</p>',
                    $tournament->getName(),
                    $tournament->getGame(),
                    $tournament->getStartDate()->format('d/m/Y')
                ));

            $this->mailer->send($email);
        }
    }
}
