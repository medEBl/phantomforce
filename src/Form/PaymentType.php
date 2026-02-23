<?php

namespace App\Form;

use App\Entity\Payment;
use App\Entity\ShopItem;
<<<<<<< HEAD
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
=======
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Doctrine\ORM\EntityRepository;
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f

class PaymentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
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
=======
            ->add('shopItem', EntityType::class, [
                'class' => ShopItem::class,
                'choice_label' => function(ShopItem $shopItem) {
                    return sprintf('%s - %s € (ID: %d)', 
                        $shopItem->getItemName(),
                        number_format($shopItem->getTotalPrice(), 2, ',', ' '),
                        $shopItem->getId()
                    );
                },
                'query_builder' => function (EntityRepository $er) {
                    // Optionnel : filtrer les articles qui n'ont pas encore de paiement
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.itemName', 'ASC');
                },
                'placeholder' => 'Sélectionnez un article',
                'required' => false,
                'label' => 'Article associé',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('paymentDate', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => true,
                'label' => 'Date du paiement',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('amount', NumberType::class, [
                'required' => true,
                'label' => 'Montant (€)',
                'scale' => 2,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 99.99',
                    'step' => '0.01',
                ],
            ])
            ->add('paymentMethod', ChoiceType::class, [
                'choices' => [
                    'Carte bancaire' => 'card',
                    'PayPal' => 'paypal',
                    'Virement bancaire' => 'transfer',
                    'Espèces' => 'cash',
                    'Chèque' => 'check',
                    'Autre' => 'other',
                ],
                'required' => true,
                'label' => 'Méthode de paiement',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('paymentStatus', ChoiceType::class, [
                'choices' => [
                    'Payé' => 'success',
                    'En attente' => 'pending',
                    'Échoué' => 'failed',
                    'Annulé' => 'cancelled',
                    'Remboursé' => 'refunded',
                ],
                'required' => true,
                'label' => 'Statut',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('transactionRef', TextType::class, [
                'required' => true,
                'label' => 'Référence de transaction',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: TRX123456',
                ],
            ]);
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Payment::class,
        ]);
    }
}