<?php

namespace App\Form;

use App\Entity\Payment;
use App\Entity\ShopItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Doctrine\ORM\EntityRepository;

class PaymentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Payment::class,
        ]);
    }
}