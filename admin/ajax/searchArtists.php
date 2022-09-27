<?php 
	include '../config/config.php';
	$search_val = $_POST['s_val'];
	if($search_val != ""){
		$search_sql = "select * from artist where artist_short_name like '".$search_val."%' or artist_type like '".$search_val."%'";
		$seach_query = mysqli_query($conn, $search_sql);
		$arr = array();
		while($row = mysqli_fetch_assoc($seach_query)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	} else {
		echo 0;
	}
?>