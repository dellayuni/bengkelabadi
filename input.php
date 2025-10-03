<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Servis</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .form-box { width: 400px; margin: 50px auto; background: #fff; padding: 20px; border-radius: 8px; }
        input, textarea, select { width: 100%; padding: 8px; margin: 8px 0; }
        button { background: green; color: #fff; padding: 10px; width: 100%; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Input Servis Motor</h2>
        <form action="proses.php" method="POST">
            <label>Tanggal</label>
            <input type="date" name="tanggal" required>

            <label>Jenis Kendaraan</label>
            <input type="text" name="kendaraan" placeholder="Contoh: Supra X" required>

            <label>No. Polisi</label>
            <input type="text" name="nopol" placeholder="B 1234 CD" required>

            <label>Harga</label>
            <input type="number" name="harga" required>

            <label>Keterangan</label>
            <textarea name="keterangan" rows="3" required></textarea>

            <button type="submit">Simpan & Cetak Nota</button>
        </form>
    </div>
</body>
</html>
