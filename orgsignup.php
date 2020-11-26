<?php
include('connect.php');
$county = array(
				"Baringo",
				"Bomet",
				"Bungoma",
				"Busia",
				"Elgeyo-Marakwet",
				"Embu",
				"Gaissa",
				"Homabay",
				"Isiolo",
				"Kajiado",
				"Kakamega",
				"Kericho",
				"Kiambu",
				"Kilifi",
				"Kirinyaga",
				"Kisii",
				"Kisumu",
				"Kitui",
				"Kwale",
				"Laikipia",
				"Lamu",
				"Machakos",
				"Makueni",
				"Mandera",
				"Marsabit",
				"Meru",
				"Migori",
				"Mombasa",
				"Muranga",
				"Nairobi",
				"Nakuru",
				"Nandi",
				"Narok",
				"Nyamira",
				"Nyandarua",
				"Nyeri",
				"Samburu",
				"Siaya",
				"Taita-Taveta",
				"Tana River",
				"Tharaka-Nithi",
				"Trans-Nzoia",
				"Turkana",
				"Uasin Gishu",
				"Vihiga",
				"Wajir",
				"West Pokot");
$attributes=array(
	"county"=>"");
?>
<section id="login1">
			<div class="bg-image3"></div>
			
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-7">	
			</div>
</section>
<section id="orgsignup">
	<div class="container">
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3><span class="primary-text">Let's</span> Get started!</h3>
					<P>Welcome to level 2 account signup</P>
					<P>Proceed with the signup form if this account is for an organization <strong>(Level 2 access)</strong></P>
					<p>Click <a href="index.php?page=signup.php"> here</a> if you wish to signing up for a personal account <strong>(level 1 access)</strong></p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
					<div class="row center-xs center-sm center-md center-lg">
						<div class="registration">
							<h3><i class="fa fa-sign-in"><span class="primary-text">Sign</span>Up</i></h3>
						<form name="signup" method="POST" action="index.php?page=orgsignup.php">
						<?php include('errors.php'); ?>
					<table id="table1">
					<tr>
						<td>Select county</td>
						<td><select class="input-field" name="county">
							<option value="">- Select a county -</option>
							<?php
							foreach( $county as $k=>$v )
								{
									echo "<option value=\"{$k}\"";
									if ( $attributes["county"] == $k ) echo " selected=\"selected\"";
									echo ">{$v}</option>\n";
								}
							?>
						</select>
						</td>
					</tr>
					<tr>
						<td>Locality Name (city)</td>
						<td>
						<input class="input-field" type="text" placeholder="city" autocomplete="off" name="city" required>
						</td>
					</tr>
					<tr>
						<td>Organization Name</td>
						<td>
						<input class="input-field" type="text" placeholder="organization name" autocomplete="off" name="company" required>
						</td>
					</tr>
					<tr>
						<td>Common Name</td>
						<td>
						<input class="input-field" type="text" placeholder="(my.domain.com or ie MUST)" autocomplete="off" name="comname" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>
						<input class="input-field" type="text" placeholder="email" autocomplete="off" name="mail" required></td>
					</tr>
					<tr>
						<td>phone number</td>
						<td>
						<input class="input-field" type="text" placeholder="phone" autocomplete="off" name="phone" required></td>
					</tr>
					<tr>
						<td>Security Code to prevent automated submission</td>
						<td>
						<img src="valid.php" name="valid_img"/> <a href="javascript:void(0);" onclick="document.images.valid_img.src= 'valid.php?' + new Date().getTime();">Refresh</a><br>Enter the 3 black characters from the image above:<br/><input name="valid" id="valid" size="3" maxlength="3" required>
						</td>
					</tr>
					</table>
						<button type="submit" name="orgsignup" class="btn">Sign up</button>
						
						</form>
						</div>
				</div>
					
				</div>
			</div>
		</div>
	
</section>