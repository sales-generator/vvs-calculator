<?php
//Поля формы
$source_site = $_POST["source_site"];
$button_company = $_POST["company-size"];
$mail = $_POST["email"];
$tn_pos = $_POST["tnved-search"];
//телефон для zimport
if ($_POST["source_site"] == zimport) {
    $phone_zimport = $_POST["phone"];
} elseif ($_POST["source_site"] == vvs-info) {
    $phone_zimport = $_POST["phone"];
} else {
	;
};
//Декодер полных имен из ключа добавлен. Новая переменная $source_site_decoded. Дата 2016.07.28
if ($_POST["source_site"] == BR34TD0N02IZ57Y9QUTGB41QUJIY34EA) {
    $source_site_decoded = "Комитет промышленности и торговли Волгоградской области";
} else {
	;
};
//Оформление письма
//Дата
$date_admin = date('l jS \of F Y h:i:s A');
$date_admin_theme = date("Y.m.d");
$date_sql = date("Y-m-d H:i:s");
//Заголовки
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: VladVneshService <inbox@vvs-info.ru>' . "\r\n";
$headers .= 'Reply-To: pr@vvs-info.ru' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
//Адрес партнера в зависимости от параметра src
if ($_POST["source_site"] == zimport) {
    $mail_partner = "vladimir@zimport.ru";
} elseif ($_POST["source_site"] == test) {
    $mail_partner = "admin@vvs.elcom.ru";
} else {
	$mail_partner = "no";
};
//Адрес администратора
$mail_admin = "online@vvs.elcom.ru";
//тема администратора
$subject_admin = "Заполнен виджет ТОП 100 - $date_admin_theme";

error_reporting(0); // не выводить ни замечаний, ни предупреждений, ни ошибок

// соединение с сервером базы данных
$link = mysql_connect("localhost", "u0002213_widgets", "pAAR5xwO") or die("Нет соединения с базой данных");
// выбор базы данных
mysql_select_db("u0002213_default") or die("Не найдена БД");
// строка из формы для выполнения запроса
// экранируем мыло для sql
$mailsql = mysql_real_escape_string($_POST['email']);
//кодер
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");
$search = mysql_real_escape_string($_POST['tnved-search']);
// тело запроса
$query = "SELECT
  `BASE_2016Q4`.tn_code,
  `BASE_2016Q4`.tn_name,
  `BASE_2016Q4`.tn_period,
  `BASE_2016Q4`.tn_money,
  `BASE_2016Q4`.tn_percentage,
  `BASE_2016Q4`.tn_region
FROM `BASE_2016Q4`
WHERE `BASE_2016Q4`.tn_pos = $search";
// переменная с запросом
$result = mysql_query($query);
//количество строк после запроса
$resultcheck = mysql_num_rows($result);
//проверка количества строк
if($resultcheck == 0) { //если нет, командуем вывести пустой результат
  $resultstatus = 0;

	//Вставка результата в историю
	mysql_query("INSERT INTO `history` (`Result`, `Date`, `Source`, `Mail`, `Size`, `Position` )
		VALUES ('$resultstatus','$date_sql','$source_site pho: $phone_zimport','$mailsql','$button_company','$tn_pos')");
  //Тело письма администратора пустое
  //блядский zimport
  if ($_POST["source_site"] == zimport) {
    $message_admin_empty = "Поиск без результатов<br>Источник - $source_site<br>дата - $date_admin<br>mail - $mail<br>phone - $phone_zimport<br>размер компании - $button_company<br>запрос позиция - $tn_pos";
  } elseif ($_POST["source_site"] == vvs-info) {
    $message_admin_empty = "Поиск без результатов<br>Источник - $source_site<br>дата - $date_admin<br>mail - $mail<br>phone - $phone_zimport<br>размер компании - $button_company<br>запрос позиция - $tn_pos";
  } else {
  	$message_admin_empty = "Поиск без результатов<br>Источник - $source_site$source_site_decoded<br>дата - $date_admin<br>mail - $mail<br>размер компании - $button_company<br>запрос позиция - $tn_pos";
  };
  //Письмо администратору
  mail ($mail_admin, $subject_admin, $message_admin_empty, $headers);
  //Письмо партнеру
  if ($mail_partner == "no") {
  } else {
  mail ($mail_partner, $subject_admin, $message_admin_empty, $headers);
  };
  $tn_pos_fail = substr($tn_pos, 0, 2); //сокращаем позицию до группы
  mysql_query("SET NAMES 'utf8'"); //указание кодировки для работы с mysql
  mysql_query("SET CHARACTER SET 'utf8'"); //указание кодировки для работы с mysql
  mysql_query("SET SESSION collation_connection = 'utf8_general_ci'"); //указание кодировки для работы с mysql
  $search = mysql_real_escape_string($tn_pos_fail); //экранирование символов для работы с mysql
  // тело запроса
  $query = "SELECT
    `BASE_2016Q4`.tn_code,
    `BASE_2016Q4`.tn_name,
    `BASE_2016Q4`.tn_period,
    `BASE_2016Q4`.tn_money,
    `BASE_2016Q4`.tn_percentage,
    `BASE_2016Q4`.tn_region
  FROM `BASE_2016Q4`
  WHERE BASE_2016Q4.TN_CODE LIKE '$search%'";
  $result = mysql_query($query); // переменная с запросом
  $resultcheck = mysql_num_rows($result); //количество строк после запроса
  //полный текст ошибки
  echo "<p>По итогу предыдущего квартала в рамках Вашей товарной позиции не удалось подобрать товары, выгодные для поставок в Россию. И при этом в рамках Вашей товарной группы $tn_pos_fail найдено $resultcheck позиций.</p>
  <p>Повторите запрос с иной позицией или свяжитесь снами по телефону +7 495 565-3551, а также по почте inbox@vvs-info.ru</p>";
	//echo "no"; //ответ для jquery (рудимент до 20160802)
} elseif($resultcheck > 0) { //если что-то есть, продолжаем
	//echo "go on";
	$resultstatus = 1;
	$result = mysql_query($query) or die("Запрос ошибочный"); // проверка запроса на правильность
	//Вставка результата в историю
	mysql_query("INSERT INTO `history` (`Result`, `Date`, `Source`, `Mail`, `Size`, `Position` )
		VALUES ('$resultstatus','$date_sql','$source_site  pho: $phone_zimport','$mailsql','$button_company','$tn_pos')");
//далее формируем тушку сообщения (вынесено в отдельный файл)
include '../mail/template-vvs.php';
include '../mail/template-all.php';
//Тело получателя
//if ($_POST["source_site"] == 'vvs-info') {
//  $messageclient = "$textvvs0$formedtable$textvvs1";
//} else {
//  $messageclient = "$text0$formedtable$text1$text_partner$text2";
//};
$messageclient = "$text0$formedtable$text1";
//Тема получателя
$subject = 'Подбор товара для импортозамещения от VVS';
//Отправка
//Тело письма администратора успешное
//блядский zimport
if ($_POST["source_site"] == zimport) {
  $message_admin = "Источник - $source_site<br>дата - $date_admin<br>mail - $mail<br>phone - $phone_zimport<br>размер компании - $button_company<br>запрос позиция - $tn_pos<br>запрос результат:<br>----<br>$formedtable<br>----";
} elseif ($_POST["source_site"] == vvs-info) {
  $message_admin = "Источник - $source_site<br>дата - $date_admin<br>mail - $mail<br>phone - $phone_zimport<br>размер компании - $button_company<br>запрос позиция - $tn_pos<br>запрос результат:<br>----<br>$formedtable<br>----";
} else {
  $message_admin = "Источник - $source_site$source_site_decoded<br>дата - $date_admin<br>mail - $mail<br>размер компании - $button_company<br>запрос позиция - $tn_pos<br>запрос результат:<br>----<br>$formedtable<br>----";
};
mail ($mail, $subject, $messageclient, $headers);
mail ($mail_admin, $subject_admin, $message_admin, $headers);
//Письмо партнеру
if ($mail_partner == "no") {
} else {
mail ($mail_partner, $subject_admin, $message_admin, $headers);
};
echo 'yes';
}

// свобождение памяти, занятой результатом запроса
mysql_free_result($result);

// закрытие соединения
mysql_close($link);

?>
