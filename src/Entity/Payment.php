<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
=======
use Symfony\Component\Validator\Constraints as Assert;
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

<<<<<<< HEAD
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $amount = null;

    #[ORM\Column(length: 20)]
    private ?string $paymentMethod = null;

    #[ORM\Column(length: 20)]
    private ?string $paymentStatus = null;

    #[ORM\Column(length: 100, unique: true)]
    private ?string $transactionRef = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $paymentDate = null;

    #[ORM\OneToOne(targetEntity: ShopItem::class, inversedBy: 'payment')]
    #[ORM\JoinColumn(name: "shop_item_id", referencedColumnName: "id", nullable: true)]
    private ?ShopItem $shopItem = null;

    public function __construct()
{
    $this->paymentDate = new \DateTimeImmutable();
    $this->paymentStatus = 'pending';
    // Version plus sûre avec timestamp et plus d'entropie
    $this->transactionRef = 'PAY-' . uniqid('', true) . '-' . date('YmdHis');
}

    // Getters et Setter...
=======
    #[ORM\OneToOne(inversedBy: 'payment')]
    #[ORM\JoinColumn(name: 'shop_item_id', referencedColumnName: 'id')]
    #[Assert\NotNull(message: 'Veuillez sélectionner un article')]
    private ?ShopItem $shopItem = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: 'La date de paiement est requise')]
    private ?\DateTimeInterface $paymentDate = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotNull(message: 'Le montant est requis')]
    #[Assert\Positive(message: 'Le montant doit être positif')]
    private ?string $amount = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'La méthode de paiement est requise')]
    private ?string $paymentMethod = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le statut est requis')]
    private ?string $paymentStatus = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'La référence est requise')]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: 'La référence doit faire au moins 3 caractères',
        maxMessage: 'La référence ne peut pas dépasser 255 caractères'
    )]
    private ?string $transactionRef = null;
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f

    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
=======
    public function getShopItem(): ?ShopItem
    {
        return $this->shopItem;
    }

    public function setShopItem(?ShopItem $shopItem): static
    {
        $this->shopItem = $shopItem;

        return $this;
    }

    public function getPaymentDate(): ?\DateTimeInterface
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(\DateTimeInterface $paymentDate): static
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): static
    {
        $this->amount = $amount;
<<<<<<< HEAD
=======

>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;
<<<<<<< HEAD
=======

>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
        return $this;
    }

    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(string $paymentStatus): static
    {
        $this->paymentStatus = $paymentStatus;
<<<<<<< HEAD
=======

>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
        return $this;
    }

    public function getTransactionRef(): ?string
    {
        return $this->transactionRef;
    }

    public function setTransactionRef(string $transactionRef): static
    {
        $this->transactionRef = $transactionRef;
<<<<<<< HEAD
        return $this;
    }

    public function getPaymentDate(): ?\DateTimeImmutable
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(\DateTimeImmutable $paymentDate): static
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    public function getShopItem(): ?ShopItem
    {
        return $this->shopItem;
    }

    public function setShopItem(?ShopItem $shopItem): static
    {
        $this->shopItem = $shopItem;
=======

>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
        return $this;
    }
}