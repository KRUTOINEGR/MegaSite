<?php
session_start();

$_SESSION['errors'] = [];
$name       = trim($_POST['name']);
$surname    = trim($_POST['surname']);
$phone      = trim($_POST['phone']);
$zaputannya = trim($_POST['zaputannya']);

if ($name === '') {
    $_SESSION['errors']['name'] = "Введіть імʼя";
}

if ($surname === '') {
    $_SESSION['errors']['surname'] = "Введіть прізвище";
}

if ($phone === '') {
    $_SESSION['errors']['phone'] = "Введіть номер телефону";
}

if ($zaputannya === '') {
    $_SESSION['errors']['zaputannya'] = "Введіть запитання";
}

if (!empty($_SESSION['errors'])) {
    header("Location: contacts.php#contact-form");
    exit;
}

$to = "admin@fitzone.ua";
$subject = "Нова заявка з сайту FITZONE";

$message = "
Нова заявка з сайту FITZONE:

Імʼя: $name
Прізвище: $surname
Телефон: $phone
Запитання: $zaputannya
";

$headers = "Content-Type: text/plain; charset=UTF-8";

if (mail($to, $subject, $message, $headers)) {
    $_SESSION['data_contact_sucess'] = "Дані успішно надіслано";

} else {
    $_SESSION['data_contact_error'] = "Помилка надсилання повідомлення";
}

header("Location: contacts.php");
exit;
?>