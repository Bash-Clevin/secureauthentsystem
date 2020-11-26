<?php
include('connect.php');
?>
<section id="login1">
			<div class="bg-image3"></div>
			
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-7">	
			</div>
</section>
<section id="signup">
	<div class="container">
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3><span class="primary-text">Let's</span> Get started!</h3>
					<P>By Signing Up, you agree to the <a href="index.php?page=orgsignup.php">Terms of Service and Privacy Policy</a></P>
					<P>Proceed with the signup form if this account is for personal use <strong>(Level 1 access)</strong></P>
					<p>Click <a href="index.php?page=orgsignup.php"> here</a> if you are signing up on behalf an organization <strong>(level 2 access)</strong></p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
					<div class="row center-xs center-sm center-md center-lg">
						<div class="signup">
							<h3><i class="fa fa-sign-in"><span class="primary-text">Sign</span>Up</i></h3>
						<form name="signup" method="POST" action="index.php?page=signup.php">
						<?php include('errors.php'); ?>
						<div class="input-container">
						<i class="fa fa-user icon"></i>
						<input class="input-field" type="text" placeholder="first name" autocomplete="off" name="fname" required>
						<input class="input-field" type="text" placeholder="second name" autocomplete="off" name="sname" required>
						</div>
						<div class="input-container">
						<i class="fa fa-envelope icon"></i>
						<input class="input-field" type="text" placeholder="e-mail" autocomplete="off" name="email" required>
						</div>
						<div class="input-container">
						<i class="fa fa-key icon"></i>
						<input class="input-field" type="Password" placeholder="password" autocomplete="off" name="pass" required>
						</div>
						<div class="input-container">
						<i class="fa fa-key icon"></i>
						<input class="input-field" type="Password" placeholder="confirm password" autocomplete="off" name="pass2" required>
						</div>

						<button type="submit" name="signup" class="btn">Sign up</button>
	
						</form>
						</div>
				</div>
					
				</div>
			</div>
		</div>
	
</section>