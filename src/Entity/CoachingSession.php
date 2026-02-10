<?php

namespace App\Entity;

use App\Repository\CoachingSessionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: CoachingSessionRepository::class)]
class CoachingSession
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "L'ID du coach est obligatoire.")]
    #[Assert\Positive(message: "L'ID du coach doit être un nombre positif (> 0).")]
    #[Assert\Type(type: 'integer')]
    #[Assert\Range(min: 1, max: 999)]
    private ?int $coach_id = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "L'ID de l'équipe est obligatoire.")]
    #[Assert\Positive]
    #[Assert\Type(type: 'integer')]
    #[Assert\Range(min: 1, max: 999)]
    private ?int $team_id = null;

    #[ORM\ManyToOne(inversedBy: 'coachingSessions')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Le plan d'entraînement est obligatoire.")]
    private ?TrainingPlan $training_plan = null;

    #[ORM\Column(type: 'datetime')]
    #[Assert\NotNull]
    #[Assert\Type(type: '\DateTimeInterface')]
    #[Assert\GreaterThanOrEqual("today")]
    private ?\DateTime $session_date = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Positive]
    #[Assert\Type(type: 'integer')]
    #[Assert\Range(min: 15, max: 480)]
    private ?int $duration = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $notes = null;

    
    // ================= GETTERS / SETTERS =================

    public function getId(): ?int { return $this->id; }

    public function getCoachId(): ?int { return $this->coach_id; }
    public function setCoachId(int $coach_id): static
    {
        $this->coach_id = $coach_id;
        return $this;
    }

    public function getTeamId(): ?int { return $this->team_id; }
    public function setTeamId(int $team_id): static
    {
        $this->team_id = $team_id;
        return $this;
    }

    public function getTrainingPlan(): ?TrainingPlan { return $this->training_plan; }
    public function setTrainingPlan(?TrainingPlan $training_plan): static
    {
        $this->training_plan = $training_plan;
        return $this;
    }

    public function getSessionDate(): ?\DateTime { return $this->session_date; }
    public function setSessionDate(\DateTime $session_date): static
    {
        $this->session_date = $session_date;
        return $this;
    }

    public function getDuration(): ?int { return $this->duration; }
    public function setDuration(int $duration): static
    {
        $this->duration = $duration;
        return $this;
    }

    public function getNotes(): ?string { return $this->notes; }
    public function setNotes(?string $notes): static
    {
        $this->notes = $notes ? trim($notes) : null;
        return $this;
    }

    

    // ================= VALIDATION MÉTIER =================

    #[Assert\Callback]
    public function validate(ExecutionContextInterface $context): void
    {
        if ($this->duration !== null && $this->duration % 15 !== 0) {
            $context->buildViolation('La durée doit être un multiple de 15 minutes.')
                ->atPath('duration')->addViolation();
        }

        if ($this->duration !== null && $this->duration > 120 && empty($this->notes)) {
            $context->buildViolation('Pour les sessions de plus de 2 heures, des notes détaillées sont requises.')
                ->atPath('notes')->addViolation();
        }

        if ($this->session_date !== null) {
            $minutes = (int)$this->session_date->format('i');
            if ($minutes !== 0 && $minutes !== 30) {
                $context->buildViolation('La session doit commencer à l\'heure ou à la demi-heure.')
                    ->atPath('session_date')->addViolation();
            }

            $day = (int)$this->session_date->format('w');
            if ($day === 0 || $day === 6) {
                $context->buildViolation('Les sessions ne peuvent pas être programmées le week-end.')
                    ->atPath('session_date')->addViolation();
            }

            $hour = (int)$this->session_date->format('H');
            if ($hour < 8 || $hour > 20) {
                $context->buildViolation('Les sessions doivent être programmées entre 8h et 20h.')
                    ->atPath('session_date')->addViolation();
            }
        }
    }
}
