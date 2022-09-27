<?php 
include 'config/config.php';	
if(!isset($_GET['defid']) || $_GET['defid'] == null){
	$sqldefevent = 'select * from events';
}
else{
	$defevent = $_GET['defid'];
	$sqldefevent = 'select * from events where event_id="'.$defevent.'"';
}
$querydefevent = mysqli_query($conn, $sqldefevent);
$rowdefevent = mysqli_fetch_array($querydefevent);

	// print_r($rowdefevent);
$artistid = $rowdefevent['artist_id'];
 // print_r($artistid);
 // $ayushi = (explode(',',$artistid));
 // print_r ($ayushi);
 // $gopu = implode (" ",$ayushi);
 // print_r($gopu);
// echo " <br> ";  
  
  
  
// Converting array elements into strings using implode function  
// $gopu = implode (" ",$ayushi);  
// print_r($gopu);   
// $json = json_encode($ayushi); 
// print_r ($json);
// $arrlength = count($ayushi);
// print_r($arrlength);
// $key = array_keys($ayushi);
// print_r($key);
$artist = "select * from artist where artist_id IN (".$artistid.") ";
 // print_r ($artist); 
 $artistquery = mysqli_query($conn, $artist);
 // print_r ($artistquery); 
// $ayushi = $ayushi[1];
// echo $ayushi;
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "includes/css.php"; ?>
</head>
<body>
<?php include "includes/header.php" ?>
 <?php 
$userid = null;
if(isset($_SESSION['userid'])){
	$userid = $_SESSION['userid'];
}
?>											
<!-- section-big-image -->
<section class="big-image_def">
	<div class="main-div-big-image_def">
		<div class="backimage_def">
		<div class="overlay"></div>
			<img src="<?php echo 'admin/asset/bigimg/'.$rowdefevent['big_img'];  ?>" />
		<div class="small-image_def">
			<a href="javascript:void(0)">
				<img src="<?php echo 'admin/asset/bigimg/'.$rowdefevent['big_img'];  ?>" />
			</a>
		</div>
		</div>
		<div class="content-main-div_def">
			<div class="first-div_def">
				<div class="name-type_def">
					<h1><?php echo $rowdefevent['name'] ?></h1>
					<p><?php echo $rowdefevent['type'] ?><span style="word-spacing:2px">| Hindi, English | 16yrs +  | 1hr 30mins</span></p>
				</div>
				<div>
					<a id="book" href="seats.php?eventid=<?php echo $rowdefevent['event_id'] ?> ">Book</a>
				</div>
			</div>
			<div class="second-div_def">
				<h2 class="">About Event</h2>
				<p><?php echo $rowdefevent['description'] ?></p>
			</div>
		</div>
		<!-- artist -->
		<div class="artist-heading_define">Artist</div>
		<div class="artist-main-div_define">
		<?php
			while($row = mysqli_fetch_array($artistquery)){
				?>
				<div class="artist-div_define">
				<a href="artist.php?artid=<?php echo $row['artist_id'] ?> ">
					<div class="artist-image_define">
						<img src="admin/asset/artist/<?php echo $row['image']; ?>" />
					</div>
					<div class="artist-description_define">
						<h5 class="artist-name_define"><?php echo $row['artist_short_name']; ?></h5>
						<h5 class="artist-type_define"><?php echo $row['artist_type']; ?></h5>
					</div>
				</div>
				</a>
			<?php
				}
		?>
			<div class="artist-div_define">
				<div class="artist-image_define">
					<img src="asset/varun.jpg" />
				</div>
				<div class="artist-description_define">
					<h5 class="artist-name_define">varun dhawan</h5>
					<h5 class="artist-type_define">actor</h5>
				</div>
			</div>
			<div class="artist-div_define">
				<div class="artist-image_define">
					<img src="asset/varun.jpg" />
				</div>
				<div class="artist-description_define">
					<h5 class="artist-name_define">varun dhawan</h5>
					<h5 class="artist-type_define">actor</h5>
				</div>
			</div>
			<div class="artist-div_define">
				<div class="artist-image_define">
					<img src="asset/varun.jpg" />
				</div>
				<div class="artist-description_define">
					<h5 class="artist-name_define">varun dhawan</h5>
					<h5 class="artist-type_define">actor</h5>
				</div>
			</div>
			<div class="artist-div_define">
				<div class="artist-image_define">
					<img src="asset/varun.jpg" />
				</div>
				<div class="artist-description_define">
					<h5 class="artist-name_define">varun dhawan</h5>
					<h5 class="artist-type_define">actor</h5>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<?php include "includes/fotter.php" ?>
<?php include "includes/js.php" ?>
<script>
$(document).ready(function(){
		$("#book").click(function(){
			// $("#loader").hide();
			var prodid = '<?php echo $defevent; ?>';
			 // console.log(prodid);
			var userid = '<?php echo $userid; ?>';
			 // console.log(userid);
			if(userid == ''){
				window.location.href = 'login.php';
				return false;
			}
			$.ajax({
				url: 'ajax/book.php',
				type: 'POST',
				data: {prodid, userid},
				success: function(resp){
					console.log(resp);	
					if(resp == 1){
						window.location.href = 'seats.php';
					} 
				}
			})
			
			
		})
	});
  
</script>
</body>
</html>