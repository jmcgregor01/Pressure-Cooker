<?php require __DIR__.'/admin/config/db.php' ?>
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
						<li><a href="mediaLink.php"><span style="font-weight: bold; font-size: 15px;">MEDIA</span></a>
						</li>
						<li><a href="galleryLink.php"><span style="font-weight: bold; font-size: 15px;">GALLERY</span></a>
						</li>
					</ul>

					<form style="margin-right: 50px;" class="navbar-form navbar-right" action="search.php" method="get">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" name="search">
						</div>

						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
			<!--Ending Top Navigation Bar-->
		</nav>
		<!--Voting Container-->
		<div id="startAgain" class="container bg-3 voteAlignment text-center" style="padding: 100px;">

			<h1 style="font-weight: bold; background: #009dc5; color: white; border-radius: 5px;">VOTE</h1><br>

			<div class="row" style="padding: 50px;">
					
				<?php	
					if(isset($_COOKIE['votecookie']))
					{
						echo "<p>Sorry you have already voted.</p>";
					}
					else
					{
						$sql = "SELECT * FROM teams";
						$result = mysqli_query($conn, $sql) or die("Error - ".mysqli_error($conn));
						$value = 0;
						?>
						
						
						<form action="voteLink.php" method="get">
							<label for="email">Enter Your Email</label>
							<br><br>
							<input required class="form-control" type="email" id="emailId" name="email" style="box-shadow: 3px 4px 2px #efa6a6;"><br><br><br>
							<p>Please select the team you want to vote for.</p>
							<br>
							<label for="vote">Vote:</label>
							<select name="vote">
								<?php
								while($row = mysqli_fetch_array($result))
								{
									$name_of_team = $row['name'];
									$value++;
									?>
									<option value="<?php echo "$value"; ?>"><?php echo "$name_of_team"; ?></option>
									<?php
								}
								?>
							</select>
							<br>
							<br>
							<br>
							<button name="submit" type="submit" class="btn btn-success btn-md">Vote Now</button>
						</form>
						<?php
					}
				?>
						
			</div>

			<!--Ending Vote Container-->
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
			<a href="behindScenes.php"><span style="margin: 20px">Behind The Scense</span></a><br>

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