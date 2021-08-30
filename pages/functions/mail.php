<?php
include('../../lib/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

define("EMAIL_LOGIN", "ya@mghunter.ru");
define("EMAIL_PASSWORD", "ws60WMEm");
define("EMAIL_SMTP_SERVER", "smtp.yandex.ru");
define("EMAIL_ZAG", "Домтут.РФ");

$mail = new PHPMailer(true);
try {
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = EMAIL_SMTP_SERVER;
$mail->SMTPAuth = true;
$mail->Username = EMAIL_LOGIN;
$mail->Password = EMAIL_PASSWORD;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->CharSet = "UTF-8";
$mail->SetLanguage("ru","phpmailer/language");
$mail->setFrom(EMAIL_LOGIN, EMAIL_ZAG);
$mail->addAddress("2038808@gmail.com");
$mail->addAddress("ya@mghunter.ru");
$mail->isHTML(true);
$mail->Subject = 'Новая заявка на обратный звонок';
$mail->Body = nl2br("Имя: ".$name."\n Телефон: ".$phone."\n Дата: ".$intime."\n\n IP: ".$result."\nГород: ".$result2);
$isSend = $mail->send();
}
catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>