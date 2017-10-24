<?php
//Поля формы
$button_company = $_POST["company-size"];
$mail = $_POST["email"];
$tn_pos = $_POST["tnved-search"];
//Оформление письма
//Дата
$date_admin = date('l jS \of F Y h:i:s A');
$date_admin_theme = date("Y.m.d");
//Заголовки
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: VladVneshService\, LLC <inbox@vvs-info.ru>' . "\r\n";
$headers .= 'Reply-To: content@vvs-info.ru' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
//Адрес администратора
$mail_admin = "content@vvs.elcom.ru";
//тема администратора
$subject_admin = "Заполнен виджет ТОП 100 - $date_admin_theme";

error_reporting(0); // не выводить ни замечаний, ни предупреждений, ни ошибок

// соединение с сервером базы данных
$link = mysql_connect("localhost", "u6429641_default", "w*Ly!y8nbBlXHtRAQ^1f^P858228034g") or die("Нет соединения с базой данных");
// выбор базы данных
mysql_select_db("u6429641_default") or die("Не найдена БД");
// строка из формы для выполнения запроса
//кодер
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");
$search = mysql_real_escape_string($_POST['tnved-search']);
// тело запроса
$query = "SELECT
  `base_20160428_064056`.tn_code,
  `base_20160428_064056`.tn_name,
  `base_20160428_064056`.tn_period,
  `base_20160428_064056`.tn_money,
  `base_20160428_064056`.tn_percentage,
  `base_20160428_064056`.tn_region
FROM `base_20160428_064056`
WHERE `base_20160428_064056`.tn_pos = $search";
// переменная с запросом
$result = mysql_query($query);
//количество строк после запроса
$resultcheck = mysql_num_rows($result);
//проверка количества строк
if($resultcheck == 0) { //если нет, командуем вывести пустой результат
  //Тело письма администратора пустое
  $message_admin_empty = "Поиск без результатов<br>дата - $date_admin<br>mail - $mail<br>размер компании - $button_company<br>запрос позиция - $tn_pos";
  //Письмо администратору
  mail ($mail_admin, $subject_admin, $message_admin_empty, $headers);
	echo "no";
} elseif($resultcheck > 0) { //если что-то есть, продолжаем
	//echo "go on";

	$result = mysql_query($query) or die("Запрос ошибочный"); // проверка запроса на правильность

  $text0 ='<!DOCTYPE html "-//w3c//dtd xhtml 1.0 transitional //en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <title>Импортозамещение</title>



</head>
<body style="width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #ecf0f1">
  <style id="media-query">
    /* Client-specific Styles & Reset */
    #outlook a {
        padding: 0;
    }

    /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
    .ExternalClass {
        width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
    }

    #backgroundTable {
        margin: 0;
        padding: 0;
        width: 100% !important;
        line-height: 100% !important;
    }

    /* Buttons */
    .button a {
        display: inline-block;
        text-decoration: none;
        -webkit-text-size-adjust: none;
        text-align: center;
    }

    .button a div {
        text-align: center !important;
    }

    /* Outlook First */
    body.outlook p {
        display: inline !important;
    }

    /*  Media Queries */
@media only screen and (max-width: 700px) {
  table[class="body"] img {
    height: auto !important;
    width: 100% !important; }
  table[class="body"] img.fullwidth {
    max-width: 100% !important; }
  table[class="body"] center {
    min-width: 0 !important; }
  table[class="body"] .container {
    width: 95% !important; }
  table[class="body"] .row {
    width: 100% !important;
    display: block !important; }
  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important; }
  table[class="body"] .columns, table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important; }
  table[class="body"] .wrapper.first .columns, table[class="body"] .wrapper.first .column {
    display: table !important; }
  table[class="body"] table.columns td, table[class="body"] table.column td, .col {
    width: 100% !important; }
  table[class="body"] table.columns td.expander {
    width: 1px !important; }
  table[class="body"] .right-text-pad, table[class="body"] .text-pad-right {
    padding-left: 10px !important; }
  table[class="body"] .left-text-pad, table[class="body"] .text-pad-left {
    padding-right: 10px !important; }
  table[class="body"] .hide-for-small, table[class="body"] .show-for-desktop {
    display: none !important; }
  table[class="body"] .show-for-small, table[class="body"] .hide-for-desktop {
    display: inherit !important; }
  .mixed-two-up .col {
    width: 100% !important; } }
 @media screen and (max-width: 700px) {
      div[class="col"] {
          width: 100% !important;
      }
    }

    @media screen and (min-width: 701px) {
      table[class="container"] {
          width: 700px !important;
      }
    }
  </style>
  <table class="body" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed" cellpadding="0" cellspacing="0" width="100%" border="0">
      <tbody><tr style="vertical-align: top">
          <td class="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #ecf0f1" align="center" valign="top">

              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #3498DB" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: top">
                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
                    <!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width="700" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
                    <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 700px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><table class="block-grid mixed-two-up" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 700px;color: #333;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="233"><![endif]--><div class="col num4" style="display: inline-block;vertical-align: top;text-align: center;width: 233px"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 15px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%;padding-top: 10px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px" align="right">
            <div style="font-size:12px" align="right">
                <a href="http://vvs-info.ru/" target="_blank">
                    <img class="right" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;width: 140px;max-width: 140px" align="right" border="0" src="http://vvs-info.ru/widgets/vvs-import/1.0.12/mail/images/vvs-logo.png" alt="VVS" title="VVS" width="140">
                </a>

            </div>
        </td>
    </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="467"><![endif]--><div class="col num8" style="display: inline-block;vertical-align: top;text-align: center;width: 467px"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 15px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#ECF0F1;line-height:120%;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;">
        	<div style="font-size:12px;line-height:14px;color:#ECF0F1;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px"><strong><span style="font-size: 16px; line-height: 19px;"><em>&#8470;1 &#1074; &#1056;&#1086;&#1089;&#1089;&#1080;&#1080;</em></span></strong><br></p><p style="margin: 0;font-size: 14px;line-height: 16px"><strong><span style="font-size: 16px; line-height: 19px;"><em>&#1087;&#1086; &#1072;&#1085;&#1072;&#1083;&#1080;&#1079;&#1091; &#1080;&#1084;&#1087;&#1086;&#1088;&#1090;&#1072; &#1080; &#1101;&#1082;&#1089;&#1087;&#1086;&#1088;&#1090;&#1072;</em></span></strong><br data-mce-bogus="1"></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: top">
                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
                    <!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width="700" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
                    <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 700px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 700px;color: #000000;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="700"><![endif]--><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#555555;line-height:120%;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;">
        	<div style="font-size:12px;line-height:14px;color:#555555;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><strong><span style="font-size: 24px; line-height: 28px;">&#1041;&#1083;&#1072;&#1075;&#1086;&#1076;&#1072;&#1088;&#1080;&#1084; &#1042;&#1072;&#1089; &#1079;&#1072; &#1087;&#1086;&#1083;&#1100;&#1079;&#1086;&#1074;&#1072;&#1085;&#1080;&#1077; &#1087;&#1088;&#1086;&#1075;&#1088;&#1072;&#1084;&#1084;&#1085;&#1099;&#1084; &#1084;&#1086;&#1076;&#1091;&#1083;&#1077;&#1084;</span></strong></p><p style="margin: 0;font-size: 14px;line-height: 16px;text-align: center"><strong><span style="font-size: 24px; line-height: 28px;">&#171;VVS - &#1048;&#1084;&#1087;&#1086;&#1088;&#1090;&#1086;&#1079;&#1072;&#1084;&#1077;&#1097;&#1077;&#1085;&#1080;&#1077;&#187;</span></strong></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px" align="center">
            <div style="height: 1px;">
                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 1px solid #BBBBBB;width: 100%" align="center" border="0" cellspacing="0">
                    <tbody><tr style="vertical-align: top">
                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" align="center"></td>
                    </tr>
                </tbody></table>
            </div>
        </td>
    </tr>
</tbody></table><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#555555;line-height:120%;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;">
        	<div style="font-size:12px;line-height:14px;color:#555555;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px">&#1052;&#1099;&#32;&#1087;&#1086;&#1076;&#1086;&#1073;&#1088;&#1072;&#1083;&#1080;&#32;&#1090;&#1086;&#1074;&#1072;&#1088;&#1099;&#32;&#1074;&#32;&#1088;&#1072;&#1084;&#1082;&#1072;&#1093;&#32;&#1042;&#1072;&#1096;&#1077;&#1081;&#32;&#1090;&#1086;&#1074;&#1072;&#1088;&#1085;&#1086;&#1081;&#32;&#1087;&#1086;&#1079;&#1080;&#1094;&#1080;&#1080;&#44;&#32;&#1080;&#1084;&#1087;&#1086;&#1088;&#1090;&#32;&#1082;&#1086;&#1090;&#1086;&#1088;&#1099;&#1093;&#32;&#1074;&#32;&#1085;&#1072;&#1089;&#1090;&#1086;&#1103;&#1097;&#1077;&#1077;&#32;&#1074;&#1088;&#1077;&#1084;&#1103;&#32;&#1087;&#1088;&#1086;&#1076;&#1086;&#1083;&#1078;&#1072;&#1077;&#1090;&#32;&#1086;&#1089;&#1090;&#1072;&#1074;&#1072;&#1090;&#1100;&#1089;&#1103;&#32;&#1089;&#1090;&#1072;&#1073;&#1080;&#1083;&#1100;&#1085;&#1099;&#1084;&#44;&#32;&#1095;&#1090;&#1086;&#32;&#1076;&#1077;&#1083;&#1072;&#1077;&#1090;&#32;&#1080;&#1093;&#32;&#1087;&#1088;&#1080;&#1074;&#1083;&#1077;&#1082;&#1072;&#1090;&#1077;&#1083;&#1100;&#1085;&#1099;&#1084;&#1080;&#32;&#1076;&#1083;&#1103;&#32;&#1080;&#1084;&#1087;&#1086;&#1088;&#1090;&#1086;&#1079;&#1072;&#1084;&#1077;&#1097;&#1077;&#1085;&#1080;&#1103;&#46;&#32;&#1059;&#1073;&#1077;&#1076;&#1080;&#1090;&#1077;&#1089;&#1100;&#32;&#1089;&#1072;&#1084;&#1080;&#58;</p></div>
        </div>
    </td>
  </tr>
</tbody></table>
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px" align="center">
            <div style="height: 1px;">
                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 1px solid #BBBBBB;width: 100%" align="center" border="0" cellspacing="0">
                    <tbody><tr style="vertical-align: top">
                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" align="center"></td>
                    </tr>
                </tbody></table>
            </div>
        </td>
    </tr>
</tbody></table><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 16px;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif">
  ';
  //Получаем буфер
  ob_start();
  echo "<table style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\">\n";

  echo "\t<tr>\n";
  echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" width=\"15%\" align=\"center\">Код ТНВЭД товара</td>\n";
  echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" width=\"40%\" align=\"center\">Название товара</td>\n";
  echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" width=\"10%\" align=\"center\">Период устойчивого роста, мес.</td>\n";
  echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" width=\"15%\" align=\"center\">Импорт за 1 квартал 2017, $</td>\n";
  echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" width=\"10%\" align=\"center\">% прироста к 4 кварталу 2016 года</td>\n";
  echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" width=\"10%\" align=\"center\">Число регионов-импортеров за 1 квартал 2017 года</td>\n";
  echo "\t</tr>\n";

  while ($row=mysql_fetch_array($result)) {
    $field0=$row[0];
    $field1=$row[1];
    $field2=$row[2];
    $field3=$row[3];
    $field4=$row[4];
    $field5=$row[5];

    echo "\t<tr>\n";
    echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" align=\"center\">$field0</td>\n";
    echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\">$field1</td>\n";
    echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" align=\"center\">$field2</td>\n";
    echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" align=\"center\">$field3</td>\n";
    echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" align=\"center\">$field4</td>\n";
    echo "\t\t<td style=\"color: #2c3e50; padding: 5px; margin: 0; font-size: 14px; line-height: 17px; border-collapse: collapse; border: 1px solid #95a5a6;\" align=\"center\">$field5</td>\n";
    echo "\t</tr>\n";
  }
  echo "</table>\n";
  echo "<p style='font-size: 10px'>*выявляется на основе авторской методики (регистрационное свидетельство №12277 от 20.03.2009 Федерального агентства по информационным технологиям)</p>";
  $formedtable = ob_get_contents();
  ob_end_clean();
  $text1 = '</td>
    </tr>
</tbody></table><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px" align="center">
            <div style="height: 1px;">
                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 1px solid #BBBBBB;width: 100%" align="center" border="0" cellspacing="0">
                    <tbody><tr style="vertical-align: top">
                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" align="center"></td>
                    </tr>
                </tbody></table>
            </div>
        </td>
    </tr>
</tbody></table><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#555555;line-height:120%;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;">
        	<div style="font-size:12px;line-height:14px;color:#555555;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;text-align:left;"><div class="txtTinyMce-wrapper" style="font-size:12px; line-height:14px;"><p style="margin: 0;font-size: 14px;line-height: 16px;text-align: center"><strong><span style="font-size: 24px; line-height: 28px;">&#1052;&#1099; &#1087;&#1086;&#1085;&#1080;&#1084;&#1072;&#1077;&#1084;, &#1095;&#1090;&#1086; &#1076;&#1083;&#1103; &#1074;&#1093;&#1086;&#1078;&#1076;&#1077;&#1085;&#1080;&#1103; &#1085;&#1072; &#1085;&#1086;&#1074;&#1099;&#1081; &#1088;&#1099;&#1085;&#1086;&#1082; &#1085;&#1091;&#1078;&#1085;&#1086; &#1079;&#1085;&#1072;&#1090;&#1100; &#1075;&#1086;&#1088;&#1072;&#1079;&#1076;&#1086; &#1073;&#1086;&#1083;&#1100;&#1096;&#1077;. </span></strong></p></div></div>
        </div>
    </td>
  </tr>
</tbody></table>
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#555555;line-height:120%;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;">
        	<div style="font-size:12px;line-height:14px;color:#555555;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px">&#1048; &#1084;&#1099; &#1075;&#1086;&#1090;&#1086;&#1074;&#1099; &#1042;&#1072;&#1084; &#1074; &#1101;&#1090;&#1086;&#1084; &#1087;&#1086;&#1084;&#1086;&#1095;&#1100;. &#1047;&#1072;&#1087;&#1088;&#1072;&#1096;&#1080;&#1074;&#1072;&#1081;&#1090;&#1077; &#1091; &#1085;&#1072;&#1089; &#1075;&#1083;&#1091;&#1073;&#1080;&#1085;&#1085;&#1099;&#1081; &#1072;&#1085;&#1072;&#1083;&#1080;&#1079; &#1088;&#1099;&#1085;&#1086;&#1095;&#1085;&#1086;&#1081; &#1085;&#1080;&#1096;&#1080;, &#1080; &#1074; &#1076;&#1086;&#1087;&#1086;&#1083;&#1085;&#1077;&#1085;&#1080;&#1077; &#1082; &#1085;&#1077;&#1084;&#1091; &#1087;&#1086;&#1083;&#1091;&#1095;&#1080;&#1090;&#1077; &nbsp;&#1095;&#1105;&#1090;&#1082;&#1091;&#1102; &#1080;&#1085;&#1089;&#1090;&#1088;&#1091;&#1082;&#1094;&#1080;&#1102; &#1076;&#1077;&#1081;&#1089;&#1090;&#1074;&#1080;&#1081; &#1087;&#1086; &#1074;&#1099;&#1073;&#1086;&#1088;&#1091; &#1085;&#1086;&#1074;&#1099;&#1093; &#1087;&#1072;&#1088;&#1090;&#1085;&#1105;&#1088;&#1086;&#1074;.</p><p style="margin: 0;font-size: 14px;line-height: 16px"><br data-mce-bogus="1"></p><p style="margin: 0;font-size: 14px;line-height: 16px">Для начала отправьте нам письмо с отметкой, какой товар из списка Вас заинтересовал. В ответ мы пришлём индивидуальное предложение по глубинному анализу рынка. Укажите также в письме Ваши контактные данные (ФИО, телефон, название компании).</p><p style="margin: 0;font-size: 14px;line-height: 16px"><br>&#1045;&#1089;&#1083;&#1080; &#1091; &#1042;&#1072;&#1089; &#1074;&#1086;&#1079;&#1085;&#1080;&#1082;&#1083;&#1080; &#1082;&#1072;&#1082;&#1080;&#1077;-&#1083;&#1080;&#1073;&#1086; &#1074;&#1086;&#1087;&#1088;&#1086;&#1089;&#1099; &#1080;&#1083;&#1080; &#1079;&#1072;&#1090;&#1088;&#1091;&#1076;&#1085;&#1077;&#1085;&#1080;&#1103;, &#1042;&#1099; &#1084;&#1086;&#1078;&#1077;&#1090;&#1077; &#1085;&#1072;&#1087;&#1080;&#1089;&#1072;&#1090;&#1100; &#1080;&#1093; &#1074; &#1086;&#1073;&#1088;&#1072;&#1090;&#1085;&#1086;&#1084; &#1087;&#1080;&#1089;&#1100;&#1084;&#1077; &#1080;&#1083;&#1080; &#1086;&#1073;&#1088;&#1072;&#1090;&#1080;&#1090;&#1100;&#1089;&#1103; &#1082; &#1085;&#1072;&#1084; &#1087;&#1086; &#1090;&#1077;&#1083;&#1077;&#1092;&#1086;&#1085;&#1091;: 8 800 555 3420.</p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #3498DB" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: top">
                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
                    <!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width="700" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
                    <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 700px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 700px;color: #000000;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="700"><![endif]--><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">&nbsp;</td>
    </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #2c3e50" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: top">
                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
                    <!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width="700" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
                    <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 700px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 700px;color: #000000;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="700"><![endif]--><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#ecf0f1;line-height:120%;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;">
        	<div style="font-size:12px;line-height:14px;color:#ecf0f1;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center">&#169; &#1042;&#1083;&#1072;&#1076;&#1042;&#1085;&#1077;&#1096;&#1057;&#1077;&#1088;&#1074;&#1080;&#1089; 1998-2016.<br></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
          </td>
      </tr>
  </tbody></table>


</body></html>
  ';
//Тело получателя
$messageclient = "$text0$formedtable$text1";
//Тема получателя
$subject = 'Подбор товара для импортозамещения от VVS';
//Отправка
//Тело письма администратора успешное
$message_admin = "дата - $date_admin<br>mail - $mail<br>размер компании - $button_company<br>запрос позиция - $tn_pos<br>запрос результат:<br>----<br>$formedtable<br>----";
mail ($mail, $subject, $messageclient, $headers);
mail ($mail_admin, $subject_admin, $message_admin, $headers);
echo 'yes';
}

// свобождение памяти, занятой результатом запроса
mysql_free_result($result);

// закрытие соединения
mysql_close($link);

?>
