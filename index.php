<?php
$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$message = $output['message']['text'];
$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU';

include 'cases.php';
include 'function.php';

hi_func($message,$hello_case, $id, $tokken);
return;
bye_func ($message, $bye_case, $id, $tokken);
return;
function sendMessage($tokken, $id, $message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $id ."&text=". $message);
}
file_put_contents("logs.txt", $output);
