<?php 
	include "../config/config.php";
	
	$name = $_POST['name'];
	$date = date('y-m-d-H-i-s');
	
	if($name != ""){
		
		$sql = "insert into categories (cate_id, cate_name, status, created_date) values('', '".$name."', 1, '".$date."')";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo 1;
		}
		else{
			echo 2;
		}
	}
	else{
		echo 0;
	}
?>