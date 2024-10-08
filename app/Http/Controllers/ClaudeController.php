<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="viewport" content="width=device-width, initial-scale=1.0">
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
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .chat-input-container {
            padding: 10px 20px;
        }

        .chat-message {
            margin-bottom: 10px;
            position: relative;
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

        /* Сообщения от бота (ответы) */
        .chat-message.bot {
            width: 100%;
            align-self: flex-start;
            border: none;
            background-color: transparent;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Текст сообщения с сокращением до одной строки */
        .text-content {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 85%;
        }

        /* Иконка меню */
        .menu-btn {
            cursor: pointer;
            color: blue;
            background: none;
            border: none;
            padding: 0;
            font-size: 20px;
            margin-left: 10px;
            position: relative;
        }

        /* Выпадающее меню */
        .dropdown-menu {
            display: none;
            position: absolute;
            right: 0; /* Меню появляется справа от кнопки */
            top: 35px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        }

        .dropdown-menu.active {
            display: block;
        }

        .dropdown-menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .dropdown-menu ul li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
        }

        .dropdown-menu ul li:last-child {
            border-bottom: none;
        }

        .dropdown-menu ul li:hover {
            background-color: #f0f0f0;
        }

        .dropdown-menu ul li.sub-menu > ul {
            display: none;
            padding-left: 20px;
        }

        .dropdown-menu ul li.sub-menu:hover > ul {
            display: block;
        }

        textarea.form-control {
            resize: none;
            overflow: hidden;
            min-height: 40px;
            max-height: 15000px;
            border: none;
            box-shadow: none;
            outline: none;
        }

        textarea.form-control:focus {
            outline: none;
            box-shadow: none;
            border-color: transparent;
        }

        .btn-primary {
            background-color: black;
            color: white;
            border: none;
            box-shadow: none;
            max-height: 40px;
        }

        .btn-primary:hover {
            background-color: #333;
            color: #fff;
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
                    <button class="btn btn-primary" id="sendButton" type="button">Отправить</button>
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

            // Функция для отправки сообщения
            function sendMessage() {
                const messageContent = $inputField.val();

                // Проверка на пустое сообщение
                if (!messageContent.trim()) return;

                // Добавляем сообщение пользователя с классом "user" для вопросов
                const userMessageHtml = `
                    <div class="chat-message user">
                        <span class="text-content">${messageContent}</span>
                    </div>
                `;
                const $newMessage = $(userMessageHtml);
                $chatBox.append($newMessage);

                // Прокрутка чата к последнему сообщению
                scrollToBottom();

                // Эмуляция ответа от сервера
                $.ajax({
                    url: '{{ route('get_chat') }}',  // Замените на реальный URL
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
                            // Добавляем сообщение бота с меню
                            const botMessageHtml = `
                                <div class="chat-message bot">
                                    <span class="text-content">${data.content}</span>
                                    <button class="menu-btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li>Копировать</li>
                                            <li>Редактировать</li>
                                            <li class="sub-menu">Сохранить [▼]
                                                <ul>
                                                    <li>На устройстве</li>
                                                    <li>В облаке</li>
                                                </ul>
                                            </li>
                                            <li>Создать событие</li>
                                            <li>Создать заметку</li>
                                            <li>Создать напоминание</li>
                                            <li>Декомпозировать</li>
                                            <li class="sub-menu">Анализировать [▼]
                                                <ul>
                                                    <li>Сравнить</li>
                                                    <li>Оценить</li>
                                                </ul>
                                            </li>
                                            <li>Генерировать вопросы</li>
                                            <li>Создать вопрос</li>
                                            <li>Удалить ответ</li>
                                            <li>Оценить</li>
                                            <li>Поделиться</li>
                                        </ul>
                                    </div>
                                </div>
                            `;
                            const $botMessage = $(botMessageHtml);
                            $chatBox.append($botMessage);

                            // Прокрутка чата к последнему сообщению
                            scrollToBottom();

                            // Обработчик для открытия/закрытия меню
                            const $menuButton = $botMessage.find('.menu-btn');
                            const $dropdownMenu = $botMessage.find('.dropdown-menu');

                            $menuButton.on('click', function(e) {
                                e.stopPropagation(); // Предотвращаем закрытие при клике на меню
                                $dropdownMenu.toggleClass('active');
                            });

                            // Закрыть меню при клике вне его
                            $(document).on('click', function() {
                                $dropdownMenu.removeClass('active');
                            });

                            $dropdownMenu.on('click', function(e) {
                                e.stopPropagation(); // Предотвращаем закрытие при клике внутри меню
                            });
                        }
                    },
                    error: function(xhr) {
                        const errorMessage = xhr.responseJSON && xhr.responseJSON.error ? xhr.responseJSON.error.message : 'Произошла ошибка';
                        const botMessageHtml = `<div class="chat-message bot"><strong>Error:</strong> ${errorMessage}</div>`;
                        $chatBox.append($(botMessageHtml));
                        scrollToBottom();
                    }
                });

                // Очищаем поле ввода и сбрасываем его размер
                $inputField.val('');
                $inputField.css('height', 'auto');
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
