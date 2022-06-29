<?php
$dsn = 'mysql:host=localhost;dbname=store'; // data source name
$user = 'root';
$pass = '';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $connect = new PDO($dsn, $user, $pass, $option);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $q = "INSERT INTO items (name) VALUES ('product4')";
    // $q = "INSERT INTO items (name) VALUES ('منتج')";
    // $connect->exec($q);
    // echo "connected";

}

catch(PDOException $e) {
    echo "failed " . $e->getmessage();

}


