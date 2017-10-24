<?php
/* Проект PHP код.
   Первая версия.
   06-01-2011
*/
include('config.php');
include('class.Main.php');
$main=new Main();
if ($main->isParamsOK()==true)
{
    $main->Run();
}
else
{
    die("Script error");
}
?>
