<?php
require_once 'vendor/autoload.php';

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

// TES IDENTIFIANTS MAILTRAP
$username = '15f35b35d8da92';
$password = '56fb';

$dsn = 'smtp://' . $username . ':' . $password . '@sandbox.smtp.mailtrap.io:2525?encryption=tls&auth_mode=login';

echo "🔍 Test avec username: $username\n";
echo "🔍 DSN: " . str_replace($password, '****', $dsn) . "\n\n";

try {
    $transport = Transport::fromDsn($dsn);
    $mailer = new Mailer($transport);
    
    $email = (new Email())
        ->from('noreply@phantom-shop.com')
        ->to('test@example.com')
        ->subject('✅ TEST ULTIME - ' . date('H:i:s'))
        ->text('Bravo Malik ! Ceci est un test direct.');
    
    echo "📤 Envoi en cours...\n";
    $mailer->send($email);
    
    echo "✅ SUCCÈS ! Email envoyé !\n";
    echo "➡️ Va voir dans Mailtrap maintenant !\n";
    
} catch (Exception $e) {
    echo "❌ ERREUR : " . $e->getMessage() . "\n";
    echo "Type d'erreur : " . get_class($e) . "\n";
}