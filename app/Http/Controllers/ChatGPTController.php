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
        // Получение значения ключа API OpenAI из переменных среды или конфига
        $yourApiKey = getenv('OPENAI_API_KEY') ?: getenv('OPENAI_API_KEY_FILE');
        if ($yourApiKey === null) {
            return response()->json(['error' => 'OPENAI_API_KEY не найден']);
        }

        // Данные для отправки в POST-запросе
        $data = json_encode([
            'model' => 'gpt-4o-mini',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'You extract email addresses into JSON data.'
                ],
                [
                    'role' => 'user',
                    'content' => $request->input('message')
                ]
            ],
            'response_format' => [
                'type' => 'json_schema',
                'json_schema' => [
                    'name' => 'email_schema',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'email' => [
                                'description' => 'The email address that appears in the input',
                                'type' => 'string'
                            ]
                        ],
                        'additionalProperties' => false
                    ]
                ]
            ]
        ]);

        // Подготовка HTTP-заголовков
        $headers = [
            'Content-Type: application/json',
            'Authorization: ' . 'Bearer ' . $yourApiKey
        ];

        // Отправка запроса
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        try {
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                throw new \Exception(curl_error($ch));
            }
            curl_close($ch);

            // Преобразование ответа в массив
            $responseArray = json_decode($response, true);

            // Проверяем наличие ошибок в ответе
            if (isset($responseArray['error'])) {
                return response()->json(['error' => $responseArray['error']], 400); // Возвращаем ошибку в формате JSON
            }

            // Выводим ответ
            return response()->json($responseArray);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500); // Возвращаем ошибку на стороне сервера
        }
    }
}
