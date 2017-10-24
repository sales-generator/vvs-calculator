<?php
include 'mail.Template.php';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: VladVneshService <inbox@vvs-info.ru>' . "\r\n";
$headers .= 'Reply-To: pr@vvs-info.ru' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

$mail_client_email = $_POST['email'];
$mail_client_subject = "Мониторинг экспорта и импорта";
$mail_client_body = $mail_temlate;
mail ($mail_client_email, $mail_client_subject, $mail_client_body, $headers);

?>
