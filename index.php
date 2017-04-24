<?php

function responses ()
{
    $output = json_decode(file_get_contents('php://input'), true);
    $id = $output['message']['chat']['id'];
    $message = $output['message']['text'];
}



$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU'; //Токкен бота

//Подлючаем ситуационные вопросы и ответы в виде массивов
include 'cases.php';
include 'aswer.php';

// Логика

if(in_array($message,$hello_case)){
    $message = $hello_answer[mt_rand(0, count($hello_answer)-1)];
    sendMessage($tokken, $id, $message);
}
else {
    $message = 'Пеши биз ашыбак';
    sendMessage($tokken, $id, $message);
}

// Отправка сообщения user'у и запись в лог

function sendMessage($tokken, $id, $message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $id ."&text=". $message);
}
file_put_contents("logs.txt", $output);
return;
