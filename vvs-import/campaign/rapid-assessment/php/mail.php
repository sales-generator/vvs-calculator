<?php

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: VladVneshService <inbox@vvs-info.ru>' . "\r\n";
$headers .= 'Reply-To: pr@vvs-info.ru' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

$mail_admin = "admin@vvs.elcom.ru";
$subject_admin = "message from landing two";

$form_mail = $_POST['mail'];
$form_company = $_POST['company'];
$form_direction = $_POST['direction'];
$form_topic = $_POST['topic'];
$form_keywords = $_POST['keywords'];
$form_depth = $_POST['depth'];

$mail_body = "mail - $form_mail\nкомпания - $form_company\nнаправление деятельности - $form_direction\nтема - $form_topic\nключевые слова - $form_keywords\nглубина анализа - $form_depth";

mail ($mail_admin, $subject_admin, $mail_body, $headers);
echo "mail_away";
?>
