<?php
$host = "database-1.cjk0syaiwgjx.ap-southeast-2.rds.amazonaws.com";
$user = "admin";
$pass = "arnetta12";
$db   = "dwu_db";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

