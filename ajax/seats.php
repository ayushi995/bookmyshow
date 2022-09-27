<?php 
	include '../config/config.php';
	$selectedVal = $_POST['selectVal'];
	$eventid = $_POST['eventid'];
	// print_r($eventid);
	$date = date('y-m-d-H-i-s');
	
	$sqlGet = 'select * from seats where event_id= '.$eventid.' ';
	$getQuery = mysqli_query($conn, $sqlGet);
	
	if($getQuery->num_rows == 0){
		$sqlAdd = "insert into seats (seats_id, event_id, seatbook, status, created_date) values ('', '".$eventid."', '".$selectedVal."', 1, '".$date."')";
		$addQuery = mysqli_query($conn, $sqlAdd);
	} else {
		$data = mysqli_fetch_assoc($getQuery);
		$getArr = $data['seatbook'];
		print_r($getArr);
		$maval = $getArr.$selectedVal;
		echo $maval;
		$upSql = "update seats set seatbook='".$maval."' Where event_id= '".$eventid."' ";
		$updQuery = mysqli_query($conn, $upSql);
	}
?>
