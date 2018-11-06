<!DOCTYPE html>
<?php
	require __DIR__.'/config/db.php';
	@$get = $_GET['msg'];
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
			<?php
			$judge_query = "SELECT * FROM recipes
									ORDER BY id DESC";
			$connect_judge_query = mysqli_query($conn, $judge_query);
			$count_rows = mysqli_num_rows($connect_judge_query);
			$number_of_items = 1;
			?>
				<h2>View Recipes</h2>
				<h6 style="font-weight: bold">Total Recipes : <span class="badge"><?php echo $count_rows; ?></span></h6>
				<hr>
				<center><h3><?php echo $get; ?></h3></center>
				<a href="insertRecipe.php" class="btn btn-info" style="float:right">Insert Recipe</a>
					<table class="table table-hover table-striped table-bordered">
						<tr>
							<th>S.No</th>
							<th>Name</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
			<?php
			if($count_rows > 0){
				while($get_each_row = mysqli_fetch_array($connect_judge_query)){
					$id_of_judge = $get_each_row['id'];
					$name_of_judge = $get_each_row['name'];
					$img_of_judge = $get_each_row['img'];
					$msg_of_judge = $get_each_row['msg'];
					$date_judge = $get_each_row['date'];
			?>	
						<tr>
							<th><?php echo $number_of_items++; ?></th>
							<th><?php echo $name_of_judge; ?></th>
							<th><?php echo $date_judge; ?></th>
							<th>&nbsp;<a href="deleteRecipe.php?id=<?php echo $id_of_judge; ?>" class="btn btn-danger">Delete</a></th>
						</tr>
			<?php
				}
			}
		
			?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php } ?>