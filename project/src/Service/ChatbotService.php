<?php
// src/Service/ChatbotService.php

namespace App\Service;

use App\Repository\MatchyRepository;
use App\Repository\TeamRepository;
use App\Entity\Matchy;
use App\Entity\Team;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ChatbotService
{
    private $httpClient;
    private $apiKey;
    private $matchyRepository;
    private $teamRepository;
    private $entityManager;
    
    public function __construct(
        HttpClientInterface $httpClient,
        MatchyRepository $matchyRepository,
        TeamRepository $teamRepository,
        EntityManagerInterface $entityManager
    ) {
        $this->httpClient = $httpClient;
        $this->matchyRepository = $matchyRepository;
        $this->teamRepository = $teamRepository;
        $this->entityManager = $entityManager;
        $this->apiKey = $_ENV['GEMINI_API_KEY'] ?? '';
    }
    
    /**
     * Analyser l'intention de l'utilisateur
     */
    private function analyzeIntent(string $message): array
    {
        $message = strtolower($message);
        
        // Détection de création de match
        if (preg_match('/(cr[ée]e|ajoute|nouveau).*(match)/i', $message)) {
            return ['action' => 'create_match', 'params' => $this->extractMatchParams($message)];
        }
        
        // Détection de création d'équipe
        if (preg_match('/(cr[ée]e|ajoute|nouvelle).*(équipe|team)/i', $message)) {
            return ['action' => 'create_team', 'params' => $this->extractTeamParams($message)];
        }
        
        // Détection de suppression
        if (preg_match('/(supprime|efface|delete).*(match|équipe)/i', $message)) {
            return ['action' => 'delete', 'params' => $this->extractDeleteParams($message)];
        }
        
        // Pas d'action détectée, on laisse l'IA répondre normalement
        return ['action' => 'chat'];
    }
    
    /**
     * Extraire les paramètres d'un match depuis le message
     */
    private function extractMatchParams(string $message): array
    {
        $params = [
            'game' => 'Valorant', // Valeur par défaut
            'team1' => null,
            'team2' => null,
            'date' => null,
            'time' => null
        ];
        
        // Extraire le jeu
        $games = ['valorant', 'lol', 'cs:go', 'csgo', 'league of legends', 'rocket league'];
        foreach ($games as $game) {
            if (strpos($message, $game) !== false) {
                $params['game'] = ucfirst($game);
                break;
            }
        }
        
        // Extraire les noms d'équipes (cherche des mots après "entre" ou "vs")
        if (preg_match('/(?:entre|vs|contre)\s+([a-z0-9]+)(?:\s+et|\s+vs|\s+contre)?\s+([a-z0-9]+)/i', $message, $matches)) {
            $params['team1'] = $matches[1];
            $params['team2'] = $matches[2];
        }
        
        // Extraire la date (formats: demain, lundi, 15/03, 15 mars)
        if (strpos($message, 'demain') !== false) {
            $date = new \DateTime('+1 day');
            $params['date'] = $date->format('Y-m-d');
        } elseif (strpos($message, 'aujourd\'hui') !== false || strpos($message, "aujourd'hui") !== false) {
            $date = new \DateTime();
            $params['date'] = $date->format('Y-m-d');
        } elseif (preg_match('/(\d{1,2})[\/\-](\d{1,2})/', $message, $matches)) {
            $params['date'] = date('Y') . '-' . $matches[2] . '-' . $matches[1];
        }
        
        // Extraire l'heure
        if (preg_match('/(\d{1,2})h(\d{2})?/', $message, $matches)) {
            $params['time'] = $matches[1] . ':' . ($matches[2] ?? '00');
        } elseif (preg_match('/(\d{1,2}):(\d{2})/', $message, $matches)) {
            $params['time'] = $matches[1] . ':' . $matches[2];
        }
        
        return $params;
    }
    
    /**
     * Extraire les paramètres d'une équipe
     */
    private function extractTeamParams(string $message): array
    {
        $params = [
            'name' => null,
            'game' => 'Valorant'
        ];
        
        // Chercher le nom de l'équipe (souvent entre guillemets)
        if (preg_match('/(["\'])([^"\']+)\1/', $message, $matches)) {
            $params['name'] = $matches[2];
        } else {
            // Sinon, prendre le mot après "équipe" ou "team"
            if (preg_match('/(?:équipe|team)\s+([a-z0-9]+)/i', $message, $matches)) {
                $params['name'] = $matches[1];
            }
        }
        
        // Extraire le jeu
        $games = ['valorant', 'lol', 'cs:go', 'csgo', 'league of legends', 'rocket league'];
        foreach ($games as $game) {
            if (strpos($message, $game) !== false) {
                $params['game'] = ucfirst($game);
                break;
            }
        }
        
        return $params;
    }
    
    /**
     * Extraire les paramètres pour suppression
     */
    private function extractDeleteParams(string $message): array
    {
        $params = [
            'type' => null,
            'id' => null,
            'name' => null
        ];
        
        if (strpos($message, 'match') !== false) {
            $params['type'] = 'match';
        } elseif (strpos($message, 'équipe') !== false || strpos($message, 'team') !== false) {
            $params['type'] = 'team';
        }
        
        // Chercher un ID (#1, 1, etc.)
        if (preg_match('/#?(\d+)/', $message, $matches)) {
            $params['id'] = (int)$matches[1];
        } elseif ($params['type'] === 'team') {
            // Chercher un nom d'équipe
            if (preg_match('/(?:équipe|team)\s+([a-z0-9]+)/i', $message, $matches)) {
                $params['name'] = $matches[1];
            }
        }
        
        return $params;
    }
    
    /**
     * Créer un match
     */
    private function createMatch(array $params): array
    {
        try {
            $match = new Matchy();
            $match->setGame($params['game'] ?? 'Valorant');
            $match->setStatus('planned');
            
            // Définir la date
            if ($params['date'] ?? null) {
                $dateStr = $params['date'];
                if ($params['time'] ?? null) {
                    $dateStr .= ' ' . $params['time'];
                } else {
                    $dateStr .= ' 20:00'; // Heure par défaut
                }
                $match->setMatchDate(new \DateTime($dateStr));
            } else {
                $match->setMatchDate(new \DateTime('+1 day 20:00')); // Demain 20h par défaut
            }
            
            // Chercher les équipes
            if ($params['team1'] ?? null) {
                $team1 = $this->teamRepository->findOneBy(['name' => $params['team1']]);
                if ($team1) {
                    $match->setTeam1($team1);
                }
            }
            
            if ($params['team2'] ?? null) {
                $team2 = $this->teamRepository->findOneBy(['name' => $params['team2']]);
                if ($team2) {
                    $match->setTeam2($team2);
                }
            }
            
            $this->entityManager->persist($match);
            $this->entityManager->flush();
            
            return [
                'success' => true,
                'message' => sprintf(
                    "✅ Match créé avec succès !\nID: #%d\nJeu: %s\nDate: %s\nÉquipes: %s vs %s",
                    $match->getId(),
                    $match->getGame(),
                    $match->getMatchDate()->format('d/m/Y H:i'),
                    $match->getTeam1() ? $match->getTeam1()->getName() : 'Équipe 1',
                    $match->getTeam2() ? $match->getTeam2()->getName() : 'Équipe 2'
                )
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => '❌ Erreur lors de la création du match : ' . $e->getMessage()
            ];
        }
    }
    
    /**
     * Créer une équipe
     */
    private function createTeam(array $params): array
{
    try {
        if (!$params['name']) {
            return [
                'success' => false,
                'message' => "❌ Je n'ai pas compris le nom de l'équipe. Utilisez des guillemets comme : \"Nom de l'équipe\""
            ];
        }
        
        // DEBUG : Voir tous les utilisateurs avec rôle COACH
        $coaches = $this->entityManager->getRepository(User::class)->findBy(['role' => 'COACH']);
        error_log("Nombre de coaches trouvés : " . count($coaches));
        foreach ($coaches as $c) {
            error_log("Coach trouvé : ID " . $c->getId() . " - " . $c->getFullName());
        }
        
        $coach = $this->entityManager->getRepository(User::class)->findOneBy(['role' => 'COACH']);
        
        if (!$coach) {
            // Essayer avec une requête plus flexible
            $coach = $this->entityManager->getRepository(User::class)
                ->createQueryBuilder('u')
                ->where('u.role LIKE :role')
                ->setParameter('role', '%COACH%')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
                
            error_log("Coach trouvé avec LIKE : " . ($coach ? 'OUI' : 'NON'));
        }
        
        if (!$coach) {
            return [
                'success' => false,
                'message' => "❌ Aucun coach trouvé dans la base de données. Vérifiez que l'utilisateur avec ID 6 a bien le rôle COACH."
            ];
        }
        
        $team = new Team();
        $team->setName($params['name']);
        $team->setGame($params['game'] ?? 'Valorant');
        $team->setCreationDate(new \DateTime());
        $team->setCoach($coach);
        
        $this->entityManager->persist($team);
        $this->entityManager->flush();
        
        return [
            'success' => true,
            'message' => sprintf(
                "✅ Équipe créée avec succès !\nID: #%d\nNom: %s\nJeu: %s\nCoach: %s",
                $team->getId(),
                $team->getName(),
                $team->getGame(),
                $coach->getFullName()
            )
        ];
        
    } catch (\Exception $e) {
        return [
            'success' => false,
            'message' => '❌ Erreur lors de la création de l\'équipe : ' . $e->getMessage()
        ];
    }
}
    
    /**
     * Supprimer un élément
     */
    private function deleteItem(array $params): array
    {
        try {
            if ($params['type'] === 'match' && $params['id']) {
                $match = $this->matchyRepository->find($params['id']);
                if ($match) {
                    $this->entityManager->remove($match);
                    $this->entityManager->flush();
                    return [
                        'success' => true,
                        'message' => "✅ Match #{$params['id']} supprimé avec succès !"
                    ];
                } else {
                    return [
                        'success' => false,
                        'message' => "❌ Match #{$params['id']} introuvable."
                    ];
                }
            } elseif ($params['type'] === 'team') {
                $team = null;
                if ($params['id']) {
                    $team = $this->teamRepository->find($params['id']);
                } elseif ($params['name']) {
                    $team = $this->teamRepository->findOneBy(['name' => $params['name']]);
                }
                
                if ($team) {
                    $this->entityManager->remove($team);
                    $this->entityManager->flush();
                    return [
                        'success' => true,
                        'message' => "✅ Équipe '{$team->getName()}' supprimée avec succès !"
                    ];
                } else {
                    return [
                        'success' => false,
                        'message' => "❌ Équipe introuvable."
                    ];
                }
            }
            
            return [
                'success' => false,
                'message' => "❌ Je n'ai pas compris quoi supprimer. Précisez 'match #1' ou 'équipe Nom'"
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => '❌ Erreur lors de la suppression : ' . $e->getMessage()
            ];
        }
    }
    
    /**
     * Récupérer le contexte des matchs et équipes
     */
    private function getContext(): string
    {
        $matches = $this->matchyRepository->findAll();
        $teams = $this->teamRepository->findAll();
        
        $context = "CONTEXTE ACTUEL:\n\n";
        
        $context .= "ÉQUIPES (" . count($teams) . "):\n";
        foreach ($teams as $team) {
            $context .= "- " . $team->getName() . " (jeu: " . $team->getGame() . ", ID: " . $team->getId() . ")\n";
        }
        
        $context .= "\nMATCHS (" . count($matches) . "):\n";
        foreach ($matches as $match) {
            $status = $match->getStatusLabel();
            $team1 = $match->getTeam1() ? $match->getTeam1()->getName() : 'Équipe 1';
            $team2 = $match->getTeam2() ? $match->getTeam2()->getName() : 'Équipe 2';
            $score1 = $match->getScoreTeam1() ?? '?';
            $score2 = $match->getScoreTeam2() ?? '?';
            $date = $match->getMatchDate() ? $match->getMatchDate()->format('d/m/Y H:i') : 'Date non définie';
            
            $context .= "- Match #{$match->getId()}: {$team1} ({$score1}) vs {$team2} ({$score2}) - {$status} - {$date}\n";
        }
        
        $context .= "\nCOMMANDES DISPONIBLES:\n";
        $context .= "- Créer un match: \"crée un match Valorant entre équipeA et équipeB demain 20h\"\n";
        $context .= "- Créer une équipe: \"crée une équipe 'Phantom Warriors' sur Valorant\"\n";
        $context .= "- Supprimer: \"supprime match #1\" ou \"supprime équipe Phantom\"\n";
        
        return $context;
    }
    
    /**
     * Envoyer un message à Gemini et obtenir une réponse
     */
    public function ask(string $userMessage): array
    {
        // D'abord, analyser l'intention
        $intent = $this->analyzeIntent($userMessage);
        
        // Si c'est une action, on la traite directement
        if ($intent['action'] === 'create_match') {
            return $this->createMatch($intent['params']);
        } elseif ($intent['action'] === 'create_team') {
            return $this->createTeam($intent['params']);
        } elseif ($intent['action'] === 'delete') {
            return $this->deleteItem($intent['params']);
        }
        
        // Sinon, on utilise l'IA normalement
        if (empty($this->apiKey)) {
            return [
                'success' => false,
                'message' => 'Configuration API manquante'
            ];
        }
        
        $context = $this->getContext();
        
        $prompt = "Tu es un assistant spécialisé dans la gestion de matchs esport pour la plateforme Phantom Force. 
        Tu aides les utilisateurs à gérer leurs matchs et équipes.
        
        {$context}
        
        Instructions:
        - Réponds de manière concise et amicale
        - Utilise des émojis pour rendre les réponses plus vivantes
        - Si l'utilisateur veut créer quelque chose, guide-le avec les commandes disponibles
        - Si tu ne sais pas répondre, propose d'aider l'utilisateur à contacter un administrateur
        
        Message de l'utilisateur: {$userMessage}
        
        Réponse:";
        
        try {
            $response = $this->httpClient->request('POST', 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=' . $this->apiKey, [
                'json' => [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ],
                    'generationConfig' => [
                        'temperature' => 0.7,
                        'maxOutputTokens' => 500,
                    ]
                ]
            ]);
            
            $data = $response->toArray();
            
            if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                $reply = $data['candidates'][0]['content']['parts'][0]['text'];
                
                return [
                    'success' => true,
                    'message' => $reply,
                    'timestamp' => (new \DateTime())->format('H:i')
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'Désolé, je n\'ai pas pu traiter votre demande.'
                ];
            }
            
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Erreur de communication avec l\'IA: ' . $e->getMessage()
            ];
        }
    }
    
    /**
     * Obtenir des suggestions de commandes
     */
    public function getSuggestions(): array
    {
        return [
            "📋 Liste des matchs",
            "🏆 Matchs à venir",
            "👥 Voir les équipes",
            "⚔️ Prochain match",
            "➕ Créer un match",
            "👑 Créer une équipe"
        ];
    }
}