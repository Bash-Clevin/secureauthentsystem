<!DOCTYPE html>
<html>
<head>
	<title>SecAuthSys</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="stylesheet"  href="css/flexboxgrid.css">
	<link rel="stylesheet"  href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--Header-->
	<?php
		include ('header.php');
	?>
	<!--content--->
	<?php
		if(!isset($_GET['page'])){
			include('home.php');
		} else{
			$page =$_GET['page'];
			include("$page");
		}
	?>
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