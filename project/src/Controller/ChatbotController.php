<?php
// src/Controller/ChatbotController.php

namespace App\Controller;

use App\Service\ChatbotService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/chatbot')]
class ChatbotController extends AbstractController
{
    #[Route('/ask', name: 'app_chatbot_ask', methods: ['POST'])]
    public function ask(Request $request, ChatbotService $chatbot): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $message = $data['message'] ?? '';
        
        if (empty($message)) {
            return $this->json([
                'success' => false,
                'message' => 'Message vide'
            ], 400);
        }
        
        $response = $chatbot->ask($message);
        
        return $this->json($response);
    }
    
    #[Route('/suggestions', name: 'app_chatbot_suggestions', methods: ['GET'])]
    public function suggestions(ChatbotService $chatbot): JsonResponse
    {
        return $this->json([
            'suggestions' => $chatbot->getSuggestions()
        ]);
    }
}