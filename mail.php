<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = $_POST['name'];
    $count = $_POST['count'];
    $phone = $_POST['phone'];
    $time = $_POST['time'];


    $content = $name . ' оставил заявку на бронирование столика для ' . $count . ' человек в ' . $time . '. Его телефон: ' . $phone;


    $success = mail("admin@burgerclub.com", 'Запрос на бронирование столика', $content);

    if ($success) {
             http_response_code(200);
        echo "Письмо отправлено";
    } else {
                http_response_code(500);
        echo "Письмо не отправлено";
    }

} else {
        http_response_code(403);
    echo "Данный метод запроса не поддерживается сервером";
}