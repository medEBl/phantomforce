<?php

namespace App\Form;

use App\Entity\CoachingSession;
use App\Entity\User;
use App\Entity\Team;
use App\Entity\TrainingPlan;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CoachingSessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('coach', EntityType::class, [
                'class' => User::class,
                'choice_label' => function(User $user) {
                    return $user->getFullName() . ' (@' . $user->getUsername() . ')';
                },
                'placeholder' => 'Sélectionnez un coach',
                'attr' => ['class' => 'form-control'],
                'label' => 'Coach',
                'required' => true,
                'query_builder' => function ($repository) {
                    return $repository->createQueryBuilder('u')
                        ->where('u.role = :role')
                        ->setParameter('role', 'COACH')
                        ->orderBy('u.fullName', 'ASC');
                },
            ])
            ->add('team', EntityType::class, [
                'class' => Team::class,
                'choice_label' => function(Team $team) {
                    return $team->getName() . ' (' . $team->getGame() . ')';
                },
                'placeholder' => 'Sélectionnez une équipe',
                'attr' => ['class' => 'form-control'],
                'label' => 'Équipe',
                'required' => true,
                'query_builder' => function ($repository) {
                    return $repository->createQueryBuilder('t')
                        ->orderBy('t.name', 'ASC');
                },
            ])
            ->add('training_plan', EntityType::class, [
                'class' => TrainingPlan::class,
                'choice_label' => function(TrainingPlan $plan) {
                    return $plan->getTitle() . ' (' . $plan->getFocusArea() . ')';
                },
                'placeholder' => 'Sélectionnez un plan d\'entraînement',
                'attr' => ['class' => 'form-control'],
                'label' => 'Plan d\'entraînement',
                'required' => true,
                'query_builder' => function ($repository) {
                    return $repository->createQueryBuilder('tp')
                        ->orderBy('tp.title', 'ASC');
                },
            ])
            ->add('session_date', DateTimeType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'min' => (new \DateTime())->format('Y-m-d\TH:i')
                ],
                'label' => 'Date et heure de la session',
                'required' => true,
            ])
            ->add('duration', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Durée en minutes',
                    'min' => 15,
                    'max' => 480,
                    'step' => 15
                ],
                'label' => 'Durée (minutes)',
                'required' => true,
            ])
            ->add('notes', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Notes, objectifs, points à travailler...',
                    'rows' => 6
                ],
                'label' => 'Notes',
                'required' => false,
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