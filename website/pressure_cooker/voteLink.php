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
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<!--Ending Head of the Index Page-->
</head>

<body id="topOfPage">

		
		<!--Header template-->
		<?php
		include "templates/navigationbar_template.php";
		?>	
		<div class="container bg-3 text-center">
			<h1 style="font-weight: bold; background: #1A81AC; color: white; border-radius: 5px;">VOTE</h1><br>
		</div>
		<div class="container bg-3 voteAlignment text-center" >

		
		<?php
			/*if(isset($_POST['submit'])){
				$email_from_user = $_POST['email'];
				$query = "SELECT * 
							FROM voters";
				$run_query = mysqli_query($conn, $query);
				$count = mysqli_num_rows($run_query);
				if($count > 0){
					while($row = mysqli_fetch_array($run_query)){
						$email_from_database = $row['email'];
						
						if($email_from_user == $email_from_database){
							echo "<center><h4>You casted vote before, Thank you!</h4></center>";
						}else{
							$random_code = mt_rand();
							
	
						}
					}
				}
			}*/
			$email = $_GET['email'];
			$vote = $_GET['vote'];
			
			$sql = "SELECT * FROM voters WHERE email = '$email'";
			$result = mysqli_query($conn, $sql) or die("Error - ".mysqli_error($conn));
			$count = mysqli_num_rows(mysqli_query($conn, $sql));
			if($count > 0)
			{
				echo "<p>You have already voted</p>";
			}
			else
			{
				echo "<p>Thank you for voting</p>";
				$sql = "INSERT INTO voters VALUES('', '$email')";
				$result = mysqli_query($conn, $sql) or die("Error - ".mysqli_error($conn));
				setcookie('votecookie', '1', time()+60*60*24*30);
				if($vote == 1)
				{
					$sql = "UPDATE votes SET team1 = team1 + 1 WHERE id = 1";
					$result = mysqli_query($conn, $sql) or die("Error - ".mysqli_error($conn));
				}
				else
				{
					$sql = "UPDATE votes SET team2 = team2 + 1 WHERE id = 1";
					$result = mysqli_query($conn, $sql) or die("Error - ".mysqli_error($conn));
				}
			}
			
		?>
		</div>
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