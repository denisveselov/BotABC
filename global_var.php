<?php
$update = json_decode(file_get_contents('php://input'),true);
var_dump($update);
$chat_id = $update['message']['chat']['id'];
$user_name = $update['message']['from']['username'];
$message = $update['message']['text'];
$message = iconv('UTF-8', 'CP1251', $message);
$message_id = $update['message']['message_id'];
$message_name = $update['message']['chat']['first_name'];


/*
//Remove UTF8 Bom
function remove_utf8_bom($txt_msq){
    $bom = pack('H*','EFBBBF');
    $txt_msq = preg_replace("/^$bom/", '', $txt_msq);
    return $txt_msq;
}
*/

$user_messages = R::dispense('usermessages');
$user_messages->chat_id = $chat_id;
$user_messages->message_id = $message_id;
$id = R::store($user_messages);
