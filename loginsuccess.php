<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("Location: index.php");
	die();
}
?>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	Logged in as <?php echo $_SESSION["username"]; ?><br>
	<a href="logout.php">Logout</a>
</body>
</html>