<?php
$data = $_POST;

$site_name = 'test.ru';
$articul = $data['articul'];
$product_name = $data['name_product'];
$volume = $data['volume'];
$color = $data['colour'];
$shine = $data['shine'];
$hardener = $data['hardener'] === 'on' ? 'да' : 'нет';
$solvent = $data['solvent'] === 'on' ? 'да' : 'нет';
$region = $data['region'];
$organization = $data['organization'];
$email = $data['mail'];
$phone = $data['phone'];

$email_zayvka = "{$data['email_to']}";

$time = date("Y-m-d H:i:s");
$subject_name = 'Заказ с сайта ' . $_SERVER['SERVER_NAME'];

$message = '
        <html>
        <p>Заказ с сайта ' . $_SERVER['SERVER_NAME'] . '</p>';

$message .= "<div><p>Дата отправки: $time</p>";

if(isset($articul) && $articul !== ''){
    $message .= "<p>Артикул: $articul</p>";
}

if(isset($product_name) && $product_name !== ''){
    $message .= "<p>Название товара: $product_name</p>";
}

if(isset($volume) && $volume !== ''){
    $message .= "<p>Объем: $volume</p>";
}

if(isset($color) && $color !== ''){
    $message .= "<p>Цвет: $color</p>";
}

if(isset($shine) && $shine !== ''){
    $message .= "<p>Блеск: $shine</p>";
}

if(isset($hardener) && $hardener !== ''){
    $message .= "<p>Добавить отвердитель? - $hardener</p>";
}

if(isset($solvent) && $solvent !== ''){
    $message .= "<p>Добавить растворитель? - $solvent</p>";
}

if(isset($region) && $region !== ''){
    $message .= "<p>Регион: $region</p>";
}

if(isset($organization) && $organization !== ''){
    $message .= "<p>Название предприятия: $organization</p>";
}

if(isset($email) && $email !== ''){
    $message .= "<p>Email: $email</p>";
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
