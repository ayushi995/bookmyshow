<?php
	include '../config/config.php';

	$artistid = $_POST['u_artistid'];
	$file1 = $_FILES['smallimg'];
	$file2 = $_FILES['bigimg'];
	$name = $_POST['u_name'];
	$desc = $_POST['u_desc'];
	$type = $_POST['u_type'];
	$cate = $_POST['u_cate'];
	$evenorgdate = $_POST['evenorgdate'];
	$tickopendate = $_POST['tickopendate'];
	$noofseats = $_POST['noofseats'];
	//print_r($photo);
	
	
	$date = date('y-m-d-H-i-s');
	
	$fileType1 = $file1['type'];
	$fileType1 = substr($fileType1, 6);
	$filename1 = 'event'.$date.'.'.$fileType1;
	move_uploaded_file($file1['tmp_name'], '../asset/smallimg/'.$filename1);
	
	$fileType2 = $file2['type'];
	$fileType2 = substr($fileType2, 6);
	$filename2 = 'event'.$date.'.'.$fileType2;
	move_uploaded_file($file2['tmp_name'], '../asset/bigimg/'.$filename2);

	
	//echo $date;
	
	$sql = "insert into events (event_id, name, artist_id, artist_name, description, type, small_img,  big_img, cate_id ,event_organise_date, ticket_opening_date, no_off_seats, status, created_date) values ('', '".$name."','".$artistid."','', '".$desc."', '".$type."','".$filename1."', '".$filename2."',
	'".$cate."' ,'".$evenorgdate."', '".$tickopendate."', '".$noofseats."',  1, '".$date."')";
	
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
	
	
?>

