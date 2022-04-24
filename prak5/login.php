<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
<h1>Login</h1>
<form method="POST" action="loginAct.php">
	<table width="400" align="center" cellspacing="2" cellpadding="2">
		<tr>
			<td width="130"> Nama </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td width="130"> Email </td>
			<td><input type="text" name="email"></td>
		</tr>
		<div class="button">
			<input type="submit" name="btnLogin" value="Login">	
		</div>	
	</table>
</form>
</body>
</html>