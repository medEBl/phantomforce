<?php

namespace App\Form;

use App\Entity\Team;
use App\Entity\User;
use App\Entity\Agent;
use App\Repository\UserRepository;
use App\Repository\AgentRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de l\'équipe',
                'attr' => [
                    'placeholder' => 'Entrez le nom de l\'équipe',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est obligatoire'])
                ]
            ])
            ->add('game', TextType::class, [
                'label' => 'Jeu principal',
                'attr' => [
                    'placeholder' => 'Ex: League of Legends, Valorant...',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le jeu est obligatoire'])
                ]
            ])
            ->add('creation_date', DateTimeType::class, [
                'label' => 'Date de création',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La date est obligatoire'])
                ]
            ])
            ->add('coach', EntityType::class, [
                'class' => User::class,
                'label' => 'Coach de l\'équipe',
                'choice_label' => function(User $user) {
                    return $user->getUsername() . ' (' . $user->getEmail() . ')';
                },
                'query_builder' => function (UserRepository $userRepository) {
                    return $userRepository->createQueryBuilder('u')
                        ->where('u.role = :role')
                        ->setParameter('role', 'COACH')
                        ->orderBy('u.username', 'ASC');
                },
                'placeholder' => 'Sélectionnez un coach',
                'attr' => [
                    'class' => 'form-control select2'
                ],
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Le coach est obligatoire'])
                ]
            ])
            // Ajout du champ pour sélectionner les membres (agents)
            ->add('members', EntityType::class, [
                'class' => Agent::class,
                'label' => 'Membres de l\'équipe',
                'choice_label' => function(Agent $agent) {
                    return $agent->getPseudo() . ' - Rang: ' . $agent->getRank();
                },
                'query_builder' => function (AgentRepository $agentRepository) {
                    return $agentRepository->createQueryBuilder('a')
                        ->orderBy('a.pseudo', 'ASC');
                },
                'multiple' => true,        // Permet la sélection multiple
                'expanded' => false,       // false = select multiple, true = checkboxes
                'attr' => [
                    'class' => 'form-control select2-multiple',
                    'size' => 10,           // Affiche 10 options à la fois
                    'data-placeholder' => 'Sélectionnez les membres'
                ],
                'required' => false,
                'help' => 'Maintenez Ctrl (ou Cmd) pour sélectionner plusieurs membres'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
        ]);
    }
}