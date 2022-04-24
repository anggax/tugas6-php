<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pmrograman PHP dengan Array</title>
</head>
<body>
	<?php
	//penulisan array
	$nama[] = "Angga Purnama";
	$nama[] = "Angga";
	$nama[] = "Purnama";
	echo $nama[1] . $nama[2] . $nama[0];
	echo "<br>";
	//menhghitung elemen array
	$jum_array = count($nama);
	echo "jumlah elemen array = ".$jum_array;	
	?>
</body>
</html>