<!DOCTYPE html>
<?php
	require __DIR__.'/config/db.php';
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
	
		<?php
		//Includes admin panel template.
		include "templates/adminpanel_template.php";
		?>
		
			<div class="container" style="background: #FFF;">
				<h2>Insert New Carousel</h2>
				<hr>
				
				
				
				
				
				<form action="insertCarousel.php" method="post" enctype="multipart/form-data">
					
					<label for="imgId">Image 1 of Carousel</label>
					<input required type="file" name="img1" id="imgId" class="form-control"><br>
					
					<label for="imgId">Image 2 of Carousel</label>
					<input required type="file" name="img2" id="imgId" class="form-control"><br>
					
					<label for="imgId">Image 3 of Carousel</label>
					<input required type="file" name="img3" id="imgId" class="form-control"><br>
					<button name="submit" class="btn btn-success" style="float: right">Add</button>
				</form>

				
				
				<?php
					if(isset($_POST['submit'])){

						$img1 = $_FILES['img1']['name'];
						$imgPath1 = $_FILES['img1']['tmp_name'];

						$img2 = $_FILES['img2']['name'];
						$imgPath2 = $_FILES['img2']['tmp_name'];
						
						$img3 = $_FILES['img3']['name'];
						$imgPath3 = $_FILES['img3']['tmp_name'];
						
						$insert = "INSERT INTO carousel(img1, img2, img3)
									VALUE('$img1', '$img2', '$img3')";
						$run = mysqli_query($conn, $insert);
						if($run){
							move_uploaded_file($imgPath1, "dynamicImages/carousel/$img1");
							move_uploaded_file($imgPath2, "dynamicImages/carousel/$img2");
							move_uploaded_file($imgPath3, "dynamicImages/carousel/$img3");
							
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