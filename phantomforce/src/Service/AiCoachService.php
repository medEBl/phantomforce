<?php

namespace App\Service;

use OpenAI;

class AiCoachService
{
    private $client;

    public function __construct()
    {
        $this->client = OpenAI::client($_ENV['OPENAI_API_KEY']);
    }

    public function generateTrainingPlan($goal, $level, $availability)
    {
        $prompt = "
        Create a 4-week structured training plan.
        Goal: $goal
        Level: $level
        Availability per week: $availability
        Include exercises, sets, reps and progression.
        ";

        $response = $this->client->chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a professional fitness coach.'],
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        return $response->choices[0]->message->content;
    }
}