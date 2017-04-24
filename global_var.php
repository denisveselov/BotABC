<?php
$update = file_get_contents('php://input');
$update = json_decode($update, true);

$chat_id = $update['message']['chat']['id'];
$user_name = $update['message']['from']['username'];
$message = $update['message']['text'];
$message = mb_strtolower($message, 'UTF-8');
$message_id = $update['message']['message_id'];
$message_name = $update['message']['chat']['first_name'];