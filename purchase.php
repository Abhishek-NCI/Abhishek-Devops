<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        
        $idLast=$_GET["Lastid"]; 
        $useruid=$_GET["useruid"]; 
        
        
         include_once 'include/dbh.inc.php';

    $sql = "UPDATE cart SET isActive=0 WHERE id=$idLast";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
         header('location:ack.php?useruid='.$useruid.'');
    } 
    else {
        echo "Error updating record: " . $conn->error;
         }

    $conn->close();
    ?>
        </body>
    </html>
