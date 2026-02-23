<?php
// src/Form/TrainingPlanType.php

namespace App\Form;

use App\Entity\TrainingPlan;
use App\Entity\User;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;

class TrainingPlanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Titre du plan d\'entraînement'
                ],
                'label' => 'Titre',
                'required' => true,
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Description détaillée du plan...',
                    'rows' => 5
                ],
                'label' => 'Description',
                'required' => true,
            ])
            ->add('focus_area', ChoiceType::class, [
                'choices' => [
                    'Défense' => 'Défense',
                    'Attaque' => 'Attaque',
                    'Stratégie' => 'Stratégie',
                    'Communication' => 'Communication',
                    'Technique' => 'Technique',
                    'Physique' => 'Physique',
                    'Mental' => 'Mental',
                    'Tactique' => 'Tactique',
                ],
                'attr' => ['class' => 'form-control'],
                'label' => 'Zone de focus',
                'placeholder' => 'Sélectionnez une zone de focus',
                'required' => true,
            ])
            ->add('difficulty_level', ChoiceType::class, [
                'choices' => [
                    'Débutant' => 'Débutant',
                    'Intermédiaire' => 'Intermédiaire',
                    'Avancé' => 'Avancé',
                    'Expert' => 'Expert',
                    'Professionnel' => 'Professionnel',
                ],
                'attr' => ['class' => 'form-control'],
                'label' => 'Niveau de difficulté',
                'placeholder' => 'Sélectionnez un niveau',
                'required' => true,
            ])
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
            ->add('created_at', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'max' => (new \DateTime())->format('Y-m-d')
                ],
                'label' => 'Date de création',
                'required' => true,
            ]);

        // Ajouter un transformer pour convertir DateTime en DateTimeImmutable
        $builder->get('created_at')
            ->addModelTransformer(new CallbackTransformer(
                // Transformer de DateTimeImmutable vers DateTime pour l'affichage
                function ($dateTimeImmutable) {
                    if ($dateTimeImmutable === null) {
                        return null;
                    }
                    return \DateTime::createFromImmutable($dateTimeImmutable);
                },
                // Transformer de DateTime vers DateTimeImmutable pour l'entité
                function ($dateTime) {
                    if ($dateTime === null) {
                        return null;
                    }
                    if ($dateTime instanceof \DateTimeImmutable) {
                        return $dateTime;
                    }
                    return \DateTimeImmutable::createFromMutable($dateTime);
                }
            ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TrainingPlan::class,
        ]);
    }
}