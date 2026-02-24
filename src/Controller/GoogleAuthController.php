<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use League\OAuth2\Client\Provider\Google;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use App\Security\LoginFormAuthenticator;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class GoogleAuthController extends AbstractController
{
    private Google $googleProvider;

    public function __construct()
    {
        $this->googleProvider = new Google([
            'clientId'     => $_ENV['GOOGLE_CLIENT_ID'],
            'clientSecret' => $_ENV['GOOGLE_CLIENT_SECRET'],
            'redirectUri'  => $_ENV['GOOGLE_REDIRECT_URI'],
        ]);
    }

    public function connect(): Response
    {
        $authUrl = $this->googleProvider->getAuthorizationUrl([
            'scope' => ['email', 'profile']
        ]);

        return $this->redirect($authUrl);
    }

    public function check(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
        UserAuthenticatorInterface $authenticator,
        LoginFormAuthenticator $formAuthenticator
    ): Response {
        if (!$request->query->has('code')) {
            $this->addFlash('error', 'Google authentication failed.');
            return $this->redirectToRoute('app_login');
        }

        try {
            $token = $this->googleProvider->getAccessToken('authorization_code', [
                'code' => $request->query->get('code')
            ]);

            $googleUser = $this->googleProvider->getResourceOwner($token);

            // Check if user already exists with Google ID
            $user = $em->getRepository(User::class)->findOneBy(['googleId' => $googleUser->getId()]);

            if (!$user) {
                // Check if user exists with the same email
                $user = $em->getRepository(User::class)->findOneBy(['email' => $googleUser->getEmail()]);
                
                if ($user) {
                    // Link existing account to Google
                    $user->setGoogleId($googleUser->getId());
                    $user->setGoogleAccessToken($token->getToken());
                    $user->setGoogleRefreshToken($token->getRefreshToken());
                } else {
                    // Create new user
                    $user = new User();
                    $user->setEmail($googleUser->getEmail());
                    $user->setUsername($googleUser->getEmail()); // Use email as username initially
                    $user->setFullName($googleUser->getName());
                    $user->setGoogleId($googleUser->getId());
                    $user->setGoogleAccessToken($token->getToken());
                    $user->setGoogleRefreshToken($token->getRefreshToken());
                    
                    // Set a random password for Google users
                    $randomPassword = bin2hex(random_bytes(16));
                    $user->setPassword(
                        $passwordHasher->hashPassword($user, $randomPassword)
                    );
                    
                    // Set default values - you might want to modify these
                    $user->setCountry('Unknown');
                    $user->setBirthDate(new \DateTime('1990-01-01'));
                    $user->setRole('USER');
                    $user->setIsActive(true);
                }
            } else {
                // Update tokens for existing Google user
                $user->setGoogleAccessToken($token->getToken());
                $user->setGoogleRefreshToken($token->getRefreshToken());
            }

            $user->setLastLoginAt(new \DateTime());
            $em->persist($user);
            $em->flush();

            // Authenticate the user
            $authenticator->authenticateUser($user, $formAuthenticator, $request);

            $this->addFlash('success', 'Successfully connected with Google!');

            return $this->redirectToRoute('app_acceuil');

        } catch (\Exception $e) {
            $this->addFlash('error', 'Google authentication failed: ' . $e->getMessage());
            return $this->redirectToRoute('app_login');
        }
    }
}
