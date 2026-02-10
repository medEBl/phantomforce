<?php

namespace App\Entity;

use App\Repository\TournamentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TournamentRepository::class)]
class Tournament
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom du tournoi ne peut pas être vide.")]
    #[Assert\Length(min: 3, max: 100, minMessage: "Le nom doit faire au moins 3 caractères.")]
    private ?string $name = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom du jeu ne peut pas être vide.")]
    private ?string $game = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    #[Assert\NotBlank(message: "La date de début est obligatoire.")]
    #[Assert\Type("\DateTimeImmutable")]
    #[Assert\GreaterThanOrEqual("today", message: "La date de début ne peut pas être antérieure à aujourd'hui.")]
    private ?\DateTimeImmutable $startDate = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire.")]
    #[Assert\Type("\DateTimeImmutable")]
    #[Assert\GreaterThan(propertyPath: "startDate", message: "La date de fin doit être après la date de début.")]
    private ?\DateTimeImmutable $endDate = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "La phase du tournoi est obligatoire.")]
    private ?string $phase = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "L'identifiant de l'organisateur est obligatoire.")]
    #[Assert\Positive]
    private ?int $organizerId = null;

    /**
     * @var Collection<int, TournamentReward>
     */
    #[ORM\Column]
    private ?bool $isActive = true;

    #[ORM\OneToMany(targetEntity: TournamentReward::class, mappedBy: 'tournament', orphanRemoval: true)]
    private Collection $rewards;

    public function __construct()
    {
        $this->rewards = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getGame(): ?string
    {
        return $this->game;
    }

    public function setGame(string $game): static
    {
        $this->game = $game;

        return $this;
    }

    public function getStartDate(): ?\DateTimeImmutable
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeImmutable $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeImmutable
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeImmutable $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getPhase(): ?string
    {
        return $this->phase;
    }

    public function setPhase(string $phase): static
    {
        $this->phase = $phase;

        return $this;
    }

    public function getOrganizerId(): ?int
    {
        return $this->organizerId;
    }

    public function setOrganizerId(int $organizerId): static
    {
        $this->organizerId = $organizerId;

        return $this;
    }

    /**
     * @return Collection<int, TournamentReward>
     */
    public function getRewards(): Collection
    {
        return $this->rewards;
    }

    public function addReward(TournamentReward $reward): static
    {
        if (!$this->rewards->contains($reward)) {
            $this->rewards->add($reward);
            $reward->setTournament($this);
        }

        return $this;
    }

    public function removeReward(TournamentReward $reward): static
    {
        if ($this->rewards->removeElement($reward)) {
            // set the owning side to null (unless already changed)
            if ($reward->getTournament() === $this) {
                $reward->setTournament(null);
            }
        }

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }
}
