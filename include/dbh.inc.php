<?php 

$serverName = "devopsdatabase01.ck8tyw9waixp.us-east-1.rds.amazonaws.com";
$dbusername = "admin";
$dbpassword = "admin1234";
$dbname = "phpproject01";

$conn = mysqli_connect($serverName, $dbusername, $dbpassword, $dbname);

if (!$conn) 
{
	die("Connection Failed: " . mysqli_connect_error());
}
?>