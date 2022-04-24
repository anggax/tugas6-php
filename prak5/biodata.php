<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
	<link rel="stylesheet" type="text/css" href="stylebio.css">
</head>
<body>
	<center><h1> BIODATA </h1></center>
	<form method="POST" action="biodataAct.php"> 
		<table width="400" align="center" cellspacing="2" cellpadding="4">
			<tr>
				<td width="200"> Nama Lengkap </td>
				<td><input type="text" name="namalengkap"></td>
			</tr>
			<tr>
				<td width="200"> Nama Panggilan </td>
				<td><input type="text" name="namapanggilan"></td>
			</tr>
			<tr>
				<td width="200"> NPM </td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td width="200"> Tempat, tanggal lahir </td>
				<td><input type="text" name="ttl"></td>
			</tr>
				<tr>
				<td width="200"> Jenis Kelamin </td>
				<td><input type="text" name="jeniskelamin"></td>
			</tr>
			<tr>
				<td width="200"> Alamat </td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="200"> Nomor Telepon </td>
				<td><input type="text" name="telepon"></td>
			</tr>
			<tr>
				<td width="200"> Email </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td><input type="submit" name="btnLogin" value="Login"> 
					<input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
	</form>
</body>
</html>