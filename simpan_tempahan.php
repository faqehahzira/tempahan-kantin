<?php
// Dapatkan data dari form
$nama = $_POST['nama'];
$menu = $_POST['menu'];
$tarikh = date('d/m/Y H:i:s');
$no_tempahan = rand(1000, 9999);

// Format untuk simpan dalam .txt
$data = "\n========================================\n";
$data .= "No Tempahan: $no_tempahan\n";
$data .= "Tarikh: $tarikh\n";
$data .= "Nama: $nama\n";
$data .= "Menu: $menu\n";
$data .= "Status: Menunggu\n";
$data .= "========================================\n";

// Simpan ke fail tempahan.txt
file_put_contents("tempahan.txt", $data, FILE_APPEND | LOCK_EX);

// Papar mesej berjaya
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tempahan Berjaya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="max-width:400px;margin:50px auto;background:white;padding:30px;border-radius:10px;text-align:center;">
        <h1 style="color:#4CAF50;">✓ Tempahan Berjaya!</h1>
        <p><strong>No. Tempahan:</strong> <?php echo $no_tempahan; ?></p>
        <p><strong>Nama:</strong> <?php echo htmlspecialchars($nama); ?></p>
        <p><strong>Menu:</strong> <?php echo htmlspecialchars($menu); ?></p>
        <p><strong>Masa:</strong> <?php echo $tarikh; ?></p>
        <hr>
        <p>📌 Sila tunjukkan No. Tempahan ini di kantin.</p>
        <p>⏰ Waktu rehat: 1:00 - 1:30 petang</p>
        <br>
        <a href="index.html" style="background:#4CAF50;color:white;padding:10px 20px;text-decoration:none;border-radius:5px;">Kembali</a>
    </div>
</body>
</html>