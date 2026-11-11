<?php
$host = "phpmyadmin.gobisnis.cloud";
$user = "root";
$password = "mysqlbayu2026!";
$db = "db_ripai";
$port = 3307;

mysqli_report(MYSQLI_REPORT_OFF) ;
$conn = mysqli_connect($host, $user, $password, $db, $port) ;

if (!$conn) {
    die("koneksi gagal :" . mysqli_connect_error()) ;
}
?>
