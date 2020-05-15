<?php
//array multidimensi
$film=[
            ["judul"=>"Milea Suara dari Dilan",
            "genre"=>"Drama/Romantis",
            "sutradara"=>"Fajar Bustomi & Pidi Baiq",
            "gambar"=>"1.jpg",
            "durasi" => "103 menit"
            ],
            ["judul"=>"Sebelum Iblis Menjemput Ayat 2",
            "genre"=>"Horor",
            "sutradara"=>"Timo Tjahjanto",
            "gambar"=>"2.jpg",
            "durasi" => "110 menit"
            ],
            ["judul"=>"Warkop DKI Reborn",
            "genre"=>"Komedi",
            "sutradara"=>"Anggy Umbara",
            "gambar"=>"3.jpg",
            "durasi" => "107 menit"
            ],
            ["judul"=>"Habibie & Ainun 3",
            "genre"=>"Drama/Romance",
            "sutradara"=>"Hanung Bramantyo",
            "gambar"=>"4.jpg",
            "durasi" => "121 menit"
            ],
            ["judul"=>"Mariposa",
            "genre"=>"Drama Komedi Romantis",
            "sutradara"=>"Fajar Bustomi",
            "gambar"=>"5.jpg",
            "durasi" => "118 menit"
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
            <li>Durasi Film : <?= $fi["durasi"]?></li>
        </ul>
       
    <?php endforeach; ?>    
</body>
</html>