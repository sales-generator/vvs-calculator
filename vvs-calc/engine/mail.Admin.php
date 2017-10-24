<?php
$mail_admin_headers  = 'MIME-Version: 1.0' . "\r\n";
$mail_admin_headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$mail_admin_headers .= 'From: VladVneshService <inbox@vvs-info.ru>' . "\r\n";
$mail_admin_headers .= 'Reply-To: pr@vvs-info.ru' . "\r\n";
$mail_admin_headers .= 'X-Mailer: PHP/' . phpversion();

$date = date('l jS \of F Y h:i:s A');
$mail_admin_email = "admin@vvs.elcom.ru";
$mail_admin_subject = "VVS-CALC - $date";

$post_mail = $_POST['email'];
$post_source_site = $_POST['source_site'];
$post_code = $_POST['code'];

$mail_admin_body = "Mail - $post_mail\nИсточник - $post_source_site\nДата - $date\nНаправление - $mail_template_data_transport\nКод - $post_code\nРасшифровка - $mail_template_data_text\nmail_template_data_physical - $mail_template_data_physical\nmail_template_data_money - $mail_template_data_money";
mail ($mail_admin_email, $mail_admin_subject, $mail_admin_body, $mail_admin_headers);

?>
