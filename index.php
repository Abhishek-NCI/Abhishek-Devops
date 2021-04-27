<?php 
  include_once 'header.php';
 ?>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/image1.jpg" alt="Home Workout" width="1100" height="500">
      <div class="carousel-caption">
      	<h2> BUY YOUR DREAM CAR WITH US </h2>
    </div>
    </div>
    <div class="carousel-item">
      <img src="Images/image3.jpg" alt="Yoga" width="1100" height="500">
      <div class="carousel-caption">
      	<h2> SELL YOUR USED CARS </h2>
    </div>
    </div>
    <div class="carousel-item">
      <img src="Images/image4.jpg" alt="Personalized" width="1100" height="500">
      <div class="carousel-caption">
      	<h2> BEST MARKET PRICES & DISCOUNTS ON CARS </h2>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
 	<div class="py-5">
 		<h3 class="text-center"> ABOUT ABCarrZ </h3>
 	</div>
 	<div class="container-fluid">
 		<div class="row">
 		<div class="col-lg-6 col-md-6 col-12">
 			<img src="Images/vintage1.jpg" class="image-fluid aboutimg">	
 		</div>	
 	<div class="col-lg-6 col-md-6 col-12">
 		<h2 class="display-4"> Why Choose Us ? </h2>
 		<p class="py-3">We are a family run business based in Dublin 1, serving all areas of Dublin and surrounding counties. With over 30 years in the Motor industry and 25 of those years in motor retail sales. we have gained a wealth of experience in the motor industry, and we are passionate about customer satisfaction.
 		</p>
 		<a href="login.php" class="btn btn-success"> Login to Buy/Sell Car </a>
   </div>
   </div>
  <br><?php include_once 'footer.php'; ?></br>
</section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
