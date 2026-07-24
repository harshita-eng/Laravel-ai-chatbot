<?php

namespace App\Services;

use App\Contracts\AIServiceInterface;

class ChatService 
{
    
    public function __construct(
        protected AIServiceInterface $aiService
    ) {
    }

    /*
        Handle chat message 
    */

    public function SendMessage(string $message) : string 
    {
        return $this->aiService->generateResponse($message);
    }
}
