<?php
require __DIR__ . '/admin/config/db.php';
?>
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
		<?php
		include "templates/navigationbar_template_main.php";
		?>
		<!--Ending Top Navigation Bar-->
		<?php
		$carousel_query = "SELECT * FROM carousel
								ORDER BY id DESC";
		$connect_carousel_query = mysqli_query( $conn, $carousel_query );
		$count_rows = mysqli_num_rows( $connect_carousel_query );
		$show_or_not_carousel = 'hidden';
		if ( $count_rows > 0 ) {
			$show_or_not_carousel = '';
			?>
		<!--Carousel (Showing sliding pictures)-->
		<div id="myCarousel" class="<?php echo $show_or_not_judges; ?> carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?php
				while ( $get_each_row = mysqli_fetch_array( $connect_carousel_query ) ) {
					$img1_of_carousel = $get_each_row[ 'img1' ];
					$img2_of_carousel = $get_each_row[ 'img2' ];
					$img3_of_carousel = $get_each_row[ 'img3' ];
					$date_carousel = $get_each_row[ 'date' ];
					?>
				<div class="item active">
					<img class="resizeCarouselMainPage" src="admin\dynamicImages\carousel\<?php echo $img1_of_carousel; ?>">
				</div>

				<div class="item">
					<img class="resizeCarouselMainPage" src="admin\dynamicImages\carousel\<?php echo $img2_of_carousel; ?>">
				</div>
				<div class="item">
					<img class="resizeCarouselMainPage" src="admin\dynamicImages\carousel\<?php echo $img3_of_carousel; ?>">
				</div>
				<?php
				}
				}
				?>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
		

			<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
		
			<!--Ending of Carousel-->
		</div>

		<?php
		$judge_query = "SELECT * FROM judges
								ORDER BY id DESC
								LIMIT 0,3";
		$connect_judge_query = mysqli_query( $conn, $judge_query );
		$count_rows = mysqli_num_rows( $connect_judge_query );
		$show_or_not_judges = 'hidden';
		if ( $count_rows > 0 ) {
			$show_or_not_judges = '';
			?>
		<!--Judge Container-->
		<div class="myView bg-3">
			<div id="judgesSection" class="<?php echo $show_or_not_judges; ?> container-fluid myContainer bg-3 text-center goTopAnim">
				<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			

				<h2><strong>Our Judges</strong></h2><br>
				<h4>We are here to Judge</h4>

				<div class="row text-center slideanim">
					<?php
					while ( $get_each_row = mysqli_fetch_array( $connect_judge_query ) ) {
						$id_of_judge = $get_each_row[ 'id' ];
						$name_of_judge = $get_each_row[ 'name' ];
						$img_of_judge = $get_each_row[ 'img' ];
						$msg_of_judge = $get_each_row[ 'msg' ];
						$date_judge = $get_each_row[ 'date' ];
						?>
					<div class="col-sm-6 col-md-6 col-lg-4 nojudgedecoration zoomit">
						<a href="viewJudge.php?judge=<?php echo $id_of_judge; ?>">
						<img class="resizeJudgeMainPage"  src="admin\dynamicImages\judges\<?php echo $img_of_judge; ?>" alt="judge">
						<p><strong><?php echo substr($name_of_judge, 0, 22); ?>..</strong></p>
						<p><?php echo substr($msg_of_judge, 0, 25); ?>.....</p>
					</a>
					
					</div>
					<?php
					}
					}
					?>
				</div>
			</div><br><br><br><br><br>
		</div>
		<div class="<?php echo $show_or_not_judges; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="judgesLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">More Judges</a><br>
			<!--Ending Judge Container-->
		</div>

		<?php
		$team_query = "SELECT * FROM teams
								ORDER BY id DESC
								LIMIT 0,4";
		$connect_team_query = mysqli_query( $conn, $team_query );
		$count_rows = mysqli_num_rows( $connect_team_query );
		$show_or_not_team = 'hidden';
		if ( $count_rows > 0 ) {
			$show_or_not_team = '';
			?>
		<!--Team Container-->
		<div class="myView bg-1">
			<div id="teamSection" class="<?php echo $show_or_not_team; ?> container-fluid myContainer bg-1 text-center goTopAnim">
				<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			
				<h2><strong>Our Teams</strong></h2><br>
				<h4>We are here to Serve</h4>
				<div class="row  slideanim">
					<?php
					while ( $get_each_row = mysqli_fetch_array( $connect_team_query ) ) {
						$id_of_team = $get_each_row[ 'id' ];
						$name_of_team = $get_each_row[ 'name' ];
						$img_of_team = $get_each_row[ 'img' ];
						$msg_of_team = $get_each_row[ 'msg' ];
						$date_team = $get_each_row[ 'date' ];
						?>
					<div class="col-lg-3 col-md-6 col-sm-6 noteamdecoration zoomit">
						<a href="viewTeam.php?team=<?php echo $id_of_team; ?>">
							<div class="thumbnail">
								<img class="resizeTeamMainPage" src="admin\dynamicImages\teams\<?php echo $img_of_team; ?>" alt="team image">
								<p>
									<strong>
										<?php echo substr($name_of_team, 0, 22); ?>..
									</strong>
								</p>
							</div>
						</a>
					</div>
					<?php
					}
					}
					?>
				</div>
			</div><br><br><br><br><br>
		</div>
		<div class="<?php echo $show_or_not_team; ?> container-fluid myContainer bg-1 text-center goTopAnim" style="padding: 50px;">
			<br><a href="teamsLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">More Teams</a><br>
			<!--Ending Team Container-->
		</div>

			<?php
			$recipe_query = "SELECT * FROM recipes
								ORDER BY id DESC
								LIMIT 0,1";
			$connect_recipe_query = mysqli_query($conn, $recipe_query);
			$count_rows = mysqli_num_rows($connect_recipe_query);
			$show_or_not_recipe = 'hidden';
			if($count_rows > 0){
				$show_or_not_recipe = '';
			?>
		<!--Recipes Container-->
		<div class="myView bg-3">
		<div id="recipesSection" class="<?php echo $show_or_not_recipe; ?> container-fluid myContainer bg-3 text-center goTopAnim">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
		
			<h2><strong>Latest Recipe</strong></h2><br>
			<h4>Please, Try Youself!</h4>
			<?php
			while($get_each_row = mysqli_fetch_array($connect_recipe_query)){
				$id_of_recipe = $get_each_row['id'];
				$name_of_recipe = $get_each_row['name'];
				$img_of_recipe = $get_each_row['img'];
				$date_recipe = $get_each_row['date'];
			?>
			<div class="row slideanim nojudgedecoration zoomitMainRecipes">
				<a href="recipeDetails.php?recipe_id=<?php echo $id_of_recipe; ?>">
				<div class="col-lg-6 col-md-6 col-sm-6">
					
						<img class="img-thumbnail img-responsive" style="width: 100%; height: 100%" src="admin\dynamicImages\recipes\<?php echo $img_of_recipe; ?>" alt="recipe image" style="max-height: 215px; max-width: 400px;">
						<h2><strong><?php echo $name_of_recipe; ?></strong></h2>
				</div>
				</a>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<strong><p class="example1" style="text-align: justify;">CIT's Pressure Cooker Team has their best cooking recipes to share with everybody, who love to cook and test something new to eat. Our team is Helping you make meal time easy with a range of dinner ideas and recipe inspiration.</p></strong>
					
				</div>
					
			</div>
			<?php
				}
			}
			?>
		</div>
		</div>
		<div class="<?php echo $show_or_not_recipe; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="recipesLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">More Recipes</a><br>
			<!--Ending Recipes Container-->
		</div>

		<?php
		$media_query = "SELECT * FROM media
								ORDER BY id DESC
								LIMIT 0,1";
		$connect_media_query = mysqli_query( $conn, $media_query );
		$count_rows = mysqli_num_rows( $connect_media_query );
		$show_or_not_media = 'hidden';
		if ( $count_rows > 0 ) {
			$show_or_not_media = '';
			?>
		<!--Media Container-->
		<div class="myView bg-5">
			<div id="mediaSection" class="<?php echo $show_or_not_media; ?> container-fluid myContainer bg-5 text-center goTopAnim">
				<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			

				<h2><strong>Latest Episode</strong></h2><br>
				<h4>Watch Our Show Anytime</h4>
				<?php
				while ( $get_each_row = mysqli_fetch_array( $connect_media_query ) ) {
					$id_of_media = $get_each_row[ 'id' ];
					$name_of_media = $get_each_row[ 'name' ];
					$video_of_media = $get_each_row[ 'video' ];
					$msg_of_media = $get_each_row[ 'msg' ];
					$date_media = $get_each_row[ 'date' ];
					?>
				<div class="row slideanim">
					<div class="col-lg-6 col-md-6 col-sm-6">

						<p class="example2" style="text-align: justify;">
							<?php echo substr($msg_of_media, 0, 900); ?>...</p>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="embed-responsive embed-responsive-16by9" style="border-radius: 5px;">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_of_media; ?>" allowfullscreen></iframe>
						</div>

						<h2><strong><?php echo $name_of_media; ?></strong></h2>
					</div>
				</div>
				<?php
				}
				}
				?>
			</div><br><br><br>
		</div>
		<div class="<?php echo $show_or_not_media; ?> container-fluid myContainer bg-5 text-center goTopAnim" style="padding: 50px;">
			<br><a href="mediaLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">More Episodes</a><br>
			<!--Ending Media Container-->
		</div>

		<?php
		$gallery_query = "SELECT * FROM gallery
								ORDER BY id DESC
								LIMIT 0,6";
		$connect_gallery_query = mysqli_query( $conn, $gallery_query );
		$count_rows = mysqli_num_rows( $connect_gallery_query );
		$show_or_not_gallery = 'hidden';
		if ( $count_rows > 0 ) {
			$show_or_not_gallery = '';
			?>
		<!--Gallery Container-->
		<div class="myView bg-3">
			<div id="gallerySection" class="<?php echo $show_or_not_gallery; ?> container-fluid myContainer bg-3 text-center goTopAnim">
				<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			
				<h2><strong>Gallery</strong></h2><br>
				<h4>Our Best Photos</h4>
				<div class="row slideanim">

					<?php
					while ( $get_each_row = mysqli_fetch_array( $connect_gallery_query ) ) {
						$id_of_gallery = $get_each_row[ 'id' ];
						$name_of_gallery = $get_each_row[ 'name' ];
						$img_of_gallery = $get_each_row[ 'img' ];
						$date_gallery = $get_each_row[ 'date' ];
						$msg_of_gallery = $get_each_row[ 'msg' ];
						?>

					<div class="col-sm-6 col-md-4 col-lg-4 nojudgedecoration zoomit">
						<a href="viewGallery.php?gallery=<?php echo $id_of_gallery; ?>">
						<img class="resizeWithThumbnail" src="admin\dynamicImages\gallery\<?php echo $img_of_gallery; ?>" alt="gallery">
						<h2 style="font-size: 18px"><?php echo substr($name_of_gallery, 0, 22); ?>..</h2>
					</a>
						<br><br><br><br>
					</div>
					<?php
					}
					}
					?>
				</div>

			</div>
		</div>
		<div class="<?php echo $show_or_not_gallery; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="galleryLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">More Pictures</a><br>
			<!--Ending Gallery Container-->
		</div>

		<?php
		$behindscenes_query = "SELECT * FROM behindscenes
								ORDER BY id DESC
								LIMIT 0,6";
		$connect_behindscenes_query = mysqli_query( $conn, $behindscenes_query );
		$count_rows = mysqli_num_rows( $connect_behindscenes_query );
		$show_or_not_behindscenes = 'hidden';
		if ( $count_rows > 0 ) {
			$show_or_not_behindscenes = '';
			?>
		<!--Behindscenes Container-->
		<div class="myView bg-8">
			<div id="behindscenesSection" class="<?php echo $show_or_not_behindscenes; ?> container-fluid myContainer bg-8 text-center goTopAnim">
				<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			
				<h2><strong>Behind The Scenes</strong></h2><br>
				<h4>Our Hard Work</h4>
				<div class="row slideanim">

					<?php
					while ( $get_each_row = mysqli_fetch_array( $connect_behindscenes_query ) ) {
						$id_of_behindscenes = $get_each_row[ 'id' ];
						$name_of_behindscenes = $get_each_row[ 'name' ];
						$img_of_behindscenes = $get_each_row[ 'img' ];
						$date_behindscenes = $get_each_row[ 'date' ];
						$msg_of_behindscenes = $get_each_row[ 'msg' ];
						?>

					<div class="col-sm-6 col-md-6 col-lg-4 nojudgedecoration zoomit">
						<a href="viewBehindScenes.php?behindScenes=<?php echo $id_of_behindscenes; ?>">
						<img class="resizeWithBehind" src="admin\dynamicImages\behindScenes\<?php echo $img_of_behindscenes; ?>" alt="behindscenes">
						<h2 style="font-size: 18px"><?php echo substr($name_of_behindscenes, 0, 22); ?>..</h2>
					</a>
						<br><br><br><br>
					</div>
					<?php
					}
					}
					?>
				</div>

			</div>
		</div>
		<div class="<?php echo $show_or_not_behindscenes; ?> container-fluid myContainer bg-8 text-center goTopAnim" style="padding: 50px;">
			<br><a href="behindScenes.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">More BehindScenes</a><br>
			<!--Ending Behindscenes Container-->
		</div>

		<?php
		$sponsor_query = "SELECT * FROM sponsor
								ORDER BY id DESC
								LIMIT 0,8";
		$connect_sponsor_query = mysqli_query( $conn, $sponsor_query );
		$count_rows = mysqli_num_rows( $connect_sponsor_query );
		$show_or_not_sponsor = 'hidden';
		if ( $count_rows > 0 ) {
			$show_or_not_sponsor = '';
			?>
		<!--Sponsors Container-->
		<div class="myView bg-3">
			<div id="sponsorSection" class="<?php echo $show_or_not_sponsor; ?> container-fluid myContainer bg-3 text-center goTopAnim">
				<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			
				<h2><strong>Sponsors</strong></h2><br>
				<h4>Our Supporters</h4>
				<div class="row slideanim">

					<?php
					while ( $get_each_row = mysqli_fetch_array( $connect_sponsor_query ) ) {
						$id_of_sponsor = $get_each_row[ 'id' ];
						$name_of_sponsor = $get_each_row[ 'name' ];
						$img_of_sponsor = $get_each_row[ 'img' ];
						$date_sponsor = $get_each_row[ 'date' ];
						$msg_of_sponsor = $get_each_row[ 'msg' ];
						?>

					<div class="col-sm-6 col-md-4 col-lg-3 nojudgedecoration zoomit">
						<a href="viewSponsor.php?sponsor=<?php echo $id_of_sponsor; ?>">
						<img class="resizeWithThumbnail" src="admin\dynamicImages\sponsors\<?php echo $img_of_sponsor; ?>" alt="sponsor">
						<h2 style="font-size: 18px"><?php echo substr($name_of_sponsor, 0, 22); ?>..</h2>
					</a>
						<br><br><br><br>
					</div>
					<?php
					}
					}
					?>
				</div>

			</div>
		</div>
		<div class="<?php echo $show_or_not_sponsor; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="sponsorLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">More Sponsors</a><br>
			<!--Ending Sponsors Container-->
		</div>

		<!--Contact Us Container-->
		<div class="myView bg-0">
			<div id="citContacts" class="container-fluid myContainer bg-0 text-center goTopAnim">
				<a href="#topOfPage" title="To Top">
    			<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			

				<h2 class="text-center"><strong>CONTACT</strong></h2><br>

				<div class="row text-center">

						<p>Contact us and we'll get back to you within 24 hours.</p>
						<p><span class="glyphicon glyphicon-map-marker"></span> GPO Box 826 Canberra, ACT 2601</p>
						<p><span class="glyphicon glyphicon-phone"></span> +61 2 6207 3188</p>
						<p><span class="glyphicon glyphicon-envelope"></span> infoline@cit.edu.au</p>

				</div>
				<hr>
				<div class="embed-responsive embed-responsive-16by9" style="border-radius: 5px;">
					<center><iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6513.543193413012!2d149.1329614864318!3d-35.286804613391176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9d3b3beb2c34d49!2sCanberra+Institute+of+Technology!5e0!3m2!1sen!2sau!4v1539905585501" width="1000" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					</center>
				</div>
				<!--Ending Contact Us Container-->
			</div>
		</div>
		<!--Ending Body Content-->
	</div>
	<!-- Footer template-->
	<?php
	include 'templates/footer_template.php';
	?>
</body>
</html>