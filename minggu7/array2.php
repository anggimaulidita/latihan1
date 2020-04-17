<?php
//array multidimensi/array dalam array/array bersarang
$mahasiswa =[
    ["Anggi Maulidita Khusnurida","19.51.0012","sistem informasi","anggikhusnurida00@gmail.com"],
    ["Maulidita","18.51.0012","sistem informasi","maul9@gmail.com"],
    ["Rida","17.51.0012","teknologi informasi","ida17@gmail.com"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR MAHASISWA</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
  <ul>
    <?php foreach($mhs as $m): ?>
        <li> <?php echo $m; ?></li>
    <?php endforeach; ?>
  </ul>
    <?php endforeach; ?>
</body>
</html>