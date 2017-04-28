<?php

require "db.php";

//includes files:

include 'global_var.php';
include 'tokken_var.php';
include 'cases.php';
include 'aswer.php';



//create array $update in DB

$arr_messages = R::dispense('arraymessages');
$arr_messages->user_id ($update, 'user_id');
$id = R::store($arr_messages);

//Logics
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
switch (in_array($message,$demand_case)) {
    case TRUE:
        $ans_message = $demand_answer[mt_rand(0, count($demand_answer) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}
switch (in_array($message,$thanks_case)) {
    case TRUE:
        $ans_message = $thanks_answer[mt_rand(0, count($thanks_answer) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}
switch (in_array($message,$total_case)) {
    case TRUE:
        $ans_message = $total_answer;
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}
switch (in_array($message,$jokes_case)) {
    case TRUE:
        $ans_message = $jokes_answer[mt_rand(0, count($jokes_answer) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}
switch (in_array($message,$whatsup_case)) {
    case TRUE:
        $ans_message = $whatsup_answer[mt_rand(0, count($whatsup_answer) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}
switch (in_array($message,$cause_case)) {
    case TRUE:
        $ans_message = $cause_answer;
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}
switch (in_array($message,$callback_case)) {
    case TRUE:
        $ans_message = $callback_answer;
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}
switch (in_array($message,$anexception_case)) {
    case TRUE:
        $ans_message = $anexception_answer;
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}

switch (in_array($message,$complaints_case)) {
    case TRUE:
        $ans_message = $complaints_answer;
        sendMessage($tokken, $chat_id, $ans_message);
        break;
}

//send Messages end put to logs file
function sendMessage($tokken, $chat_id, $ans_message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $chat_id ."&text=". $ans_message);
}
file_put_contents("logs.txt", $update);

