<?php

namespace App\Form;

use App\Entity\Matchy;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class MatchyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('game', ChoiceType::class, [
                'label' => 'Jeu du match',
                'choices' => [
                    'VALORANT' => 'VALORANT',
                    'LEAGUE OF LEGENDS' => 'LEAGUE OF LEGENDS',
                    'COUNTER-STRIKE 2' => 'COUNTER-STRIKE 2',
                    'DOTA 2' => 'DOTA 2',
                    'OVERWATCH 2' => 'OVERWATCH 2',
                    'RAINBOW SIX SIEGE' => 'RAINBOW SIX SIEGE',
                    'ROCKET LEAGUE' => 'ROCKET LEAGUE',
                    'FORTNITE' => 'FORTNITE',
                ],
                'placeholder' => 'Sélectionnez un jeu',
                'attr' => [
                    'class' => 'form-select'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un jeu'])
                ]
            ])
            
            ->add('match_date', DateTimeType::class, [
                'label' => 'Date du match',
                'widget' => 'single_text',
                'html5' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'JJ/MM/AAAA HH:MM'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez spécifier une date'])
                ]
            ])
            
            ->add('team1', EntityType::class, [
                'class' => Team::class,
                'label' => 'Équipe 1',
                'choice_label' => function(Team $team) {
                    return $team->getName() . ' (' . $team->getGame() . ')';
                },
                'placeholder' => 'Sélectionnez l\'équipe 1',
                'attr' => [
                    'class' => 'form-select'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner l\'équipe 1'])
                ]
            ])
            
            ->add('team2', EntityType::class, [
                'class' => Team::class,
                'label' => 'Équipe 2',
                'choice_label' => function(Team $team) {
                    return $team->getName() . ' (' . $team->getGame() . ')';
                },
                'placeholder' => 'Sélectionnez l\'équipe 2',
                'attr' => [
                    'class' => 'form-select'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner l\'équipe 2'])
                ]
            ])
            
            ->add('score_team1', NumberType::class, [
                'label' => 'Score équipe 1',
                'required' => false,
                'attr' => [
                    'class' => 'score-input',
                    'placeholder' => '0',
                    'min' => 0,
                    'max' => 999
                ],
                'constraints' => [
                    new Range([
                        'min' => 0,
                        'max' => 999,
                        'notInRangeMessage' => 'Le score doit être entre {{ min }} et {{ max }}'
                    ])
                ]
            ])
            
            ->add('score_team2', NumberType::class, [
                'label' => 'Score équipe 2',
                'required' => false,
                'attr' => [
                    'class' => 'score-input',
                    'placeholder' => '0',
                    'min' => 0,
                    'max' => 999
                ],
                'constraints' => [
                    new Range([
                        'min' => 0,
                        'max' => 999,
                        'notInRangeMessage' => 'Le score doit être entre {{ min }} et {{ max }}'
                    ])
                ]
            ])
            
            ->add('status', ChoiceType::class, [
                'label' => 'Statut du match',
                'choices' => [
                    'Programmé' => 'planned',
                    'En cours' => 'ongoing',
                    'Terminé' => 'finished',
                    'Annulé' => 'cancelled'
                ],
                'placeholder' => 'Sélectionnez un statut',
                'attr' => [
                    'class' => 'form-select'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un statut'])
                ]
            ])
            
            ->add('winner_team', EntityType::class, [
                'class' => Team::class,
                'label' => 'Équipe gagnante',
                'choice_label' => 'name',
                'placeholder' => 'Sélectionnez le gagnant (optionnel)',
                'required' => false,
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            
            // NOUVEAUX CHAMPS POUR LA LOCALISATION
            ->add('location', TextType::class, [
                'label' => 'Adresse / Lieu du match',
                'required' => false,
                'attr' => [
                    'class' => 'location-input',
                    'placeholder' => 'Ex: Accor Arena, 8 Boulevard de Bercy, 75012 Paris'
                ]
            ])
            
            ->add('latitude', NumberType::class, [
                'label' => 'Latitude',
                'required' => false,
                'scale' => 6,
                'attr' => [
                    'class' => 'location-input',
                    'placeholder' => 'Ex: 48.8381',
                    'step' => '0.000001'
                ],
                'constraints' => [
                    new Range([
                        'min' => -90,
                        'max' => 90,
                        'notInRangeMessage' => 'La latitude doit être comprise entre -90 et 90'
                    ])
                ]
            ])
            
            ->add('longitude', NumberType::class, [
                'label' => 'Longitude',
                'required' => false,
                'scale' => 6,
                'attr' => [
                    'class' => 'location-input',
                    'placeholder' => 'Ex: 2.3785',
                    'step' => '0.000001'
                ],
                'constraints' => [
                    new Range([
                        'min' => -180,
                        'max' => 180,
                        'notInRangeMessage' => 'La longitude doit être comprise entre -180 et 180'
                    ])
                ]
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