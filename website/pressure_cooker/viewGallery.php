<?php
require __DIR__ . '/admin/config/db.php';
@$get = $_GET[ 'gallery' ];
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
	<div class="container-fluid">
		<div class="bg-3">
			<div class="container-fluid myContainer bg-3 text-center goTopAnim">
				<h1 style="font-weight: bold; background: black; color: white; border-radius: 5px; object-fit: none;">GALLERY SLIDE SHOW</h1><br>
				<div style="min-height: 50px;">
					<style>
						.jssorl-009-spin img {
							animation-name: jssorl-009-spin;
							animation-duration: 1.6s;
							animation-iteration-count: infinite;
							animation-timing-function: linear;
						}
						
						@keyframes jssorl-009-spin {
							from {
								transform: rotate(0deg);
							}
							to {
								transform: rotate(360deg);
							}
						}
					</style>
					<div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
						<!-- Loading Screen -->
						<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
							<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/slideShow/spin.svg"/>
						</div>

						<div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
							<?php
							$gallery_query = "SELECT * FROM gallery
								WHERE id = $get";
							$connect_gallery_query = mysqli_query( $conn, $gallery_query );
							$count_rows = mysqli_num_rows( $connect_gallery_query );
							if ( $count_rows > 0 ) {
								while ( $get_each_row = mysqli_fetch_array( $connect_gallery_query ) ) {
									$id_of_gallery = $get_each_row[ 'id' ];
									$name_of_gallery = $get_each_row[ 'name' ];
									$img_of_gallery = $get_each_row[ 'img' ];
									$date_gallery = $get_each_row[ 'date' ];
									$msg_of_gallery = $get_each_row[ 'msg' ];
									?>
							<div>
								<img data-u="image" src="admin\dynamicImages\gallery\<?php echo $img_of_gallery; ?>"/>
							</div>
							<?php
							}
							}
							?>
							<?php
							$gallery_query = "SELECT * FROM gallery";
							$connect_gallery_query = mysqli_query( $conn, $gallery_query );
							$count_rows = mysqli_num_rows( $connect_gallery_query );
							if ( $count_rows > 0 ) {
								while ( $get_each_row = mysqli_fetch_array( $connect_gallery_query ) ) {
									$id_of_gallery = $get_each_row[ 'id' ];
									$name_of_gallery = $get_each_row[ 'name' ];
									$img_of_gallery = $get_each_row[ 'img' ];
									$date_gallery = $get_each_row[ 'date' ];
									$msg_of_gallery = $get_each_row[ 'msg' ];
									?>
							<div>
								<img data-u="image" src="admin\dynamicImages\gallery\<?php echo $img_of_gallery; ?>"/>
							</div>
							<?php
							}
							}
							?>
						</div>
						<style>
							.jssorb031 {
								position: absolute;
							}
							
							.jssorb031 .i {
								position: absolute;
								cursor: pointer;
							}
							
							.jssorb031 .i .b {
								fill: #000;
								fill-opacity: 0.5;
								stroke: #fff;
								stroke-width: 1200;
								stroke-miterlimit: 10;
								stroke-opacity: 0.3;
							}
							
							.jssorb031 .i:hover .b {
								fill: #fff;
								fill-opacity: .7;
								stroke: #000;
								stroke-opacity: .5;
							}
							
							.jssorb031 .iav .b {
								fill: #fff;
								stroke: #000;
								fill-opacity: 1;
							}
							
							.jssorb031 .i.idn {
								opacity: .3;
							}
						</style>
						<div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
							<div data-u="prototype" class="i" style="width:16px;height:16px;">
								<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
									<circle class="b" cx="8000" cy="8000" r="5800"></circle>
								</svg>
							</div>
						</div>
						<style>
							.jssora051 {
								display: block;
								position: absolute;
								cursor: pointer;
							}
							
							.jssora051 .a {
								fill: none;
								stroke: red;
								stroke-width: 360;
								stroke-miterlimit: 10;
							}
							
							.jssora051:hover {
								opacity: .8;
							}
							
							.jssora051.jssora051dn {
								opacity: .5;
							}
							
							.jssora051.jssora051ds {
								opacity: .3;
								pointer-events: none;
							}
						</style>
						<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
							<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
								<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
							</svg>
						</div>
						<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
							<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
								<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="<?php echo $show_or_not_gallery; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
		<br><a href="galleryLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Exit Slide Show</a><br>

	</div>
	<script src="assets/slideShow/jquery-1.9.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="docs.min.js"></script>
	<script src="assets/slideShow/ie10-viewport-bug-workaround.js"></script>
	<script type="text/javascript" src="assets/slideShow/jssor.slider.min.js"></script>
	<script>
		jQuery( document ).ready( function ( $ ) {

			var options = {
				$FillMode: 1,
				$AutoPlay: 1,
				$Idle: 4000,
				$PauseOnHover: 1,
				$ArrowKeyNavigation: 1,
				$SlideEasing: $Jease$.$OutQuint,
				$SlideDuration: 1000,
				$MinDragOffsetToSlide: 20,
				//$SlideWidth: 600,
				$SlideHeight: 600,
				$SlideSpacing: 0,
				$UISearchMode: 1,
				$PlayOrientation: 1,
				$DragOrientation: 1,

				$BulletNavigatorOptions: {
					$Class: $JssorBulletNavigator$,
					$ChanceToShow: 2,
					$SpacingX: 8,
					$Orientation: 1
				},

				$ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$,
					$ChanceToShow: 2
				}
			};
			var jssor_slider1 = new $JssorSlider$( "slider1_container", options );

			function ScaleSlider() {
				var bodyWidth = document.body.clientWidth;
				if ( bodyWidth )
					jssor_slider1.$ScaleWidth( Math.min( bodyWidth, 1920 ) );
				else
					window.setTimeout( ScaleSlider, 30 );
			}
			ScaleSlider();
			$( window ).bind( "load", ScaleSlider );
			$( window ).bind( "resize", ScaleSlider );
			$( window ).bind( "orientationchange", ScaleSlider );
		} );
	</script>
</body>
</html>