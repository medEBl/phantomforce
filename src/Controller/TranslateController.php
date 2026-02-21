<?php

namespace App\Controller;

use App\Service\GoogleTranslator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TranslateController extends AbstractController
{
    // 1. This is the route the UI buttons will use to switch the whole site's language
    #[Route('/change-language/{lang}', name: 'app_change_language')]
    public function changeLanguage(string $lang, RequestStack $requestStack, Request $request): Response
    {
        // Store the chosen language ('en' or 'fr') in the session
        if (in_array($lang, ['en', 'fr'])) {
            $requestStack->getSession()->set('lang', $lang);
        }

        // Send the user right back to the page they were just looking at
        $referer = $request->headers->get('referer');
        return $this->redirect($referer ?: $this->generateUrl('app_home'));
    }

    // 2. You can keep your original test route if you still want to test the service directly!
    #[Route('/translate-test', name: 'app_translate_test')]
    public function translateTest(GoogleTranslator $translator): Response
    {
        $translatedText = $translator->translate('Hello world', 'fr');
        return new Response("Original: Hello world <br> Translated: " . $translatedText);
    }
}