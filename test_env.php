<?php
require_once 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

echo "OPENAI_API_KEY: " . ($_ENV['OPENAI_API_KEY'] ?? 'NON TROUVÉE') . "\n";
echo "Longueur: " . strlen($_ENV['OPENAI_API_KEY'] ?? '') . "\n";