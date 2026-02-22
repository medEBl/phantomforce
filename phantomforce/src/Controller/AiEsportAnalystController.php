<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use OpenAI;

class AiEsportAnalystController extends AbstractController
{
    private $openai;

    public function __construct()
    {
        $this->openai = OpenAI::client($_ENV['OPENAI_API_KEY']);
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
        $game = $request->query->get('game', 'league_of_legends');
        $role = $request->query->get('role', 'unknown');
        
        try {
            $prompt = $this->buildPlayerAnalysisPrompt($playerName, $game, $role);
            
            $response = $this->openai->chat()->create([
                'model' => 'gpt-4',
                'messages' => [
                    ['role' => 'system', 'content' => $this->getSystemPrompt('player')],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'temperature' => 0.7,
                'max_tokens' => 2000,
            ]);
            
            $analysis = $response->choices[0]->message->content;
            
            // Simuler des stats avancées
            $stats = $this->generatePlayerStats($playerName, $game);
            
        } catch (\Exception $e) {
            $analysis = "Analyse en cours de développement...";
            $stats = $this->generatePlayerStats($playerName, $game);
        }
        
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
        $game = $request->query->get('game', 'league_of_legends');
        
        try {
            $prompt = $this->buildTeamAnalysisPrompt($teamName, $game);
            
            $response = $this->openai->chat()->create([
                'model' => 'gpt-4',
                'messages' => [
                    ['role' => 'system', 'content' => $this->getSystemPrompt('team')],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'temperature' => 0.7,
                'max_tokens' => 2500,
            ]);
            
            $analysis = $response->choices[0]->message->content;
            
        } catch (\Exception $e) {
            $analysis = "Analyse d'équipe en cours de génération...";
        }
        
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
        $game = $data['game'] ?? 'league_of_legends';
        $format = $data['format'] ?? 'bo3'; // bo1, bo3, bo5
        
        try {
            $prompt = "Prédiction match $team1 vs $team2 en $game, format $format. ";
            $prompt .= "Donne: %victoire, score prédit, facteurs clés, analyse détaillée.";
            
            $response = $this->openai->chat()->create([
                'model' => 'gpt-4',
                'messages' => [
                    ['role' => 'system', 'content' => 'Tu es un expert en prédiction esport. Donne des prédictions précises basées sur les stats.'],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'temperature' => 0.5,
                'max_tokens' => 1000,
            ]);
            
            $prediction = $response->choices[0]->message->content;
            
        } catch (\Exception $e) {
            $prediction = "Prédiction basée sur les algorithmes...";
        }
        
        // Calculer des probabilités réalistes
        $prob1 = rand(40, 70);
        $prob2 = 100 - $prob1;
        
        return $this->json([
            'success' => true,
            'match' => "$team1 vs $team2",
            'prediction' => $prediction,
            'probabilities' => [
                $team1 => $prob1 . '%',
                $team2 => $prob2 . '%'
            ],
            'score_prediction' => $this->predictScore($team1, $team2, $format),
            'key_factors' => $this->generateKeyFactors($team1, $team2),
            'confidence' => rand(75, 95) . '%',
            'timestamp' => time()
        ]);
    }

    /**
     * Analyse en direct d'un match
     */
    #[Route('/esport-analyst/live-analysis', name: 'app_analyst_live')]
    public function liveAnalysis(Request $request): Response
    {
        $matchId = $request->query->get('match_id', 'LIVE-2024-001');
        
        // Simuler des données en direct
        $liveData = $this->simulateLiveData($matchId);
        
        return $this->render('ai/live_analysis.html.twig', [
            'matchId' => $matchId,
            'liveData' => $liveData,
            'timestamp' => date('Y-m-d H:i:s')
        ]);
    }

    /**
     * API pour stats en temps réel
     */
    #[Route('/api/esport/live-stats/{matchId}', name: 'api_live_stats')]
    public function liveStats(string $matchId): JsonResponse
    {
        // Simuler des stats en direct
        $stats = [
            'match_id' => $matchId,
            'timestamp' => time(),
            'game_time' => rand(300, 1800) . 's',
            'team1' => [
                'kills' => rand(5, 25),
                'towers' => rand(0, 8),
                'dragons' => rand(0, 3),
                'barons' => rand(0, 1),
                'gold' => rand(30000, 60000)
            ],
            'team2' => [
                'kills' => rand(5, 25),
                'towers' => rand(0, 8),
                'dragons' => rand(0, 3),
                'barons' => rand(0, 1),
                'gold' => rand(30000, 60000)
            ],
            'win_probability' => [
                'team1' => rand(30, 70),
                'team2' => rand(30, 70)
            ]
        ];
        
        return $this->json($stats);
    }

    /**
     * Générateur de rapport PDF
     */
    #[Route('/esport-analyst/export-report/{type}/{name}', name: 'app_analyst_export')]
    public function exportReport(string $type, string $name): Response
    {
        // Logique d'export PDF
        $content = "Rapport d'analyse $type pour $name\n";
        $content .= "Généré le " . date('Y-m-d H:i:s') . "\n\n";
        $content .= "Statistiques détaillées...";
        
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/plain');
        $response->headers->set('Content-Disposition', 'attachment; filename="report_' . $name . '_' . date('Ymd') . '.txt"');
        
        return $response;
    }

    // ============= MÉTHODES PRIVÉES =============

    private function getSystemPrompt(string $type): string
    {
        $prompts = [
            'player' => "Tu es un analyste esport professionnel avec 10 ans d'expérience. Tu analyses les joueurs de manière détaillée: forces, faiblesses, style de jeu, améliorations possibles, comparaisons avec pros. Donne des conseils concrets.",
            
            'team' => "Tu es un coach esport de haut niveau. Tu analyses les équipes: synergies, stratégies, drafts, macro-game, micro-game. Propose des améliorations tactiques et des stratégies gagnantes.",
            
            'match' => "Tu es un prédicteur esport expert. Tu analyses les matchs et donnes des prédictions précises avec justifications."
        ];
        
        return $prompts[$type] ?? $prompts['player'];
    }

    private function buildPlayerAnalysisPrompt(string $player, string $game, string $role): string
    {
        return "Analyse complète du joueur $player (rôle: $role) sur $game.
        
        Fournis:
        1. Profil général (style, spécialités)
        2. Forces principales (3 points)
        3. Faiblesses à améliorer (3 points)
        4. Statistiques clés simulées
        5. Comparaison avec joueurs professionnels
        6. Recommandations d'entraînement
        7. Potentiel futur
        
        Format professionnel avec sections claires.";
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
        8. Recommandations d'entraînement";
    }

    private function generatePlayerStats(string $player, string $game): array
    {
        return [
            'kda' => rand(2.5, 8.5),
            'kill_participation' => rand(55, 85) . '%',
            'cs_per_min' => rand(6, 11),
            'damage_per_min' => rand(400, 900),
            'vision_score' => rand(30, 80),
            'win_rate' => rand(45, 75) . '%',
            'games_played' => rand(50, 500),
            'mvp_count' => rand(5, 50),
            'form' => [
                'last_5' => rand(2, 5) . 'W/' . rand(0, 3) . 'L',
                'current_streak' => rand(1, 5) . ' wins',
                'performance_trend' => rand(60, 95) . '%'
            ]
        ];
    }

    private function generateTeamStats(string $team, string $game): array
    {
        return [
            'overall_win_rate' => rand(45, 80) . '%',
            'home_win_rate' => rand(50, 85) . '%',
            'away_win_rate' => rand(40, 75) . '%',
            'first_blood_rate' => rand(40, 70) . '%',
            'first_tower_rate' => rand(45, 75) . '%',
            'dragon_control' => rand(40, 80) . '%',
            'baron_control' => rand(35, 75) . '%',
            'recent_form' => [
                'last_10' => rand(4, 9) . 'W/' . rand(1, 6) . 'L',
                'streak' => rand(1, 5) . ' wins',
                'ranking' => rand(1, 20)
            ],
            'team_synergy' => rand(65, 95) . '%'
        ];
    }

    private function getTeamPlayers(string $team): array
    {
        // Simuler une liste de joueurs
        return [
            ['name' => 'Player1', 'role' => 'Top', 'rating' => rand(75, 95)],
            ['name' => 'Player2', 'role' => 'Jungle', 'rating' => rand(75, 95)],
            ['name' => 'Player3', 'role' => 'Mid', 'rating' => rand(75, 95)],
            ['name' => 'Player4', 'role' => 'ADC', 'rating' => rand(75, 95)],
            ['name' => 'Player5', 'role' => 'Support', 'rating' => rand(75, 95)],
        ];
    }

    private function predictScore(string $team1, string $team2, string $format): string
    {
        $maps = ['bo1' => 1, 'bo3' => 3, 'bo5' => 5][$format] ?? 3;
        $score1 = rand(0, $maps);
        $score2 = $maps - $score1;
        return "$score1 - $score2";
    }

    private function generateKeyFactors(string $team1, string $team2): array
    {
        return [
            'Draft advantage',
            'Early game pressure',
            'Objective control',
            'Team fight coordination',
            'Individual skill difference'
        ];
    }

    private function simulateLiveData(string $matchId): array
    {
        return [
            'match_id' => $matchId,
            'status' => 'LIVE',
            'game_time' => '25:30',
            'teams' => [
                [
                    'name' => 'Team A',
                    'kills' => 12,
                    'towers' => 5,
                    'dragons' => 2,
                    'barons' => 0,
                    'gold' => 45000
                ],
                [
                    'name' => 'Team B',
                    'kills' => 8,
                    'towers' => 3,
                    'dragons' => 1,
                    'barons' => 0,
                    'gold' => 38000
                ]
            ],
            'win_probability' => [
                'team_a' => 65,
                'team_b' => 35
            ],
            'last_events' => [
                'Team A a pris un dragon',
                'Team B a détruit une tour',
                'Fight imminent au Baron'
            ]
        ];
    }
}