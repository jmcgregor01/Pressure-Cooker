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
    <div class="container-fluid">
	<!--Body Content-->
	<!--Header template-->
		<?php
		include "templates/navigationbar_template.php";
		?>	
        <!--recipe Container-->
		<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">

			<h1 style="font-weight: bold; background: blue; color: white; border-radius: 5px;">RECIPES</h1><br>

				<div class="row" style="padding: 50px;">

				<?php
				$recipe_query = "SELECT * FROM recipes
									ORDER BY date DESC";
				$connect_recipe_query = mysqli_query($conn, $recipe_query);
				$count_rows = mysqli_num_rows($connect_recipe_query);
				if($count_rows > 0){
					while($get_each_row = mysqli_fetch_array($connect_recipe_query)){
						$id_of_recipe = $get_each_row['id'];
						$name_of_recipe = $get_each_row['name'];
						$img_of_recipe = $get_each_row['img'];
						$ingredients_of_recipe = $get_each_row['ingredients'];
						$method_of_recipe = $get_each_row['method'];
						$date_recipe = $get_each_row['date'];
				?>
				    
				    <div class="col-sm-6 col-md-4 col-lg-3">
				    <form action="recipeDetails.php" method="GET">
				    <input type="hidden" name="recipe_id" value="<?php echo $id_of_recipe;?>">
				    
				    <div class="thumbnail">
				        <input type="image" img class = "resizeWithThumbnail" src="admin\dynamicImages\recipes\<?php echo $img_of_recipe; ?>" alt="recipe image">
						<h4><strong><?php echo $name_of_recipe; ?></strong></h4>
					    
                        <!---<p class="recipesMessageLimit" style="color: #1364D1;"><strong><?php echo $ingredients_of_recipe; ?></strong></p>--->
					</div>
					</form> 
					
				</div>
				<?php
					}
				}
				?>
				</div>
				</div>
				<!-----------recipe00Section-------------->
				
	<!--Ending Body Content-->
	


	<!-- Footer template-->
	<?php
	include 'templates/footer_template.php';
	?>

	
</div>
</body>
</html>