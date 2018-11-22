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
<!--Header template-->
<?php
$home_select = "";
$judge_select = "";
$team_select = "";
$recipe_select = "";
$media_select = "active disabled";
$gallery_select = "";
$behind_select = "";
$sponsor_select = "";
$android_select = "";
$about_select = "";

include "templates/navigationbar_template.php";
?>

<!--Judge Container-->
<div class="container-fluid myContainer bg-3 text-center goTopAnim mediaLinkContainer">


	
	<?php
	if (!empty($_GET['type']))
	{
		$type = $_GET['type'];
		$media_query = "SELECT * FROM media WHERE type = '$type'
										ORDER BY id DESC
										LIMIT 0,4";
	}
	else if (empty($_GET['type']))
	{
		$media_query = "SELECT * FROM media 
											ORDER BY id DESC
											LIMIT 0,4";
	}
	if (!empty($type))
	{
		if ($type == 'e'){
		echo "<div class=\"mediaHeading\" >";
		echo "<h1 style='font-weight: bold; background: #009dc5; color: white; border-radius: 5px;' object-fit: none;>Episodes</h1><br>";
		echo "</div>";
		}else if ($type == 'j'){
		echo "<div class=\"mediaHeading\" >";
		echo "<h1 style='font-weight: bold; background: #009dc5; color: white; border-radius: 5px;' object-fit: none;>Judges and Host Profiles</h1><br>";
		echo "</div>";
		}else if ($type == 'c'){
		echo "<div class=\"mediaHeading\" >";
		echo "<h1 style='font-weight: bold; background: #009dc5; color: white; border-radius: 5px;' object-fit: none;>Contestant Profiles</h1><br>";
		echo "</div>";
		}else if ($type == 'b'){
		echo "<div class=\"mediaHeading\" >";
		echo "<h1 style='font-weight: bold; background: #009dc5; color: white; border-radius: 5px;' object-fit: none;>Behind the Scenes</h1><br>";
		echo "</div>";
	}
	}
	else if (empty($type)){
		echo "<div class=\"mediaHeading\" >";
		echo "<h1 style='font-weight: bold; background: #009dc5; color: white; border-radius: 5px;' object-fit: none;>Videos</h1><br>";
		echo "</div>";
	}
	$connect_media_query = mysqli_query( $conn, $media_query );
	$count_rows = mysqli_num_rows( $connect_media_query );
	$max_display = 1;
	$displayed = 0;
	if ( empty( $_GET[ "All" ] ) ) {
		$show_all = true;
	} else {
		$show_all = $_GET[ "All" ];
	}
	if ( $count_rows > 0 ) {
		while ( $get_each_row = mysqli_fetch_array( $connect_media_query ) ) {
			$id_of_media = $get_each_row[ 'id' ];
			$name_of_media = $get_each_row[ 'name' ];
			$video_of_media = $get_each_row[ 'video' ];
			$msg_of_media = $get_each_row[ 'msg' ];
			$date_media = $get_each_row[ 'date' ];
			$displayed++;
			if ( $displayed <= $max_display ) {
				?>
	<div class="mediaLinkContainer bg-3">
	<div class="row">
		<center>
			<h3 style="font-weight: bold">
				<?php echo $name_of_media; ?>
			</h3>
		</center>
		<div class="col-md-6">
			<div class="embed-responsive embed-responsive-16by9" style="border-radius: 5px;">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_of_media; ?>" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-6">
			<h6 style="float:right">Date:<?php echo $date_media; ?></h6>
			<br><br>
			<p style="text-align: justify;">
				<?php echo substr($msg_of_media, 0, 500); ?>.....
			</p>
		</div>
	</div>
	<hr>
	</div>
	<?php
	} else if ( $show_all == true ) {
		?>
	<div class="mediaLinkContainer bg-3">
	<div class="row">
		<center>
			<h3 style="font-weight: bold">
				<?php echo $name_of_media; ?>
			</h3>
		</center>
		<div class="col-md-6">
			<div class="embed-responsive embed-responsive-16by9" style="border-radius: 5px;">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_of_media; ?>" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-6">
			<h6 style="float:right">Date:<?php echo $date_media; ?></h6>
			<br><br>
			<p style="text-align: justify;">
				<?php echo $msg_of_media; ?>
			</p>
		</div>
	</div>
	<hr>
		</div>
	<?php
	}
	}
	}
	?>
	<!--Ending Judge Container-->
	<?php
	if ( $show_all != true ) {
		?>
	<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
		<form action="/pressure_cooker/mediaLink.php" method="get">
			<button class="btn btn-info btn-lg" ; type="submit" name="All" value="true" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Get More</button><br>
		</form>
	</div>
	<?php
	}
	?>
	<!--Ending Body Content-->
</div>


<!-- Footer template-->
<?php
include 'templates/footer_template.php';
?>
</body>
</html>