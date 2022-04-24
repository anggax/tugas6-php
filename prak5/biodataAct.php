<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<?php
		if (empty($_POST['namalengkap'])) { //seleksi looping
			header("Location: bioempty.php"); //mengarahkan ke page redirect jika user tidak mengisi kolom nama lengkap
		} else if (empty($_POST['namapanggilan'])) { //seleksi looping
			header("Location: bioempty.php"); //mengarahkan ke page redirect jika user tidak mengisi kolom nama panggilan
		} else if (empty($_POST['npm'])) { //seleksi looping
			header("Location: bioempty.php"); //mengarahkan ke page redirect jika user tidak mengisi kolom NPM
		} else if (empty($_POST['ttl'])) { //seleksi looping
			header("Location: bioempty.php"); //mengarahkan ke page redirect jika user tidak mengisi kolom Tempat dan tanggal lahir
		} else if (empty($_POST['jeniskelamin'])) { //seleksi looping
			header("Location: bioempty.php"); //mengarahkan ke page redirect jika user tidak mengisi kolom jenis kelamin
		} else if (empty($_POST['alamat'])) { //seleksi looping
			header("Location: bioempty.php"); //mengarahkan ke page redirect jika user tidak mengisi kolom alamat
		} else if (empty($_POST['telepon'])) { //seleksi looping
			header("Location: bioempty.php"); //mengarahkan ke page redirect jika user tidak mengisi kolom telepon
		} else if (empty($_POST['email'])) { //seleksi looping
			header("Location: bioempty.php"); //mengarahkan ke page redirect jika user tidak mengisi kolom email
		} else {
			echo "<center> Nama Lengkap: ".$_POST['namalengkap']."</center><br>"; //menampilkan teks nama lengkap pada halaman
			echo "<center> Nama Panggilan: ".$_POST['namapanggilan']."</center><br>"; //menampilkan teks nama panggilan pada halaman
			echo "<center> NPM: ".$_POST['npm']."</center><br>"; //menampilkan teks NPM pada halaman
			echo "<center> Tempat, tanggal lahir: ".$_POST['ttl']."</center><br>"; //menampilkan teks tempat dan tanggal lahir pada halaman
			echo "<center> Jenis Kelamin: ".$_POST['jeniskelamin']."</center><br>"; //menampilkan teks jenis kelamin pada halaman
			echo "<center> Alamat: ".$_POST['alamat']."</center><br>"; //menampilkan teks alamat pada halaman
			echo "<center> Telepon: ".$_POST['telepon']."</center><br>"; //menampilkan teks nomor telepon pada halaman
			echo "<center> Email: ".$_POST['email']."</center><br>"; //menampilkan teks alamat email pada halaman
			date_default_timezone_set("Asia/Jakarta"); //setting zona waktu untuk wilayah Asia/Jakarta
			echo "<center> Telah Login pada ".date("D, d F Y G:i:s"."<center>"); //menampilkan waktu terkini daripada user saat login pada halaman
		}
		?>
</body>
</html>
