<?php

namespace App\Entity;

use App\Repository\MatchyRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MatchyRepository::class)]
class Matchy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le jeu du match est obligatoire")]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: "Le nom du jeu doit faire au moins {{ limit }} caractères",
        maxMessage: "Le nom du jeu ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $game = null;

    #[ORM\Column(type: 'datetime')]
    #[Assert\NotBlank(message: "La date du match est obligatoire")]
    #[Assert\Type("\DateTimeInterface", message: "La date doit être une date valide")]
    #[Assert\GreaterThanOrEqual(
        "today",
        message: "La date du match ne peut pas être dans le passé"
    )]
    private ?\DateTimeInterface $match_date = null;

    #[ORM\ManyToOne(targetEntity: Team::class, inversedBy: 'matchesAsTeam1')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "L'équipe 1 est obligatoire")]
    private ?Team $team1 = null;

    #[ORM\ManyToOne(targetEntity: Team::class, inversedBy: 'matchesAsTeam2')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "L'équipe 2 est obligatoire")]
    #[Assert\Expression(
        "this.getTeam1() != this.getTeam2()",
        message: "L'équipe 1 et l'équipe 2 doivent être différentes"
    )]
    private ?Team $team2 = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Type(
        type: 'integer',
        message: 'Le score de l\'équipe 1 doit être un nombre entier'
    )]
    #[Assert\GreaterThanOrEqual(
        value: 0,
        message: 'Le score de l\'équipe 1 ne peut pas être négatif'
    )]
    #[Assert\LessThanOrEqual(
        value: 999,
        message: 'Le score de l\'équipe 1 ne peut pas dépasser 999'
    )]
    private ?int $score_team1 = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Type(
        type: 'integer',
        message: 'Le score de l\'équipe 2 doit être un nombre entier'
    )]
    #[Assert\GreaterThanOrEqual(
        value: 0,
        message: 'Le score de l\'équipe 2 ne peut pas être négatif'
    )]
    #[Assert\LessThanOrEqual(
        value: 999,
        message: 'Le score de l\'équipe 2 ne peut pas dépasser 999'
    )]
    private ?int $score_team2 = null;

    #[ORM\ManyToOne(targetEntity: Team::class, inversedBy: 'matchesWon')]
    #[Assert\Expression(
        "this.getWinnerTeam() == null or this.getWinnerTeam() == this.getTeam1() or this.getWinnerTeam() == this.getTeam2()",
        message: "Le vainqueur doit être l'équipe 1 ou l'équipe 2"
    )]
    private ?Team $winner_team = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le statut du match est obligatoire")]
    #[Assert\Choice(
        choices: ['planned', 'ongoing', 'finished', 'cancelled'],
        message: "Le statut doit être l'un des suivants : planned, ongoing, finished, cancelled"
    )]
    private ?string $status = null;

    // Validations personnalisées
    #[Assert\Callback]
    public function validateScoresAndWinner(\Symfony\Component\Validator\Context\ExecutionContextInterface $context): void
    {
        // Si le match est terminé, un vainqueur doit être défini
        if ($this->getStatus() === 'finished' && $this->getWinnerTeam() === null) {
            $context->buildViolation('Un vainqueur doit être défini pour un match terminé')
                ->atPath('winner_team')
                ->addViolation();
        }

        // Si un vainqueur est défini, les scores doivent être définis
        if ($this->getWinnerTeam() !== null && ($this->getScoreTeam1() === null || $this->getScoreTeam2() === null)) {
            $context->buildViolation('Les scores doivent être définis lorsque un vainqueur est désigné')
                ->atPath('winner_team')
                ->addViolation();
        }

        // Le vainqueur doit avoir un score supérieur ou égal
        if ($this->getWinnerTeam() !== null && $this->getScoreTeam1() !== null && $this->getScoreTeam2() !== null) {
            if ($this->getWinnerTeam() === $this->getTeam1() && $this->getScoreTeam1() <= $this->getScoreTeam2()) {
                $context->buildViolation('L\'équipe 1 ne peut pas être désignée vainqueur avec un score inférieur ou égal à l\'équipe 2')
                    ->atPath('winner_team')
                    ->addViolation();
            }
            
            if ($this->getWinnerTeam() === $this->getTeam2() && $this->getScoreTeam2() <= $this->getScoreTeam1()) {
                $context->buildViolation('L\'équipe 2 ne peut pas être désignée vainqueur avec un score inférieur ou égal à l\'équipe 1')
                    ->atPath('winner_team')
                    ->addViolation();
            }
        }

        // Vérifier que le match n'est pas déjà passé si il est programmé
        if ($this->getStatus() === 'planned' && $this->getMatchDate() !== null) {
            $now = new \DateTime();
            if ($this->getMatchDate() < $now) {
                $context->buildViolation('Un match programmé ne peut pas avoir une date dans le passé')
                    ->atPath('match_date')
                    ->addViolation();
            }
        }
    }

    // Getters et setters
    public function getId(): ?int { return $this->id; }
    
    public function getGame(): ?string { return $this->game; }
    public function setGame(string $game): static { $this->game = $game; return $this; }
    
    public function getMatchDate(): ?\DateTimeInterface { return $this->match_date; }
    public function setMatchDate(\DateTimeInterface $match_date): static { $this->match_date = $match_date; return $this; }
    
    public function getTeam1(): ?Team { return $this->team1; }
    public function setTeam1(Team $team1): static { $this->team1 = $team1; return $this; }
    
    public function getTeam2(): ?Team { return $this->team2; }
    public function setTeam2(Team $team2): static { $this->team2 = $team2; return $this; }
    
    public function getScoreTeam1(): ?int { return $this->score_team1; }
    public function setScoreTeam1(?int $score_team1): static { $this->score_team1 = $score_team1; return $this; }
    
    public function getScoreTeam2(): ?int { return $this->score_team2; }
    public function setScoreTeam2(?int $score_team2): static { $this->score_team2 = $score_team2; return $this; }
    
    public function getWinnerTeam(): ?Team { return $this->winner_team; }
    public function setWinnerTeam(?Team $winner_team): static { $this->winner_team = $winner_team; return $this; }
    
    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }

    // Méthode utilitaire pour obtenir le statut en français
    public function getStatusLabel(): string
    {
        $statuses = [
            'planned' => 'Programmé',
            'ongoing' => 'En cours',
            'finished' => 'Terminé',
            'cancelled' => 'Annulé'
        ];
        
        return $statuses[$this->status] ?? $this->status;
    }

    // Méthode utilitaire pour déterminer le vainqueur automatiquement
    public function determineWinner(): ?Team
    {
        if ($this->score_team1 === null || $this->score_team2 === null) {
            return null;
        }
        
        if ($this->score_team1 > $this->score_team2) {
            return $this->team1;
        } elseif ($this->score_team2 > $this->score_team1) {
            return $this->team2;
        }
        
        return null; // Match nul
    }
}