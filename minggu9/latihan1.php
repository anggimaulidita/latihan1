<?php
$film = [
    [
        "judul"=>"Milea Suara dari Dilan",
        "genre"=>"Drama/Romantis",
        "sutradara"=>"Fajar Bustomi & Pidi Baiq",
        "gambar"=>"1.jpg",
        "durasi" => "103 menit"
    ],

    [
        "judul"=>"Sebelum Iblis Menjemput Ayat 2",
        "genre"=>"Horor",
        "sutradara"=>"Timo Tjahjanto",
        "gambar"=>"2.jpg",
        "durasi" => "110 menit"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>
<body>
    <h1> KATALOG FILM </h1>
<ul>
    <?php foreach ($film as $fi): ?>
    <li> 
        <a href="latihan2.php"><?= $fi["judul"]; ?> </a>
    </li>
    <?php endforeach; ?>
 </ul>
</body>
</html>