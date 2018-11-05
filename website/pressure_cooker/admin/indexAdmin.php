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
		
		<?php
		//Includes admin panel template.
		include "templates/adminpanel_template.php";
		?>
			
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
							$pc = "SELECT * FROM behindscenes";
							$run_p = mysqli_query($conn, $pc);
							$countbehindscenes = mysqli_num_rows($run_p);
						?>
						<div class="cc">
							<center>
								<div class="icon" style="background: #FD7E00">
									<i class="fas fa-theater-masks"; style="font-size: 60px; color: white;"></i>
								</div><br>
								<h4>Behind the Scenes</h4>
								<span class="badge" style="font-size: 20px"><?php echo $countbehindscenes; ?></span>
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