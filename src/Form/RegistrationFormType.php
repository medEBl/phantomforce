<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'COMBAT EMAIL',
                'attr' => ['placeholder' => 'warrior@arena-x.io']
            ])
            ->add('username', TextType::class, [
                'label' => 'CALL SIGN',
                'attr' => ['placeholder' => 'Enter your warrior name']
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'ACCESS CODE',
                    'attr' => ['placeholder' => 'Minimum 8 characters']
                ],
                'second_options' => [
                    'label' => 'CONFIRM CODE',
                    'attr' => ['placeholder' => 'Repeat access code']
                ],
                'invalid_message' => 'The password fields must match.',
                'mapped' => false,
            ])
            ->add('fullName', TextType::class, [
                'label' => 'FULL DESIGNATION',
                'attr' => ['placeholder' => 'John "Reaper" Smith']
            ])
            ->add('country', TextType::class, [
                'label' => 'OPERATION ZONE',
                'attr' => ['placeholder' => 'Country of origin']
            ])
            ->add('birthDate', DateType::class, [
                'label' => 'ACTIVATION DATE',
                'widget' => 'single_text',
                'years' => range(date('Y') - 100, date('Y')),
            ])
            ->add('role', ChoiceType::class, [
                'label' => 'COMBAT ROLE',
                'choices' => [
                    'Player' => 'PLAYER',
                    'Admin' => 'ADMIN',
                    'Coach' => 'COACH',
                    'Organizer' => 'ORGANIZER',
                ],
                'placeholder' => 'Choose your role',
            ])
            ->add('profilePhoto', FileType::class, [
                'label' => 'PROFILE PHOTO (OPTIONAL)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File(maxSize: '5M')
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}