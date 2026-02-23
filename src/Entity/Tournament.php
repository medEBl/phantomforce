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
    private ?string $phase = 'draft';

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

    #[ORM\Column(type: Types::TEXT, length: 16777215, nullable: true)]
    private ?string $posterPath = null;

    #[ORM\OneToMany(targetEntity: Registration::class, mappedBy: 'tournament', orphanRemoval: true)]
    private Collection $registrations;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $posterPrompt = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le nombre maximum d'équipes est obligatoire.")]
    #[Assert\Positive(message: "Le nombre d'équipes doit être supérieur à 0.")]
    private ?int $maxTeams = 16;

    public function __construct()
    {
        $this->rewards = new ArrayCollection();
        $this->registrations = new ArrayCollection();
        $this->phase = 'draft';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getGame(): ?string
    {
        return $this->game;
    }

    public function setGame(?string $game): static
    {
        $this->game = $game;

        return $this;
    }

    public function getStartDate(): ?\DateTimeImmutable
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeImmutable $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeImmutable
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeImmutable $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getPhase(): ?string
    {
        return $this->phase;
    }

    public function setPhase(?string $phase): static
    {
        $this->phase = $phase;

        return $this;
    }

    public function getOrganizerId(): ?int
    {
        return $this->organizerId;
    }

    public function setOrganizerId(?int $organizerId): static
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

    public function setIsActive(?bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getPosterPath(): ?string
    {
        return $this->posterPath;
    }

    public function setPosterPath(?string $posterPath): static
    {
        $this->posterPath = $posterPath;

        return $this;
    }

    public function getPosterPrompt(): ?string
    {
        return $this->posterPrompt;
    }

    public function setPosterPrompt(?string $posterPrompt): static
    {
        $this->posterPrompt = $posterPrompt;

        return $this;
    }

    public function getMaxTeams(): ?int
    {
        return $this->maxTeams;
    }

    public function setMaxTeams(?int $maxTeams): static
    {
        $this->maxTeams = $maxTeams;

        return $this;
    }

    /**
     * @return Collection<int, Registration>
     */
    public function getRegistrations(): Collection
    {
        return $this->registrations;
    }

    public function addRegistration(Registration $registration): static
    {
        if (!$this->registrations->contains($registration)) {
            $this->registrations->add($registration);
            $registration->setTournament($this);
        }

        return $this;
    }

    public function removeRegistration(Registration $registration): static
    {
        if ($this->registrations->removeElement($registration)) {
            // set the owning side to null (unless already changed)
            if ($registration->getTournament() === $this) {
                $registration->setTournament(null);
            }
        }

        return $this;
    }
}
