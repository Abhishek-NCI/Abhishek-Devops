<?php 
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 </head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="navbar-header navbar-left">
      <a class="navbar-brand" href="index.php">ABCARRZ</a>
    </div>
    <div class="nav">
      <a class="navbar-brand" aria-current="page" href="index.php">HOME </a>
      <a class="navbar-brand" aria-current="page" href="contact.php">CONTACT US</a>
        <?php 
          if (isset($_SESSION["useruid"])) 
          {
            echo '<a class="nav-link navbar-brand" href="welcome.php">BUY CAR</a>';
            echo '<a class="nav-link navbar-brand" href="sell.php">SELL CAR</a>'; 
            echo '<a class="nav-link navbar-brand" href="include/logout.inc.php">LOG OUT</a>';
          }
          else
          {
            echo '<a class="nav-link navbar-brand" href="login.php">LOGIN</a>';
            echo '<a class="nav-link navbar-brand" href="signup.php">SIGNUP</a>';
          }
         ?>
    </div>
  </div>
</nav>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>