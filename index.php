<?php
$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
file_get_contents("https://api.telegram.org/bot339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU/sendMessage?chat_id = ".$id."&text = I'm listeningto you");
file_put_contents("logs.txt", $output);
