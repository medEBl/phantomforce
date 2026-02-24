<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Service\CloudinaryUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(
        Request $request, 
        UserPasswordHasherInterface $passwordHasher, 
        EntityManagerInterface $em,
        CloudinaryUploader $cloudinaryUploader
    ): Response {
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

            // Set the role from the form
            $role = $form->get('role')->getData();
            if ($role) {
                $user->setRole($role);
            }

            // Handle profile photo upload
            $profilePhoto = $form->get('profilePhoto')->getData();
            if ($profilePhoto) {
                try {
                    // Generate unique public ID
                    $publicId = 'user_' . uniqid() . '_' . time();
                    
                    // Upload to Cloudinary
                    $result = $cloudinaryUploader->upload($profilePhoto, [
                        'public_id' => $publicId,
                        'folder' => 'phantomforce/profiles',
                        'transformation' => [
                            'width' => 300,
                            'height' => 300,
                            'crop' => 'fill',
                            'gravity' => 'face'
                        ]
                    ]);
                    
                    // Save the Cloudinary URL and public ID
                    $user->setProfilePhotoUrl($result['secure_url']);
                    $user->setProfilePhotoPublicId($result['public_id']);
                    
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Photo upload failed: ' . $e->getMessage());
                }
            }

            // Set default values
            $user->setIsActive(true);
            $user->setCreatedAt(new \DateTimeImmutable());
            
            // Save user
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Enlistment successful! You can now login.');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}