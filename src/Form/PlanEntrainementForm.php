<?php
// src/Form/PlanEntrainementForm.php

namespace App\Form;

use App\Entity\TrainingPlan;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class PlanEntrainementForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre du plan',
                'attr' => ['class' => 'form-admin']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-admin', 'rows' => 5]
            ])
            ->add('focus_area', ChoiceType::class, [
                'label' => 'Zone de focus',
                'choices' => [
                    'Défense' => 'Défense',
                    'Attaque' => 'Attaque',
                    'Stratégie' => 'Stratégie',
                    'Communication' => 'Communication',
                    'Technique' => 'Technique',
                    'Physique' => 'Physique',
                    'Mental' => 'Mental',
                    'Tactique' => 'Tactique'
                ],
                'attr' => ['class' => 'form-admin']
            ])
            ->add('difficulty_level', ChoiceType::class, [
                'label' => 'Niveau de difficulté',
                'choices' => [
                    'Débutant' => 'Débutant',
                    'Intermédiaire' => 'Intermédiaire',
                    'Avancé' => 'Avancé',
                    'Expert' => 'Expert',
                    'Professionnel' => 'Professionnel'
                ],
                'attr' => ['class' => 'form-admin']
            ])
            ->add('coach_id', IntegerType::class, [
                'label' => 'ID du Coach',
                'attr' => ['class' => 'form-admin']
            ])
            ->add('created_at', DateTimeType::class, [
                'label' => 'Date de création',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-admin']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TrainingPlan::class,
        ]);
    }
}