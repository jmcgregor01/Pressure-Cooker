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
	<div class="container-fluid">

		<?php
		include "templates/navigationbar_template.php";
		?>


		<!--About Us Container-->
		<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">

			<h1 style="font-weight: bold; background: #009dc5; color: white; border-radius: 5px; object-fit: none;">ABOUT US</h1><br>

			<article class="post">
				<div id="content_container_71298">
					<p>At Canberra Institute of Technology we have a dedicated Brand and Business Development Division adept at finding training solutions in partnership with industry and community organisations.</p>
					<p>We work across CIT to source quality training programs and solutions for industry sectors as diverse as the construction industry to the health sector and government clients.</p>
					<p>CIT we can confidently boast our industry specialist trainers carry current industry expertise into every training situation, keen to work closely with existing and new clients to design niche training options for your company.</p>
					<p>At CIT we take pride in having designed training solutions for local, national and international partners.</p>
				</div><br><br><br><br><br><br><br>
				<div class="contact-continer">
					<h2>Contact Us</h2>
					<hr>
					<div class="row">
						<div class="col-sm-4">
							<div class="image">
								<img src="https://cit.edu.au/__data/assets/file/0010/69949/envelope03.svg" alt="Post" width="70">
							</div>
							<div class="text">
								<strong>Post </strong>
								<p>GPO Box 826 <br>Canberra ACT 2601</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="image">
								<img src="https://cit.edu.au/__data/assets/file/0011/69950/phone02.svg" alt="Email" width="70">
							</div>
							<div class="text">
								<strong>Call</strong>
								<p>Business Growth and Development</p>
								<a href="tel:61262053298" class="tel-link">(02) 6205 3298</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="image">
								<img src="https://cit.edu.au/__data/assets/file/0003/69951/envelope04.svg" alt="Phone" width="70">
							</div>
							<div class="text">
								<strong>Email</strong>
								<p>CIT Brand & Business<br>Development</p>
								<a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#98;&#100;&#64;&#99;&#105;&#116;&#46;&#101;&#100;&#117;&#46;&#97;&#117;">&#98;&#100;&#64;&#99;&#105;&#116;&#46;&#101;&#100;&#117;&#46;&#97;&#117;</a>
							</div>
						</div>
					</div>
				</div>

			</article>
		<!--Ending About Us Container-->
		</div>
		<!--Ending Body Content-->
	</div>


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