<?php
// src/Form/SessionCoachingForm.php

namespace App\Form;

use App\Entity\CoachingSession;
use App\Entity\TrainingPlan;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SessionCoachingForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('coach_id', IntegerType::class, [
                'label' => 'ID du Coach',
                'attr' => ['class' => 'form-admin']
            ])
            ->add('team_id', IntegerType::class, [
                'label' => 'ID de l\'Équipe',
                'attr' => ['class' => 'form-admin']
            ])
            ->add('training_plan', EntityType::class, [
                'class' => TrainingPlan::class,
                'choice_label' => 'title',
                'label' => 'Plan d\'Entraînement',
                'attr' => ['class' => 'form-admin']
            ])
            ->add('session_date', DateTimeType::class, [
                'label' => 'Date et Heure de Session',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-admin']
            ])
            ->add('duration', IntegerType::class, [
                'label' => 'Durée (minutes)',
                'attr' => ['class' => 'form-admin']
            ])
            ->add('notes', TextareaType::class, [
                'label' => 'Notes',
                'required' => false,
                'attr' => ['class' => 'form-admin', 'rows' => 4]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CoachingSession::class,
        ]);
    }
}