<?php
// коментарии 
//test commit

$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
$z = $x + $y;

// Здесь нарушены принципы безопасности
// 1. Принцип наименьших привелегий (root)
// 2. Слабый пароль
// 3. Секрет в коде 
//$conn = mysqli_connect("localhost", "root", "", "calc");
// 4. Код уязвимый для Sql-injection

include("C:\\AppParams/params.php");
$conn = mysqli_connect($DB_URL,$DB_USER,$DB_PWD,$DB_NAME);
$sql = "INSERT INTO log(Number1,Number2,Result,UserID) VALUES($x,$y,$z,'anonym')";
mysqli_query($conn,$sql);
// Проверка на ошибки:
//echo(mysqli_error($conn));
mysqli_close($conn);
echo($z);