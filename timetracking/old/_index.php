<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$dbname = 'farfadet_db';
$charset = 'utf8';
$user = 'sveta';
$pass = '111';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$opt = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, $user, $pass, $opt);
$smtm = $pdo->query("SELECT start_date FROM husband_work_time");
while ($row = $smtm->fetch())
{
    echo $row['start_date'] . "</br>";
}
