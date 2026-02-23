<?php

namespace App\Service;

use App\Entity\Tournament;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class AIService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private ParameterBagInterface $params
    ) {
    }

    /**
     * Generates a poster for a tournament.
     * Tries Hugging Face (High Quality) if a token is present, 
     * otherwise falls back to Pollinations.ai (Free/No Key).
     */
    public function generateTournamentPoster(Tournament $tournament): array
    {
        $game = $tournament->getGame();
        $name = $tournament->getName();
        $seed = rand(1, 100000);

        // Professional prompt tailored to Matchy's eSports theme
        $prompt = sprintf(
            "High-energy professional esports tournament poster for %s, title '%s', epic gaming aesthetic, 4k, digital illustration. No realistic photos of cats or plants.",
            $game,
            $name
        );

        $hfToken = $this->params->has('hugging_face_token') ? $this->params->get('hugging_face_token') : null;
        $imageData = null;
        $errorDetails = [];

        // --- LAYER 1: Hugging Face (Modern Router API) ---
        if ($hfToken && !empty($hfToken) && $hfToken !== 'NONE') {
            try {
                // Using the specific recommended Router URL for high-quality models
                $hfUrl = 'https://router.huggingface.co/hf-inference/models/black-forest-labs/FLUX.1-schnell';
                $response = $this->httpClient->request('POST', $hfUrl, [
                    'headers' => ['Authorization' => 'Bearer ' . $hfToken],
                    'json' => ['inputs' => $prompt],
                    'timeout' => 35,
                ]);

                if ($response->getStatusCode() === 200) {
                    $imageData = $response->getContent();
                } else {
                    $errorDetails[] = "HF Router Error (" . $response->getStatusCode() . "): " . substr($response->getContent(false), 0, 50);
                }
            } catch (\Exception $e) {
                $errorDetails[] = "HF Exception: " . $e->getMessage();
            }
        }

        // --- LAYER 2: Pollinations.ai (Free & Free-Style) ---
        if (!$imageData) {
            try {
                $pollinationsUrl = sprintf(
                    "https://image.pollinations.ai/prompt/%s?width=1024&height=1024&seed=%d&nologo=true",
                    urlencode($prompt),
                    $seed
                );
                $response = $this->httpClient->request('GET', $pollinationsUrl, ['timeout' => 30]);
                if ($response->getStatusCode() === 200) {
                    $imageData = $response->getContent();
                } else {
                    $errorDetails[] = "Pollinations Error: " . $response->getStatusCode();
                }
            } catch (\Exception $e) {
                $errorDetails[] = "Pollinations Exception: " . $e->getMessage();
            }
        }

        // --- LAYER 3: Dedicated Gaming Fallback (No more cats/plants) ---
        if (!$imageData) {
            try {
                // Using a specialized gaming wallpaper search or a relevant placeholder
                // This ensures that IF both AI layers fail, the user still gets a cool gaming background
                $fallbackUrl = "https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=1024&auto=format&fit=crop"; // High quality PC Gaming setup
                $response = $this->httpClient->request('GET', $fallbackUrl, ['timeout' => 15]);
                if ($response->getStatusCode() === 200) {
                    $imageData = $response->getContent();
                }
            } catch (\Exception $e) {
                $errorDetails[] = "Fallback Exception: " . $e->getMessage();
            }
        }

        if (!$imageData) {
            throw new \Exception("Détails des échecs : " . implode(" | ", $errorDetails));
        }

        // Save to local filesystem
        $projectDir = $this->params->get('kernel.project_dir');
        $folder = 'uploads/posters';
        $filename = sprintf('tournament_%d_%s.png', $tournament->getId(), time());

        $uploadRootDir = $projectDir . '/public/' . $folder;

        if (!is_dir($uploadRootDir)) {
            mkdir($uploadRootDir, 0777, true);
        }

        $fullPath = $uploadRootDir . '/' . $filename;

        if (file_put_contents($fullPath, $imageData) === false) {
            throw new \Exception("Impossible d'écrire le fichier image.");
        }

        return [
            'prompt' => $prompt,
            'url' => '/' . $folder . '/' . $filename,
        ];
    }
}
