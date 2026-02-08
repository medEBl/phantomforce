<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'user')]
#[ORM\UniqueConstraint(name: 'UNIQ_EMAIL', fields: ['email'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    #[Assert\Length(
        max: 180,
        maxMessage: "L'email ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le nom d'utilisateur est obligatoire.")]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: "Le nom d'utilisateur doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom d'utilisateur ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9_-]+$/',
        message: "Le nom d'utilisateur ne peut contenir que des lettres, chiffres, tirets et underscores."
    )]
    private ?string $username = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom complet est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: "Le nom complet doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom complet ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\s\-\'\.]+$/',
        message: "Le nom complet ne peut contenir que des lettres, espaces, tirets, apostrophes et points."
    )]
    private ?string $fullName = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le pays est obligatoire.")]
    #[Assert\Length(
        max: 50,
        maxMessage: "Le pays ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\s\-]+$/',
        message: "Le pays ne peut contenir que des lettres, espaces et tirets."
    )]
    private ?string $country = null;

    #[ORM\Column(type: 'date')]
    #[Assert\NotNull(message: "La date de naissance est obligatoire.")]
    #[Assert\LessThan(
        value: "today - 13 years",
        message: "L'utilisateur doit avoir au moins 13 ans."
    )]
    #[Assert\GreaterThan(
        value: "today - 120 years",
        message: "La date de naissance n'est pas valide."
    )]
    private ?\DateTimeInterface $birthDate = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Le rôle est obligatoire.")]
    #[Assert\Length(
        max: 20,
        maxMessage: "Le rôle ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Choice(
        choices: ['user', 'admin', 'moderator', 'editor'],
        message: "Le rôle '{{ value }}' n'est pas valide. Valeurs acceptées : user, admin, moderator, editor."
    )]
    private ?string $role = null;

    #[ORM\Column]
    #[Assert\Type(
        type: 'integer',
        message: "Les points d'accomplissement doivent être un nombre entier."
    )]
    #[Assert\Range(
        min: 0,
        max: 999999,
        minMessage: "Les points d'accomplissement ne peuvent pas être négatifs.",
        maxMessage: "Les points d'accomplissement ne peuvent pas dépasser {{ limit }}."
    )]
    private int $achievementPoints = 0;

    #[ORM\Column]
    private bool $isActive = true;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $lastLoginAt = null;

    #[Assert\Length(
        min: 8,
        max: 50,
        minMessage: "Le mot de passe doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le mot de passe ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
        message: "Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial."
    )]
    private ?string $plainPassword = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->roles = ['ROLE_USER'];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = trim($email);
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        
        if ($this->role && !in_array('ROLE_' . strtoupper($this->role), $roles, true)) {
            $roles[] = 'ROLE_' . strtoupper($this->role);
        }
        
        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(?string $plainPassword): static
    {
        if ($plainPassword !== null) {
            $plainPassword = trim($plainPassword);
        }
        $this->plainPassword = $plainPassword;
        return $this;
    }

    public function eraseCredentials(): void
    {
        $this->plainPassword = null;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = trim($username);
        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): static
    {
        $this->fullName = trim($fullName);
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = trim($country);
        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): static
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = trim($role);
        
        $roleWithPrefix = 'ROLE_' . strtoupper($role);
        if (!in_array($roleWithPrefix, $this->roles, true)) {
            $this->roles[] = $roleWithPrefix;
        }
        
        return $this;
    }

    public function getAchievementPoints(): int
    {
        return $this->achievementPoints;
    }

    public function setAchievementPoints(int $achievementPoints): static
    {
        $this->achievementPoints = $achievementPoints;
        return $this;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getLastLoginAt(): ?\DateTimeInterface
    {
        return $this->lastLoginAt;
    }

    public function setLastLoginAt(?\DateTimeInterface $lastLoginAt): static
    {
        $this->lastLoginAt = $lastLoginAt;
        return $this;
    }

    /**
     * Validation supplémentaire pour les scénarios de création
     */
    #[Assert\IsTrue(message: "Le mot de passe est obligatoire pour la création d'un utilisateur.")]
    public function isPasswordRequiredForNewUser(): bool
    {
        return $this->id !== null || $this->plainPassword !== null;
    }
}