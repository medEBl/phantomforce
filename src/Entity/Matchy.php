<?php

namespace App\Entity;

use App\Repository\MatchyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatchyRepository::class)]
class Matchy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $game = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $match_date = null;

    #[ORM\ManyToOne(targetEntity: Team::class, inversedBy: 'matchesAsTeam1')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Team $team1 = null;

    #[ORM\ManyToOne(targetEntity: Team::class, inversedBy: 'matchesAsTeam2')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Team $team2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $score_team1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $score_team2 = null;

    #[ORM\ManyToOne(targetEntity: Team::class, inversedBy: 'matchesWon')]
    private ?Team $winner_team = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

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
}
