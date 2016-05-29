<?php
//Здесь работа с БД ведётся с помощью PDO

ini_set('display_errors', 1);
error_reporting(E_ALL);

$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$work = $_POST['work'];   

$host = 'localhost';
$user = 'sveta';
$pass= '111';
$db = 'farfadet_db';
$charset = 'utf8';

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";
$opt = array(
    PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, $user, $pass, $opt);

$insert = $pdo->prepare('INSERT INTO daily_pursuits (start_time, end_time, work) VALUES(?, ?, ?)' );
print_r($insert);
//$insert->execute(array($start_time, $end_time, $work));

//exit("<meta http-equiv = 'refresh' content = '0'; upl = 'index.php'/>");


//$insert = $mysqli->query("INSERT INTO `daily_pursuits`(`id`,`start_time`, `end_time`, `work`) VALUES (NULL, '$start_time', '$end_time', '$work')");
//exit('<meta http-equiv = "refresh" content = "0; url = index.php" />');

