<?php
	include('config.php');
		
	if(isset($_REQUEST['id'])){
		$id=$_REQUEST['id'];
		
		$sql = "DELETE FROM booking WHERE `booking_id`='$id'";

		mysqli_query($conn, $sql);
		
		header('location:home.php');
	}
?> 

