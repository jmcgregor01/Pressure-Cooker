<?php
	require 'config/db.php';
	$get = $_GET['id'];
	$delete = "DELETE FROM sponsor WHERE id ='$get'";
	$run = mysqli_query($conn, $delete);
	if($run){
		echo "<script>window.open('viewSponsors.php?msg=Delete Successfull')</script>";
	}else{
		echo "<script>window.open('viewSponsors.php?msg=Delete Unsuccessfull')</script>";
	}

?>