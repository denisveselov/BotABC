<?php
$output = file_get_contents('php://input');
$id = $output['message']['chat']['id'];
$message = $output['message']['text'];
$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU';

include 'cases.php';
include 'function.php';

while ($message){
    if (in_array($message, $hello_case)) {
        $message = 'Привет! Меня зовут АктивМэн';
        sendMessage($tokken, $id, $message);
    } else {
        $message = 'Я тебя не совсем понял';
        sendMessage($tokken, $id, $message);
    }
break;
}

while ($message) {
    if (in_array($message, $bye_case)) {
        $message = 'Пока! Ой! До побачення)';
        sendMessage($tokken, $id, $message);
    } else {
        $message = 'Пиши без ошибок';
        sendMessage($tokken, $id, $message);
    }
    break;
}


function sendMessage($tokken, $id, $message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $id ."&text=". $message);
}
file_put_contents("logs.txt", $output);
