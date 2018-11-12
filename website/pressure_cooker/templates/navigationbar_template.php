

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

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
						<div class="navbar-header mouseOnlogo">
						<a href="index.php">
							<img src="staticImages\Pressure-Cooker-logo.png" alt="PC Logo" style="width:80px; height:80px; padding:3px">
						</a>
						<a href="https://cit.edu.au/">
							<img src="staticImages\CIT_logo_stacked_white_RTO.png" alt="CIT Logo" style="width:80px; height:80px; padding:3px">
						</a>
						</div>
					</div>
				</div>

				<div class="collapse navbar-collapse" id="myNavbar" style="margin-top: 35px;">
					<ul class="nav navbar-nav" style="margin-left: 80px;">
						<li><a href="index.php"><span style="font-weight: bold; font-size: 15px;">HOME</span></a>
						</li>
						<li><a href="judgesLink.php"><span style="font-weight: bold; font-size: 15px;">JUDGES & HOST</span></a>
						</li>
						<li><a href="teamsLink.php"><span style="font-weight: bold; font-size: 15px;">CONTESTANTS</span></a>
						</li>
						<li><a href="recipesLink.php"><span style="font-weight: bold; font-size: 15px;">RECIPES</span></a>
						</li>
						<li>
						<div class="dropdown">
							<button onclick="myFunction()" class="dropbtn" style="font-weight: 600; letter-spacing: 3px; font-size: 15px;">WATCH NOW</button>
							<div id="myDropdown" class="dropdown-content">
								<a href="mediaLink.php">EPISODES</a>
								<a href="judgesLink.php">JUDGES</a>
								<a href="teamsLink.php">CONTESTANTS</a>
								<a href="behindScenes.php">BEHIND THE SCENES</a>
								<a href="behindScenes.php">BONUS CONTENT</a>
							</div>
						</div>
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
		
