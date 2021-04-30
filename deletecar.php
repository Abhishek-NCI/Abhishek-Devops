<?php

include "include/dbh.inc.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$safename4 = htmlspecialchars($id);

$del = mysqli_query($conn,"delete from sellcar where id = '$safename4'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:sell.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>