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
    <div class="container-fluid bg-2">
	<!--Body Content-->
	<!--Header template-->
		<?php
		include "templates/navigationbar_template.php";
		?>	
		
		<?php
		        $recipe_id = $_GET['recipe_id'];
		        $recipe_query = "SELECT * FROM recipes
									WHERE id='$recipe_id'";
				$connect_recipe_query = mysqli_query($conn, $recipe_query);
				        $get_each_row = mysqli_fetch_array($connect_recipe_query);
				        $id_of_recipe = $get_each_row['id'];
						$name_of_recipe = $get_each_row['name'];
						$img_of_recipe = $get_each_row['img'];
						$ingredients_of_recipe = $get_each_row['ingredients'];
						$method_of_recipe = $get_each_row['method'];
						$date_recipe = $get_each_row['date'];
				?>
			<div class="row" style="padding-left:0px;">
			<br></br>
			<div class="col-lg-8 col-md-8 col-sm-8">
			<h2 style="padding-left: 50px; color: #f4511e;"><strong><?php echo $name_of_recipe; ?></strong></h2>
			</div>
			</div>
			<div class="row" style="padding: 50px;">
			
				<div class="col-lg-8 col-md-6 col-sm-6">
				        <img class="img-thumbnail img-responsive" style="width: 100%; height: 100%" src="admin\dynamicImages\recipes\<?php echo $img_of_recipe ; ?>" alt="recipe image" style="max-height: 215px; max-width: 400px;">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
				    <h3 class="example1" style="text-align: justify;color: #f4511e;padding-top: 0px;"><strong>INGREDIENTS</strong></h3>
				    <br>
				    <p class="example3" style="text-align: justify;"><?php echo $ingredients_of_recipe; ?></p>
				</div>
				</div>
				<div class="row" style="padding: 20px;">
				<div class="col-lg-8 col-md-6 col-sm-6">
						<h3 class="example1" style="text-align: justify;color: #f4511e;padding-top: 0px;"><strong>METHOD</strong></h3>
						<br>
						<p class="example3" style="text-align: justify;"><?php echo $method_of_recipe; ?></p>
				</div>
				
			    </div>    
	    <div class="<?php echo $show_or_not_recipe; ?> container-fluid myContainer bg-2 text-center goTopAnim" style="padding: 50px;">
			<br><a href="recipesLink.php" class="btn btn-info btn-lg" style="float: right; margin-right: 20px;">Back to Recipes</a><br>
		<!--Ending Recipes Container-->
		</div>			   
    <!---------ending recipe00Section--------!>
    <?php
	include 'templates/footer_template.php';
	?>
	</div>
</body>
</html>
	
	
	
	
	
	
	