<?php
$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$message = $output['message']['text'];
$tokken = '339498031:AAGS0gW6vqOjY9hiN8bAT7A7S1qPI-ZWUCU';
$case = array('Привет','Привет!','Дратути','привет','Здорова!','здорово','Хай', );
if(in_array($message,$case)){
    $message = 'Привет! Меня зовут АктивМэн';
    sendMessage($tokken, $id, $message);
}


/*
switch ($message){

    case 'Привет', '';
    $message = 'Добрый день! Меня зовут АктивМэн';
        sendMessage($tokken, $id, $message);
        break;


    case 'Как дела?':
        $message = 'Дела гуд, но на линию не выпускают';
        sendMessage($tokken, $id, $message);
        break;


    case 'Почему?':
        $message = 'Нет работы с голосом! МВ она такая!';
        sendMessage($tokken, $id, $message);
        break;

    case 'ахаха':
        $message = 'Не смешно! Я на 3 скилл хочу!';
        sendMessage($tokken, $id, $message);
        break;

    case 'Где мы находимся?':
        $message = 'В Орле: Ломоносова д. 6 БЦ "Модус" В Москве: ул. Дмитрия Ульянова 7А БЦ "МАЙ"';
        sendMessage($tokken, $id, $message);
        break;

    case 'Должник умер':
        $message = 'Запроси максимум инфо: дату смерти, копию свидетельства на эл.почту, Результат: "Подозрение на исключение"';
        sendMessage($tokken, $id, $message);
        break;

    case 'Какой порог на этот месяц':
        $message = 'Для линии Сбербанк: 540000руб/68000руб/810000руб. Если ты работаешь 4 часа - то дели на два. Если работаешь 6 часов умножай на 0,75';
        sendMessage($tokken, $id, $message);
        break;

    case 'С какого раза удаляем номер для проверки':
        $message = 'Если из реестра, то со второго, если добавлен оператором, то с первого';
        sendMessage($tokken, $id, $message);
        break;

    case 'Когда зарплата':
        $message = 'Каждого 20го и 5го числа месяца';
        sendMessage($tokken, $id, $message);
        break;


    default:
        $message = 'Пиши биз ашибак!';
        sendMessage($tokken, $id, $message);
}
*/
function sendMessage($tokken, $id, $message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $id ."&text=". $message);
}
file_put_contents("logs.txt", $output);
