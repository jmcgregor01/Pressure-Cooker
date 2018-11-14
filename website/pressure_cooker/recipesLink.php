<?php
	require __DIR__.'/admin/config/db.php';
					$recipe_query = "SELECT * FROM recipes
									ORDER BY date DESC
									LIMIT 0,12";
				$connect_recipe_query = mysqli_query($conn, $recipe_query);
				$count_rows = mysqli_num_rows($connect_recipe_query);
	$cap = 4;
			$abs_max_display = $count_rows;
			$abs_min_display = 0;
			if ( empty( $_POST[ "Show" ] ) ) {
				$displayed = 0;
				$max_display = $cap;
				$min_display = 0;
				setcookie( 'display', $displayed );
			} 
			else if ( $_POST[ "Show" ] == '+' ) {
				if ($_COOKIE[ 'display' ] + $cap < $abs_max_display)
				{
					$displayed = $_COOKIE[ 'display' ] + $cap;
					setcookie( 'display', $displayed );
					$max_display = $displayed + $cap;
					$min_display = $displayed;
					$displayed = 0;
				}
				else
				{
					$displayed = $_COOKIE[ 'display' ];
					$max_display = $displayed + $cap;
					$min_display = $displayed;
					$displayed = 0;
				}
					
			} else if ( $_POST[ "Show" ] == "-" ) {
				if ($_COOKIE[ 'display' ] > $abs_min_display)
				{
					$displayed = $_COOKIE[ 'display' ] - $cap;
					setcookie( 'display', $displayed );
					$max_display = $displayed + $cap;
					$min_display = $displayed;
					$displayed = 0;
				}
				else
				{
					$displayed = $_COOKIE[ 'display' ];
					$max_display = $displayed + $cap;
					$min_display = $displayed;
					$displayed = 0;
				}
			}
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
    <div class="container-fluid">
	<!--Body Content-->
	<!--Header template-->
		<?php
			$home_select = "";
			$judge_select = "";
			$team_select = "";
			$recipe_select = "active disabled";
			$media_select = "";
			$gallery_select = "";
			$behind_select = "";
			$sponsor_select = "";
			$android_select = "";
			$about_select = "";
	
		include "templates/navigationbar_template.php";
		?>	
		
			<!--Judge Container-->
		<div class="myView bg-3">
		<div class="container-fluid myContainer bg-3 text-center goTopAnim">

			<h1 style="font-weight: bold; background: black; color: white; border-radius: 5px;">RECIPES</h1><br>

				<div class="row">

				<?php
				if($count_rows > 0){
					while($get_each_row = mysqli_fetch_array($connect_recipe_query)){
						$id_of_recipe = $get_each_row['id'];
						$name_of_recipe = $get_each_row['name'];
						$img_of_recipe = $get_each_row['img'];
						$msg_of_recipe = $get_each_row['method'];
						$date_recipe = $get_each_row['date'];
						$displayed++;
					if ( $min_display < $displayed && $displayed <= $max_display ) {
				?>
				<div class="col-sm-6 col-md-6 col-lg-4 nojudgedecoration zoomit">
					<a href="recipeDetails.php?recipe_id=<?php echo $id_of_recipe; ?>">
						<img class="resizeWithThumbnail" src="admin\dynamicImages\recipes\<?php echo $img_of_recipe; ?>" alt="team image">
						<h2><strong><?php echo substr($name_of_recipe, 0, 15); ?>...</strong></h2>
						<p class="recipesMessageLimit" style="color: #1364D1;"><strong><?php echo substr($msg_of_recipe, 0, 30); ?>...</strong></p>
					</a>
				</div>
				<?php
					}
					}
				}
				?>
				</div>
			<!--Ending Judge Container-->
		</div>
		</div>
		<?php
		if ( $count_rows > $max_display ) {
		?>
		<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">

			<form action="<?php echo " recipesLink.php ";?>" method="post">
				<button class="btn btn-info btn-lg" ; type="submit" name="Show" value='+' style="float: right; margin-right: 20px;">Next</button><br>
			</form>
		</div>
		<?php
		}
		if ( $count_rows > $min_display && $min_display != 0 ) {
			?>
		<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
			<form action="<?php echo " recipesLink.php ";?>" method="post">
				<button class="btn btn-info btn-lg" ; type="submit" name="Show" value='-' style="float: right; margin-right: 20px;">Back</button><br>
			</form>
		</div>
		<?php
		}
		?>
	<!-- Footer template-->
	<?php
	include 'templates/footer_template.php';
	?>

</body>
</html>