<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Latihan looping</title>
</head>
<body>
	<h2>membuat perulangan tabel</h2>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php
		for ($b =1;$b<=3;$b++){#b baris
			echo "<tr>";
			for ($k=1; $k <=5 ; $k++) {#k kolom
				echo "<td> $b,$k </td>";
			}
			echo "<tr>";
		}
		?>
	</table>
</body>
</html>