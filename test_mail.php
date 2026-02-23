<?php
require_once 'vendor/autoload.php';

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

// TES IDENTIFIANTS MAILTRAP (à vérifier sur ton compte)
$dsn = 'smtp://78eb9120efe8dc:8aa9@sandbox.smtp.mailtrap.io:2525?encryption=tls&auth_mode=login';

try {
    echo "🔵 Test d'envoi direct...\n";
    
    $transport = Transport::fromDsn($dsn);
    $mailer = new Mailer($transport);
    
    $email = (new Email())
        ->from('noreply@phantom-shop.com')
        ->to('test@example.com')
        ->subject('Test direct ' . date('H:i:s'))
        ->text('Ceci est un test direct depuis PHP');
    
    $mailer->send($email);
    
    echo "✅ Email envoyé ! Vérifie Mailtrap MAINTENANT.\n";
    
} catch (Exception $e) {
    echo "❌ ERREUR : " . $e->getMessage() . "\n";
    echo "Type : " . get_class($e) . "\n";
}