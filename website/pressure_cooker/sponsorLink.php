<!DOCTYPE html>
<?php
	require __DIR__.'admin/config/db.php';
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

		
		
		
		
		
		
		<!--Behind Scenes-->
		<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">

			<h1 style="font-weight: bold; background: #009dc5; color: white; border-radius: 5px; object-fit: none;">SPONSORS</h1><br>

			<div class="row" style="padding: 50px;">
			<?php
			$sponsor_query = "SELECT * FROM sponsor
								ORDER BY id DESC
								LIMIT 0,12";
			$connect_sponsor_query = mysqli_query($conn, $sponsor_query);
			$count_rows = mysqli_num_rows($connect_sponsor_query);
			$max_display = 4;
			$displayed = 0;
			
			if (empty($_GET["All"]))
			{
				$show_all = true;
			}
			else
			{
				$show_all = $_GET["All"];
			}
			if($count_rows > 0){
			while($get_each_row = mysqli_fetch_array($connect_sponsor_query)){
				$id_of_sponsor = $get_each_row['id'];
				$name_of_sponsor = $get_each_row['name'];
				$img_of_sponsor = $get_each_row['img'];
				$date_sponsor = $get_each_row['date'];
				$msg_of_sponsor = $get_each_row['msg'];
				$displayed++;
				if ($displayed <= $max_display)
					{
						?>						
						<div class="col-sm-6 col-md-4 col-lg-3">
							<img class="resizeWithThumbnail" src="admin\dynamicImages\sponsors\<?php echo $img_of_sponsor; ?>" alt="sponsors">
							<h2><strong><?php echo $name_of_sponsor; ?></strong></h2>
							<p style="color: #1364D1;"><strong><?php echo $msg_of_sponsor; ?></strong></p><br><br><br><br>
						</div>
				<?php
					}
					elseif ($show_all == true)
					{
						?><div class="col-sm-6 col-md-4 col-lg-3">
							<img class="resizeWithThumbnail" src="admin\dynamicImages\sponsors\<?php echo $img_of_sponsor; ?>" alt="sponsors">
							<h2><strong><?php echo $name_of_sponsor; ?></strong></h2>
							<p style="color: #1364D1;"><strong><?php echo $msg_of_sponsor; ?></strong></p><br><br><br><br>
						</div>
					<?php
					}
			
				}
			}
			?>						
			</div>

			<!--Ending Behind Scenes Container-->
		<?php
		if ($show_all != true)
		{
			?>
				<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
					<form action="/pressure_cooker/sponsorLink.php" method="get">
						<button class="btn btn-info btn-lg"; type = "submit" name = "All" value = "true" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Get More</button><br>
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