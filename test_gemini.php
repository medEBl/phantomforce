<?php
require_once 'vendor/autoload.php';

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

$apiKey = 'AIzaSyD4Z7z7X7X7X7X7X7X7X7X7X7X7X7X7X7X';

try {
    echo "🔵 Test de connexion à Gemini...\n";
    
    $client = new Client($apiKey);
    
    $response = $client->geminiPro()->generateContent(
        new TextPart('Dis "Bonjour" en français')
    );
    
    echo "✅ SUCCÈS : " . $response->text() . "\n";
    
} catch (Exception $e) {
    echo "❌ ERREUR : " . $e->getMessage() . "\n";
}