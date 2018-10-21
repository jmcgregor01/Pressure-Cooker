<!DOCTYPE html>
<?php
	require 'config/db.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header("location:login.php");
	}else{
?>
<html>
<head>
	<title>Admin Panel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="adminAssets\style.css" rel="stylesheet">
		<link 	rel="stylesheet" 
				href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
				integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
				crossorigin="anonymous">
		
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-3">
			<div class="heading">
				<h3 style="text-align: center; font-weight: bold; color: white; line-height: 50px">Admin Panel</h3>
				<div class="pro"></div>
				<div class="menu">
					<ul>
						<li class="active disabled"><a href="#"><i class="fas fa-tachometer-alt" style="color: white; font-size: 25px; margin-right: 15px;"></i>Dashboard</a></li>
						<li><a href="viewCarousel.php"><i class="fas fa-caret-square-left" style="color: white; font-size: 25px; margin-right: 15px;"></i>Edit Carousel</a></li>
						<li><a href="viewJudges.php"><i class="fas fa-gavel" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Judges</a></li>
						<li><a href="viewTeam.php"><i class="fab fa-slideshare" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Teams</a></li>
						<li><a href="viewRecipes.php"><i class="fas fa-cocktail" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Recipes</a></li>
						<li><a href="viewMedia.php"><i class="fas fa-video" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Episodes</a></li>
						<li><a href="viewGallery.php"><i class="fas fa-images" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Gallery</a></li>
						<li><a href="viewSponsors.php"><i class="fas fa-dollar-sign" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Sponsors</a></li>
						<li><a href="viewBehindScenses.php"><i class="fas fa-theater-masks" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert BehindScense</a></li>
						<li><a href="viewContactUs.php"><i class="fa fa-phone" style="color: white; font-size: 25px; margin-right: 15px;"></i>Contact Us</a></li>
						<li><a href="changeUser.php"><i class="fas fa-desktop" style="color: white; font-size: 25px; margin-right: 15px;"></i>Change UserName</a></li>
						<li><a href="changePass.php"><i class="fas fa-key" style="color: white; font-size: 25px; margin-right: 15px;"></i>Change Password</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="container-fluid" style="background: blue; border: 1px solid;">
				<form action="logout.php">
					<button class= "btn btn-purple" style="float: right; margin: 10px">Log Out</button>
				</form>
			</div>
			<div class="container" style="background: #FFF;">
				<h2>Admin Dashboard</h2>
				<h6 style="font-weight: bold">Welcome: Admin</h6>
				<hr>
				<div class="row">
					<div style="margin-bottom: 10px" class="col-md-3">
						<?php
							$pc = "SELECT * FROM judges";
							$run_p = mysqli_query($conn, $pc);
							$countjudges = mysqli_num_rows($run_p);

						?>
						<div class="cc">
							<center>
								<div class="icon" style="background: #004997">
									<i class="fas fa-gavel"; style="font-size: 60px; color: white;"></i>
								</div><br>
								<h4>Judges Post</h4>
								<span class="badge" style="font-size: 20px"><?php echo $countjudges; ?></span>
							</center>
						</div>
					</div>

					<div style="margin-bottom: 10px" class="col-md-3">
						<?php
							$pc = "SELECT * FROM teams";
							$run_p = mysqli_query($conn, $pc);
							$countteams = mysqli_num_rows($run_p);

						?>
						<div class="cc">
							<center>
								<div class="icon" style="background: black">
									<i class="fab fa-slideshare"; style="font-size: 60px; color: white;"></i>
								</div><br>
								<h4>Teams Post</h4>
								<span class="badge" style="font-size: 20px"><?php echo $countteams; ?></span>
							</center>
						</div>
					</div>
					
					<div style="margin-bottom: 10px" class="col-md-3">
						<?php
							$pc = "SELECT * FROM recipes";
							$run_p = mysqli_query($conn, $pc);
							$countrecipes = mysqli_num_rows($run_p);

						?>
						<div class="cc">
							<center>
								<div class="icon" style="background: #FA7C92;">
									<i class="fas fa-cocktail"; style="font-size: 60px; color: white;"></i>
								</div><br>
								<h4>Recipes Post</h4>
								<span class="badge" style="font-size: 20px"><?php echo $countrecipes; ?></span>
							</center>
						</div>
					</div>
					
					<div style="margin-bottom: 10px" class="col-md-3">
						<?php
							$pc = "SELECT * FROM media";
							$run_p = mysqli_query($conn, $pc);
							$countmedia = mysqli_num_rows($run_p);
						?>
						<div class="cc">
							<center>
								<div class="icon" style="background: red;">
									<i class="fas fa-video"; style="font-size: 60px; color: white;"></i>
								</div><br>
								<h4>Episodes Post</h4>
								<span class="badge" style="font-size: 20px"><?php echo $countmedia; ?></span>
							</center>
						</div>
					</div>
					
					<div style="margin-bottom: 10px" class="col-md-3">
						<?php
							$pc = "SELECT * FROM gallery";
							$run_p = mysqli_query($conn, $pc);
							$countgallery = mysqli_num_rows($run_p);
						?>
						<div class="cc">
							<center>
								<div class="icon" style="background: #85C036">
									<i class="fas fa-images"; style="font-size: 60px; color: white;"></i>
								</div><br>
								<h4>Gallery Post</h4>
								<span class="badge" style="font-size: 20px"><?php echo $countgallery; ?></span>
							</center>
						</div>
					</div>
					
					<div style="margin-bottom: 10px" class="col-md-3">
						<?php
							$pc = "SELECT * FROM sponsor";
							$run_p = mysqli_query($conn, $pc);
							$countsponsors = mysqli_num_rows($run_p);
						?>
						<div class="cc">
							<center>
								<div class="icon" style="background: rgb(0, 208, 248)">
									<i class="fas fa-dollar-sign"; style="font-size: 60px; color: white;"></i>
								</div><br>
								<h4>Sponsors Post</h4>
								<span class="badge" style="font-size: 20px"><?php echo $countsponsors; ?></span>
							</center>
						</div>
					</div>
					
					<div style="margin-bottom: 10px" class="col-md-3">
						<?php
							$pc = "SELECT * FROM behindscense";
							$run_p = mysqli_query($conn, $pc);
							$countbehindscense = mysqli_num_rows($run_p);
						?>
						<div class="cc">
							<center>
								<div class="icon" style="background: #FD7E00">
									<i class="fas fa-theater-masks"; style="font-size: 60px; color: white;"></i>
								</div><br>
								<h4>BHDScense Post</h4>
								<span class="badge" style="font-size: 20px"><?php echo $countbehindscense; ?></span>
							</center>
						</div>
					</div>
					
					<div style="margin-bottom: 10px" class="col-md-3">
						<?php
							$pc = "SELECT * FROM contactus";
							$run_p = mysqli_query($conn, $pc);
							$countcontactus = mysqli_num_rows($run_p);
						?>
						<div class="cc">
							<center>
								<div class="icon" style="background: green">
									<i class="fa fa-phone"; style="font-size: 60px; color: white;"></i>
								</div><br>
								<h4>Contact US</h4>
								<span class="badge" style="font-size: 20px"><?php echo $countcontactus; ?></span>
							</center>
						</div>
					</div>
				</div>
				<div><br><br><br>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php } ?>