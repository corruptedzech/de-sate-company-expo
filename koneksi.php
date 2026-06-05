<?php
$host = "sql109.infinityfree.com";
$user = "if0_42099355";
$pass = "Tanjungpinang14"; 
$db   = "if0_42099355_db_sate";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>