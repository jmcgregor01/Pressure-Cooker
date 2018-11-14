<?php
	session_start();
	require __DIR__.'/config/db.php';
	@$get = $_GET['id'];
	if(!isset($_SESSION['user'])){
		header("location:login.php");
	}else{
?>
<!DOCTYPE html>
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
				<h2>Insert New Episode</h2>
				<hr>
				
				
				
				
				
				<form action="insertMedia.php" method="post" enctype="multipart/form-data">
					<label for="nameId">Name of Episode</label>
					<input required type="text" name="name" id="nameId" class="form-control"><br>
					
					<label for="videoId">Link of Episode</label>
					<input required type="text" name="video" id="videoId" class="form-control"><br>
					
					<label for="msgId">About Episode</label>
					<textarea required class="form-control" id="msgId" name="msg" style="height: 150px"></textarea><br>
					
					<label for="typeId">Video Type</label><br>
					<select name="type">
						<option value="e">Episodes</option>
						<option value="j">Judges and Hosts</option>
						<option value="c">Contestants</option>
						<option value="b">Behind the Scenes</option>
					</select>
  
					<button name="submit" class="btn btn-success" style="float: right">Add</button>
				</form>

				
				
				<?php
					if(isset($_POST['submit'])){
						$name = $_POST['name'];
						$video = $_POST['video'];
						$video_split = explode('=', $video);
						$video = $video_split[1];
						$msg = $_POST['msg'];
						$type = $_POST['type'];
						
						$insert = "INSERT INTO media(name, video, msg, type)
									VALUE('$name', '$video', '$msg', '$type')";
						$run = mysqli_query($conn, $insert);
						if($run){
							
							echo "<script>alert('Your video was added to the website.')</script>";
						}else{
							echo "<script>alert('Your video was not added.')</script>";
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