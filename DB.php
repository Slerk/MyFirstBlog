<?php

session_start();
$user = 'root';
$password = 'root';
$db = 'site';
$host = 'localhost';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db";
try {
    $connect = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}



function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    exit();
}

 ?>
