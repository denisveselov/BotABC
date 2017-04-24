<?php
$output = json_decode(file_get_contents('php://input'), true);
$id = $output['message']['chat']['id'];
$message = $output['message']['text'];