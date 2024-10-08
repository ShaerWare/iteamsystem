<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Interface</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Подключаем Font Awesome для иконок -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .chat-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .chat-box {
            flex-grow: 1;
            height: 80vh;
            overflow-y: auto;
            padding: 0px;
            margin-top: 15px; 
            display: flex;
            flex-direction: column;
        }

        .chat-input-container {
            padding: 10px 0px;
            padding-bottom: 0px;

        }

        .chat-message {
            margin-bottom: 10px;
        }

        .chat-message strong {
            display: block;
        }

        /* Сообщения от пользователя (вопросы) */
        .chat-message.user {
            background-color: #ebebeb;
            padding: 10px;
            border-radius: 10px;
            width: 100%;
            align-self: flex-end;
            text-align: left;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Текст вопроса с сокращением до одной строки */
        .text-content {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 85%;
        }

        /* Иконки для "Развернуть" и "Свернуть" */
        .expand-btn {
            cursor: pointer;
            color: blue;
            background: none;
            border: none;
            padding: 0;
            font-size: 20px;
            display: none; /* По умолчанию скрыта */
        }

        /* Сообщения от бота (ответы) */
        .chat-message.bot {
            width: 100%;
            align-self: flex-start;
            border: none;
            background-color: transparent;
        }

        textarea.form-control {
            resize: none;
            overflow: hidden;
            min-height: 40px;
            max-height: 15000px;
            border: none;
            box-shadow: none;
            outline: none;
            padding-left: 0px;
            height: 20px;
            padding-right: 10px;
            left: 0px;
        }
        textarea.form-control:focus {
            outline: none;
            box-shadow: none;
            border-color: transparent;
            height: auto;left: 0px; 
        }
        .chat-input-container textarea.form-control {
            border: 1px solid #ddd; /* Серая рамка */
            line-height: 0,1em; /* Устанавливает высоту строки в 1em */
            /* padding: 2px 2px;  Немного увеличим отступы */
        }

        .btn-primary2 {
            background-color: none;
            color: white;
            border: none;
            box-shadow: none;
            max-height: 40px;
            border: none; /* Убираем рамку вокруг кнопки */
    cursor: pointer; /* Добавляем курсор-указатель при наведении */
    outline: none; /* Убираем подчеркивание у кнопки */
    padding: 0; /* Убираем внутренний отступ */
    position: absolute; /* Закрепляем положение кнопки внутри контейнера */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* Перемещаем кнопку в центр контейнера */
        }

        .btn-primary2:hover {
            background-color: none;
             
        }
        .button img {
    width: 30px; /* Размер иконки */
    height: 30px;
    filter: invert(); /* Инвертируем цвета иконки */
}

        .chat-box {
            border: none;
        }
    </style>
</head>
<body>
    <div class="container chat-container">
        <div class="chat-input-container">
            <div class="input-group">
                <textarea class="form-control" placeholder="Напишите что-нибудь..." id="message" aria-label="Message input"></textarea>
                <div class="input-group-append">
                    <button class="btn btn-primary2" id="sendButton" type="button">
                        <img src="../assets/images/logo.png" alt="Отправить" style="width: 30px; height: 30px;">
                    </button>
                </div>
            </div>
        </div>

        <div class="chat-box">
            <!-- Сообщения будут отображаться здесь -->
        </div>
    </div>

    <!-- jQuery и Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            const $sendButton = $('#sendButton');
            const $inputField = $('#message');
            const $chatBox = $('.chat-box');

            // Функция для саморасширяющегося textarea
            $inputField.on('input', function() {
                this.style.height = 'auto';
                this.style.height = this.scrollHeight + 'px';
            });

            // Проверка, является ли текст слишком длинным для одной строки
            function isTextOverflowing(element) {
                return element.scrollWidth > element.clientWidth;
            }

            // Функция для отправки сообщения
            function sendMessage() {
                const messageContent = $inputField.val();

                // Проверка на пустое сообщение
                if (!messageContent.trim()) return;
// Удаляем все предыдущие сообщения
//$chatBox.empty();
                // Добавляем сообщение пользователя с классом "user" для вопросов
                const userMessageHtml = `
                    <div class="chat-message user">
                        <span class="text-content">${messageContent}</span>
                        <i class="fa fa-angle-down expand-btn" aria-hidden="true"></i>
                    </div>
                `;
                const $newMessage = $(userMessageHtml);
                $chatBox.append($newMessage);

                // Прокрутка чата к последнему сообщению
                scrollToBottom();

                const $textContent = $newMessage.find('.text-content');
                const $expandButton = $newMessage.find('.expand-btn');

                // Проверяем, нужно ли показывать кнопку-иконку "Развернуть"
                if (isTextOverflowing($textContent[0])) {
                    $expandButton.show(); // Показываем кнопку только если текст превышает одну строку
                }

                // Добавляем событие для иконки "Развернуть/Свернуть"
                $expandButton.on('click', function() {
                    if ($textContent.css('white-space') === 'nowrap') {
                        $textContent.css({
                            'white-space': 'normal',
                            'overflow': 'visible',
                            'text-overflow': 'unset'
                        });
                        $(this).removeClass('fa-angle-down').addClass('fa-angle-up'); // Меняем иконку на "вверх"
                    } else {
                        $textContent.css({
                            'white-space': 'nowrap',
                            'overflow': 'hidden',
                            'text-overflow': 'ellipsis'
                        });
                        $(this).removeClass('fa-angle-up').addClass('fa-angle-down'); // Меняем иконку на "вниз"
                    }
                });

                // Эмуляция ответа от сервера
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
                        if (data && data.content) {
                            // Добавляем сообщение бота с классом "bot" для ответов
                            $chatBox.append(`<div class="chat-message bot">${data.content}</div>`);
                        }

                        // Прокрутка чата к последнему сообщению
                        scrollToBottom();

                        // Очищаем поле ввода и сбрасываем его размер
                        $inputField.val('');
                        $inputField.css('height', 'auto');
                    },
                    error: function(xhr) {
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            const errorMessage = xhr.responseJSON.error.message || 'Произошла ошибка';
                            $chatBox.append(`<div class="chat-message bot"><strong>Error:</strong> ${errorMessage}</div>`);
                        } else {
                            $chatBox.append(`<div class="chat-message bot"><strong>Error:</strong> Что-то пошло не так.</div>`);
                        }

                        // Прокрутка чата к последнему сообщению
                        scrollToBottom();
                    }
                });
            }

            // Прокрутка чата к последнему сообщению
            function scrollToBottom() {
                $chatBox.scrollTop($chatBox.prop("scrollHeight"));
            }

            // Обработчик нажатия на Enter и Shift + Enter для переноса абзацев
            $inputField.on('keydown', function(event) {
                if (event.key === 'Enter') {
                    if (event.shiftKey) {
                        // Если Shift + Enter, добавляем новую строку
                        $inputField.val($inputField.val() + "\n");
                        event.preventDefault(); // Останавливаем отправку
                    } else {
                        // Если просто Enter, отправляем сообщение
                        event.preventDefault();
                        sendMessage();
                    }
                }
            });

            // Обработчик клика на кнопку отправки
            $sendButton.on('click', function(event) {
                event.preventDefault();
                sendMessage();
            });

            // Прокручиваем к последнему сообщению при загрузке страницы
            scrollToBottom();
        });
    </script>
</body>
</html>
