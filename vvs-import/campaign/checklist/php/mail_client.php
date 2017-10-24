<?php
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: VladVneshService <inbox@vvs-info.ru>' . "\r\n";
$headers .= 'Reply-To: pr@vvs-info.ru' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

$mail_client = $form_mail;
$subject_client = "Спасибо за ваше доверие к нам!";

$mail_body = $template_client;

mail ($mail_client, $subject_client, $mail_body, $headers);
?>
