<?php

namespace App\Form;

use App\Entity\Registration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('teamName', TextType::class, [
                'label' => 'Nom de l\'équipe',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Team Liquid'],
            ])
            ->add('contactEmail', EmailType::class, [
                'label' => 'Email de contact',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: contact@team.com'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Registration::class,
        ]);
    }
}
