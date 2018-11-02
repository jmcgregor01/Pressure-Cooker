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
		
		<?php
		//Includes admin panel template.
		include "templates/adminpanel_template.php";
		?>
		
			<div class="container" style="background: #FFF;">
				<h2>Insert New Recipe</h2>
				<hr>
				
				
				
				
				
				<form action="insertRecipe.php" method="post" enctype="multipart/form-data">
					<label for="nameId">Name of Recipe</label>
					<input required type="text" name="name" id="nameId" class="form-control"><br>
					
					<label for="imgId">Image of Recipe</label>
					<input required type="file" name="img" id="imgId" class="form-control"><br>
					
					<label for="msgId">About Recipe</label>
					<textarea required class="form-control" id="msgId" name="msg" style="height: 150px"></textarea><br>
					<button name="submit" class="btn btn-success" style="float: right">Add</button>
				</form>

				
				
				<?php
					if(isset($_POST['submit'])){
						$name = $_POST['name'];
						$img = $_FILES['img']['name'];
						$imgPath = $_FILES['img']['tmp_name'];
						$msg = $_POST['msg'];
						$insert = "INSERT INTO recipes(name, img, msg)
									VALUE('$name', '$img', '$msg')";
						$run = mysqli_query($conn, $insert);
						if($run){
							move_uploaded_file($imgPath, "dynamicImages/recipes/$img");
							
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