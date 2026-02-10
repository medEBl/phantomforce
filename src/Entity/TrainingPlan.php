<?php

namespace App\Entity;

use App\Repository\TrainingPlanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: TrainingPlanRepository::class)]
class TrainingPlan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre du plan d'entraînement est obligatoire.")]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: "Le titre doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le titre ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9\s\-\'À-ÿ.,!?]+$/u',
        message: "Le titre contient des caractères non autorisés."
    )]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(
        min: 20,
        max: 2000,
        minMessage: "La description doit contenir au moins {{ limit }} caractères.",
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La zone de focus est obligatoire.")]
    #[Assert\Length(
        min: 3,
        max: 100,
        minMessage: "La zone de focus doit contenir au moins {{ limit }} caractères.",
        maxMessage: "La zone de focus ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Choice(
        choices: ['Défense', 'Attaque', 'Stratégie', 'Communication', 'Technique', 'Physique', 'Mental', 'Tactique'],
        message: "La zone de focus doit être une valeur valide : Défense, Attaque, Stratégie, Communication, Technique, Physique, Mental ou Tactique."
    )]
    private ?string $focus_area = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le niveau de difficulté est obligatoire.")]
    #[Assert\Choice(
        choices: ['Débutant', 'Intermédiaire', 'Avancé', 'Expert', 'Professionnel'],
        message: "Le niveau de difficulté doit être : Débutant, Intermédiaire, Avancé, Expert ou Professionnel."
    )]
    private ?string $difficulty_level = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "L'ID du coach est obligatoire.")]
    #[Assert\Positive(message: "L'ID du coach doit être un nombre positif (> 0).")]
    #[Assert\Type(
        type: 'integer',
        message: "L'ID du coach doit être un nombre entier."
    )]
    #[Assert\Range(
        min: 1,
        max: 999,
        notInRangeMessage: "L'ID du coach doit être compris entre {{ min }} et {{ max }}."
    )]
    private ?int $coach_id = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "La date de création est obligatoire.")]
    #[Assert\Type(
        type: '\DateTimeInterface',
        message: "La date de création doit être une date valide."
    )]
    #[Assert\LessThanOrEqual(
        value: "now",
        message: "La date de création ne peut pas être dans le futur."
    )]
    #[Assert\GreaterThanOrEqual(
        value: "2026-01-01",
        message: "La date de création ne peut pas être antérieure au 1er janvier 2026."
    )]
    private ?\DateTimeImmutable $created_at = null;

    /**
     * @var Collection<int, CoachingSession>
     */
    #[ORM\OneToMany(targetEntity: CoachingSession::class, mappedBy: 'training_plan')]
    private Collection $coachingSessions;

    public function __construct()
    {
        $this->coachingSessions = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = trim($title);
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = trim($description);
        return $this;
    }

    public function getFocusArea(): ?string
    {
        return $this->focus_area;
    }

    public function setFocusArea(string $focus_area): static
    {
        $this->focus_area = trim($focus_area);
        return $this;
    }

    public function getDifficultyLevel(): ?string
    {
        return $this->difficulty_level;
    }

    public function setDifficultyLevel(string $difficulty_level): static
    {
        $this->difficulty_level = trim($difficulty_level);
        return $this;
    }

    public function getCoachId(): ?int
    {
        return $this->coach_id;
    }

    public function setCoachId(int $coach_id): static
    {
        $this->coach_id = $coach_id;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return Collection<int, CoachingSession>
     */
    public function getCoachingSessions(): Collection
    {
        return $this->coachingSessions;
    }

    public function addCoachingSession(CoachingSession $coachingSession): static
    {
        if (!$this->coachingSessions->contains($coachingSession)) {
            $this->coachingSessions->add($coachingSession);
            $coachingSession->setTrainingPlan($this);
        }
        return $this;
    }

    public function removeCoachingSession(CoachingSession $coachingSession): static
    {
        if ($this->coachingSessions->removeElement($coachingSession)) {
            if ($coachingSession->getTrainingPlan() === $this) {
                $coachingSession->setTrainingPlan(null);
            }
        }
        return $this;
    }

    // 🔥 Ajouté pour Twig/formulaires
    public function __toString(): string
    {
        return $this->title ?? 'Training Plan';
    }

    // Validation personnalisée
    #[Assert\Callback]
    public function validate(ExecutionContextInterface $context): void
    {
        // Validation: Le titre ne doit pas être identique à la description
        if ($this->title && $this->description && strtolower($this->title) === strtolower(substr($this->description, 0, strlen($this->title)))) {
            $context->buildViolation('Le titre ne doit pas être identique au début de la description.')
                ->atPath('title')
                ->addViolation();
        }

        // Validation: Si niveau Expert ou Professionnel, le coach doit avoir un ID élevé (expérimenté)
        if (in_array($this->difficulty_level, ['Expert', 'Professionnel']) && $this->coach_id < 10) {
            $context->buildViolation('Pour les niveaux Expert et Professionnel, le coach doit avoir un ID supérieur ou égal à 10 (coach expérimenté).')
                ->atPath('coach_id')
                ->addViolation();
        }
    }
}