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
        

<?php include 'header.php';?>
        <?php 
        
        $id=$_GET["id"]; 
        $useruid=$_GET["useruid"]; 
        
        $price=$_POST["price"]; 
        $qty=$_POST["qty"]; 
        
        $amount=$price*$qty;
        $safename2 = htmlspecialchars($price);
        $safename3 = htmlspecialchars($qty);
        
        include_once 'include/dbh.inc.php';
        

$sql = "INSERT INTO cart(useruid, itemid, quanity,isActive)
VALUES ('".$useruid."', ".$id.", ".$qty.",1)";
$safename1 = htmlspecialchars($sql);

if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
} else {
    echo "Error: " . $safename1 . "<br>" . $conn->error;
}

$conn->close();
        
        
        
        ?>
        
      
        <form class="form-horizontal" method="post" action="purchase.php?Lastid=<?php echo $last_id?>&userID=<?php echo $userID?>">
            <div class="form-group">
                <label class="control-label col-sm-2" for="user">     Unit Price  :</label>
                <div class="col-sm-10">
                    <input name="price" type="text" value="<?php echo $safename2?>" readonly="readonly"  class="form-control" id="user" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="add">  Quantity :</label>
                <div class="col-sm-10">
                    <input type="text" name="qty"  class="form-control" value="<?php echo $safename3?>" id="user" readonly="readonly">
                </div>
            </div>
            
              <div class="form-group">
                <label class="control-label col-sm-2" for="add">  Total Amount :</label>
                <div class="col-sm-10">
                    <input type="text" name="tot"  class="form-control" id="user" value="<?php echo $amount?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Purchase</button>
                </div>
            </div>
        </form> 
    </body>
</html>
