<?php
// соединение с сервером базы данных
$link = mysql_connect("localhost", "u6429641_default", "VzVSl1PI") or die("Нет соединения с базой данных");
// выбор базы данных
mysql_select_db("u6429641_default") or die("Не найдена БД");
// строка из формы для выполнения запроса
$search = mysql_real_escape_string($_POST['tnved-search']);
// тело запроса
$query = "SELECT
  `base_20160428_064056`.tn_code
FROM `base_20160428_064056`
WHERE `base_20160428_064056`.tn_pos = $search";
// переменная с запросом
$result = mysql_query($query);
//количество строк после запроса
$resultcheck = mysql_num_rows($result);
//проверка количества строк
if($resultcheck == 0) { //если нет, командуем вывести пустой результат
	echo "no";
} elseif($resultcheck > 0) { //если что-то есть, продолжаем
	echo "yes";
}
// свобождение памяти, занятой результатом запроса
mysql_free_result($result);
// закрытие соединения
mysql_close($link);
?>
