<?php
$update = file_get_contents('php://input');
$update = json_decode($update, true);
$chat_id = $update['result']['message']['chat']['id'];
$user_name = $update['result']['message']['from']['username'];
$message = $update['result']['message']['text'];
$message_id = $update['result']['message']['message_id'];
$message_name = $update['result']['message']['chat']['first_name'];


//CREATE to DB RedBeanPHP

$user_messages = R::dispense('usermessages');
$user_messages->chat_id = $chat_id;
$user_messages->message_id = $message_id;
$id = R::store($user_messages);
