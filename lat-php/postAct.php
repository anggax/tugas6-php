<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<?php
		if (empty($_POST['name'])) {
			header("Location: loginempty.php");
		} else if (empty($_POST['email'])) {
			header("Location: loginempty.php");
		} else {
			echo "<center>Name :".$_POST['name']."</center><br>";
			echo "<center>Email :".$_POST['email']."</center><br>";
			date_default_timezone_set("Asia/Jakarta");
			echo "<center>".date("d F Y"."</center><br>");
			echo "<center>".date("g:i:s a"."</center><br>");
		}
		?>
</body>
</html>
