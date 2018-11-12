<!DOCTYPE html>
<?php
	require __DIR__.'/admin/config/db.php';
?>
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
		include "templates/navigationbar_template.php";
		?>	
		
		<!--Search Container-->
		<div id="startAgain" class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">

			<h1 style="font-weight: bold; background: #009dc5; color: white; border-radius: 5px;">RESULTS</h1><br>

			<div class="row" style="padding: 50px;">
					
				
			<?php
				if((empty($_GET['search'])))
				{
					die("You must enter a search query");
				}			
				$search = trim(strip_tags($_GET['search'])); //trimmed and stripped to sanitise query
				/* NOTE: We could potentially cut this whole search section down to one function that gets called with different parameters 
				but we would need to store the page links in the db as well to make it work. For the time being what's here will have to do. */
				//Search Judges
				$sql = "SELECT * FROM judges WHERE name LIKE '%$search%' ORDER BY date DESC LIMIT 0,9";
				$result = mysqli_query($conn, $sql) or die("Error searching - ".mysqli_error($conn));
				while($row = mysqli_fetch_array($result))
				{
					$name_of_judge = $row['name'];
					$img_of_judge = $row['img'];
			?>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="thumbnail">
						<a href="judgesLink.php"><img class="resizeWithThumbnail" src="admin\dynamicImages\judges\<?php echo $img_of_judge; ?>" alt="judges"></a>
						<a href="judgesLink.php"><h2><strong><?php echo $name_of_judge; ?></strong></h2></a>
					</div>
				</div>	
			<?php
				}
			?>
			<?php
				//Search Teams
				$sql = "SELECT * FROM teams WHERE name LIKE '%$search%' ORDER BY date DESC LIMIT 0,9";
				$result = mysqli_query($conn, $sql) or die("Error searching - ".mysqli_error($conn));
				while($row = mysqli_fetch_array($result))
				{
					$name_of_team = $row['name'];
					$img_of_team = $row['img'];
			?>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="thumbnail">
						<a href="teamsLink.php"><img class="resizeWithThumbnail" src="admin\dynamicImages\teams\<?php echo $img_of_team; ?>" alt="teams"></a>
						<a href="teamsLink.php"><h2><strong><?php echo $name_of_team; ?></strong></h2></a>
					</div>
				</div>	
			<?php
				}
			?>
			<?php
				//Search Recipes
				$sql = "SELECT * FROM recipes WHERE name LIKE '%$search%' ORDER BY date DESC LIMIT 0,9";
				$result = mysqli_query($conn, $sql) or die("Error searching - ".mysqli_error($conn));
				while($row = mysqli_fetch_array($result))
				{
					$name_of_recipe = $row['name'];
					$img_of_recipe = $row['img'];
				
			?>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="thumbnail">
						<a href="recipesLink.php"><img class="resizeWithThumbnail" src="admin\dynamicImages\recipes\<?php echo $img_of_recipe; ?>" alt="recipes"></a>
						<a href="recipesLink.php"><h2><strong><?php echo $name_of_recipe; ?></strong></h2></a>
					</div>
				</div>	
			<?php
				}
			?>
			<?php
				//Search Gallery
				$sql = "SELECT * FROM gallery WHERE name LIKE '%$search%' ORDER BY date DESC LIMIT 0,9";
				$result = mysqli_query($conn, $sql) or die("Error searching - ".mysqli_error($conn));
				while($row = mysqli_fetch_array($result))
				{
					$name_of_gallery = $row['name'];
					$img_of_gallery = $row['img'];
			?>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="thumbnail">
						<a href="galleryLink.php"><img class="resizeWithThumbnail"  src="admin\dynamicImages\gallery\<?php echo $img_of_gallery; ?>" alt="gallery"></a>
						<a href="galleryLink.php"><h2><strong><?php echo $name_of_gallery; ?></strong></h2></a>
					</div>
				</div>	
			<?php
				}
			?>
			<?php
				//Search Behind the Scenes
				$sql = "SELECT * FROM behindscenes WHERE name LIKE '%$search%' ORDER BY date DESC LIMIT 0,9";
				$result = mysqli_query($conn, $sql) or die("Error searching - ".mysqli_error($conn));
				while($row = mysqli_fetch_array($result))
				{
					$name_of_scene = $row['name'];
					$img_of_scene = $row['img'];
			?>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="thumbnail">
						<a href="behindScenes.php"><img class="resizeWithThumbnail" src="admin\dynamicImages\behindScenes\<?php echo $img_of_scene; ?>" alt="behind the scenes"></a>
						<a href="behindScenes.php"><h2><strong><?php echo $name_of_scene; ?></strong></h2></a>
					</div>
				</div>	
			<?php
				}
			?>
			<?php
				//Search Episodes
				$sql = "SELECT * FROM media WHERE name LIKE '%$search%' ORDER BY date DESC LIMIT 0,9";
				$result = mysqli_query($conn, $sql) or die("Error searching - ".mysqli_error($conn));
				while($row = mysqli_fetch_array($result))
				{
					$name_of_media = $row['name'];
					$video_of_media = $row['video'];
			?>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="thumbnail">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_of_media; ?>" allowfullscreen></iframe>
						<a href="mediaLink.php"><h2><strong><?php echo $name_of_media; ?></strong></h2></a>
					</div>
				</div>	
			<?php
				}
			?>			
			</div>

			<!--Ending Search Container-->
		</div>
	<!--Ending Body Content-->
	</div>
	<!-- Footer template-->
	<?php
	include 'templates/footer_template.php';
	?>
	<!--Scrolling Script-->
	<script>
		$( document ).ready( function () {
				// Add smooth scrolling to all links in navbar + footer link
				$( ".navbar a, .goTopAnim a[href='#topOfPage']" ).on( 'click', function ( event ) {
					// Make sure this.hash has a value before overriding default behavior
					if ( this.hash !== "" ) {
						// Prevent default anchor click behavior
						event.preventDefault();

						// Store hash
						var hash = this.hash;

						// Using jQuery's animate() method to add smooth page scroll
						// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
						$( 'html, body' ).animate( {
							scrollTop: $( hash ).offset().top
						}, 900, function () {

							// Add hash (#) to URL when done scrolling (default click behavior)
							window.location.hash = hash;
						} );
					} // End if
				} );

				$( window ).scroll( function () {
					$( ".slideanim" ).each( function () {
						var pos = $( this ).offset().top;

						var winTop = $( window ).scrollTop();
						if ( pos < winTop + 600 ) {
							$( this ).addClass( "slide" );
						}
					} );
				} );
			} )
			<!--Scrolling Script-->
	</script>
	</body>
</html>