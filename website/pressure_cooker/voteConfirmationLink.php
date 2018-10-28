<!DOCTYPE html>
<?php
	require 'admin/config/db.php';
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
		
		
		
		
		
		
		
		
		
		
		

		<div class="container bg-3 text-center">
			<h1 style="font-weight: bold; background: #1A81AC; color: white; border-radius: 5px;">VERIFY EMAIL</h1><br>
		</div>
		
		
		<div class="container bg-3 voteAlignment text-center" >
					<p>Please, check your email account.</p>
					<p>We send you an email confirmation code.</p><br>
					<form action="voteConfirmationLink.php" method="get" enctype="multipart/form-data">
						<label for="code">Please Enter Code</label>
						<input required class="form-control" type="text" id="code" name="code" style="box-shadow: 3px 4px 2px #efa6a6;"><br><br><br>
						<button name="submit" type="submit" class="btn btn-success btn-md" style="float: right">Submit</button>
					</form>
		
		</div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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