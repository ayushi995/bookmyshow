<?php
	include '../config/config.php';


	$file1 = $_POST['file1'];
	$shortname = $_POST['shortname'];
	$fullname = $_POST['fullname'];
	$type = $_POST['type'];
	$birthdate = $_POST['birthdate'];
	$birthplace = $_POST['birthplace'];
	$desc = $_POST['desc'];
	//print_r($desc);
	
	
	$date = date('y-m-d-H-i-s');
	
	// $fileType1 = $file1['type'];
	// $fileType1 = substr($fileType1, 6);
	// $filename1 = 'artist'.$date.'.'.$fileType1;
	// move_uploaded_file($file1['tmp_name'], '../asset/artist/'.$filename1);

	
	//echo $date;
	
	$sql = "insert into artist (artist_id, artist_short_name, artist_full_name, image, artist_type,  born_date, born_place ,about_artist, status, created_date) values ('', '".$shortname."', '".$fullname."', '".$file1."','".$type."', '".$birthdate."',
	'".$birthplace."' ,'".$desc."',  1, '".$date."')";
	
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
	
	
?>

