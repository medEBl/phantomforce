<?php

namespace App\Service;

use App\Entity\Payment;
use App\Entity\ShopItem;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mime\Address;
use Twig\Environment;

class EmailService
{
    private MailerInterface $mailer;
    private string $fromEmail;
    private string $fromName;
    private LoggerInterface $logger;
    private Environment $twig;

    public function __construct(
        MailerInterface $mailer, 
        string $fromEmail, 
        string $fromName,
        LoggerInterface $logger,
        Environment $twig
    ) {
        $this->mailer = $mailer;
        $this->fromEmail = $fromEmail;
        $this->fromName = $fromName;
        $this->logger = $logger;
        $this->twig = $twig;
    }

    public function sendPaymentConfirmation(Payment $payment, ?string $customEmail = null): bool
    {
        try {
            $shopItem = $payment->getShopItem();
            
            $toEmail = $customEmail;
            if (!$toEmail && $shopItem) {
                $toEmail = 'client@test.com';
            }
            
            if (!$toEmail) {
                $toEmail = 'client@test.com';
            }

            // Générer le contenu HTML avec Twig
            $htmlContent = $this->twig->render('emails/payment_confirmation.html.twig', [
                'payment' => $payment,
                'shopItem' => $shopItem
            ]);

            $email = (new Email())
                ->from(new Address($this->fromEmail, $this->fromName))
                ->to($toEmail)
                ->subject('✅ Confirmation de paiement - Phantom Shop')
                ->priority(Email::PRIORITY_HIGH)
                ->html($htmlContent);

            $this->mailer->send($email);
            
            $this->logger->info('Email de confirmation envoyé', [
                'payment_id' => $payment->getId(),
                'to' => $toEmail
            ]);
            
            return true;
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur envoi email: ' . $e->getMessage());
            return false;
        }
    }

    public function sendPaymentFailed(Payment $payment, ?string $customEmail = null): bool
    {
        try {
            $shopItem = $payment->getShopItem();
            
            $toEmail = $customEmail;
            if (!$toEmail && $shopItem) {
                $toEmail = 'client@test.com';
            }
            
            if (!$toEmail) {
                $toEmail = 'client@test.com';
            }

            $htmlContent = $this->twig->render('emails/payment_failed.html.twig', [
                'payment' => $payment,
                'shopItem' => $shopItem
            ]);

            $email = (new Email())
                ->from(new Address($this->fromEmail, $this->fromName))
                ->to($toEmail)
                ->subject('❌ Échec de paiement - Phantom Shop')
                ->priority(Email::PRIORITY_HIGH)
                ->html($htmlContent);

            $this->mailer->send($email);
            
            $this->logger->info('Email d\'échec envoyé');
            return true;
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur envoi email échec: ' . $e->getMessage());
            return false;
        }
    }
}