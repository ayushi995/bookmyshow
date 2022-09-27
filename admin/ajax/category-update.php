<?php
	include '../config/config.php';
	
	$cateid = $_POST['cateid'];
	$name = $_POST['f_name'];

	
	$sql = "update categories set cate_name = '".$name."'  where cate_id = '".$cateid."' ";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
?>

