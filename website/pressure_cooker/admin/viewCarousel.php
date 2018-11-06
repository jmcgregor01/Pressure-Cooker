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
			$judge_query = "SELECT * FROM carousel
									ORDER BY id DESC";
			$connect_judge_query = mysqli_query($conn, $judge_query);
			$count_rows = mysqli_num_rows($connect_judge_query);
			$number_of_items = 1;
				$disableInsertBtn = '';
				if($count_rows > 0){
					$disableInsertBtn = 'disabled';
				}
			?>
				<h2>View Carousel</h2>
				<h6 style="font-weight: bold">Total Carousel : <span class="badge"><?php echo $count_rows; ?></span></h6>
				<hr>
				<center><h3><?php echo $get; ?></h3></center>
				
				<a href="insertCarousel.php" class="<?php echo $disableInsertBtn; ?> btn btn-info" style="float:right">Insert Carousel</a>

					<table class="table table-hover table-striped table-bordered">
						<tr>
							<th>S.No</th>
							<th>Image 1</th>
							<th>Image 2</th>
							<th>Image 3</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
			<?php
			if($count_rows > 0){
				while($get_each_row = mysqli_fetch_array($connect_judge_query)){
					$id_of_judge = $get_each_row['id'];
					$img1_of_judge = $get_each_row['img1'];
					$img2_of_judge = $get_each_row['img2'];
					$img3_of_judge = $get_each_row['img3'];
					$date_judge = $get_each_row['date'];
			?>	
						<tr>
							<th><?php echo $number_of_items++; ?></th>
							<th><?php echo $img1_of_judge; ?></th>
							<th><?php echo $img2_of_judge; ?></th>
							<th><?php echo $img3_of_judge; ?></th>
							<th><?php echo $date_judge; ?></th>
							<th>&nbsp;<a href="deleteCarousel.php?id=<?php echo $id_of_judge; ?>" class="btn btn-danger">Delete</a></th>
						</tr>
			<?php
				}
			}else{
					$disableInsertBtn = '';
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