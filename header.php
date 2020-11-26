<header id="main-header">
		<div class="container">
			<div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<h1><span class="primary-text">Sec</span>AuthSys</h1>
				</div>
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<nav id="navbar">
						<ul>
							<li <?php if(!isset($_GET['page'])){$clas='curn';}?>class= '$clas'><a href="index.php?">Home</a></li>
							<li><a href="index.php?#company">About</a></li>
							<li><a href="index.php?#company">Contact</a></li>
							<li><a href="index.php?page=signup.php">Signup</a></li>
							<li><a href="index.php?page=login.php">Login</a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
	</header>