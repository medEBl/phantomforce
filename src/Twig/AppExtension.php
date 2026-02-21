<?php

namespace App\Twig;

use App\Service\GoogleTranslator;
use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    private $translator;
    private $requestStack;

    // Inject RequestStack to access the Session
    public function __construct(GoogleTranslator $translator, RequestStack $requestStack)
    {
        $this->translator = $translator;
        $this->requestStack = $requestStack;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('gtrans', [$this, 'translateText']),
        ];
    }

public function translateText(string $text, string $targetLang = null): string
    {
        // 1. Get language from Session
        if ($targetLang === null) {
            $session = $this->requestStack->getSession();
            $targetLang = $session->get('lang', 'fr');
        }

        // 2. If target is French, just return the text! 
        // (Make sure this says 'fr' and NOT 'en'!)
        if (empty($text) || $targetLang === 'fr') { 
            return $text;
        }

        // 3. ⚠️ REMOVED TRY/CATCH! ⚠️
        // Now if Google fails, the site will crash and tell us exactly why.
        return $this->translator->translate($text, $targetLang);
    }
}