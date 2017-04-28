<?php
$update = file_get_contents('php://input');
$update = json_decode($update, true);
$chat_id = $update['message']['chat']['id'];
$user_name = $update['message']['from']['username'];
$message = $update['message']['text'];
$message_id = $update['message']['message_id'];
$message_name = $update['message']['chat']['first_name'];

echo $chat_id;


// забираем значения переменной $message, $user_name, $chat_id, $message_id , $message_name;

//возвращаем значения переменных обработчику из БД;

// обрабатываем событие - ответ уходит на sendMessage и в БД в поле bot_answer;




