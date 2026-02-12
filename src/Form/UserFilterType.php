<?php
// src/Form/UserFilterType.php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('search', TextType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Search by email, username, or name...',
                    'class' => 'form-control',
                ],
                'label' => false,
            ])
            ->add('role', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'All Roles' => 'all',
                    'User' => 'user',
                    'Admin' => 'admin',
                    'Moderator' => 'moderator',
                    'Coach' => 'coach',
                    'Player' => 'player',
                ],
                'attr' => ['class' => 'form-select'],
                'label' => 'Role',
            ])
            ->add('status', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'All Status' => 'all',
                    'Active' => 'active',
                    'Inactive' => 'inactive',
                ],
                'attr' => ['class' => 'form-select'],
                'label' => 'Status',
            ])
            ->add('country', ChoiceType::class, [
                'required' => false,
                'choices' => $this->getCountriesChoices($options['countries']),
                'attr' => ['class' => 'form-select'],
                'label' => 'Country',
            ])
            ->add('startDate', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control datepicker'],
                'label' => 'From Date',
            ])
            ->add('endDate', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control datepicker'],
                'label' => 'To Date',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'method' => 'GET',
            'csrf_protection' => false,
            'countries' => [],
        ]);
    }

    private function getCountriesChoices(array $countries): array
    {
        $choices = ['All Countries' => 'all'];
        foreach ($countries as $country) {
            $choices[$country] = $country;
        }
        return $choices;
    }
}