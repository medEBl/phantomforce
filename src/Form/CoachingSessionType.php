<?php

namespace App\Form;

use App\Entity\CoachingSession;
use App\Entity\TrainingPlan;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoachingSessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('coach_id')
            ->add('team_id')
            ->add('session_date')
            ->add('duration')
            ->add('notes')
            ->add('training_plan', EntityType::class, [
                'class' => TrainingPlan::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CoachingSession::class,
        ]);
    }
}
