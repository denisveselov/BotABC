<?php

//includes files:
include 'global_var.php';
include 'tokken_var.php';
include 'cases.php';
include 'aswer.php';


function responses ()
{
    global $output;
    global $id;
    global $message;
}


// Logic //
while ($message) {
    if (in_array($message, $hello_case)) {
        $ans_message = $hello_answer[mt_rand(0, count($hello_answer) - 1)];
        sendMessage($tokken, $id, $ans_message);
    } else {
        $ans_message = $error_answer;
        sendMessage($tokken, $id, $ans_message);
    }
    break;
}

//send Messages end put to logs file
function sendMessage($tokken, $id, $ans_message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $id ."&text=". $ans_message);
}
file_put_contents("logs.txt", $output);

