<?php

namespace App\Controller;

<<<<<<< HEAD
use App\Service\AiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AiController extends AbstractController
{
    #[Route('/ai/test', name: 'app_ai_test')]
    public function test(AiService $ai): Response
    {
        // Test 1: Recommandations
        $recommendations = $ai->getGameRecommendations('Elden Ring');
        
        // Test 2: Description
        $description = $ai->generateGameDescription('Cyberpunk 2077', 'RPG');
        
        // Test 3: Sentiment
        $review = "Ce jeu est incroyable ! Les graphismes sont magnifiques et l'histoire est captivante. Je le recommande vivement !";
        $sentiment = $ai->analyzeSentiment($review);
        
        return $this->render('ai/test.html.twig', [
            'recommendations' => $recommendations,
            'description' => $description,
            'sentiment' => $sentiment
        ]);
    }

    #[Route('/ai/recommend/{gameName}', name: 'app_ai_recommend')]
    public function recommend(string $gameName, AiService $ai): Response
    {
        $recommendations = $ai->getGameRecommendations($gameName);
        
        return $this->render('ai/recommendations.html.twig', [
            'gameName' => $gameName,
            'recommendations' => $recommendations
        ]);
    }

    #[Route('/ai/describe/{gameName}/{genre}', name: 'app_ai_describe')]
    public function describe(string $gameName, string $genre, AiService $ai): Response
    {
        $description = $ai->generateGameDescription($gameName, $genre);
        
        return $this->render('ai/description.html.twig', [
            'gameName' => $gameName,
            'description' => $description
        ]);
    }
=======
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use OpenAI; // Nécessite: composer require openai-php/client

class AiController extends AbstractController
{
    // =============================================
    // PARTIE 1: ROUTES EXISTANTES
    // =============================================
    
    #[Route('/ai', name: 'app_ai')]
    public function index(): Response
    {
        return $this->render('ai/index.html.twig', [
            'controller_name' => 'AiController',
        ]);
    }

    #[Route('/ai/generate', name: 'app_ai_generate')]
    public function generate(): JsonResponse
    {
        $data = [
            'message' => 'Génération réussie !',
            'status' => 'success',
            'timestamp' => time(),
            'date' => date('Y-m-d H:i:s'),
            'resultat' => [
                'titre' => 'Analyse IA',
                'contenu' => 'Ceci est le résultat de votre demande...',
                'confidence' => rand(75, 99) . '%'
            ]
        ];
        
        return $this->json($data);
    }

    // =============================================
    // PARTIE 2: GÉNÉRATION DE PLANS D'ENTRAÎNEMENT AVEC OPENAI
    // =============================================

    /**
     * Formulaire pour générer un plan d'entraînement
     * URL: /ai/workout-form
     */
    #[Route('/ai/workout-form', name: 'app_ai_workout_form')]
    public function workoutForm(): Response
    {
        return $this->render('ai/workout_form.html.twig');
    }

    /**
     * Génération avec API OpenAI (utilise votre clé du .env)
     * URL: /ai/workout-generate (POST)
     */
    #[Route('/ai/workout-generate', name: 'app_ai_workout_generate', methods: ['POST'])]
    public function workoutGenerate(Request $request): Response
    {
        // Récupérer les données du formulaire
        $sport = $request->request->get('sport', 'football');
        $niveau = $request->request->get('niveau', 'debutant');
        $duree = $request->request->get('duree', 60);
        $objectif = $request->request->get('objectif', 'endurance');
        $age = $request->request->get('age', 25);
        $positions = $request->request->get('positions', '');
        
        try {
            // Utilisation de la clé API du fichier .env
            $client = OpenAI::client($_ENV['OPENAI_API_KEY']);
            
            // Construction du prompt
            $prompt = "En tant que coach sportif professionnel, génère un plan d'entraînement DÉTAILLÉ et PERSONNALISÉ avec les caractéristiques suivantes :
            
📋 **INFORMATIONS DU SPORTIF:**
- Sport: $sport
- Niveau: $niveau
- Âge: $age ans
- Objectif principal: $objectif
- Durée disponible: $duree minutes
- Poste/Préférences: " . ($positions ?: 'Non spécifié') . "

🎯 **LE PLAN DOIT INCLURE:**

🔥 **1. ÉCHAUFFEMENT (10-15 min)**
- Échauffement cardiovasculaire
- Mobilité articulaire
- Exercices spécifiques au sport

⚡ **2. PARTIE PRINCIPALE (30-40 min)**
- Exercices techniques adaptés au niveau
- Travail physique selon l'objectif
- Situations de jeu/ateliers

🧘 **3. RETOUR AU CALME (5-10 min)**
- Étirements
- Récupération

💡 **4. CONSEILS**
- Points d'attention
- Progression suggérée
- Hydratation et nutrition

Formatage: Utilise des titres clairs, des listes à puces, et des sections bien distinctes.
Sois précis dans les exercices : nombre de répétitions, séries, durées.";
            
            // Appel à l'API OpenAI
            $response = $client->chat()->create([
                'model' => 'gpt-3.5-turbo', // Vous pouvez utiliser 'gpt-4' si vous y avez accès
                'messages' => [
                    [
                        'role' => 'system', 
                        'content' => 'Tu es un coach sportif professionnel avec 20 ans d\'expérience. Tu es spécialisé dans la création de programmes d\'entraînement personnalisés. Tes plans sont détaillés, pratiques et adaptés au niveau de chaque sportif.'
                    ],
                    [
                        'role' => 'user', 
                        'content' => $prompt
                    ],
                ],
                'temperature' => 0.7,
                'max_tokens' => 1500,
            ]);
            
            $plan = $response->choices[0]->message->content;
            
            // Sauvegarder le plan en base de données (optionnel)
            // $this->saveWorkoutPlan($sport, $niveau, $plan);
            
        } catch (\Exception $e) {
            // En cas d'erreur avec l'API, on utilise le générateur local
            $plan = $this->generateLocalWorkout($sport, $niveau, $duree, $objectif);
            $this->addFlash('warning', 'API temporairement indisponible, utilisation du générateur local. Erreur: ' . $e->getMessage());
        }
        
        return $this->render('ai/workout_result.html.twig', [
            'plan' => $plan,
            'sport' => $sport,
            'niveau' => $niveau,
            'duree' => $duree,
            'objectif' => $objectif,
            'date' => date('d/m/Y H:i')
        ]);
    }

    /**
     * API JSON pour générer des plans
     * URL: /api/workout (POST)
     */
    #[Route('/api/workout', name: 'api_workout', methods: ['POST'])]
    public function apiWorkout(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        $sport = $data['sport'] ?? 'football';
        $niveau = $data['niveau'] ?? 'debutant';
        $duree = $data['duree'] ?? 60;
        $objectif = $data['objectif'] ?? 'general';
        
        try {
            $client = OpenAI::client($_ENV['OPENAI_API_KEY']);
            
            $prompt = "Crée un plan d'entraînement pour $sport, niveau $niveau, $duree minutes, objectif: $objectif. Format JSON avec sections: échauffement, principal, retour_calme, conseils";
            
            $response = $client->chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'Tu es un coach sportif. Réponds en JSON.'],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'response_format' => ['type' => 'json_object']
            ]);
            
            $plan = json_decode($response->choices[0]->message->content, true);
            
        } catch (\Exception $e) {
            $plan = $this->generateStructuredWorkout($sport, $niveau, $duree, $objectif);
        }
        
        return $this->json([
            'success' => true,
            'data' => [
                'sport' => $sport,
                'niveau' => $niveau,
                'duree' => $duree,
                'objectif' => $objectif,
                'plan' => $plan,
                'generated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }

    // =============================================
    // PARTIE 3: GÉNÉRATEUR LOCAL (FALLBACK)
    // =============================================

    private function generateLocalWorkout(string $sport, string $niveau, int $duree, string $objectif): string
    {
        $exercices = [
            'football' => [
                'echauffement' => ['Montées de genoux', 'Talons-fesses', 'Pas chassés'],
                'technique' => ['Passes à 2', 'Contrôle orienté', 'Dribbles'],
                'physique' => ['Sprints', 'Gainage', 'Pompes']
            ],
            'basketball' => [
                'echauffement' => ['Course avec dribble', 'Sauts', 'Rotation'],
                'technique' => ['Dribbles', 'Tirs', 'Passes'],
                'physique' => ['Détente', 'Sprints', 'Pompes']
            ],
            'tennis' => [
                'echauffement' => ['Course latérale', 'Rotation', 'Sauts'],
                'technique' => ['Coups droits', 'Revers', 'Services'],
                'physique' => ['Sprints', 'Fentes', 'Gainage']
            ]
        ];
        
        $exos = $exercices[$sport] ?? $exercices['football'];
        
        $plan = "🏋️ **PLAN D'ENTRAÎNEMENT**\n\n";
        $plan .= "Sport: " . ucfirst($sport) . "\n";
        $plan .= "Niveau: " . ucfirst($niveau) . "\n";
        $plan .= "Durée: " . $duree . " minutes\n\n";
        
        $plan .= "🔥 **ÉCHAUFFEMENT** (15 min)\n";
        foreach ($exos['echauffement'] as $exo) {
            $plan .= "• $exo: 3 séries de 30 secondes\n";
        }
        
        $plan .= "\n⚡ **PARTIE PRINCIPALE** (35 min)\n";
        $plan .= "TECHNIQUE:\n";
        foreach ($exos['technique'] as $exo) {
            $plan .= "• $exo: 4 séries de 10 répétitions\n";
        }
        $plan .= "\nPHYSIQUE:\n";
        foreach ($exos['physique'] as $exo) {
            $plan .= "• $exo: 3 séries de 15 répétitions\n";
        }
        
        $plan .= "\n🧘 **RETOUR AU CALME** (10 min)\n";
        $plan .= "• Étirements: 5 minutes\n";
        $plan .= "• Respiration: 5 minutes\n";
        
        return $plan;
    }

    private function generateStructuredWorkout(string $sport, string $niveau, int $duree, string $objectif): array
    {
        return [
            'echauffement' => [
                'duree' => round($duree * 0.15),
                'exercices' => ['Course légère', 'Mobilité articulaire', 'Exercices dynamiques']
            ],
            'principal' => [
                'duree' => round($duree * 0.7),
                'technique' => ['Exercice 1', 'Exercice 2', 'Exercice 3'],
                'physique' => ['Séries A', 'Séries B', 'Séries C']
            ],
            'retour_calme' => [
                'duree' => round($duree * 0.15),
                'exercices' => ['Étirements', 'Respiration']
            ],
            'conseils' => ['Hydrate-toi', 'Écoute ton corps', 'Progresse graduellement']
        ];
    }
    // =============================================
// PARTIE 4: ANALYSTE ESPORT AVANCÉ
// =============================================

/**
 * Dashboard de l'analyste esport
 */
#[Route('/ai/analyst', name: 'app_analyst_dashboard')]
public function analystDashboard(): Response
{
    return $this->render('ai/analyst_dashboard.html.twig');
}

/**
 * Recherche d'un joueur (redirection)
 */
#[Route('/ai/analyst/player/search', name: 'app_analyst_player_search')]
public function playerSearch(Request $request): Response
{
    $playerName = $request->query->get('playerName', 'Faker');
    $game = $request->query->get('game', 'league_of_legends');
    
    return $this->redirectToRoute('app_analyst_player', [
        'playerName' => $playerName,
        'game' => $game
    ]);
}

/**
 * Analyse détaillée d'un joueur
 */
#[Route('/ai/analyst/player/{playerName}', name: 'app_analyst_player')]
public function analyzePlayer(string $playerName, Request $request): Response
{
    $game = $request->query->get('game', 'league_of_legends');
    $role = $request->query->get('role', 'Joueur');
    
    try {
        if (isset($_ENV['OPENAI_API_KEY']) && !empty($_ENV['OPENAI_API_KEY'])) {
            $client = OpenAI::client($_ENV['OPENAI_API_KEY']);
            
            $prompt = "Analyse complète du joueur esport $playerName qui joue à $game. " .
                      "Donne une analyse professionnelle détaillée de son style de jeu, " .
                      "ses forces, ses faiblesses, et des conseils d'amélioration.";
            
            $response = $client->chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'Tu es un analyste esport professionnel.'],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'temperature' => 0.7,
                'max_tokens' => 1000,
            ]);
            
            $analysis = $response->choices[0]->message->content;
        } else {
            $analysis = $this->generateLocalPlayerAnalysis($playerName, $game);
        }
    } catch (\Exception $e) {
        $analysis = $this->generateLocalPlayerAnalysis($playerName, $game);
    }
    
    $stats = $this->generatePlayerStats($playerName, $game);
    
    return $this->render('ai/player_analysis.html.twig', [
        'playerName' => $playerName,
        'game' => $game,
        'role' => $role,
        'analysis' => $analysis,
        'stats' => $stats,
        'timestamp' => date('d/m/Y H:i')
    ]);
}

/**
 * Recherche d'une équipe (redirection)
 */
#[Route('/ai/analyst/team/search', name: 'app_analyst_team_search')]
public function teamSearch(Request $request): Response
{
    $teamName = $request->query->get('teamName', 'T1');
    $game = $request->query->get('game', 'league_of_legends');
    
    return $this->redirectToRoute('app_analyst_team', [
        'teamName' => $teamName,
        'game' => $game
    ]);
}

/**
 * Analyse détaillée d'une équipe
 */
#[Route('/ai/analyst/team/{teamName}', name: 'app_analyst_team')]
public function analyzeTeam(string $teamName, Request $request): Response
{
    $game = $request->query->get('game', 'league_of_legends');
    
    try {
        if (isset($_ENV['OPENAI_API_KEY']) && !empty($_ENV['OPENAI_API_KEY'])) {
            $client = OpenAI::client($_ENV['OPENAI_API_KEY']);
            
            $prompt = "Analyse complète de l'équipe esport $teamName qui joue à $game. " .
                      "Analyse leur style de jeu, leurs forces, faiblesses, stratégies, " .
                      "et donne des recommandations pour s'améliorer.";
            
            $response = $client->chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'Tu es un coach esport professionnel.'],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'temperature' => 0.7,
                'max_tokens' => 1000,
            ]);
            
            $analysis = $response->choices[0]->message->content;
        } else {
            $analysis = $this->generateLocalTeamAnalysis($teamName, $game);
        }
    } catch (\Exception $e) {
        $analysis = $this->generateLocalTeamAnalysis($teamName, $game);
    }
    
    $teamStats = $this->generateTeamStats($teamName, $game);
    $players = $this->getTeamPlayers($teamName);
    
    return $this->render('ai/team_analysis.html.twig', [
        'teamName' => $teamName,
        'game' => $game,
        'analysis' => $analysis,
        'stats' => $teamStats,
        'players' => $players,
        'timestamp' => date('d/m/Y H:i')
    ]);
}

/**
 * Analyse en direct
 */
#[Route('/ai/analyst/live', name: 'app_analyst_live')]
public function liveAnalysis(): Response
{
    return $this->render('ai/live_analysis.html.twig', [
        'timestamp' => date('d/m/Y H:i')
    ]);
}

// ============= MÉTHODES PRIVÉES POUR L'ANALYSTE =============

private function generateLocalPlayerAnalysis(string $player, string $game): string
{
    return "ANALYSE DU JOUEUR : $player\n\n" .
           "STYLE DE JEU :\n" .
           "• Joueur polyvalent avec un bon équilibre entre agressivité et safety\n" .
           "• Excellentes mécaniques individuelles\n" .
           "• Bonne vision de jeu et prise de décision\n\n" .
           "FORCES :\n" .
           "• Farm et gestion des vagues exceptionnelle\n" .
           "• Dégâts en team fight très élevés\n" .
           "• Bonne communication avec l'équipe\n\n" .
           "FAIBLESSES :\n" .
           "• Parfois trop agressif en early game\n" .
           "• Gestion du mana perfectible\n" .
           "• Peut être plus constant\n\n" .
           "RECOMMANDATIONS :\n" .
           "• Travailler la patience en early game\n" .
           "• Améliorer le vision score\n" .
           "• Diversifier le champion pool";
}

private function generateLocalTeamAnalysis(string $team, string $game): string
{
    return "ANALYSE DE L'ÉQUIPE : $team\n\n" .
           "STYLE DE JEU GLOBAL :\n" .
           "• Équipe très agressive en early game\n" .
           "• Excellente coordination en team fights\n" .
           "• Macro-game structuré\n\n" .
           "FORCES COLLECTIVES :\n" .
           "• Synergie entre la jungle et les lanes\n" .
           "• Contrôle des objectifs neutres\n" .
           "• Drafts adaptatifs\n\n" .
           "FAIBLESSES :\n" .
           "• Gestion de l'avance perfectible\n" .
           "• Parfois prévisible stratégiquement\n" .
           "• Late game peut être problématique\n\n" .
           "STRATÉGIES RECOMMANDÉES :\n" .
           "• Varier les drafts\n" .
           "• Travailler les compositions de late game\n" .
           "• Améliorer la communication";
}

private function generatePlayerStats(string $player, string $game): array
{
    return [
        'kda' => rand(3, 9) . '.' . rand(0, 9),
        'kill_participation' => rand(55, 85) . '%',
        'cs_per_min' => rand(6, 11) . '.' . rand(0, 9),
        'damage_per_min' => rand(400, 900),
        'vision_score' => rand(30, 80),
        'win_rate' => rand(45, 75) . '%',
        'games_played' => rand(50, 500),
        'mvp_count' => rand(5, 50),
        'form' => [
            'last_5' => rand(2, 5) . 'W ' . rand(0, 3) . 'L',
            'current_streak' => rand(1, 5) . ' victoires',
            'performance_trend' => rand(60, 95) . '%'
        ]
    ];
}

private function generateTeamStats(string $team, string $game): array
{
    return [
        'overall_win_rate' => rand(45, 80) . '%',
        'first_blood_rate' => rand(40, 70) . '%',
        'dragon_control' => rand(40, 80) . '%',
        'team_synergy' => rand(65, 95) . '%',
        'recent_form' => [
            'last_10' => rand(4, 9) . 'W ' . rand(1, 6) . 'L'
        ]
    ];
}

private function getTeamPlayers(string $team): array
{
    return [
        ['name' => 'Player1', 'role' => 'Top', 'rating' => rand(75, 95)],
        ['name' => 'Player2', 'role' => 'Jungle', 'rating' => rand(75, 95)],
        ['name' => 'Player3', 'role' => 'Mid', 'rating' => rand(75, 95)],
        ['name' => 'Player4', 'role' => 'ADC', 'rating' => rand(75, 95)],
        ['name' => 'Player5', 'role' => 'Support', 'rating' => rand(75, 95)],
        ['name' => 'Player6', 'role' => 'Sub/Coach', 'rating' => rand(70, 90)]
    ];
}
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
}