<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MarkdownService;
use Parsedown;


class ChatGPTController extends Controller
{
    public function index()
    {
        return view("chatGPT.index");
    }

    public function ask(Request $request)
    {
        // Получение значения ключа API OpenAI из переменных среды
        $yourApiKey = env('OPENAI_API_KEY');
        if ($yourApiKey === null) {
            return response()->json(['error' => 'OPENAI_API_KEY не найден'], 500);
        }

        // Формирование запроса к OpenAI API
        $data = [
            'model' => 'gpt-4o', // Модель OpenAI
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'You are a helpful assistant.'
                ],
                [
                    'role' => 'user',
                    'content' => $request->input('message')
                ]
            ]
        ];

        // Подготовка HTTP-заголовков
        $headers = [
            'Content-Type: application/json',
            'Authorization: ' . 'Bearer ' . $yourApiKey
        ];

        // Отправка запроса
        $ch = curl_init('https://api.openai.com/v1/chat/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        try {
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                throw new \Exception(curl_error($ch));
            }
            curl_close($ch);

            $responseArray = json_decode($response, true);
            //$mark = Markdown::default()->toHTML($responseArray);
            //$parsedContent = $this->markdownService->parse($responseArray);
             
            if (isset($responseArray['error'])) {
                return response()->json(['error' => $responseArray['error']], 400);
            }

            // Возвращаем текстовое содержимое от ChatGPT
            
            //return response()->json(['content' => $responseArray['choices'][0]['message']['content']]);

            // Создайте экземпляр Parsedown
            $parsedown = new Parsedown();

            // Преобразуйте текст в HTML
            $htmlContent = $parsedown->text($responseArray['choices'][0]['message']['content']);

            // Возвращаем отформатированный ответ
            return response()->json(['content' => $htmlContent]);
   

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
