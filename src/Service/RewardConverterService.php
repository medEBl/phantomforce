<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class RewardConverterService
{
    public function __construct(
        private HttpClientInterface $httpClient
    ) {
    }

    /**
     * This is a mock integration of an API to convert reward values.
     * In a real scenario, this could fetch exchange rates from a crypto or currency API.
     */
    public function convertRewardValue(string $value, string $targetCurrency = 'EUR'): string
    {
        // Mocking an external API call
        // $response = $this->httpClient->request('GET', 'https://api.exchangerate.host/latest?base=USD');

        if (str_contains($value, '$')) {
            $numeric = (float) str_replace('$', '', $value);
            return round($numeric * 0.92, 2) . ' €';
        }

        return $value;
    }
}
