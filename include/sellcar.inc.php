<?php 

if (isset($_POST["submit"])) 
{
	$CarName = $_POST["CarName"];
	$CarBrand = $_POST["CarBrand"];
	$CarYear = $_POST["CarYear"];
	$CarPrice = $_POST["CarPrice"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	sellcars($conn, $CarName, $CarBrand, $CarYear, $CarPrice);
    
}
else 
{
	header("location: ../signup.php");
	exit();
}
?>