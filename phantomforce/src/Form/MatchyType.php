<?php

namespace App\Form;

use App\Entity\Matchy;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatchyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('game')
            ->add('match_date')
            ->add('score_team1')
            ->add('score_team2')
            ->add('status')
            ->add('team1', EntityType::class, [
                'class' => Team::class,
'choice_label' => 'id',
            ])
            ->add('team2', EntityType::class, [
                'class' => Team::class,
'choice_label' => 'id',
            ])
            ->add('winner_team', EntityType::class, [
                'class' => Team::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Matchy::class,
        ]);
    }
}
