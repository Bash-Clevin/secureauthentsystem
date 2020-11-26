<?php
include('connect.php');
?>
<!--<link rel="stylesheet" type="text/css" href="style.css>-->
<section id="login1">
			<div class="bg-image2"></div>
			
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-7">	
			</div>
</section>
<section id="login">		
<div class="row center-xs center-sm center-md center-lg">
	<div class="login">
	<h3><span class="primary-text">Log</span>In</h3>
<form name="login" method="POST" action="index.php?page=login.php">
	<?php include('errors.php'); ?>
	<div class="input-container">
	<i class="fa fa-envelope icon"></i>
	<input class="input-field" type="text" placeholder="e-mail" autocomplete="off" name="username">
	</div>
	<div class="input-container">
	<i class="fa fa-key icon"></i>
	<input class="input-field" type="Password" placeholder="password" autocomplete="off" name="pass">
	</div>
	<button type="submit" name="login" class="btn">LogIn</button>
	<p>forgot username or password? | Sign Up</p>

	
</form>
</div>
</div>
</section>	