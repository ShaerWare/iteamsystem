<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGPT-like Interface</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .chat-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .chat-box {
            height: 80vh;
            overflow-y: scroll;
            padding: 20px;
        }

        .chat-input-container {
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <div class="container chat-container">
        <div class="chat-box border">
            <!-- Messages will be displayed here -->
        </div>

        <div class="chat-input-container">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type your message here..." aria-label="Message input">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">Send</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            const $sendButton = $('.btn-primary');
            const $inputField = $('.form-control');
            const $chatBox = $('.chat-box');

            $sendButton.on('click', function(event) {
                // Предотвращаем стандартное поведение формы (если используется)
                event.preventDefault();

                const messageContent = $inputField.val();

                // Если сообщение пустое, не отправляем запрос
                if (!messageContent) return;

                // Добавляем сообщение пользователя в чат
                $chatBox.append(`<p><strong>User:</strong> ${messageContent}</p>`);

                // Отправляем запрос на сервер
                $.ajax({
                    url: '{{ route('get_chat') }}',
                    method: 'POST',
                    data: {
                        message: messageContent
                    },
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'json',
                    success: function(data) {
                        // Добавляем ответ ChatGPT в чат
                        if (data && data.content) {
                            $chatBox.append(`<p><strong>ChatGPT:</strong> ${data.content}</p>`);
                        }

                        // Прокручиваем до последнего сообщения
                        $chatBox.scrollTop($chatBox[0].scrollHeight);

                        // Очищаем поле ввода
                        $inputField.val('');
                    },
                    error: function(xhr) {
                        // Обрабатываем ошибки
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            const errorMessage = xhr.responseJSON.error.message || 'An error occurred';
                            $chatBox.append(`<p><strong>Error:</strong> ${errorMessage}</p>`);
                        } else {
                            $chatBox.append(`<p><strong>Error:</strong> Something went wrong.</p>`);
                        }

                        // Прокручиваем до последнего сообщения
                        $chatBox.scrollTop($chatBox[0].scrollHeight);
                    }
                });
            });
        });
    </script>
</body>
</html>
