<?php
//array multidimensi
$film=[
            ["judul"=>"Milea Suara dari Dilan",
            "genre"=>"Drama/Romantis",
            "sutradara"=>"Fajar Bustomi & Pidi Baiq",
            "gambar"=>"1.jpg"
            ],
            ["judul"=>"Sebelum Iblis Menjemput Ayat 2",
            "genre"=>"Horor",
            "sutradara"=>"Timo Tjahjanto",
            "gambar"=>"2.jpg"
            ],
            ["judul"=>"Warkop DKI Reborn",
            "genre"=>"Komedi",
            "sutradara"=>"Anggy Umbara",
            "gambar"=>"3.jpg"
            ],
        ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Film Indonesia</title>
</head>
<body>
    <h1>KATALOG FILM </h1>
    <?php foreach($film as $fi):?>
        
        <ul>
            <li>
                <img src="img/<?=$fi["gambar"];?>">
            </li>
            <li>Judul Film    : <?= $fi["judul"]?></li>
            <li>Ganre Film    : <?= $fi["genre"]?></li>
            <li>Sutradara : <?= $fi["sutradara"]?></li>
           
        </ul>
       
    <?php endforeach; ?>    
</body>
</html>