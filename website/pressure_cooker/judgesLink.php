<!DOCTYPE html>
<?php
	require 'admin\config\db.php';
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
	<!--Ending Head of the Index Page-->
</head>

<body id="topOfPage">
	<!--Body Content-->
			<!--Header template-->
		<?php
		include "templates/navigationbar_template.php";
		?>	


		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--Judge Container-->
		<div id="startAgain" class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">

			<h1 style="font-weight: bold; background: #009dc5; color: white; border-radius: 5px;">JUDGES</h1><br>

			<div class="row" style="padding: 50px;">
					
				
			<?php
			$judge_query = "SELECT * FROM judges
									ORDER BY date DESC
										LIMIT 0,9";
			$connect_judge_query = mysqli_query($conn, $judge_query);
			$count_rows = mysqli_num_rows($connect_judge_query);
			$max_display = 3;
			$displayed = 0;
			
			if (empty($_GET["All"]))
			{
				$show_all = Null;
			}
			else
			{
				$show_all = $_GET["All"];
			}
				
			if($count_rows > 0){
				while($get_each_row = mysqli_fetch_array($connect_judge_query)){
					$id_of_judge = $get_each_row['id'];
					$name_of_judge = $get_each_row['name'];
					$img_of_judge = $get_each_row['img'];
					$msg_of_judge = $get_each_row['msg'];
					$date_judge = $get_each_row['date'];
					$displayed++;
					if ($displayed <= $max_display)
					{
						?>
							<div class="col-sm-6 col-md-4 col-lg-4">
								<div class="thumbnail">
									<img class="resizeWithThumbnail" src="admin\dynamicImages\judges\<?php echo $img_of_judge; ?>" alt="judges">
									<h2><strong><?php echo $name_of_judge; ?></strong></h2>
									<p style="color: #1364D1;"><strong><?php echo $msg_of_judge; ?></strong></p>
								</div>
							</div>
						<?php
					}
					elseif ($show_all == true)
					{
						?>
						<div class="col-sm-6 col-md-4 col-lg-4">
								<div class="thumbnail">
									<img class="resizeWithThumbnail" src="admin\dynamicImages\judges\<?php echo $img_of_judge; ?>" alt="judges">
									<h2><strong><?php echo $name_of_judge; ?></strong></h2>
									<p style="color: #1364D1;"><strong><?php echo $msg_of_judge; ?></strong></p>
								</div>
						</div>
								
							<?php
					}
				}
			}
			?>
			</div>
	
			
	
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		<!--Ending Judge Container-->
		<?php
		if ($show_all != true)
		{
		?>
			<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
				<form action="/pressure_cooker/judgesLink.php" method="get">
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