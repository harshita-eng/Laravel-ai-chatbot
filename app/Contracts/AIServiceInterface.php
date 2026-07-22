<?php

namespace App\Contracts;

interface AIServiceInterface {

    /*
        send a prompt to ai provider
    */ 

    public function generateResponse(string $prompt) : string; 
}


