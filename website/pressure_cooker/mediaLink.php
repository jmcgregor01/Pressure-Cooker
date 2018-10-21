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
	<div class="container-fluid">

		<!--Top Navigation Bar-->
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>

					<div class="navbar-header mouseOnlogo">
						<a href="https://cit.edu.au/">
							<h2 class="citLogo">
								<span class="ciLogoPressureLogo">Ci</span><span class="tLogo">T</span>
							</h2>

							<h4 class="pressureCookerLogo">
								<span class="ciLogoPressureLogo">PRESSURE</span><span class="cookerLogo">COOKER</span>
							</h4>
						</a>
					</div>
				</div>

				<div class="collapse navbar-collapse" id="myNavbar" style="margin-top: 35px;">
					<ul class="nav navbar-nav" style="margin-left: 80px;">
						<li><a href="index.php"><span style="font-weight: bold; font-size: 15px;">HOME</span></a>
						</li>
						<li><a href="judgesLink.php"><span style="font-weight: bold; font-size: 15px;">JUDGES</span></a>
						</li>
						<li><a href="teamsLink.php"><span style="font-weight: bold; font-size: 15px;">TEAMS</span></a>
						</li>
						<li><a href="recipesLink.php"><span style="font-weight: bold; font-size: 15px;">RECIPES</span></a>
						</li>
						<li class="active disabled"><a href="#mediaSection"><span style="font-weight: bold; font-size: 15px;">MEDIA</span></a>
						</li>
						<li><a href="galleryLink.php"><span style="font-weight: bold; font-size: 15px;">GALLERY</span></a>
						</li>
					</ul>

					<form style="margin-right: 50px;" class="navbar-form navbar-right" action="/action_page.php">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" name="search">
						</div>

						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
			<!--Ending Top Navigation Bar-->
		</nav>

		<!--Judge Container-->
		<div class="container-fluid myContainer bg-3 text-center goTopAnim mediaLinkContainer">


			<h1 style="font-weight: bold; background: blue; color: white; border-radius: 5px; margin: 100px;">EPISODES</h1><br>
					<?php
					$media_query = "SELECT * FROM media
										ORDER BY id DESC
										LIMIT 0,4";
					$connect_media_query = mysqli_query($conn, $media_query);
					$count_rows = mysqli_num_rows($connect_media_query);
					if($count_rows > 0){
						while($get_each_row = mysqli_fetch_array($connect_media_query)){
							$id_of_media = $get_each_row['id'];
							$name_of_media = $get_each_row['name'];
							$video_of_media = $get_each_row['video'];
							$msg_of_media = $get_each_row['msg'];
							$date_media = $get_each_row['date'];						
					?>			
					<div class="row" style="padding-top: 10px; padding-bottom: 100px; padding-left: 100px; padding-right: 100px;">
						<center><h3 style="font-weight: bold"><?php echo $name_of_media; ?></h3></center>
						<div class="col-md-6">
							<div class="embed-responsive embed-responsive-16by9"  style="border-radius: 5px;">
  								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_of_media; ?>" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="col-md-6">
							
							<h6 style="float:right">Date:<?php echo $date_media; ?></h6>
							<br><br>
							<p style="text-align: justify;"><?php echo $msg_of_media; ?></p>
						</div>
					</div><hr>
					<?php
						}
					}
					?>	
			<!--Ending Judge Container-->
		</div>
		
		<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
			<button class="btn btn-info btn-lg" style="float: right; margin-right: 20px;">Get More</button><br>
		</div>
		

	<!--Ending Body Content-->
	</div>


	<!--Footer At the End of Page-->
	<footer class="goTopAnim footerBoarder">
		<center><a href="#topOfPage" title="To Top">
    			<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
		
		</center>
<div class="row">
		<div class="col-md-4 footerStyleLeft">
			<a href="workingOnIt.php">
				<div class="col-md-1">
					<i class="fab fa-android fa-2x" style="color: greenyellow; margin-left: 24px;"></i>
				</div>

				<div class="col-md-11" style="margin-right: 1px;">
					Android App
				</div>
			</a>
		</div>
		
		<div class="col-md-4 footerSponsor">
			<center><a class="footerSponsorMarginRight" href="sponsorLink.php">Sponsors</a></center>
		</div>
		
		<div class="col-md-4 footerStyleRight">
			<a href="behindScense.php"><span style="margin: 20px">Behind The Scense</span></a><br>

			<a href="about.php"><span style="margin: 50px">About Us</span></a><br>

			<a href="admin/indexAdmin.php"><span class="glyphicon glyphicon-log-in"><span style="margin: 35px;"></span></span></a>
		</div>
	</div>
		<!--Ending of Footer-->
	</footer>

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