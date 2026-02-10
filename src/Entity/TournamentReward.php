<?php

namespace App\Entity;

use App\Repository\TournamentRewardRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: TournamentRewardRepository::class)]
#[UniqueEntity(
    fields: ['rank', 'tournament'],
    message: 'Ce rang est déjà attribué pour ce tournoi.'
)]
class TournamentReward
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'rewards')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Le tournoi est obligatoire.")]
    private ?Tournament $tournament = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le rang est obligatoire.")]
    #[Assert\Positive]
    private ?int $rank = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le type de récompense est obligatoire.")]
    private ?string $rewardType = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "La valeur de la récompense est obligatoire.")]
    private ?string $rewardValue = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTournament(): ?Tournament
    {
        return $this->tournament;
    }

    public function setTournament(?Tournament $tournament): static
    {
        $this->tournament = $tournament;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): static
    {
        $this->rank = $rank;

        return $this;
    }

    public function getRewardType(): ?string
    {
        return $this->rewardType;
    }

    public function setRewardType(string $rewardType): static
    {
        $this->rewardType = $rewardType;

        return $this;
    }

    public function getRewardValue(): ?string
    {
        return $this->rewardValue;
    }

    public function setRewardValue(string $rewardValue): static
    {
        $this->rewardValue = $rewardValue;

        return $this;
    }
}
