<?php
// cek apakah $_Get terdapat data?
if (!isset($_GET["judul"])) {
    //redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
</head>

<body>
    <h1>Detail Film</h1>
<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["judul"]; ?></li>
    <li><?= $_GET["genre"]; ?></li>
    <li><?= $_GET["sutradara"]; ?></li>
    <li><?= $_GET["durasi"]; ?></li>
</ul>

    <a href="latihan1.php">Kembali ke halaman sebelumnya</a>
</body>
</html>