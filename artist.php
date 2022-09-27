<?php 
include 'config/config.php';	
if(!isset($_GET['artid']) || $_GET['artid'] == null){
	$sqlartist = 'select * from artist';
}
else{
	$artist = $_GET['artid'];
	$sqlartist = 'select * from artist where artist_id="'.$artist.'"';
}
$queryartist = mysqli_query($conn, $sqlartist);
$rowartist = mysqli_fetch_array($queryartist);

?>
<!DOCTYPE html>
<html>
<head>
	<?php include "includes/css.php"; ?>
</head>
<body>
<?php include "includes/header.php" ?>

<!-- section-big-image -->
<section class="section-one_artist">
	<div class="main-div-one_artist">
		<div class="imagediv_artist">
			<img src="<?php echo 'admin/asset/artist/'.$rowartist['image'];  ?>" />
		</div>
		<div class="detailsdiv_artist">
			<h1><?php echo $rowartist['artist_short_name'] ?></h1>
			<p>Also Know as: <?php echo $rowartist['artist_full_name'] ?></p>
			<h2><?php echo $rowartist['artist_type'] ?></h2>
			<h3>Born: <?php echo $rowartist['born_date'] ?> in <?php echo $rowartist['born_place'] ?></h3>
		</div>
	</div>
</section>
<section class="section-two_artist">
	<div class="main-div-two_artist">
		<h2>About</h2>
		<p><?php echo $rowartist['about_artist'] ?>.</p>
	</div>
</section>

<?php include "includes/fotter.php" ?>
<?php include "includes/js.php" ?>
</body>
</html>