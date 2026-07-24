<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ChatService;

class ChatController extends Controller
{
    
    public function __construct(
        protected ChatService $chatService
    
    ) {

    }


    public function index() {

        return view('chat.index');
    }

    public function sendMessage(Request $request){

        $validate = $request->validate([
            'message' => 'required | string | max:5000',
        ]);

        $response = $this->chatService->sendMessage(
            $validate['message']
        );

        return response()->json([
            'success'=> true,
            'response' => $response,
        ]);
    }
}
