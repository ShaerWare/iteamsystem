<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ChatGPTController extends Controller
{
    public function index()
    {
        return view("chatGPT/index");
    }

    public function ask(Request $request)
    {
        $result = OpenAI::completions()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => 'Hello!'],
            ],
        ]);
dd($result);
        echo $result->choices[0]->message->content;
    }
}
