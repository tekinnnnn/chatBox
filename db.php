<?php
/**
 * Created by PhpStorm.
 * User: wissen
 * Date: 18.5.2015
 * Time: 10:24
 */

$host = "localhost";
$dbname = "helpdesk";
$user = "root";
$pass = "";
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

try {
    $DB = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "[HATA]: Veritabanı -".$e->getMessage();
}