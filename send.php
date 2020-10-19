<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email_City'])) {$email_City = $_POST['email_City'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}

$to = "vistrelkov@yandex.ru"; //Ваша почта
$headers = "Content-type: text/plain; charset = utf-8";
$subject = "Сообщение с вашего сайта";
$message = "Имя пославшего: $name  \nГород: $email_City \nТелефон: $phone" ;
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')

{
echo "<b>Спасибо за отправку вашего сообщения!<p>";
echo "<a href=index.html>Нажмите,</a> чтобы вернуться на главную страницу";
}

?>
