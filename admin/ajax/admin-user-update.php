<?php
	include '../config/config.php';
	
	$id = $_POST['id'];
	$name = $_POST['f_name'];
	$email = $_POST['f_email'];
	$pass = $_POST['f_pass'];

	
	$sql = "update admin_user set name = '".$name."', email = '".$email."', password = '".MD5($pass)."'  where id = '".$id."' ";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
?>

