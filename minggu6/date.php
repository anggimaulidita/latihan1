<?php
// date untuk menampilkan tanggal dengan format tertentu
		echo date(
			"l,d-M-Y",
			time() +
				60 * 60 * 60 * 24 * 100
		);
// dengan format tersebut kita dapat mengetahui 100 hari akan datang hari apa 
?>