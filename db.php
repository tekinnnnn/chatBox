<?php

$host = "localhost";
$dbname = "helpdesk";
$user = "root";
$pass = "12345";
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

try {
    $DB = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "[HATA]: Veritabanı -".$e->getMessage();
}
