<?php
$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$message = $output['message']['text'];
$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU';

include 'cases.php';

if(in_array($message,$hello_case)){
    $message = 'Привет! Меня зовут АктивМэн';
    sendMessage($tokken, $id, $message);
}
else {
    $message = 'Пеши биз ашыбак';
    sendMessage($tokken, $id, $message);
}

function sendMessage($tokken, $id, $message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $id ."&text=". $message);
}
file_put_contents("logs.txt", $output);
