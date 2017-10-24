<?php
date_default_timezone_set('Europe/Moscow');
ini_set('max_execution_time', 1000);
mb_internal_encoding("UTF-8");
require('connect.php');

$input_file_name = 'xlsx/2017q2.xlsx';
$excel_data = array();

if(!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($connect,"utf8");

require('Classes/PHPExcel/IOFactory.php');

try
{
    $input_file_type = PHPExcel_IOFactory::identify($input_file_name);
    $objReader = PHPExcel_IOFactory::createReader($input_file_type);
    $objPHPExcel = $objReader->load($input_file_name);
}
catch(Exception $e)
{
    die('Error loading file "'.pathinfo($input_file_name,PATHINFO_BASENAME).'": '.$e->getMessage());
}


//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();

for ($row = 2; $row <= $highestRow; $row++)
{
    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

    //  Insert row data array into your database of choice here
    $sql = "INSERT INTO BASE_2017Q2 (tn_pos, tn_code, tn_name, tn_period, tn_money, tn_percentage, tn_region)
			VALUES ('".$rowData[0][0]."', '".$rowData[0][1]."', '".$rowData[0][2]."', '".$rowData[0][3]."', '".$rowData[0][4]."', '".round(($rowData[0][5] * 100), 2).'%'."', '".$rowData[0][6]."')";

    if (mysqli_query($connect, $sql)) {
        $excel_data[] = $rowData[0];
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Print excel data
echo "<table>";
foreach ($excel_data as $index => $excelraw)
{
    echo "<tr>";
    foreach ($excelraw as $excelcolumn)
    {
        echo "<td>".$excelcolumn."</td>";
    }
    echo "</tr>";
}
echo "</table>";


$connect->close();



