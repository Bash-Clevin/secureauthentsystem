<!DOCTYPE html>
<html>
<head>
	<title>SecAuthSys</title>
	<link rel="icon" type="image/png" href="../images/icon.png">
	<link rel="stylesheet"  href="../css/flexboxgrid.css">
	<link rel="stylesheet"  href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!--Header-->
	<?php
		include ('header.php');
	?>
	<section id="registration">
	<div class="contain">
			<div class="row center-xs center-sm center-md start-lg">
				<div  id="nav" class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
					<div id="nav-sidebar">
					<ul class="nav-sidebar">
					<li><i class="fa fa-home"><a href="index.php?page=update_password"> Home</a></i></li>
            		<li><i class="fa fa-pencil"> <a href="index.php?page=chat"> Edit profile</a></i></li>
       				<li><i class="fa fa-comments-o"><a href="index.php?page=feedback"> Give feedback</a></i></li> 
          </ul>
      </div>
				</div>
			
				<div class="col-xs-12 col-sm-4 col-md-6 col-lg-10">
					<div class="row center-xs center-sm center-md center-lg">
						<?php
						if(!isset($_GET['page'])){
							include('home.php');
						} else{
						$page =$_GET['page'];
							include("$page");
							}
						?>		

				</div>
					
				</div>
			</div>
		</div>
	
</section>
	<!--footer-->
	<footer id="main-footer">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p>Copyright &copy; 2019 | secAuthSys</p>
				</div>
			</div>
		</div>
		
	</footer>

</body>
</html>