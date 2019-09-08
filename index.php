<?php
session_start();
if(isset($_SESSION["username"]))
{
	header("Location: loginsuccess.php");
	die();
}
?>
<html>
<head>
	<title>Simple Login Module</title>
</head>
<body>
	<h2 align="center">Login to website</h2>
	<form method="post" action="login.php">
		Username: <input type="text" name="username"><br><br>
		Password: <input type="password" name="password"><br><br>
		<input type="submit" value="Login" name="login">
	</form>
	<h2 align="center">Create an Account</h2>
	<form method="post" action="register.php">
		Username: <input type="text" name="user"><br><br>
		Password: <input type="password" name="pass"><br><br>
		<input type="submit" value="Login" name="register">
</body>
</html>