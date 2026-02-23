<?php

namespace App\Form;

use App\Entity\Tournament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TournamentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du tournoi',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Summer Cup 2024'],
                'required' => false
            ])
            ->add('game', TextType::class, [
                'label' => 'Jeu',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: League of Legends'],
                'required' => false
            ])
            ->add('startDate', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
                'attr' => ['class' => 'form-control'],
                'required' => false
            ])
            ->add('endDate', DateType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
                'attr' => ['class' => 'form-control'],
                'required' => false
            ])
            ->add('phase', TextType::class, [
                'label' => 'Phase actuelle',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Groupe, Finale'],
                'required' => false
            ])
            ->add('organizerId', IntegerType::class, [
                'label' => 'ID de l\'organisateur',
                'attr' => ['class' => 'form-control'],
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tournament::class,
            'attr' => ['novalidate' => 'novalidate']
        ]);
    }
}
