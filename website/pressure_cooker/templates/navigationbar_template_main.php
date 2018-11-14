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

				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav" style="margin-left: 80px;">
						<li class="active disabled"><a href="index.php"><span style="font-weight: bold; font-size: 15px;">HOME</span></a>
						</li>
						<li><a href="#judgesSection"><span style="font-weight: bold; font-size: 15px;">JUDGES</span></a>
						</li>
						<li><a href="#teamSection"><span style="font-weight: bold; font-size: 15px;">TEAMS</span></a>
						</li>
						<li><a href="#recipesSection"><span style="font-weight: bold; font-size: 15px;">RECIPES</span></a>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="font-weight: bold; font-size: 15px;">WATCH NOW</span><span class="caret" ></span></a>
							<ul class="dropdown-menu">
          						<li class="<?php echo $behind_select; ?>"><a href="mediaLink.php?type=e"><center>EPISODES</center></a></li>
          						<li class="<?php echo $sponsor_select; ?>"><a href="mediaLink.php?type=j"><center>JUDGES AND HOSTS</center></a></li>
								<li class="<?php echo $android_select; ?>"><a href="mediaLink.php?type=c"><center>CONTESTANTS</center></a></li>
          						<li class="<?php echo $about_select; ?>"><a href="mediaLink.php?type=b"><center>BEHIND THE SCENES</center></a></li>
        					</ul>
						</li>
						<li><a href="#gallerySection"><span style="font-weight: bold; font-size: 15px;">GALLERY</span></a>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="font-weight: bold; font-size: 15px;">OTHERS </span><span class="caret" ></span></a>
							<ul class="dropdown-menu">
          						<li><a href="#behindscenesSection"><center>BEHIND SCENES</center></a></li>
          						<li><a href="#sponsorSection"><center>SPONSORS</center></a></li>
								<li><a href="workingOnIt.php"><center>ANDROID APP</center></a></li>
          						<li><a href="#citContacts"><center>CONTACT US</center></a></li>
          						<li><a href="about.php"><center>ABOUT US</center></a></li>
								<li><a href="admin/indexAdmin.php"><center>ADMIN</center></a></li>
        					</ul>
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
		