<?php
$data = $_POST;

$site_name = 'test.ru';
$name = $data['name'];
$organization = $data['organization'];
$mail = $data['mail'];
$phone = $data['phone'];
$email_zayvka = "{$data['email_to']}";

$time = date("Y-m-d H:i:s");
$subject_name = 'Заявка на получение пароля с сайта ' . $_SERVER['SERVER_NAME'];

$message = '
        <html>
        <p>Заявка на получение пароля с сайта ' . $_SERVER['SERVER_NAME'] . '</p>';

$message .= "<div><p>Дата отправки: $time</p>";

if(isset($name) && $name !== ''){
    $message .= "<p>Фамилия Имя Отчество: $name</p>";
}

if(isset($organization) && $organization !== ''){
    $message .= "<p>Название компании: $organization</p>";
}

if(isset($mail) && $mail !== ''){
    $message .= "<p>Email: $mail</p>";
}

if(isset($phone) && $phone !== ''){
    $message .= "<p>Телефон: $phone</p>";
}


$message .= "</div>
        </html>";

$headers = "MIME-Version: 1.0" . "\r\n" .
    "Content-type:text/html;charset=UTF-8" . "\r\n" .
    "From: ". $site_name;


$success = mail($email_zayvka, $subject_name, $message, $headers);
if (!$success) {
    $errorMessage = error_get_last()['message'];
    echo $errorMessage;
} else {
    echo 'ok';
}
