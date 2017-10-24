<?php

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: VladVneshService <inbox@vvs-info.ru>' . "\r\n";
$headers .= 'Reply-To: pr@vvs-info.ru' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

$mail_admin = "admin@vvs.elcom.ru";
$subject_admin = "message from landing one";

$form_name = $_POST['name'];
$form_mail = $_POST['mail'];

include 'random.php';

$mail_body = "mail - $form_mail\nname - $form_name\ncode - $code_generate";

mail ($mail_admin, $subject_admin, $mail_body, $headers);
echo "mail_away";
?>
