<?php
$update = json_decode(file_get_contents('php://input'),true);
var_dump($update);
$chat_id = $update['message']['chat']['id'];
$user_name = $update['message']['from']['username'];
$message = $update['message']['text'];
$message = mb_convert_encoding($message, "cp1251", "utf-8");
$messageDB = $message;
/*
$message = iconv('UTF-8', 'CP1251', $message);
$message = iconv('CP1251', 'UTF-8', $message);
*/
$message_id = $update['message']['message_id'];
$message_name = $update['message']['chat']['first_name'];



$user_messages = R::dispense('usermessages');
$user_messages->chat_id = $chat_id;
$user_messages->message_id = $message_id;
$id = R::store($user_messages);
