<?php

//includes files:
include 'global_var.php';
include 'tokken_var.php';
include 'cases.php';
include 'aswer.php';

/*
function responses ()
{
    global $output;
    global $id;
    global $message;
}
*/

switch (in_array($message,$hello_case)){
    case TRUE:
        $ans_message = $hello_answer[mt_rand(0, count($hello_answer) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}
switch (in_array($message,$bye_case)) {
    case TRUE:
        $ans_message = $bye_answer[mt_rand(0, count($bye_answer) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}
switch (in_array($message,$fuck_case)) {
    case TRUE:
        $ans_message = $fuck_answer[mt_rand(0, count($fuck_answer) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
        break;

}
/*
switch (in_array($message,$bye_case)) {
    case TRUE:
    case 'Почему?':
        $ans_message = 'Нет работы с голосом! МВ она такая!';
        sendMessage($tokken, $chat_id, $ans_message);
        break;
    case 'ахаха':
        $ans_message = 'Не смешно! Я на 3 скилл хочу!';
        sendMessage($tokken, $chat_id, $ans_message);
        break;
    case 'Где я сейчас?':
        $ans_message = 'Я не Яндекс-Карты - оглянись вокруг блин!';
        sendMessage($tokken, $chat_id, $ans_message);
        break;
    case 'В чем смысл жизни?':
        $ans_message = 'У каждого свой, твой зарабатывать деньги!';
        sendMessage($tokken, $chat_id, $ans_message);
        break;

    default:
        $ans_message = 'Пиши биз ашибак!';
        sendMessage($tokken, $chat_id, $ans_message);
}
*/


/*
// Logic //
while ($message) {
    if (in_array($message, $hello_case)) {
        $ans_message = $hello_answer[mt_rand(0, count($hello_answer) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
    } else {
        $ans_message = $error_answer;
        sendMessage($tokken, $chat_id, $ans_message);
    }
    break;
}
*/

//send Messages end put to logs file
function sendMessage($tokken, $chat_id, $ans_message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $chat_id ."&text=". $ans_message);
}
file_put_contents("logs.txt", $update);

