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
						<li class="<?php echo $home_select; ?>"><a href="index.php"><span style="font-weight: bold; font-size: 15px;">HOME</span></a>
						</li>
						<li class="<?php echo $judge_select; ?>"><a href="judgesLink.php"><span style="font-weight: bold; font-size: 15px;">JUDGES</span></a>
						</li>
						<li class="<?php echo $team_select; ?>"><a href="teamsLink.php"><span style="font-weight: bold; font-size: 15px;">TEAMS</span></a>
						</li>
						<li class="<?php echo $recipe_select; ?>"><a href="recipesLink.php"><span style="font-weight: bold; font-size: 15px;">RECIPES</span></a>
						</li>
						<li class="<?php echo $media_select; ?>"><a href="mediaLink.php"><span style="font-weight: bold; font-size: 15px;">WATCH NOW</span></a>
						</li>
						<li class="<?php echo $gallery_select; ?>"><a href="galleryLink.php"><span style="font-weight: bold; font-size: 15px;">GALLERY</span></a>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="font-weight: bold; font-size: 15px;">OTHERS </span><span class="caret" ></span></a>
							<ul class="dropdown-menu">
          						<li class="<?php echo $behind_select; ?>"><a href="behindScenes.php"><center>BEHIND SCENES</center></a></li>
          						<li class="<?php echo $sponsor_select; ?>"><a href="sponsorLink.php"><center>SPONSORS</center></a></li>
								<li class="<?php echo $android_select; ?>"><a href="workingOnIt.php"><center>ANDROID APP</center></a></li>
          						<li class="<?php echo $about_select; ?>"><a href="about.php"><center>ABOUT US</center></a></li>
								<li class="<?php echo $home_select; ?>"><a href="admin/indexAdmin.php"><center>ADMIN</center></a></li>
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