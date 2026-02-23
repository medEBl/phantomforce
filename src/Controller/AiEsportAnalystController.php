<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AiEsportAnalystController extends AbstractController
{
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = $_ENV['OPENAI_API_KEY'] ?? $_SERVER['OPENAI_API_KEY'] ?? null;
        
        if (!$this->apiKey) {
            throw new \Exception('OPENAI_API_KEY non trouvée dans .env');
        }
    }

    /**
     * Page principale de l'analyste esport
     */
    #[Route('/esport-analyst', name: 'app_esport_analyst')]
    public function index(): Response
    {
        return $this->render('ai/analyst_dashboard.html.twig');
    }

    /**
     * Analyse complète d'un joueur
     */
    #[Route('/esport-analyst/player/{playerName}', name: 'app_analyst_player')]
    public function analyzePlayer(string $playerName, Request $request): Response
    {
        $game = $request->query->get('game', 'League of Legends');
        $role = $request->query->get('role', 'Inconnu');
        
        $prompt = $this->buildPlayerAnalysisPrompt($playerName, $game, $role);
        $analysis = $this->callOpenAI($prompt, $this->getFallbackPlayerAnalysis($playerName, $game, $role));
        
        $stats = $this->generatePlayerStats($playerName, $game);
        
        return $this->render('ai/player_analysis.html.twig', [
            'playerName' => $playerName,
            'game' => $game,
            'role' => $role,
            'analysis' => $analysis,
            'stats' => $stats,
            'timestamp' => date('Y-m-d H:i:s')
        ]);
    }

    /**
     * Analyse d'équipe complète
     */
    #[Route('/esport-analyst/team/{teamName}', name: 'app_analyst_team')]
    public function analyzeTeam(string $teamName, Request $request): Response
    {
        $game = $request->query->get('game', 'League of Legends');
        
        $prompt = $this->buildTeamAnalysisPrompt($teamName, $game);
        $analysis = $this->callOpenAI($prompt, $this->getFallbackTeamAnalysis($teamName, $game));
        
        $teamStats = $this->generateTeamStats($teamName, $game);
        
        return $this->render('ai/team_analysis.html.twig', [
            'teamName' => $teamName,
            'game' => $game,
            'analysis' => $analysis,
            'stats' => $teamStats,
            'players' => $this->getTeamPlayers($teamName),
            'timestamp' => date('Y-m-d H:i:s')
        ]);
    }

    /**
     * Prédiction de match
     */
    #[Route('/esport-analyst/predict-match', name: 'app_analyst_predict_match', methods: ['POST'])]
    public function predictMatch(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        $team1 = $data['team1'] ?? 'Team A';
        $team2 = $data['team2'] ?? 'Team B';
        $game = $data['game'] ?? 'League of Legends';
        $format = $data['format'] ?? 'bo3';
        
        $prompt = "Prédiction match $team1 vs $team2 en $game, format $format. " .
                  "Donne: %victoire, score prédit, facteurs clés, analyse détaillée.";
        
        $prediction = $this->callOpenAI($prompt, "Prédiction basée sur les statistiques historiques.");
        
        $prob1 = rand(40, 70);
        $prob2 = 100 - $prob1;
        
        return $this->json([
            'success' => true,
            'match' => "$team1 vs $team2",
            'prediction' => $prediction,
            'probabilities' => [
                $team1 => $prob1,
                $team2 => $prob2
            ],
            'score_prediction' => $this->predictScore($team1, $team2, $format),
            'key_factors' => $this->generateKeyFactors($team1, $team2),
            'confidence' => rand(75, 95),
            'timestamp' => time()
        ]);
    }

    /**
     * Méthode principale pour appeler l'API OpenAI avec cURL
     */
    private function callOpenAI(string $prompt, string $fallback): string
    {
        $url = 'https://api.openai.com/v1/chat/completions';
        
        $data = [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Tu es un expert esport professionnel. Réponds en français de façon détaillée et structurée.'
                ],
                [
                    'role' => 'user',
                    'content' => $prompt
                ]
            ],
            'temperature' => 0.7,
            'max_tokens' => 1000
        ];
        
        $ch = curl_init($url);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->apiKey
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // À enlever en production
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        // Vérifier les erreurs cURL
        if ($error) {
            error_log('cURL Error: ' . $error);
            return "⚠️ " . $fallback;
        }
        
        // Vérifier le code HTTP
        if ($httpCode !== 200) {
            error_log('OpenAI API HTTP Error: ' . $httpCode . ' - Response: ' . $response);
            return "⚠️ " . $fallback;
        }
        
        // Décoder la réponse JSON
        $result = json_decode($response, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log('JSON Decode Error: ' . json_last_error_msg());
            return "⚠️ " . $fallback;
        }
        
        // Vérifier la structure de la réponse
        if (isset($result['error'])) {
            error_log('OpenAI API Error: ' . ($result['error']['message'] ?? 'Erreur inconnue'));
            return "⚠️ " . $fallback;
        }
        
        if (isset($result['choices'][0]['message']['content'])) {
            return $result['choices'][0]['message']['content'];
        }
        
        error_log('OpenAI API Unexpected Response Structure: ' . print_r($result, true));
        return "⚠️ " . $fallback;
    }

    // ============= MÉTHODES PRIVÉES =============

    private function buildPlayerAnalysisPrompt(string $player, string $game, string $role): string
    {
        return "Analyse complète du joueur $player (rôle: $role) sur $game.
        
        Fournis:
        1. Profil général (style, spécialités)
        2. Forces principales (3 points)
        3. Faiblesses à améliorer (3 points)
        4. Statistiques clés
        5. Comparaison avec joueurs professionnels
        6. Recommandations d'entraînement
        7. Potentiel futur
        
        Format professionnel avec sections claires. Réponds en français.";
    }

    private function buildTeamAnalysisPrompt(string $team, string $game): string
    {
        return "Analyse stratégique de l'équipe $team sur $game.
        
        Inclus:
        1. Composition et rôles
        2. Forces collectives
        3. Faiblesses tactiques
        4. Styles de jeu préférés
        5. Drafts recommandés
        6. Stratégies gagnantes
        7. Analyse des adversaires
        8. Recommandations d'entraînement
        
        Format professionnel. Réponds en français.";
    }

    private function getFallbackPlayerAnalysis(string $player, string $game, string $role): string
    {
        $strengths = [
            "Excellentes mécaniques",
            "Bonne vision du jeu",
            "Communication efficace",
            "Polyvalence",
            "Expérience en compétition",
            "Calme sous pression"
        ];
        
        $weaknesses = [
            "Tendance à prendre des risques inutiles",
            "Gestion de mana perfectible",
            "Réaction aux ganks",
            "Débuts de partie parfois lents",
            "Choix de champions prévisibles"
        ];
        
        shuffle($strengths);
        shuffle($weaknesses);
        
        return "**📊 Analyse de $player**\n\n" .
               "**Profil**: Joueur $role sur $game avec un style " . (rand(0,1) ? 'agressif' : 'calculé') . ".\n\n" .
               "**Forces**:\n" .
               "- " . implode("\n- ", array_slice($strengths, 0, 3)) . "\n\n" .
               "**Faiblesses**:\n" .
               "- " . implode("\n- ", array_slice($weaknesses, 0, 3)) . "\n\n" .
               "**Recommandations**:\n" .
               "- Travailler le positionnement en teamfight\n" .
               "- Regarder les replays des pros\n" .
               "- Pratiquer les match-ups difficiles";
    }

    private function getFallbackTeamAnalysis(string $team, string $game): string
    {
        $strengths = [
            "Excellente coordination",
            "Macro-game solide",
            "Drafts variés",
            "Communication efficace",
            "Expérience collective"
        ];
        
        $weaknesses = [
            "Gestion des situations de stress",
            "Débuts de partie parfois lents",
            "Prévisibilité dans certaines compositions",
            "Difficultés en late game"
        ];
        
        shuffle($strengths);
        shuffle($weaknesses);
        
        return "**📊 Analyse de $team**\n\n" .
               "**Composition**: Équipe " . (rand(0,1) ? 'expérimentée' : 'jeune et dynamique') . ".\n\n" .
               "**Forces**:\n" .
               "- " . implode("\n- ", array_slice($strengths, 0, 3)) . "\n\n" .
               "**Faiblesses**:\n" .
               "- " . implode("\n- ", array_slice($weaknesses, 0, 3)) . "\n\n" .
               "**Recommandations**:\n" .
               "- Travailler les stratégies early game\n" .
               "- Développer plus de diversité dans les drafts\n" .
               "- Analyser les VODs des équipes top-tier";
    }

    private function generatePlayerStats(string $player, string $game): array
    {
        return [
            'kda' => round(rand(250, 850) / 100, 2),
            'kill_participation' => rand(55, 85) . '%',
            'cs_per_min' => round(rand(600, 1100) / 100, 1),
            'damage_per_min' => rand(400, 900),
            'vision_score' => rand(30, 80),
            'win_rate' => rand(45, 75) . '%',
            'games_played' => rand(50, 500),
            'mvp_count' => rand(5, 50)
        ];
    }

    private function generateTeamStats(string $team, string $game): array
    {
        return [
            'overall_win_rate' => rand(45, 80) . '%',
            'home_win_rate' => rand(50, 85) . '%',
            'away_win_rate' => rand(40, 75) . '%',
            'first_blood_rate' => rand(40, 70) . '%',
            'dragon_control' => rand(40, 80) . '%',
            'baron_control' => rand(35, 75) . '%',
            'recent_form' => rand(4, 9) . 'W/' . rand(1, 6) . 'L',
            'team_synergy' => rand(65, 95) . '%'
        ];
    }

    private function getTeamPlayers(string $team): array
    {
        $roles = ['Top', 'Jungle', 'Mid', 'ADC', 'Support'];
        $players = [];
        
        for ($i = 1; $i <= 5; $i++) {
            $players[] = [
                'name' => 'Player' . $i,
                'role' => $roles[$i-1],
                'rating' => rand(75, 95)
            ];
        }
        
        return $players;
    }

    private function predictScore(string $team1, string $team2, string $format): string
    {
        $maps = ['bo1' => 1, 'bo3' => 3, 'bo5' => 5][$format] ?? 3;
        $score1 = rand(1, $maps - 1);
        $score2 = $maps - $score1;
        return "$score1 - $score2";
    }

    private function generateKeyFactors(string $team1, string $team2): array
    {
        $factors = [
            'Draft advantage',
            'Early game pressure',
            'Objective control',
            'Team fight coordination',
            'Individual skill difference',
            'Mental resilience'
        ];
        
        shuffle($factors);
        return array_slice($factors, 0, 4);
    }

    /**
     * Méthode de test pour vérifier la connexion API
     */
    #[Route('/esport-analyst/test-api', name: 'app_analyst_test_api')]
    public function testApi(): JsonResponse
    {
        $result = $this->callOpenAI(
            "Réponds uniquement par 'Connexion API réussie' en français.",
            "Mode hors ligne - API non disponible"
        );
        
        return $this->json([
            'success' => true,
            'message' => $result,
            'api_key_exists' => !empty($this->apiKey),
            'api_key_preview' => substr($this->apiKey, 0, 10) . '...',
            'mode' => strpos($result, '⚠️') === false ? 'online' : 'offline'
        ]);
    }
}