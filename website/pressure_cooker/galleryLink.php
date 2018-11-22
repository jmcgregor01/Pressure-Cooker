<?php
require __DIR__ . '/admin/config/db.php';
						$gallery_query = "SELECT * FROM gallery
							ORDER BY id DESC";
			$connect_gallery_query = mysqli_query( $conn, $gallery_query );
			$count_rows = mysqli_num_rows( $connect_gallery_query );
			$cap = 8;
			$abs_max_display = $count_rows;
			$abs_min_display = 0;
			if ( empty( $_POST[ "Show" ] ) ) {
				$displayed = 0;
				$max_display = $cap;
				$min_display = 0;
				setcookie( 'display', $displayed );
			} 
			else if ( $_POST[ "Show" ] == '+' ) {
				if ($_COOKIE[ 'display' ] + $cap < $abs_max_display)
				{
					$displayed = $_COOKIE[ 'display' ] + $cap;
					setcookie( 'display', $displayed );
					$max_display = $displayed + $cap;
					$min_display = $displayed;
					$displayed = 0;
				}
				else
				{
					$displayed = $_COOKIE[ 'display' ];
					$max_display = $displayed + $cap;
					$min_display = $displayed;
					$displayed = 0;
				}
					
			} else if ( $_POST[ "Show" ] == "-" ) {
				if ($_COOKIE[ 'display' ] > $abs_min_display)
				{
					$displayed = $_COOKIE[ 'display' ] - $cap;
					setcookie( 'display', $displayed );
					$max_display = $displayed + $cap;
					$min_display = $displayed;
					$displayed = 0;
				}
				else
				{
					$displayed = $_COOKIE[ 'display' ];
					$max_display = $displayed + $cap;
					$min_display = $displayed;
					$displayed = 0;
				}
			}
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
	<div class="myView bg-3">
	<div class="container-fluid myContainer bg-3 text-center goTopAnim"">

		<h1 style="font-weight: bold; background: #009dc5; color: white; border-radius: 5px; object-fit: none;">GALLERY</h1><br>

		<div class="row" style="padding: 50px;">
			<?php
			if ( $count_rows > 0 ) {
				while ( $get_each_row = mysqli_fetch_array( $connect_gallery_query ) ) {
					$id_of_gallery = $get_each_row[ 'id' ];
					$name_of_gallery = $get_each_row[ 'name' ];
					$img_of_gallery = $get_each_row[ 'img' ];
					$date_gallery = $get_each_row[ 'date' ];
					$msg_of_gallery = $get_each_row[ 'msg' ];
					$displayed++;
					if ( $min_display < $displayed && $displayed <= $max_display && $displayed <= $abs_max_display) {
						
						?>
			<div class="col-sm-6 col-md-4 col-lg-3  nojudgedecoration zoomit">
				<a href="viewGallery.php?gallery=<?php echo $id_of_gallery; ?>">
				<img class="resizeWithThumbnail" src="admin\dynamicImages\gallery\<?php echo $img_of_gallery; ?>" alt="gallery">
				<h2><strong><?php echo substr($name_of_gallery, 0, 18); ?>..</strong></h2>
						</a>																									   
				<p style="color: #1364D1;">
					<strong>
						<?php echo substr($msg_of_gallery, 0, 25); ?>.....
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
			<form action="<?php echo " galleryLink.php ";?>" method="post">
				<button class="btn btn-info btn-lg" ; type="submit" name="Show" value='+' style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;"">Next</button><br>
			</form>
		<?php
		}
		if ( $count_rows > $min_display && $min_display != 0 ) {
			?>
			<form action="<?php echo " galleryLink.php ";?>" method="post">
				<button class="btn btn-info btn-lg" ; type="submit" name="Show" value='-' style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Back</button><br>
			</form>
		<?php
		}
		?>

		<!--Ending Body Content-->
		
	</div>
</div>

	<!-- Footer template-->
	<?php
	include 'templates/footer_template.php';
	?>

</body>
</html>