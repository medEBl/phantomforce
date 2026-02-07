<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
class Team
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $game = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $creation_date = null;

    #[ORM\Column]
    private ?int $coach_id = null;

    // Relation avec Matchy (1 team => plusieurs matchs)
    #[ORM\OneToMany(mappedBy: 'team1', targetEntity: Matchy::class)]
    private Collection $matchesAsTeam1;

    #[ORM\OneToMany(mappedBy: 'team2', targetEntity: Matchy::class)]
    private Collection $matchesAsTeam2;

    #[ORM\OneToMany(mappedBy: 'winner_team', targetEntity: Matchy::class)]
    private Collection $matchesWon;

    public function __construct()
    {
        $this->matchesAsTeam1 = new ArrayCollection();
        $this->matchesAsTeam2 = new ArrayCollection();
        $this->matchesWon = new ArrayCollection();
    }

    // Getters et setters
    public function getId(): ?int { return $this->id; }
    public function getName(): ?string { return $this->name; }
    public function setName(string $name): static { $this->name = $name; return $this; }
    public function getGame(): ?string { return $this->game; }
    public function setGame(string $game): static { $this->game = $game; return $this; }
    public function getCreationDate(): ?\DateTimeInterface { return $this->creation_date; }
    public function setCreationDate(\DateTimeInterface $creation_date): static { $this->creation_date = $creation_date; return $this; }
    public function getCoachId(): ?int { return $this->coach_id; }
    public function setCoachId(int $coach_id): static { $this->coach_id = $coach_id; return $this; }

    public function getMatchesAsTeam1(): Collection { return $this->matchesAsTeam1; }
    public function getMatchesAsTeam2(): Collection { return $this->matchesAsTeam2; }
    public function getMatchesWon(): Collection { return $this->matchesWon; }
}
