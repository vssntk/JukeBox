<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'user';

$connect = mysqli_connect($host, $user, $pass, $dbName);
//mysqli_set_charset($connect, "utf8");
if (!$connect) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>