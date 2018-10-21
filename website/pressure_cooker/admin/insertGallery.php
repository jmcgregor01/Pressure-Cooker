<!DOCTYPE html>
<?php
	require 'config\db.php';
	@$get = $_GET['id'];
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
				<div class="pro">
				</div>
				<div class="menu">
					<ul>
						<li><a href="indexAdmin.php"><i class="fas fa-tachometer-alt" style="color: white; font-size: 25px; margin-right: 15px;"></i>Dashboard</a></li>
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
				<h2>Insert New Image</h2>
				<hr>
				
				
				
				
				
				<form action="insertGallery.php" method="post" enctype="multipart/form-data">
					<label for="nameId">Name of Image</label>
					<input required type="text" name="name" id="nameId" class="form-control"><br>
					
					<label for="imgId">Path of Image</label>
					<input required type="file" name="img" id="imgId" class="form-control"><br>
					
					<label for="msgId">About Image</label>
					<textarea required class="form-control" id="msgId" name="msg" style="height: 150px"></textarea><br>
					<button name="submit" class="btn btn-success" style="float: right">Add</button>
				</form>

				
				
				<?php
					if(isset($_POST['submit'])){
						$name = $_POST['name'];
						$img = $_FILES['img']['name'];
						$imgPath = $_FILES['img']['tmp_name'];
						$msg = $_POST['msg'];
						$insert = "INSERT INTO gallery(name, img, msg)
									VALUE('$name', '$img', '$msg')";
						$run = mysqli_query($conn, $insert);
						if($run){
							move_uploaded_file($imgPath, "dynamicImages/gallery/$img");
							
							echo "<script>alert('Your News Insert Successfully')</script>";
						}else{
							echo "<script>alert('Your News Insert Unsuccessfully')</script>";
						}
					}
				?>
				
				
				
				
				
				
				
				
				
				
				
				
			</div>
		</div>
		</div>
	</div>
</body>
</html>
<?php } ?>