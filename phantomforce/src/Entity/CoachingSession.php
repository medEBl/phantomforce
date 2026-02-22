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
    #[Assert\NotNull(message: "L'ID de l'équipe est obligatoire.")]
    #[Assert\Positive(message: "L'ID de l'équipe doit être un nombre positif (> 0).")]
    #[Assert\Type(
        type: 'integer',
        message: "L'ID de l'équipe doit être un nombre entier."
    )]
    #[Assert\Range(
        min: 1,
        max: 999,
        notInRangeMessage: "L'ID de l'équipe doit être compris entre {{ min }} et {{ max }}."
    )]
    private ?int $team_id = null;

    #[ORM\ManyToOne(inversedBy: 'coachingSessions')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Le plan d'entraînement est obligatoire.")]
    private ?TrainingPlan $training_plan = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "La date et l'heure de la session sont obligatoires.")]
    #[Assert\Type(
        type: '\DateTimeInterface',
        message: "La date de session doit être une date valide."
    )]
    #[Assert\GreaterThanOrEqual(
        value: "today",
        message: "La date de session ne peut pas être dans le passé."
    )]
    private ?\DateTime $session_date = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "La durée de la session est obligatoire.")]
    #[Assert\Positive(message: "La durée doit être un nombre positif (> 0).")]
    #[Assert\Type(
        type: 'integer',
        message: "La durée doit être un nombre entier."
    )]
    #[Assert\Range(
        min: 15,
        max: 480,
        notInRangeMessage: "La durée doit être comprise entre {{ min }} et {{ max }} minutes."
    )]
    private ?int $duration = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(
        max: 255,
        maxMessage: "Les notes ne peuvent pas dépasser {{ limit }} caractères."
    )]
    private ?string $notes = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTeamId(): ?int
    {
        return $this->team_id;
    }

    public function setTeamId(int $team_id): static
    {
        $this->team_id = $team_id;
        return $this;
    }

    public function getTrainingPlan(): ?TrainingPlan
    {
        return $this->training_plan;
    }

    public function setTrainingPlan(?TrainingPlan $training_plan): static
    {
        $this->training_plan = $training_plan;
        return $this;
    }

    public function getSessionDate(): ?\DateTime
    {
        return $this->session_date;
    }

    public function setSessionDate(\DateTime $session_date): static
    {
        $this->session_date = $session_date;
        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes ? trim($notes) : null;
        return $this;
    }

    // Validation personnalisée
    #[Assert\Callback]
    public function validate(ExecutionContextInterface $context): void
    {
        // Validation: La durée doit être un multiple de 15 minutes
        if ($this->duration !== null && $this->duration % 15 !== 0) {
            $context->buildViolation('La durée doit être un multiple de 15 minutes (15, 30, 45, 60, etc.).')
                ->atPath('duration')
                ->addViolation();
        }

        // Validation: La session ne peut pas durer plus de 8 heures (480 minutes)
        if ($this->duration !== null && $this->duration > 480) {
            $context->buildViolation('La session ne peut pas durer plus de 8 heures (480 minutes).')
                ->atPath('duration')
                ->addViolation();
        }

        // Validation: La session doit commencer aux heures ou demi-heures
        if ($this->session_date !== null) {
            $minutes = (int)$this->session_date->format('i');
            if ($minutes !== 0 && $minutes !== 30) {
                $context->buildViolation('La session doit commencer à l\'heure ou à la demi-heure (ex: 14:00 ou 14:30).')
                    ->atPath('session_date')
                    ->addViolation();
            }
        }

        // Validation: La session ne peut pas être programmée le week-end
        if ($this->session_date !== null) {
            $dayOfWeek = (int)$this->session_date->format('w'); // 0 = dimanche, 6 = samedi
            if ($dayOfWeek === 0 || $dayOfWeek === 6) {
                $context->buildViolation('Les sessions ne peuvent pas être programmées le week-end.')
                    ->atPath('session_date')
                    ->addViolation();
            }
        }

        // Validation: Heures de travail (entre 8h et 20h)
        if ($this->session_date !== null) {
            $hour = (int)$this->session_date->format('H');
            if ($hour < 8 || $hour > 20) {
                $context->buildViolation('Les sessions doivent être programmées entre 8h et 20h.')
                    ->atPath('session_date')
                    ->addViolation();
            }
        }

        // Validation: Un coach ne peut pas avoir plus de 2 sessions le même jour
        // (Cette validation nécessiterait un accès au repository, donc peut-être à faire dans le contrôleur)

        // Validation: Vérifier que le coach est disponible (pas de chevauchement)
        // (Cette validation nécessiterait un accès au repository)

        // Validation: Pour les sessions de plus de 2 heures, des notes détaillées sont requises
        if ($this->duration !== null && $this->duration > 120 && empty($this->notes)) {
            $context->buildViolation('Pour les sessions de plus de 2 heures, des notes détaillées sont requises.')
                ->atPath('notes')
                ->addViolation();
        }

        // Validation: Vérifier que l'équipe n'a pas déjà une session à la même heure
        // (Cette validation nécessiterait un accès au repository)
    }
}