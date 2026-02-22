<?php

namespace App\Service;

use App\Entity\CoachingSession;
use App\Entity\User;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Twig\Environment;

class MailerService
{
    private $mailer;
    private $twig;

    public function __construct(MailerInterface $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    /**
     * Envoyer une confirmation de session
     */
    public function sendSessionConfirmation(CoachingSession $session, User $user): void
    {
        $html = $this->twig->render('coaching_session/emails/confirmation.html.twig', [
            'session' => $session,
            'user' => $user
        ]);

        $email = (new Email())
            ->from(new Address('coaching@phantomforce.com', 'Phantom Force Coaching'))
            ->to($user->getEmail())
            ->subject('[Phantom Force] Confirmation de session : ' . $session->getTitre())
            ->html($html);

        $this->mailer->send($email);
    }

    /**
     * Envoyer une notification de modification
     */
    public function sendModificationNotification(CoachingSession $session, User $user, array $changements): void
    {
        $html = $this->twig->render('coaching_session/emails/modification.html.twig', [
            'session' => $session,
            'user' => $user,
            'changements' => $changements
        ]);

        $email = (new Email())
            ->from(new Address('coaching@phantomforce.com', 'Phantom Force Coaching'))
            ->to($user->getEmail())
            ->subject('[Phantom Force] Modification de votre session')
            ->html($html);

        $this->mailer->send($email);
    }

    /**
     * Envoyer une notification d'annulation
     */
    public function sendCancellation(CoachingSession $session, User $user): void
    {
        $html = $this->twig->render('coaching_session/emails/annulation.html.twig', [
            'session' => $session,
            'user' => $user
        ]);

        $email = (new Email())
            ->from(new Address('coaching@phantomforce.com', 'Phantom Force Coaching'))
            ->to($user->getEmail())
            ->subject('[Phantom Force] Session annulée : ' . $session->getTitre())
            ->html($html);

        $this->mailer->send($email);
    }

    /**
     * Envoyer un rappel (1h avant)
     */
    public function sendReminder(CoachingSession $session, User $user): void
    {
        $html = $this->twig->render('coaching_session/emails/rappel.html.twig', [
            'session' => $session,
            'user' => $user
        ]);

        $email = (new Email())
            ->from(new Address('coaching@phantomforce.com', 'Phantom Force Coaching'))
            ->to($user->getEmail())
            ->subject('⏰ RAPPEL : Votre session commence dans 1 heure')
            ->html($html);

        $this->mailer->send($email);
    }
}