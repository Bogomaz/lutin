<?php
// Здесь работа с БД ведётся с помощью MYSQLI
ini_set('display_errors',1);
error_reporting(E_ALL);
// Разбор данных, поступивших из формы 
$start_day = $_POST['startDay'];
$start_time = $_POST['startTime']; 
$end_day = $_POST['endDay'];
$end_time = $_POST['endTime'];        

//Запись в базу времени и даты выхода из дома
$mysqli = OpenConnection();
$insert = $mysqli->query("INSERT INTO `husband_work_time` (`id`, `start_date`, `start_time`,`end_date`, `end_time`) VALUES (NULL, '$start_day', '$start_time','$end_day', '$end_time')");
exit('<meta http-equiv="refresh" content="0; url=index.php" />');
CloseConnection($mysqli);

function OpenConnection()
{
    $connection = new mysqli("localhost", "root", "", "farfadet_db");
    // проверка подключения к БД
    if (mysqli_connect_errno()) 
    {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $connection;
}
function CloseConnection($connection)
{
    $connection->close();
}