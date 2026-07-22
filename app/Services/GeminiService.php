<?php

namespace App\Services;

use App\Contracts\AIServiceInterface;

class GeminiService implements AIServiceInterface
{
    
    public function generateResponse(string $prompt) : string 
    {
        return "Fake Gemini response" . $prompt;
    }
}
