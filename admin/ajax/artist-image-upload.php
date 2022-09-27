<?php 

	$file = $_FILES['T_photo'];
	$filename = $_POST['T_photoname'];
	
	if($filename != null) {
		unlink('../asset/artist/'.$filename);
	}
	
	$temp = $file['tmp_name'];
	//khali image k lie 
	
	
	$date = date('y-m-d-H-i-s');
	$filename = $date."photo.jpg";
	move_uploaded_file($temp, '../asset/artist/'.$filename);
	
	echo $filename;
?>