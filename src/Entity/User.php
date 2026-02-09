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
#[ORM\UniqueConstraint(name: 'UNIQ_USERNAME', fields: ['username'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: 'L\'email est obligatoire.')]
    #[Assert\Email(message: 'L\'email "{{ value }}" n\'est pas valide.')]
    #[Assert\Length(
        max: 180,
        maxMessage: 'L\'email ne doit pas dépasser {{ limit }} caractères.'
    )]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 50, unique: true)]
    #[Assert\NotBlank(message: 'Le nom d\'utilisateur est obligatoire.')]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: 'Le nom d\'utilisateur doit contenir au moins {{ limit }} caractères.',
        maxMessage: 'Le nom d\'utilisateur ne doit pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9_]+$/',
        message: 'Le nom d\'utilisateur ne peut contenir que des lettres, chiffres et underscores.'
    )]
    private ?string $username = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Le nom complet est obligatoire.')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Le nom complet doit contenir au moins {{ limit }} caractères.',
        maxMessage: 'Le nom complet ne doit pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ\s\'-]+$/u',
        message: 'Le nom complet ne peut contenir que des lettres, espaces, tirets et apostrophes.'
    )]
    private ?string $fullName = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le pays est obligatoire.')]
    #[Assert\Length(
        max: 50,
        maxMessage: 'Le pays ne doit pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ\s-]+$/u',
        message: 'Le pays ne peut contenir que des lettres, espaces et tirets.'
    )]
    private ?string $country = null;

    #[ORM\Column(type: 'date')]
    #[Assert\NotBlank(message: 'La date de naissance est obligatoire.')]
    #[Assert\Type('\DateTimeInterface', message: 'La date de naissance doit être une date valide.')]
    #[Assert\LessThan(
        value: '-13 years',
        message: 'L\'utilisateur doit avoir au moins 13 ans.'
    )]
    #[Assert\GreaterThan(
        value: '-100 years',
        message: 'La date de naissance n\'est pas valide.'
    )]
    private ?\DateTimeInterface $birthDate = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: 'Le rôle est obligatoire.')]
    #[Assert\Choice(
        choices: ['USER', 'ADMIN', 'MODERATOR', 'COACH', 'PLAYER', 'ORGANIZER'],
        message: 'Le rôle "{{ value }}" n\'est pas valide. Choisissez parmi : {{ choices }}.'
    )]
    #[Assert\Length(
        max: 20,
        maxMessage: 'Le rôle ne doit pas dépasser {{ limit }} caractères.'
    )]
    private ?string $role = null;

    #[ORM\Column]
    #[Assert\Type('integer', message: 'Les points de réussite doivent être un nombre entier.')]
    #[Assert\Range(
        min: 0,
        max: 10000,
        notInRangeMessage: 'Les points de réussite doivent être compris entre {{ min }} et {{ max }}.'
    )]
    private int $achievementPoints = 0;

    #[ORM\Column]
    #[Assert\Type('bool', message: 'Le statut actif doit être vrai ou faux.')]
    private bool $isActive = true;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime', nullable: true)]
    #[Assert\Type('\DateTimeInterface', message: 'La dernière connexion doit être une date valide.')]
    private ?\DateTimeInterface $lastLoginAt = null;

    #[Assert\Length(
        min: 8,
        minMessage: 'Le mot de passe doit contenir au moins {{ limit }} caractères.',
        groups: ['registration', 'password_change']
    )]
    #[Assert\Regex(
        pattern: '/[A-Z]/',
        message: 'Le mot de passe doit contenir au moins une lettre majuscule.',
        groups: ['registration', 'password_change']
    )]
    #[Assert\Regex(
        pattern: '/[a-z]/',
        message: 'Le mot de passe doit contenir au moins une lettre minuscule.',
        groups: ['registration', 'password_change']
    )]
    #[Assert\Regex(
        pattern: '/[0-9]/',
        message: 'Le mot de passe doit contenir au moins un chiffre.',
        groups: ['registration', 'password_change']
    )]
    #[Assert\Regex(
        pattern: '/[^A-Za-z0-9]/',
        message: 'Le mot de passe doit contenir au moins un caractère spécial.',
        groups: ['registration', 'password_change']
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
        $this->email = $email;
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
        $this->username = $username;
        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): static
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;
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
        $this->role = $role;
        
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

    public function getAge(): int
    {
        $now = new \DateTime();
        $interval = $this->birthDate->diff($now);
        return $interval->y;
    }

    public function isPasswordStrong(): bool
    {
        if (!$this->plainPassword) {
            return false;
        }

        $password = $this->plainPassword;
        
        // Vérifier la longueur
        if (strlen($password) < 8) {
            return false;
        }
        
        // Vérifier la complexité
        $hasUpper = preg_match('/[A-Z]/', $password);
        $hasLower = preg_match('/[a-z]/', $password);
        $hasDigit = preg_match('/[0-9]/', $password);
        $hasSpecial = preg_match('/[^A-Za-z0-9]/', $password);
        
        return $hasUpper && $hasLower && $hasDigit && $hasSpecial;
    }
}