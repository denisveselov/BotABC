<?php
$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU';
sendMessage($tokken, $id);
function sendMessage($tokken, $id)
{
    file_get_contents("https://api.telegram.org/bot".$tokken."/sendMessage?chat_id=".$id."&text=Пока что я глупый Бот");
}
file_put_contents("logs.txt", $output);
