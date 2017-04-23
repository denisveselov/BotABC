<?php
$output = file_get_contents('php://input');
$chat_id = $output['message']['chat']['id']; //запрос последнего чат ид

/*
$users_message = $output['message']['text'];*/


$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU';


$url = 'https://api.telegram.org/bot'.$tokken. '/'; //переменная линк токкена

function getUpdates($output){
    $output = file_get_contents('php://input'); //Вызываю метод getUpdates
    $output = json_decode($output,true);
    return $output;

}

function getMessage($output){
    $data = $output;
    $chat_id = $output['message']['chat']['id']; //запрос последнего  ID чата
    $users_message = $output['message']['text']; //запрос текста последнего сообщения
}

function sendMessage($tokken, $chat_id, $users_message, $message, $url)
{
    file_get_contents($url. $tokken ."sendMessage?chat_id=".$chat_id ."&text=". $message);
}
file_put_contents("logs.txt", $output);



include 'cases.php';

while ($users_message){
    if (in_array($users_message, $hello_case)) {
        $message = 'Привет! Меня зовут АктивМэн';
        sendMessage($tokken, $chat_id, $message);
    } else {
        $message = 'Я тебя не совсем понял';
        sendMessage($tokken, $chat_id, $message);
    }
break;
}


sendMessage($tokken,$chat_id, $users_message, $message, $url);
/*
while ($users_message) {
    if (in_array($users_message, $bye_case)) {
        $message = 'Пока! Ой! До побачення)';
        sendMessage($tokken, $chat_id, $message);
    } else {
        $message = 'Пиши без ошибок';
        sendMessage($tokken, $chat_id, $message);
    }
*/