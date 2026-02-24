<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\LuxandFaceAuthService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class FaceAuthController extends AbstractController
{
    #[Route('/face-auth', name: 'app_face_auth')]
    public function index(): Response
    {
        return $this->render('face/face_auth.html.twig');
    }
    
    #[Route('/face-login', name: 'app_face_login_page')]
    public function faceLogin(): Response
    {
        // If already logged in, redirect to home
        if ($this->getUser()) {
            return $this->redirectToRoute('app_acceuil');
        }
        
        return $this->render('face/face_auth.html.twig', [
            'login_mode' => true
        ]);
    }
    
    #[Route('/face-login/callback', name: 'app_face_login_callback')]
    public function faceLoginCallback(Request $request, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher): Response
    {
        $userId = $request->query->get('user_id');
        $confidence = $request->query->get('confidence');
        
        if (!$userId) {
            $this->addFlash('error', 'Face authentication failed: No user ID provided');
            return $this->redirectToRoute('app_login');
        }
        
        // Find the user by ID
        $user = $em->getRepository(User::class)->find($userId);
        
        if (!$user) {
            $this->addFlash('error', 'Face authentication failed: User not found');
            return $this->redirectToRoute('app_login');
        }
        
        // Check if user is active
        if (!$user->isActive()) {
            $this->addFlash('error', 'Your account is disabled');
            return $this->redirectToRoute('app_login');
        }
        
        try {
            // Log the user in manually
            $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
            $this->container->get('security.token_storage')->setToken($token);
            
            // Fire login event
            $event = new InteractiveLoginEvent($request, $token);
            $eventDispatcher->dispatch($event);
            
            // Set session
            $request->getSession()->set('_security_main', serialize($token));
            
            // Update last login time
            $user->setLastLoginAt(new \DateTime());
            $em->flush();
            
            $this->addFlash('success', sprintf(
                '✅ Face authentication successful! Welcome back %s (%.1f%% confidence)',
                $user->getUsername(),
                floatval($confidence) * 100
            ));
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Login error: ' . $e->getMessage());
            return $this->redirectToRoute('app_login');
        }
        
        return $this->redirectToRoute('app_acceuil');
    }
}