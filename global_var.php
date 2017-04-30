<?php
$update = json_decode(file_get_contents('php://input'),true);
var_dump($update);
$chat_id = $update['message']['chat']['id'];
$user_name = $update['message']['from']['username'];
$message = $update['message']['text'];
$txt_msg = $message;
$txt_msq = removeBOM($txt_msq);
$message_id = $update['message']['message_id'];
$message_name = $update['message']['chat']['first_name'];


//CREATE to DB RedBeanPHP

$user_messages = R::dispense('usermessages');
$user_messages->chat_id = $chat_id;
$user_messages->message_id = $message_id;
/*$user_messages->message_txt = $txt_msg;*/
$id = R::store($user_messages);


function removeBOM($txt_msq="") {
    if(substr($txt_msq, 0, 3) == pack('CCC', 0xef, 0xbb, 0xbf)) {
        $txt_msq = substr($txt_msq, 3);
    }
    return $txt_msq;
}