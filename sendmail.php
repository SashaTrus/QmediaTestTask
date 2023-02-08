<?php
$name = $_POST['name'];
$email = $_POST['email'];
$seminar = $_POST['seminar'];


$subject = "=?utf-8?B?".base64_encode("Заявка на семинар")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
$message = "$name отправил заявку на участие в семинаре - $seminar";
$success = mail('seminarqmedia@mail.ru', $subject, $message, $headers);
echo $success;