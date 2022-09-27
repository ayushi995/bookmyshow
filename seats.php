<?php 
include 'config/config.php';	
$eventid = $_GET['eventid'];
$sqlevent = "select seatbook from seats where event_id='".$eventid."'";
$queryevent = mysqli_query($conn, $sqlevent);
$data = mysqli_fetch_row($queryevent);
$getArr = array();
if(!empty($data)){
	$getArr = explode(",", $data[0]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "includes/css.php"; ?>
</head>
<body>
	<?php include "includes/header.php"; ?>
<section class="section-one_seats">
<div class="main-div_seats">
	<table cellspacing="0" cellpadding="0">
		
		<?php
		
			$rows = array('A', 'B', 'C', 'D', 'E', 'F');
			for($i=0; $i<=5; $i++){
				?>
					<tr>
						<td>
							<div class="abcd_seats"><?php echo $rows[$i]; ?></div>
						</td>
						<td>
							<?php
									for($j=1; $j<=15;$j++){
										if($j==7 || $j==8){
											?>
											<div class="seatsnum"></div>
											<?php
										} else {
											
											$mainVal = $rows[$i].$j;
											$checkArrVal = in_array($mainVal, $getArr); 
											$isDisable = '';
											if($checkArrVal){
												$isDisable = 'disabled';
											}	
											?>
											<div class="seatsnum">
												<button <?php echo $checkArrVal ? 'disabled' : ''; ?> data-seat="<?php echo $rows[$i].$j; ?>" class="seatsclick <?php echo $isDisable; ?>"><?php echo $j; ?></button>
											</div>
											<?php
										}
									}
								?>
							</td>	
					</tr>
					
				<?php
			}
		?>
	</table>
</div>
<button class="btn" id="seatsubmit">Submit</button>
<div class="price-main-div">
	<a href="javascript:void(0)">Price Rs.340.00 <span>Seats(2)</span></a>
</div>	
</section>
<?php include "includes/fotter.php"; ?>
<?php include "includes/js.php" ?>
<script>
$(document).ready(function(){
	var selectedVal = "";
	$(".seatsclick").on( "click", function() {
	var el = $(this).attr("data-seat");
	if(!$(this).hasClass('active')){
		$(this).toggleClass('active');
		if(selectedVal === ""){
			selectedVal += el + ',';
		} else {
			selectedVal +=  el + ',';
		}
	} else {
		selectedVal = selectedVal.replace(el+',', '');
		$(this).removeClass('active');
	}			
		console.log(selectedVal);			
	});
			
	$("#seatsubmit").on('click', function(){
	// console.log("sasdsds");
	var selectVal = selectedVal;
	var eventid = '<?php echo $eventid; ?>';
	$.ajax({
		url:'ajax/seats.php',
		type:'POST',
		data:{selectVal, eventid},
		success:function(resp){
		console.log(resp);
		location.reload();
			}			
		});
	})
			
})
		</script>
</body>
</html>