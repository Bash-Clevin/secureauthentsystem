
<?php
session_start();
//check to see if user has submitted the registration form
if(!isset($_SESSION['registration']['fname'])){
	header("Location:index.php?page=registration.php");
}
$_SESSION['registration']['fname'] = $_POST['fname'];
$_SESSION['registration']['sname'] = $_POST['sname'];
$_SESSION['registration']['tname'] = $_POST['tname'];
$_SESSION['registration']['idno'] = $_POST['idno'];
$_SESSION['registration']['dat'] = $_POST['dat'];
$_SESSION['registration']['phone'] = $_POST['phone'];
$_SESSION['registration']['address'] = $_POST['address'];
?>
<section id="registration">
	<div class="container">
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3><span class="primary-text">Register for your Account</h3>
					<P>Form Approved
					<br>
					if this information is incorrect, please click edit, if is correct please continue 
					 </P>

				</div>
				<div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
					<div class="row center-xs center-sm center-md center-lg">
						<div class="registration">
								<h3><span class="primary-text">Step 2 of 4 </span> - Level 1 Access Account Verification</h3>
								<br>
								<p><h1>user information</h1></p>
								<table>
									<tr>
										<td align="left">first name:</td>
										<td align="center"><?php echo $_POST['fname'];?></td>	
									</tr>
									<tr>
										<td align="left">Second name:</td>
										<td align="center"><?php echo $_POST['sname'];?></td>	
									</tr>
									<tr>
										<td align="left">Third name:</td>
										<td align="center"><?php echo $_POST['tname'];?></td>	
									</tr>
									<tr>
										<td align="left">ID number:</td>
										<td align="center"><?php echo $_POST['idno'];?></td>	
									</tr>
									<tr>
										<td align="left">date of birth:</td>
										<td align="center"><?php echo $_POST['dat'];?></td>	
									</tr>
									<tr>
										<td align="left">phone:</td>
										<td align="center"><?php echo $_POST['phone'];?></td>	
									</tr>
									<tr>
										<td align="left">address:</td>
										<td align="center"><?php echo $_POST['address'];?></td>	
									</tr>
								</table>
									<p><a href="index.php?page=enterreg.php">Correct, continue </a> | <a href="index.php?page=registration.php"> go back</a></p>

							
					
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

						