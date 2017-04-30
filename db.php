<?php

require "rb.php";

R::setup( 'mysql:host=us-cdbr-iron-east-03.cleardb.net;dbname=heroku_6ae1fc935ee715b',
    'b63a3b9e8e665e', '4f6ef433' );

session_start();
/* var_dump(R::testConnection()); // проверка подлючения

$chat_id = 12345;
$message_id = 54321;
$message = 'Привет';
$txt_msg = $message;
$txt_msq = iconv('UTF-8', 'CP1251', $txt_msg);


$user_messages = R::dispense('usermessages');
$user_messages->chat_id = $chat_id;
$user_messages->message_id = $message_id;
$user_messages->message_txt = $txt_msg;
$id = R::store($user_messages);


*/
