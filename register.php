<?php
session_start();
if(isset($_SESSION["username"]))
{
	header("Location: loginsuccess.php");
	die();
}
require_once "config.php";
if(isset($_POST["register"]))
{
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$phash = sha1(sha1($pass.$config["auth_salt"]));
	$result = mysqli_query($conn, "INSERT INTO users (username,password) VALUES ('$user','$phash');");
	if(!$result)
	{
		die("Error creating user account");
	}
	else
	{
		die("User Account created! You can login now");
	}
}
?>