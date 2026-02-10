<?php

namespace App\Form;

use App\Entity\ShopItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ShopItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('itemName')
            ->add('itemDescription')
            ->add('itemCategory')
            ->add('price')
            ->add('quantity')
            ->add('totalPrice')
            ->add('purchaseDate')
            ->add('status')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ShopItem::class,
        ]);
    }
}
