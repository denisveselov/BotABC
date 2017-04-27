<?php

require "rb.php";
include 'global_var.php';

R::setup( 'mysql:host=us-cdbr-iron-east-03.cleardb.net;dbname=heroku_6ae1fc935ee715b',
    'b63a3b9e8e665e', '4f6ef433' );

session_start();
/* var_dump(R::testConnection());*/ // проверка подлючения

/*
//create array $update in DB
$arr_messages = R::dispense('arraymessages');
$arr_messages->user_name = $user_name;
$arr_messages->chat_id = $chat_id;
$arr_messages->message_id = $message_id;
$arr_messages->message_txt = $message;
$id = R::store($arr_messages);
*/
?>



