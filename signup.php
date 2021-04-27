<?php 
  include_once 'header.php';
 ?>

 	<section class="signup-form">
		 <div>
 			<h2 style="text-align: center;">Sign Up</h2>
		</div>

		 <div class="d-flex justify-content-center">
			<form class="form-horizontal" action="include/signup.inc.php" method="post">
				<div class="form-group">
					<label for="name">Full Name</label>
					<input type="text" class="form-control" id="name"  name="name" placeholder="Enter Full Name">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email"  name="email" placeholder="Enter Email">
				</div>
				<div class="form-group">
					<label for="uid">User Name</label>
					<input type="text" class="form-control" id="uid"  name="uid" placeholder="Enter User Name">
				</div>
				<div class="form-group">
					<label for="pwd">Password</label>
					<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="pwdrepeat">Confirm Password</label>
					<input type="password" class="form-control" id="pwdrepeat" name="pwdrepeat" placeholder="Confirm Password">
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
			</form>
		</div>

 		<?php 
 		if (isset($_GET["error"]))
 		{
 			if ($_GET["error"] == "emptyinput") 
 			{
 				echo "<div class='d-flex justify-content-center'><p class='text-danger'>Fill in all Fields !</p></div>";
 			}
 			elseif ($_GET["error"] == "invaliduid")
 			{
 				echo "<div class='d-flex justify-content-center'><p class='text-danger'>Choose a proper username !</p></div>";
 			}
 			elseif ($_GET["error"] == "invalidemail")
 			{
 				echo "<div class='d-flex justify-content-center'><p class='text-danger'>Choose a proper email !</p></div>";
 			}
 			elseif ($_GET["error"] == "passworddontmatch")
 			{
 				echo "<div class='d-flex justify-content-center'><p class='text-danger'>Passwords doesn't match !</p></div>";
 			}
 			elseif ($_GET["error"] == "stmtfailed")
 			{
 				echo "<div class='d-flex justify-content-center'><p class='text-danger'>Something went wrong, try again !</p></div>";
 			}
 			elseif ($_GET["error"] == "usernametaken")
 			{
 				echo "<div class='d-flex justify-content-center'><p class='text-danger'>Username already exists !</p></div>";
 			}
 			elseif ($_GET["error"] == "none")
 			{
 				echo "<div class='d-flex justify-content-center'><p class='text-success'> You have signed Up!</p></div>";
 			}
 		}
 	 ?>
 	</section>
