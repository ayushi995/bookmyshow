<?php 
	include '../config/config.php';
	
	$paged = $_POST['paged'];
	$limit = $_POST['limit'];
	$cid = $_POST['cid'];
	
	$step = ($paged - 1) * $limit;
	
	$sql2 = "select * from events where cate_id = '".$cid."' ORDER BY event_id ASC LIMIT ".$step.", ".$limit."";
	$query2 = mysqli_query($conn, $sql2);
	
	$arr = array();
	while($row2 = mysqli_fetch_assoc($query2)){
		array_push($arr, $row2);
	}
	
	
	//echo "<pre>";
	echo json_encode($arr);
	//die();
	
	// echo $paged . " ---- ". $limit; 
	
?>