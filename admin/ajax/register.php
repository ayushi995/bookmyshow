<?php
	include "../config/config.php";
	
	$name = $_POST['u_name'];
	// echo $name;
	$email = $_POST['u_email'];
	// echo $email;
	$password = $_POST['u_password'];
	$type = "admin-user";
	// echo $password;
	$date = date('y-m-d-H-i-s');
	
	
	if($name != "" && $email != "" && $password != ""){
		$sql = "insert into admin_user (id, name, type, email, password, status, created_date) values('', '".$name."','".$type."', '".$email."', '".MD5($password)."', 1, '".$date."')";
		
		$query = mysqli_query($conn, $sql);
		
		if($query){
			echo 1;
		} else {
			echo 2;
		}
	}
		else {
			echo 0;
		}
 ?>