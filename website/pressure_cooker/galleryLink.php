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
	$team_select = "";
	$recipe_select = "";
	$media_select = "";
	$gallery_select = "active disabled";
	$behind_select = "";
	$sponsor_select = "";
	$android_select = "";
	$about_select = "";

	include "templates/navigationbar_template.php";
	?>

	<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">

		<h1 style="font-weight: bold; background: #009dc5; color: white; border-radius: 5px; object-fit: none;">GALLERY</h1><br>

		<div class="row" style="padding: 50px;">
			<?php
			$gallery_query = "SELECT * FROM gallery
								ORDER BY id DESC
								LIMIT 0,12";
			$connect_gallery_query = mysqli_query( $conn, $gallery_query );
			$count_rows = mysqli_num_rows( $connect_gallery_query );
			$cap = 4;
			if ( empty( $_POST[ "Show" ] ) ) {
				$displayed = 0;
				$max_display = $cap;
				$min_display = 0;
				setcookie( 'display', $displayed );
			} else if ( $_POST[ "Show" ] == '+' ) {
				$displayed = $_COOKIE[ 'display' ] + $cap;
				setcookie( 'display', $displayed );
				$max_display = $displayed + $cap;
				$min_display = $displayed;
				$displayed = 0;
			} else if ( $_POST[ "Show" ] == "-" ) {
				$displayed = $_COOKIE[ 'display' ] - $cap;
				setcookie( 'display', $displayed );
				$max_display = $displayed + $cap;
				$min_display = $displayed;
				$displayed = 0;
			}
			if ( $count_rows > 0 ) {
				while ( $get_each_row = mysqli_fetch_array( $connect_gallery_query ) ) {
					$id_of_gallery = $get_each_row[ 'id' ];
					$name_of_gallery = $get_each_row[ 'name' ];
					$img_of_gallery = $get_each_row[ 'img' ];
					$date_gallery = $get_each_row[ 'date' ];
					$msg_of_gallery = $get_each_row[ 'msg' ];
					$displayed++;
					if ( $min_display < $displayed && $displayed <= $max_display ) {
						?>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<img class="resizeWithThumbnail" src="admin\dynamicImages\gallery\<?php echo $img_of_gallery; ?>" alt="gallery">
				<h2><strong><?php echo $name_of_gallery; ?></strong></h2>
				<p style="color: #1364D1;">
					<strong>
						<?php echo $msg_of_gallery; ?>
					</strong>
				</p><br><br><br><br>
			</div>
			<?php
			}
			}
			}
			?>
		</div>

		<?php
		if ( $count_rows > $max_display ) {
			?>
		<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">

			<form action="<?php echo " galleryLink.php ";?>" method="post">
				<button class="btn btn-info btn-lg" ; type="submit" name="Show" value='+' style="float: right; margin-right: 20px;">Next</button><br>
			</form>
		</div>
		<?php
		}
		if ( $count_rows > $min_display && $min_display != 0 ) {
			?>
		<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
			<form action="<?php echo " galleryLink.php ";?>" method="post">
				<button class="btn btn-info btn-lg" ; type="submit" name="Show" value='-' style="float: right; margin-right: 20px;">Back</button><br>
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