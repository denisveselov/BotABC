<?php
$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$message = $output['message']['text'];
$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU';

switch ($message){

    case 'Привет':
        $message = 'Добрый день! Меня зовут АктивМэн';
        sendMessage($tokken, $id, $message);
        break;


    case 'Как дела?':
        $message = 'Дела гуд, но на линию не выпускают';
        sendMessage($tokken, $id, $message);
        break;


    default:
        $message = 'Пиши биз ашибак!';
        sendMessage($tokken, $id, $message);
}
function sendMessage($tokken, $id, $message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $id ."&text=". $message);
}
file_put_contents("logs.txt", $output);
