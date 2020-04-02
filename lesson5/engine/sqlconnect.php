<?php
$sqlserver = "localhost";
$sqluser = "root";
$sqlpass = "";
$sqlbase = "lesson5";

$connection = mysqli_connect($sqlserver, $sqluser, $sqlpass, $sqlbase);

if (!$connection) {
    echo "Ошибка: Невозможно установить соединение с базой данных<br>";
    echo "Код ошибки:".mysqli_connect_errno();
    echo "Текст ошибки:".mysqli_connect_error();
    exit;
}
?>