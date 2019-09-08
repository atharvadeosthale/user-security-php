<?php

$config["auth_salt"] = "atharvadeosthale";

$db["host"] = "localhost";
$db["user"] = "root";
$db["pass"] = "";
$db["name"] = "loginmodule";

$conn = mysqli_connect($db["host"], $db["user"], $db["pass"], $db["name"]);

if(!$conn)
{
	die("Error connecting to database.");
}

?>