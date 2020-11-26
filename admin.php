<?php
?>
		<div class="header">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>Admin</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>Admin</span>
			</div>
			<nav>
				<ul>
					<li>
						<a href="admin.php?page=addstudents.php">
							<span><i class="fa fa-user"></i></span>
							<span>Add Students</span>
						</a>
					</li>
					<li>
						<a href="admin.php?page=addlecturers.php">

							<span><i class="fa fa-user"></i></span>
							<span>Add Lecturers</span>
						</a>
					</li>
					<li>
						<a href="admin.php?page=addadmin.php">
							<span><i class="fa fa-user"></i></span>
							<span>Add Admin</span>
						</a>
					</li>
					
					<li>
						<a href="admin.php?page=report.php">
							<span><i class=""></i></span>
							<span>Reports</span>
						</a>
					</li>
					<li>
						<a href="admin.php?page=warnstudents.php">
							<span><i class=""></i></span>
							<span>Students to warn</span>
						</a>
					</li>
					<li>
						
							<p><a href="index.php?page=login.php&action=logout" style="color:blue;">
							<span><i class="fa fa-user"></i></span>
							<span>logout</span>
							</a></p>
					</li>
					<li>
						
							<a href="#">
							<span><i class="fa fa-user"></i></span>
							<?php if(isset($_SESSION['success'])): ?>
								<div class="error success">
									<h3>
									<?php
								//echo $_SESSION['success'];
								unset($_SESSION['success']);
									?>
									</h3>
									<?php endif ?>
								<?php if(isset($_SESSION["username"])): ?>
								<p>welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
								<?php endif ?>
							<span></span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			</div>

