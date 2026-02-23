<?php

namespace App\Form;

use App\Entity\Payment;
use App\Entity\ShopItem;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaymentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('amount', NumberType::class, [
                'label' => 'Montant unitaire (€)',
                'attr' => ['step' => '0.01', 'min' => 0, 'placeholder' => 'Ex: 59.99'],
                'required' => true
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantité',
                'attr' => ['min' => 1, 'value' => 1],
                'required' => true,
                'mapped' => false
            ])
            ->add('paymentMethod', ChoiceType::class, [
                'label' => 'Méthode de paiement',
                'choices' => [
                    'Carte bancaire' => 'card',
                    'PayPal' => 'paypal',
                    'Wallet' => 'wallet'
                ],
                'placeholder' => 'Choisissez une méthode',
                'required' => true
            ])
            ->add('paymentStatus', ChoiceType::class, [
                'label' => 'Statut du paiement',
                'choices' => [
                    'En attente' => 'pending',
                    'Succès' => 'success',
                    'Échoué' => 'failed'
                ],
                'placeholder' => 'Choisissez un statut',
                'required' => true
            ])
            ->add('transactionRef', TextType::class, [
                'label' => 'Référence de transaction',
                'required' => true,
                'attr' => ['maxlength' => 100, 'minlength' => 3, 'placeholder' => 'Ex: TRX-123456']
            ])
            ->add('paymentDate', DateTimeType::class, [
                'label' => 'Date du paiement',
                'widget' => 'single_text',
                'data' => new \DateTimeImmutable(),
                'required' => true,
                'input' => 'datetime_immutable'
            ])
            ->add('shopItem', EntityType::class, [
                'class' => ShopItem::class,
                'choice_label' => 'itemName',
                'label' => 'Article associé',
                'required' => false,
                'placeholder' => 'Sélectionnez un article'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Payment::class,
        ]);
    }
}