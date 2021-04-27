<?php 
  include_once 'header.php';
 ?>

 	<section class="signup-form">
	 <div>
	 	<h2 style="text-align: center;">Log In</h2>
	 </div>
	<div class="d-flex justify-content-center">
		<form class="form-horizontal" action="include/login.inc.php" method="post">
			<div class="form-group">
				<label for="uid">User Name/Email</label>
				<input type="text" class="form-control" id="uid" name="uid" placeholder="Username/Email...">
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

	 
 	<?php 
 		if (isset($_GET["error"]))
 		{
 			if ($_GET["error"] == "emptyinput") 
 			{
 				echo "<div class='d-flex justify-content-center'><p class='text-danger'> Fill in all Fields!</p></div>";
 			}
 			elseif ($_GET["error"] == "wronglogin")
 			{
 				echo "<div class='d-flex justify-content-center'><p class='text-danger'> Incorrect Login Information!</p></div>";
 			}
 		}
 	 ?>
 	</section>