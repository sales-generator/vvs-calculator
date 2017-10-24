<?php
function generateCode($length = 8){
  $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $numChars = strlen($chars);
  $string = '';
  for ($i = 0; $i < $length; $i++) {
    $string .= substr($chars, rand(1, $numChars) - 1, 1);
  }
  return $string;
}

$code_generate = generateCode(8);

$link_download = 'https:///vvs-info.ru/widgets/vvs-import/campaign/checklist/mail/checklist.pdf';
$link_open = 'https://drive.google.com/open?id=0Bx2e6j7mOYzQWUNNNmJmVUh5c0U';

include '../mail/template_client.php';
include 'mail_client.php';
 ?>
