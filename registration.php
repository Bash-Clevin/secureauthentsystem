
<section id="registration">
	<div class="container">
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="instructions">
					<h3><span class="primary-text">Register for your Account</h3>
					<P>Form Approved
					<br>
					<p>Clients should fill in the information to create a secAuthSys account.</p>
					<p>Please read the eAuthentication Privacy Act for more information on how your 
					account will be protected.</p>
					 </P>
					 <p>
					 	<ul>
					 	<li>All required fields are marked by asterisk(i.e. *). </li><li>Enter your first and 
					 	last name exactly as it appears on your government issued ID.</li>
					 	<li><strong>Note: </strong>The characters <> ^ :| are not allowed on this form(except for passwords)</li>
					 </ul>
					 </p>
					 </div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
					<div class="row center-xs center-sm center-md center-lg">
						<div class="registration">
							<h3><span class="primary-text">Step 1 of 4 </span> - Level 1 Access Account Registration</h3>
					<?php include('regcon.php');?>
						<form name="registration" method="POST" action="index.php?page=confirm.php">
						<!--<?php //include('errors.php'); ?>-->
						<label>User Information</label>
						<div class="input-container">
						<i class="fa fa-user icon"></i>
						<input class="input-field2" type="text" placeholder="first name*" autocomplete="off" name="fname" value="<?php echo $_SESSION['registration']['fname']; ?>">
						<input class="input-field2" type="text" placeholder="second name*" autocomplete="off" name="sname" value="<?php echo $_SESSION['registration']['sname']; ?>">
						<input class="input-field2" type="text" placeholder="third name" autocomplete="off" name="tname" value="<?php echo $_SESSION['registration']['tname']; ?>">
						</div>
						<div class="input-container">
						<i class="fa fa-id-card icon"></i>
						<input class="input-field" type="text" placeholder="id number*" autocomplete="off" name="idno" value="<?php echo $_SESSION['registration']['idno']; ?>">
						</div>
						<div class="input-container">
						<i class="fa fa-calendar icon"></i>
						<input class="input-field" type="date" placeholder="date of birth mm/dd/yyyy" autocomplete="off" name="dat" value="<?php echo $_SESSION['registration']['dat']; ?>">
						</div>

						<div class="input-container">
						<i class="fa fa-phone icon"></i>
						<input class="input-field" type="text" placeholder="phone number*" autocomplete="off" name="phone" value="<?php echo $_SESSION['registration']['phone']; ?>">
						</div>
						<div class="input-container">
						<i class="fa fa-address-card icon"></i>
						<input class="input-field" type="text" placeholder="address*" autocomplete="off" name="address" value="<?php echo $_SESSION['registration']['address']; ?>">
						</div>

						<button type="submit" name="regist" class="btn">Register</button>
	
						</form>
							
					
							<? php
							 /*if(isset($_POST['regist'])){
									//include("confirm.php");
								//}else{
									//include("regform.php");
								//}*/?>

						
						</div>
				</div>
					
				</div>
			</div>
		</div>
	
</section>