<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

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

    public function getId(): ?int
    {
        return $this->id;
    }

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

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(string $paymentStatus): static
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    public function getTransactionRef(): ?string
    {
        return $this->transactionRef;
    }

    public function setTransactionRef(string $transactionRef): static
    {
        $this->transactionRef = $transactionRef;

        return $this;
    }
}