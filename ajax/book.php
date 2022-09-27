<?php
	include "../config/config.php";
	
	$prodid = $_POST['prodid'];
	// echo $name;
	$userid = $_POST['userid'];
	// echo $email;
	$date = date('y-m-d-H-i-s');
	
	
		$sql = "insert into orderseats (orderseats_id, user_id, seats_id, event_id, price, net_price, status, created_date) values('', '".$userid."', '','".$prodid."', '', '', 1, '".$date."')";
		
		$query = mysqli_query($conn, $sql);
		
		if($query){
			echo 1;
		} else {
			echo 2;
		}
 ?>