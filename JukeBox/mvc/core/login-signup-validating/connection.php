<?php

// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $dbName = 'user';

// $connect = mysqli_connect($host, $user, $pass, $dbName);
// //mysqli_set_charset($connect, "utf8");
// if (!$connect) {
//     die('Connection failed: ' . mysqli_connect_error());
// }
    header('Access-Control-Allow-Origin: *');
    
    $host = 'localhost';
    $dbName = 'jukeboxmusic';
    $username = 'root';
    $password = '';

    try{
        $connect = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
        $connect  -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex){
        die(json_encode(array('status' => 'failed', 'data' => 'Unable to connect: ' . $ex->getMessage())));
    }

?>