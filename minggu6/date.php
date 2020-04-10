<?php
// date untuk menampilkan tanggal dengan format tertentu
		echo date(
			"l,d-M-Y",
			time() +
				60 * 60 * 60 * 24 * 1000
		);
// dengan format tersebut kita dapat mengetahui 1000 hari akan datang hari apa 
?>