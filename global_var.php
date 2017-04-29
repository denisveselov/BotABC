<?php
$update = file_get_contents('php://input');
$update = json_decode($update, true);
var_dump($update);
$chat_id = $update['message']['chat']['id'];
$user_name = $update['message']['from']['username'];
$user_resp = $update['message']['text'];
$message = mb_strtolower($user_messages, 'UTF-8');
$message_id = $update['message']['message_id'];
$message_name = $update['message']['chat']['first_name'];


//CREATE to DB RedBeanPHP

$user_messages = R::dispense('usermessages');
$user_messages->chat_id = $chat_id;
$user_messages->message_id = $message_id;
$id = R::store($user_messages);
