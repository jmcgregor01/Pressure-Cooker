<?php
	session_start();
	require __DIR__.'/config/db.php';
	if(isset($_SESSION['user'])){
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
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<center>
		<form action="" method="post">
		<h1 style="font-weight: bold;">Admin <span style="color: red;">Login panel</span></h1>
		<br><br>
		<label for="b">Username</label>
		<input name="user" type="text" class="form-control" id="b" style="width: 400px; box-shadow: 3px 4px 2px #efa6a6;"><br>
		
		<label for="ba">Password</label>
		<input name="pass" type="password" class="form-control" id="ba" style="width: 400px; box-shadow: 3px 4px 2px #efa6a6;"><br>
		
		<button name="sub" class="btn btn-default">Login</button>
		</form>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="../index.php"><img src="homepage-icon.png" alt="Homepage" style="width:70px;height:42px;border:0;"></a>
		
		
		
		<?php
			if(isset($_POST['sub'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			//$stmt = mysqli_stmt_init($conn);
			$sql = "SELECT * FROM admin
					WHERE user = ? AND pass= ?";
			$stmt = mysqli_prepare($conn, $sql);
			$pass = hash('sha256', $pass);
			mysqli_stmt_bind_param($stmt, "ss", $user, $pass);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $username, $pass);
			mysqli_stmt_fetch($stmt);
			if(!empty($username))
			{
				echo "<script>window.open('indexAdmin.php', '_self')</script>";
				$_SESSION['user'] = $user;
			}
			else
			{
				echo "<h5>Your Username Or Password is Incorrect</h5>";
			}
		}
		?>
	</center>
	
</body>
</html>
<?php } ?>