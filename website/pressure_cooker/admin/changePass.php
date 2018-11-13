<?php
	session_start();	
	require __DIR__.'/config/db.php';
	@$get = $_GET['msg'];
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
				<h2>Change Password</h2>
				<hr>
				
				<form action="changePass.php" method="post">
					<label for="name11">Old Password:</label>
					<input required type="password" name="name1" id="name1Id" class="form-control"><br>
					
					<label for="name2">New Password:</label>
					<input required type="password" name="name2" id="name2Id" class="form-control"><br>
					
					<label for="name3">Confirm New Password:</label>
					<input required type="password" name="name3" id="name3Id" class="form-control"><br>
					<button name="submit" class="btn btn-success" style="float: right">Update</button>
				</form>
				<?php
					if(isset($_POST['submit'])){
						$old = hash('sha256', $_POST['name1']);
						$new = hash('sha256', $_POST['name2']);
						$again = hash('sha256', $_POST['name3']);
						
						$select = "SELECT * FROM admin";
						$run = mysqli_query($conn, $select);
						while($row = mysqli_fetch_array($run)){
							$user = $row['user'];
							$pass = $row['pass'];
							if($pass == $old){
								if($new == $again){
									$update = "UPDATE admin
												SET pass='$again'";
									$runUpdate = mysqli_query($conn, $update);
									if($runUpdate){
										echo "<center><h6>Password changed</h6></center>";
									}else{
										echo "<center><h6>Password not changed</h6></center>";
									}
								}else{
									echo "<center><h6>New passwords don't match</h6></center>";
								}
							}else{
								echo "<center><h6>Your Old Password is Wrong</h6></center>";
							}
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