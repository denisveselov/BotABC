<?php
function hi_func ($message, $hello_case, $id, $tokken)
{
    if (in_array($message, $hello_case)) {
        $message = 'Привет! Меня зовут АктивМэн';
        sendMessage($tokken, $id, $message);
    } else {
        $message = 'Я тебя не совсем понял';
        sendMessage($tokken, $id, $message);
    }
}