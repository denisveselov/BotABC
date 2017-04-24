<?php

$output = json_decode(file_get_contents('php://input'), true);
$id = $output['message']['chat']['id'];
$message = $output['message']['text'];

/*
function responses ()
{
    global $output;
    global $id;
    global $message;
}
*/

$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU'; //Токкен бота

//Подлючаем ситуационные вопросы и ответы в виде массивов
include 'cases.php';
include 'aswer.php';

// Логика
while ($message) {
    if (in_array($message, $hello_case)) {
        $ans_message = $hello_answer[mt_rand(0, count($hello_answer) - 1)];
        sendMessage($tokken, $id, $ans_message);
    } else {
        $ans_message = 'Пеши биз ашыбак';
        sendMessage($tokken, $id, $ans_message);
    }
    break;
}

// Отправка сообщения user'у и запись в лог

function sendMessage($tokken, $id, $ans_message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $id ."&text=". $ans_message);
}
file_put_contents("logs.txt", $output);

