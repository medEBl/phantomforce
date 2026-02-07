<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $em): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the plain password from the form
            $plainPassword = $form->get('plainPassword')->getData();
            
            // Encode the plain password
            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $plainPassword
                )
            );

            // Set the role from the form (important!)
            $role = $form->get('role')->getData();
            if ($role) {
                $user->setRole($role);
            }

            // Set default values
            $user->setIsActive(true);
            $user->setCreatedAt(new \DateTimeImmutable());
            
            // Save user
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Registration successful! You can now login.');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}