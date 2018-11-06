<?php
	require __DIR__.'/config/db.php';
	$get = $_GET['id'];
	$delete = "DELETE FROM behindscenes WHERE id ='$get'";
	$run = mysqli_query($conn, $delete);
	if($run){
		echo "<script>window.open('viewBehindScenses.php?msg=Delete Successfull')</script>";
	}else{
		echo "<script>window.open('viewBehindScenses.php?msg=Delete Unsuccessfull')</script>";
	}

?>