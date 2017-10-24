<?php
$code = $_POST["code"];
$size = $_POST["size"];
$name = $_POST["name"];
$mail = $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["date"];

//Заголовки
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: VladVneshService <inbox@vvs-info.ru>' . "\r\n";
$headers .= 'Reply-To: pr@vvs-info.ru' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

$mail_admin = "admin@vvs.elcom.ru";
$subject_admin = "Заполнен видео 1 письмо";

$message_admin = "Имя - $name<br>email - $mail<br>Телефон - $phone<br>Дата письма поиска - $date<br>Код из письма поиска - $code<br>Размер компании - $size";

mail ($mail_admin, $subject_admin, $message_admin, $headers);
echo 'yes';