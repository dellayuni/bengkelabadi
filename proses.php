<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tanggal    = $_POST['tanggal'];
    $kendaraan  = $_POST['kendaraan'];
    $nopol      = $_POST['nopol'];
    $harga      = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    // Simpan data
    $sql = "INSERT INTO servis (tanggal, kendaraan, nopol, harga, keterangan) 
            VALUES ('$tanggal', '$kendaraan', '$nopol', '$harga', '$keterangan')";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        $id = mysqli_insert_id($koneksi); // ambil ID terakhir
        header("Location: nota.php?id=$id"); // arahkan ke nota
        exit;
    } else {
        echo "❌ Gagal simpan: " . mysqli_error($koneksi);
    }
}
?>
