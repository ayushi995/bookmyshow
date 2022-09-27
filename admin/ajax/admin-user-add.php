<?php 
	include "../config/config.php";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$date = date('y-m-d-H-i-s');
	
	if($name != "" && $email != "" && $pass != ""){
		
		$sql = "insert into admin_user (id, name, email, password, status, created_date) values('', '".$name."', '".$email."', '".MD5($pass)."', 1, '".$date."')";
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