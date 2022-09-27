<?php 
	session_start();
	include '../config/config.php';
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$type = "admin-user";
	
	$authsql = "select * from admin_user where email='".$email."' and password = '".MD5($pass)."' and type = '".$type."'";
	
	$query = mysqli_query($conn, $authsql);
	
	
	if($query->num_rows > 0){
		$row = mysqli_fetch_array($query);
		$_SESSION['tokenid'] = $row['id']; 
		echo 1;
	} else {
		echo 0;
	}
?>