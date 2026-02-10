<?php

namespace App\Form;

use App\Entity\Tournament;
use App\Entity\TournamentReward;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TournamentRewardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('rank', IntegerType::class, [
                'label' => 'Rang',
                'attr' => ['class' => 'form-control'],
                'required' => false
            ])
            ->add('rewardType', TextType::class, [
                'label' => 'Type de récompense',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Cash, Points, Item'],
                'required' => false
            ])
            ->add('rewardValue', TextType::class, [
                'label' => 'Valeur',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: 500$'],
                'required' => false
            ])
            ->add('tournament', EntityType::class, [
                'class' => Tournament::class,
                'choice_label' => 'name',
                'label' => 'Tournoi',
                'attr' => ['class' => 'form-select']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TournamentReward::class,
            'attr' => ['novalidate' => 'novalidate']
        ]);
    }
}
