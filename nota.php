<?php
include "koneksi.php";

// cek apakah ada id di URL
if (!isset($_GET['id'])) {
    die("❌ ID Nota tidak ditemukan di URL.");
}

$id = (int) $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM servis WHERE id=$id");

if (!$result || mysqli_num_rows($result) == 0) {
    die("❌ Data nota tidak ditemukan di database.");
}

$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nota Servis Bengkel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .nota { width: 500px; border: 1px solid #000; padding: 20px; margin: auto; }
        h2, h3 { text-align: center; margin: 5px 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: center; }
        .footer { margin-top: 20px; font-size: 12px; text-align: center; }
    </style>
</head>
<body onload="window.print()">
    <div class="nota">
        <h2>Abadi Jaya</h2>
        <h3>Nota Servis Bengkel</h3>
        <p><b>No. Nota:</b> <?= $data['id'] ?></p>
        <p><b>Tanggal:</b> <?= $data['tanggal'] ?></p>
        <p><b>Kendaraan:</b> <?= $data['kendaraan'] ?> - <?= $data['nopol'] ?></p>

        <table>
            <tr>
                <th>Qty</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>1</td>
                <td><?= $data['keterangan'] ?></td>
                <td>Rp <?= number_format($data['harga'], 0, ',', '.') ?></td>
                <td>Rp <?= number_format($data['harga'], 0, ',', '.') ?></td>
            </tr>
        </table>

        <div class="footer">
            Terima kasih atas kunjungannya kami tunggu kembali kedatangannya
        </div>
    </div>
</body>
</html>
