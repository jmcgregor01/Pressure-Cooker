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
	$judge_select = "";
	$team_select = "active disabled";
	$recipe_select = "";
	$media_select = "";
	$gallery_select = "";
	$behind_select = "";
	$sponsor_select = "";
	$android_select = "";
	$about_select = "";

	include "templates/navigationbar_template.php";
	?>
		<div class="myView bg-3">
		<div class="container-fluid myContainer bg-3 text-center goTopAnim">

			<h1 style="font-weight: bold; background: #009dc5; color: white; border-radius: 5px;">TEAMS</h1><br>

				<div class="row">
	
			<?php
			$team_query = "SELECT * FROM teams
								LIMIT 0,8";
			$connect_team_query = mysqli_query($conn, $team_query);
			$count_rows = mysqli_num_rows($connect_team_query);
			$show_or_not_team = 'hidden';
			if($count_rows > 0){
				while($get_each_row = mysqli_fetch_array($connect_team_query)){
					$id_of_team = $get_each_row['id'];
					$name_of_team = $get_each_row['name'];
					$img_of_team = $get_each_row['img'];
					$msg_of_team = $get_each_row['msg'];
					$date_team = $get_each_row['date'];
				
			?>					
				<div class="col-sm-6 col-md-4 col-lg-3 noteamdecoration zoomit">
					<a href="viewTeam.php?team=<?php echo $id_of_team; ?>">
					<div class="thumbnail">
						<img class="resizeTeamMainPage" src="admin\dynamicImages\teams\<?php echo $img_of_team; ?>" alt="team image">
						<h5><strong><?php echo $name_of_team; ?></strong></h5>
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