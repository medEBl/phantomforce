<?php
namespace App\Security;

use Symfony\Component\HttpFoundation\RequestStack;

class RecaptchaValidator
{
    private string $secretKey;
    private RequestStack $requestStack;

    public function __construct(string $secretKey, RequestStack $requestStack)
    {
        $this->secretKey = $secretKey;
        $this->requestStack = $requestStack;
    }

    public function validate(): bool
    {
        $request = $this->requestStack->getCurrentRequest();
        $token = $request->request->get('g-recaptcha-response');

        if (!$token) {
            return false;
        }

        $response = file_get_contents(
            'https://www.google.com/recaptcha/api/siteverify?' . http_build_query([
                'secret' => $this->secretKey,
                'response' => $token,
                'remoteip' => $request->getClientIp()
            ])
        );

        $result = json_decode($response, true);

        return $result['success'] ?? false;
    }
}
