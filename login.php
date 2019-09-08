<?php
require_once "config.php";
session_start();
if(isset($_SESSION["username"]))
{
	header("Location: loginsuccess.php");
	die();
}
if(isset($_POST["login"]))
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$phash = sha1(sha1($password.$config["auth_salt"]));
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$phash';");
	$count = mysqli_num_rows($result);
	if($count == 1)
	{
		session_start();
		$_SESSION["username"] = $username;
		header("Location: loginsuccess.php");
		die();
	}
	else
	{
		echo "Invalid credentials entered.";
	}
}
?>