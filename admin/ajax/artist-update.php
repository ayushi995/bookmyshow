<?php
	include '../config/config.php';
	
	$file1 = $_FILES['upimage1'];
	$uid = $_POST['uid'];
	$photo1 = $_POST['photo1'];
	$shortname = $_POST['shortname'];
	$fullname = $_POST['fullname'];
	$type = $_POST['type'];
	$birthdate = $_POST['birthdate'];
	$birthplace = $_POST['birthplace'];
	$desc = $_POST['desc'];
	
	move_uploaded_file($file1['tmp_name'], '../asset/artist/'.$photo1);
	
	$sql = "update artist set artist_short_name = '".$shortname."',artist_full_name = '".$fullname."' , image = '".$photo1."', artist_type = '".$type."' ,  born_date = '".$birthdate."', born_place = '".$birthplace."' ,  about_artist = '".$desc."' where artist_id = '".$uid."' ";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
?>

