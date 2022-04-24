<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<?php
		if (empty($_POST['name'])) { //seleksi looping
			header("Location: loginempty.php"); //mengarahkan ke page redirect jika user tidak mengisi kolom nama
		} else if (empty($_POST['email'])) { //seleksi looping
			header("Location: loginempty.php"); //mengarahkan ke page redirect jika user tidak mengisi kolom email
		} else {
			echo "<center>Name :".$_POST['name']."</center><br>"; //menampilkan teks nama yang user inputkan saat login pada halaman
			echo "<center>Email :".$_POST['email']."</center><br>"; //menampilkan teks alamat email yang user inputkan saat login pada halaman
			date_default_timezone_set("Asia/Jakarta"); //setting zona waktu untuk wilayah Asia/Jakarta
			echo "<center>".date("d F Y"."</center><br>"); //menampilkan waktu terkini (tanggal) daripada user saat login pada halaman
			echo "<center>".date("g:i:s a"."</center><br>"); //menampilkan waktu terkini (jam) daripada user saat login pada halaman
		}
		?>
</body>
</html>
