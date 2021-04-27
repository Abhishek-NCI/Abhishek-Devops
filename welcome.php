<?php include 'header.php';?>
<html>
        <head>
         <title>Online Shop - Welcome</title>
        <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
 
    <body>
 <div class="container">

        <?php
            echo 'Welcome to ABCarrZ:::' . $_SESSION['useruid'];

        if (empty($_SESSION['username'])) 
        {
        //    header('location:index.php');
        }
 
            $useruid=($_SESSION["useruid"]); 
        //
        include_once 'include/dbh.inc.php';
        

        //execute the SQL query and return records
        $result = mysqli_query($conn, "SELECT * FROM items");
        ?>
        
        <h3><br>Choose Your Car</h3>

        <div >
        <h4>
        <a class = "btndownload" align="right" href="include/csv.php">Export CarList </a>
        </h4>
            </div>
        
        <table class="table">
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row["name"] ."</td> "
                        . "<td> <img src=\"" . $row["image_url"] . "\" height=\"45%\" width=\"50%\"></img></td>";
                echo "<td><a href=item.php?id=".$row["id"]."&useruid=".$useruid.">View More Details</td>";
                echo "</tr>";
                
            }
        ?>
        </table>
 </div>
    </body>


</html>