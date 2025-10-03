<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "berkah_cuci"; // sesuaikan dengan nama database Anda

$koneksi = mysqli_connect("localhost", "root", "", "berkah_cuci");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
