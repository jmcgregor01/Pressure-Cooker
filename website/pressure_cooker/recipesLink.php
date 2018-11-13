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
	<style>
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    height:80px;
    width:300px;
    padding: 15px;
    text-align: justify;
    color: #f4511e;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0px 10px 0px 10px;
    object-fit: cover;
    display: inline-block;
	float: left;
    width: 30%;
    height: -webkit-fill-available;
    
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}


</style>
</head>

<body id="topOfPage">
    <div class="container-fluid">
	<!--Body Content-->
	<!--Header template-->
		<?php
		include "templates/navigationbar_template.php";
		?>	
        <!--recipe Container-->
		<div class="container-fluid myContainer bg-2 text-center goTopAnim" style="padding: 100px;">

			<h1 style="font-weight: bold; background: #f4511e; color: white; border-radius: 5px;">RECIPES</h1><br>

				
                <br></br>
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
				    <form action="recipeDetails.php" method="GET">
				    <input type="hidden" name="recipe_id" value="<?php echo $id_of_recipe;?>">
                    <div class="responsive">
                    <div class="gallery">
                    <input type="image" src="admin\dynamicImages\recipes\<?php echo $img_of_recipe; ?>" alt= "<?php echo $name_of_recipe; ?>" style="padding:0px;" width="300" height="290">
                    <div class="desc"><strong><?php echo $name_of_recipe; ?></strong></div>
                    </div>
                    </div>
                    </form>
                    
                    
				<?php
					}
				}
				?>
				
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