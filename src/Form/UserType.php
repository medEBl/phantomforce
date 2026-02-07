<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bundle\SecurityBundle\Security;

class UserType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isAdmin = $this->security->isGranted('ROLE_ADMIN');
        
        $builder
            ->add('email', EmailType::class, [
                'disabled' => !$isAdmin,
            ])
            ->add('username', TextType::class)
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Password (leave blank to keep current)',
                'required' => false,
                'mapped' => false,
            ])
            ->add('fullName', TextType::class)
            ->add('country', TextType::class)
            ->add('birthDate', DateType::class, [
                'widget' => 'single_text',
                'years' => range(date('Y') - 100, date('Y')),
            ]);
        
        // Only admin can change role and achievement points
        if ($isAdmin) {
            $builder
                ->add('role', ChoiceType::class, [
                    'choices' => [
                        'Player' => 'PLAYER',
                        'Admin' => 'ADMIN',
                        'Coach' => 'COACH',
                        'Organizer' => 'ORGANIZER',
                    ],
                ])
                ->add('achievementPoints', IntegerType::class, [
                    'required' => false,
                ])
                ->add('isActive', CheckboxType::class, [
                    'required' => false,
                    'label' => 'Is Active',
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}