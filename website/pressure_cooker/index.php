<!DOCTYPE html>
<?php
	require __DIR__.'/admin/config/db.php';
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
	<div class="container-fluid">

		<!--Top Navigation Bar-->
		<?php
		include "templates/navigationbar_template.php";
		?>
		<!--Ending Top Navigation Bar-->
			<?php
			$carousel_query = "SELECT * FROM carousel
								ORDER BY id DESC";
			$connect_carousel_query = mysqli_query($conn, $carousel_query);
			$count_rows = mysqli_num_rows($connect_carousel_query);
			$show_or_not_carousel = 'hidden';
			if($count_rows > 0){
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
					while($get_each_row = mysqli_fetch_array($connect_carousel_query)){		
					$img1_of_carousel = $get_each_row['img1'];
					$img2_of_carousel = $get_each_row['img2'];
					$img3_of_carousel = $get_each_row['img3'];
					$date_carousel = $get_each_row['date'];
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
			</div>
			<?php
			$behind_query = "SELECT * FROM behindscenes
								ORDER BY id DESC
								LIMIT 0,3";
			$connect_behind_query = mysqli_query($conn, $behind_query);
			$count_rows = mysqli_num_rows($connect_behind_query);
			$show_or_not_behinds = 'hidden';
			if($count_rows > 0){
				$show_or_not_behinds = '';
			?>		
		<!--Behind Container-->
		<div id="behindsSection" class="<?php echo $show_or_not_behinds; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>

			<h2>Behind the Curtain</h2><br>
			<h4>How we did it</h4>

			<div class="row text-center  slideanim">	
			<?php
				while($get_each_row = mysqli_fetch_array($connect_behind_query)){
					$id_of_behind = $get_each_row['id'];
					$name_of_behind = $get_each_row['name'];
					$img_of_behind = $get_each_row['img'];
					$msg_of_behind = $get_each_row['msg'];
					$date_behind = $get_each_row['date'];
			?>
				<div class="col-sm-6 col-md-6 col-lg-4">
						<img class="resizeJudgeMainPage"  src="admin\dynamicImages\behindScenes\<?php echo $img_of_behind; ?>" alt="behind">
						<p><strong><?php echo $name_of_behind; ?></strong></p>
						<p><?php echo $msg_of_behind; ?></p>
				</div>
			<?php
				}
			}
			?>
			</div>
		</div>
		<div class="<?php echo $show_or_not_behinds; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="behindScenes.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Get More</a><br>
			<!--End Behind Container-->
		</div>
			<?php
			$sponsors_query = "SELECT * FROM sponsor
								ORDER BY id DESC
								LIMIT 0,3";
			$connect_sponsors_query = mysqli_query($conn, $sponsors_query);
			$count_rows = mysqli_num_rows($connect_sponsors_query);
			$show_or_not_sponsors = 'hidden';
			if($count_rows > 0){
				$show_or_not_behinds = '';
			?>		
		<!--Sponsors Container-->
		<div id="sponsorsSection" class = "container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>

			<h2>Our Sponsors</h2><br>
			<h4>Who supported us</h4>

			<div class="row text-center  slideanim">	
			<?php
				while($get_each_row = mysqli_fetch_array($connect_sponsors_query)){
					$id_of_sponsors= $get_each_row['id'];
					$name_of_sponsors= $get_each_row['name'];
					$img_of_sponsors= $get_each_row['img'];
					$msg_of_sponsors= $get_each_row['msg'];
					$date_sponsors= $get_each_row['date'];
			?>
				<div class="col-sm-6 col-md-6 col-lg-4">
						<img class="resizeJudgeMainPage"  src="admin\dynamicImages\sponsors\<?php echo $img_of_sponsors; ?>" alt="sponsors">
						<p><strong><?php echo $name_of_sponsors; ?></strong></p>
						<p><?php echo $msg_of_sponsors; ?></p>
				</div>
			<?php
				}
			}
			?>
			</div>
		</div>
		<div class = "container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="sponsorLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Get More</a><br>
			<!--End Sponsors Container-->
			</div>
			<?php
			$judge_query = "SELECT * FROM judges
								ORDER BY id DESC
								LIMIT 0,3";
			$connect_judge_query = mysqli_query($conn, $judge_query);
			$count_rows = mysqli_num_rows($connect_judge_query);
			$show_or_not_judges = 'hidden';
			if($count_rows > 0){
				$show_or_not_judges = '';
			?>		
		<!--Judge Container-->
		<div id="judgesSection" class="<?php echo $show_or_not_judges; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>

			<h2>Our Judges</h2><br>
			<h4>We are here to Judge</h4>

			<div class="row text-center  slideanim">	
			<?php
				while($get_each_row = mysqli_fetch_array($connect_judge_query)){
					$id_of_judge = $get_each_row['id'];
					$name_of_judge = $get_each_row['name'];
					$img_of_judge = $get_each_row['img'];
					$msg_of_judge = $get_each_row['msg'];
					$date_judge = $get_each_row['date'];
			?>
				<div class="col-sm-6 col-md-6 col-lg-4">
						<img class="resizeJudgeMainPage"  src="admin\dynamicImages\judges\<?php echo $img_of_judge; ?>" alt="judge">
						<p><strong><?php echo $name_of_judge; ?></strong></p>
						<p><?php echo $msg_of_judge; ?></p>
				</div>
			<?php
				}
			}
			?>
			</div>
		</div>
		<div class="<?php echo $show_or_not_judges; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="judgesLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Get More</a><br>
			<!--Ending Judge Container-->
		</div>
			<?php
			$team_query = "SELECT * FROM teams
								ORDER BY id DESC
								LIMIT 0,4";
			$connect_team_query = mysqli_query($conn, $team_query);
			$count_rows = mysqli_num_rows($connect_team_query);
			$show_or_not_team = 'hidden';
			if($count_rows > 0){
				$show_or_not_team = '';
			?>
		<!--Team Container-->
		<div id="teamSection" class="<?php echo $show_or_not_team; ?> container-fluid myContainer bg-1 text-center goTopAnim" style="padding: 100px;">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>	
			<h2>Our Contestants</h2><br>
			<h4>We are here to Serve</h4>			
			<div class="row  slideanim">
			<?php
			while($get_each_row = mysqli_fetch_array($connect_team_query)){
				$id_of_team = $get_each_row['id'];
				$name_of_team = $get_each_row['name'];
				$img_of_team = $get_each_row['img'];
				$msg_of_team = $get_each_row['msg'];
				$date_team = $get_each_row['date'];
			?>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="thumbnail">
						<img class="resizeTeamMainPage" src="admin\dynamicImages\teams\<?php echo $img_of_team; ?>" alt="team image">
						<p style="color: #1364D1;"><strong><?php echo $name_of_team; ?></strong></p>
					</div>
				</div>
			<?php
				}
			}
			?>
			</div>
		</div>
		<div class="<?php echo $show_or_not_team; ?> container-fluid myContainer bg-1 text-center goTopAnim" style="padding: 50px;">
			<br><a href="teamsLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Get More</a><br>
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
		<div id="recipesSection" class="<?php echo $show_or_not_recipe; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>	
			<h2>Latest Recipe</h2><br>
			<?php
			while($get_each_row = mysqli_fetch_array($connect_recipe_query)){
				        $id_of_recipe = $get_each_row['id'];
						$name_of_recipe = $get_each_row['name'];
						$img_of_recipe = $get_each_row['img'];
						$ingredients_of_recipe = $get_each_row['ingredients'];
						$method_of_recipe = $get_each_row['method'];
						$date_recipe = $get_each_row['date'];
			?>
			<div class="row" style="padding: 50px;">
				<div class="col-lg-6 col-md-6 col-sm-6">
				<br>
					    <h2><strong><?php echo $name_of_recipe; ?></strong></h2>
					    <br>
                        <img class="img-thumbnail img-responsive" style="width: 100%; height: 100%" src="admin\dynamicImages\recipes\<?php echo $img_of_recipe ; ?>" alt="recipe image" style="max-height: 215px; max-width: 400px;">
						<h3 class="example1" style="text-align: justify;"><strong>METHOD</strong></h3>
						
						<p class="example3" style="text-align: justify;"><?php echo $method_of_recipe; ?></p>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
				    <br>
				    <h3 class="example1" style="text-align: justify;"><strong>INGREDIENTS</strong></h3>
				    <p class="example3" style="text-align: justify;"><?php echo $ingredients_of_recipe; ?></p>
					
				</div>
				</div>    
			<?php
				}
			}
			?>
		</div>
		<div class="<?php echo $show_or_not_recipe; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="recipesLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Get More</a><br>
		<!--Ending Recipes Container-->
		</div>
			<?php
			$media_query = "SELECT * FROM media
								ORDER BY id DESC
								LIMIT 0,1";
			$connect_media_query = mysqli_query($conn, $media_query);
			$count_rows = mysqli_num_rows($connect_media_query);
			$show_or_not_media = 'hidden';
			if($count_rows > 0){
				$show_or_not_media = '';
			?>		
		<!--Media Container-->
		<div id="mediaSection" class="<?php echo $show_or_not_media; ?> container-fluid myContainer bg-5 text-center goTopAnim" style="padding: 100px;">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			
			<h2>Latest Episode</h2>
			<?php
			while($get_each_row = mysqli_fetch_array($connect_media_query)){
				$id_of_media = $get_each_row['id'];
				$name_of_media = $get_each_row['name'];
				$video_of_media = $get_each_row['video'];
				$msg_of_media = $get_each_row['msg'];
				$date_media = $get_each_row['date'];
			?>
			<div class="row slideanim" style="padding: 50px;">
				<div class="col-lg-6 col-md-6 col-sm-6">
						
					<p class="example2" style="text-align: justify;"><?php echo substr($msg_of_media, 0, 900); ?>...</p>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="embed-responsive embed-responsive-16by9"  style="border-radius: 5px;">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_of_media; ?>" allowfullscreen></iframe>
					</div>
					
					<h2><strong><?php echo $name_of_media; ?></strong></h2>
				</div>
			</div>
			<?php
				}
			}
			?>			
		</div>
		<div class="<?php echo $show_or_not_media; ?> container-fluid myContainer bg-5 text-center goTopAnim" style="padding: 50px;">
			<br><a href="mediaLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Get More</a><br>
		<!--Ending Media Container-->
		</div>
			<?php
			$gallery_query = "SELECT * FROM gallery
								ORDER BY id DESC
								LIMIT 0,6";
			$connect_gallery_query = mysqli_query($conn, $gallery_query);
			$count_rows = mysqli_num_rows($connect_gallery_query);
			$show_or_not_gallery = 'hidden';
			if($count_rows > 0){
				$show_or_not_gallery = '';
			?>	
		<!--Gallery Container-->
		<div id="gallerySection" class="<?php echo $show_or_not_gallery; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			<h2>Gallery</h2>
			<div class="row slideanim" style="padding: 50px;">
				
			<?php
			while($get_each_row = mysqli_fetch_array($connect_gallery_query)){
				$id_of_gallery = $get_each_row['id'];
				$name_of_gallery = $get_each_row['name'];
				$img_of_gallery = $get_each_row['img'];
				$date_gallery = $get_each_row['date'];
				$msg_of_gallery = $get_each_row['msg'];
			?>	

				<div class="col-sm-6 col-md-4 col-lg-4">
					<img class="resizeWithThumbnail" src="admin\dynamicImages\gallery\<?php echo $img_of_gallery; ?>" alt="gallery">
					<h2 style="font-size: 18px"><?php echo $name_of_gallery; ?></h2><br><br><br><br>
				</div>
			<?php
				}
			}
			?>					
			</div>

		</div>
		<div class="<?php echo $show_or_not_gallery; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="galleryLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px; background-color: #007f48; border-color: #007f48;">Get More</a><br>
		<!--Ending Gallery Container-->
		</div>
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

			<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6513.543193413012!2d149.1329614864318!3d-35.286804613391176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9d3b3beb2c34d49!2sCanberra+Institute+of+Technology!5e0!3m2!1sen!2sau!4v1539905585501" width="1000" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</center>
		<!--Ending Contact Us Container-->
		</div>
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
