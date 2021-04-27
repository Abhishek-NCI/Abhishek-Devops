<?php 

$serverName = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "phpproject01";

$conn = mysqli_connect($serverName, $dbusername, $dbpassword, $dbname);

if (!$conn) 
{
	die("Connection Failed: " . mysqli_connect_error());
}
?>