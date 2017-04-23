<?php
$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$message = $output['message']['text'];
$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU';
$url_bot = "https://api.telegram.org/bot"; //переменная линк бот


include 'cases.php';


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
function sendMessage($url_bot, $tokken, $id, $message)
{
    file_get_contents($url_bot. $tokken ."sendMessage?chat_id=". $id ."&text=". $message);
}
file_put_contents("logs.txt", $output);










/*
$output = file_get_contents('php://input');
$output = json_decode($output,true);
$chat_id = $output['message']['chat']['id']; //запрос последнего чат ид

echo $chat_id;

$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU';
$users_message = $output['message']['text']; //запрос текста последнего сообщения

include 'cases.php';



function getUpdates(){
    $output = file_get_contents('php://input'); //Вызываю метод getUpdates
    $output = json_decode($output,true);
    return $output;

}

function getMessage(){
}


/*
$users_message='Привет';
/*while ($users_message){
    if (in_array($users_message, $hello_case)) {
        $message = 'Привет! Меня зовут АктивМэн';
        sendMessage($tokken, $chat_id, $message);
    } else {
        $message = 'Я тебя не совсем понял';
        sendMessage($tokken, $chat_id, $message);

}
function sendMessage($tokken, $chat_id, $users_message, $message, $url)
{
    file_get_contents($url. $tokken ."sendMessage?chat_id=".$chat_id ."&text=". $message);
}
file_put_contents("logs.txt", $output);

*/





