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


function bye_func ($message, $bye_case, $id, $tokken)
{
    if (in_array($message, $bye_case)) {
        $message = 'До побачення!\n Ой! \n До связи!';
        sendMessage($tokken, $id, $message);
    } else {
        $message = 'Пешы биз ашыбак!';
        sendMessage($tokken, $id, $message);
    }
}
