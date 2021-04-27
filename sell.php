<?php 
  include_once 'header.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" integrity="sha256-piqEf7Ap7CMps8krDQsSOTZgF+MU/0MPyPW2enj5I40=" crossorigin="anonymous" />
</head>
<body>

   <?php 
  include_once 'include/dbh.inc.php';
    ?> 

  <div class="d-flex justify-content-center">
    <form class="form w-50" action="include/sellcar.inc.php" method="post">
      <div class="form-group">
        <label for="CarName">Car Name</label>
        <input type="text" class="form-control" id="CarName"  name="CarName">
      </div>
      <div class="form-group">
        <label for="CarBrand">Car Brand</label>
        <input type="text" class="form-control" id="CarBrand"  name="CarBrand">
      </div>
      <div class="form-group">
        <label for="CarYear">Car Year</label>
        <input type="number" class="form-control" id="CarYear"  name="CarYear">
      </div>
      <div class="form-group">
        <label for="CarPrice">Car Price (In Euro)</label>
        <input type="number" class="form-control" id="CarPrice"  name="CarPrice">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">ADD NEW</button>
    </form>
  </div>
  

  <div class="d-flex justify-content-center" style="margin-top: 20px;">
  <table class="table border w-50">
    <thead>
      <tr>
        <th scope="col">Car Name</th>
        <th scope="col">Car Brand</th>
        <th scope="col">Car Year</th>
        <th scope="col">Car Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
        include "include/dbh.inc.php"; // Using database connection file here

        $records = mysqli_query($conn,"select * from sellcar"); // fetch data from database

        while($data = mysqli_fetch_array($records))
        {
        ?>
          <tr>
            <td><?php echo $data['CarName']; ?></td>
            <td><?php echo $data['CarBrand']; ?></td>
            <td><?php echo $data['CarYear']; ?></td>
            <td><?php echo $data['CarPrice']; ?></td>
            <td><a class="btn btn-danger" href='deletecar.php?id=<?php echo $data['id']; ?>'>Delete
            </a></td>
          </tr> 
        <?php
        }
    
      ?>
    </tbody>
  </table>
</div>

<?php mysqli_close($conn); // Close connection ?>


  <script src="js/main.js" type="text/javascript"></script>
</body>
</html>