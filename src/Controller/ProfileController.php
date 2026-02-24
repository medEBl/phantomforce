<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfilePhotoType;
use App\Service\CloudinaryUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/profile')]
#[IsGranted('IS_AUTHENTICATED_FULLY')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'app_profile')]
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        return $this->render('profile/index.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/photo/change', name: 'app_profile_photo_change')]
    public function changePhoto(
        Request $request,
        EntityManagerInterface $em,
        CloudinaryUploader $cloudinaryUploader
    ): Response {
        /** @var User $user */
        $user = $this->getUser();
        
        $form = $this->createForm(ProfilePhotoType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photo')->getData();

            try {
                // Delete old photo if exists
                if ($user->getProfilePhotoPublicId()) {
                    try {
                        $cloudinaryUploader->delete($user->getProfilePhotoPublicId());
                    } catch (\Exception $e) {
                        // Log error but continue
                    }
                }

                // Upload new photo
                $publicId = 'user_' . $user->getId() . '_' . time();
                $result = $cloudinaryUploader->upload($photoFile, [
                    'public_id' => $publicId,
                    'folder' => 'phantomforce/profiles',
                ]);

                $user->setProfilePhotoUrl($result['secure_url']);
                $user->setProfilePhotoPublicId($result['public_id']);
                
                $em->flush();

                $this->addFlash('success', 'Profile photo updated successfully!');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Error uploading photo: ' . $e->getMessage());
            }

            return $this->redirectToRoute('app_profile');
        }

        return $this->render('profile/change_photo.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/photo/remove', name: 'app_profile_photo_remove', methods: ['POST'])]
    public function removePhoto(
        EntityManagerInterface $em,
        CloudinaryUploader $cloudinaryUploader
    ): Response {
        /** @var User $user */
        $user = $this->getUser();

        if ($user->getProfilePhotoPublicId()) {
            try {
                $cloudinaryUploader->delete($user->getProfilePhotoPublicId());
            } catch (\Exception $e) {
                // Log error
            }
        }

        $user->setProfilePhotoUrl(null);
        $user->setProfilePhotoPublicId(null);
        $em->flush();

        $this->addFlash('success', 'Profile photo removed.');
        return $this->redirectToRoute('app_profile');
    }
}