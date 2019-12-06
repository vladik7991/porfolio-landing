<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$message = $_POST['message'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$fio = urldecode($fio);
$email = urldecode($email);
$message = urldecode($message);
$fio = trim($fio);
$email = trim($email);
$message = trim($message);
if (mail("zadoya1997@mail.ru", "Заявка с сайта", "ФИО:".$fio.". "E-mail: ".$email.". "Message: .$message. , From: web@nado-site74.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>