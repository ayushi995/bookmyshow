<?php 
	session_start();
	include '../config/config.php';
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$type = "end-user";
	
	$authsql = "select * from admin_user where email='".$email."' and password = '".MD5($pass)."' and type = '".$type."'";
	
	$query = mysqli_query($conn, $authsql);
			// print_r($query);
	if($query->num_rows > 0){
		$row = mysqli_fetch_array($query);
		$_SESSION['userid'] = $row['id']; 
		$_SESSION['name'] = $row['name'];
		echo 1;
	} else {
		echo 0;
	}
?>