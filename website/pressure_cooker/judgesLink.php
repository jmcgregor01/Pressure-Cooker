<?php
require __DIR__ . '/admin/config/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!--Head of the Index Page-->
	<title>Pressure Cooker</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="assets\style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<!--Ending Head of the Index Page-->
</head>

<body id="topOfPage">
	<!--Body Content-->
	<!--Header template-->
	<?php
	$home_select = "";
	$judge_select = "active disabled";
	$team_select = "";
	$recipe_select = "";
	$media_select = "";
	$gallery_select = "";
	$behind_select = "";
	$sponsor_select = "";
	$android_select = "";
	$about_select = "";

	include "templates/navigationbar_template.php";
	?>
		<!--Judge Container-->
		<div class="myView bg-3">
		<div id="startAgain" class="container-fluid myContainer bg-3 text-center goTopAnim">

			<h1 style="font-weight: bold; background: #009dc5; color: white; border-radius: 5px;">JUDGES & HOST</h1><br>

			<div class="row">
					
				
			<?php
			$judge_query = "SELECT * FROM judges
									ORDER BY date DESC
										LIMIT 0,10";
			$connect_judge_query = mysqli_query($conn, $judge_query);
			$count_rows = mysqli_num_rows($connect_judge_query);
			if($count_rows > 0){
				while($get_each_row = mysqli_fetch_array($connect_judge_query)){
					$id_of_judge = $get_each_row['id'];
					$name_of_judge = $get_each_row['name'];
					$img_of_judge = $get_each_row['img'];
					$msg_of_judge = $get_each_row['msg'];
					$date_judge = $get_each_row['date'];
			?>

				<div class="col-sm-6 col-md-6 col-lg-4 nojudgedecoration zoomit">
					<a href="viewJudge.php?judge=<?php echo $id_of_judge; ?>">
					<div class="thumbnail">
						<img class="resizeWithThumbnail" src="admin\dynamicImages\judges\<?php echo $img_of_judge; ?>" alt="judges">
						<h2><strong><?php echo substr($name_of_judge, 0, 22); ?>..</strong></h2>
						<p><strong><?php echo substr($msg_of_judge, 0, 25); ?>.....</strong></p>
					</div>
					</a>
				</div>	

			<?php
				}
			}
		
			?>
	
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			</div>

			<!--Ending Judge Container-->
		</div>
		</div>
	<!-- Footer template-->
	<?php
	include 'templates/footer_template.php';
	?>
</body>
</html>