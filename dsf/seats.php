<!DOCTYPE html>
<html>
<head>
	<?php include "includes/css.php"; ?>
</head>
<body>
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
										<div class="seatsnum">&nbsp;</div>
										<?php
									} else {
										?>
										<div class="seatsnum">
											<a href="javascript:void(0)" data-seat="<?php echo $rows[$i].$j; ?>" class="seatsclick"><?php echo $j; ?></a>
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
</section>
<?php include "includes/js.php" ?>
<script>
$(document).ready(function(){
	var selectedVal = "";
	$( ".seatsclick" ).on( "click", function() {
	var el = $(this).attr("data-seat");
		//console.log(selectedVal);
		if(selectedVal === ""){
			selectedVal += el;
		} else {
			selectedVal += ',' + el;
		}
		
		
		console.log(selectedVal);
		
		 
	
	
	
				// //console.log(selectedVal);
				// var arr = [el];
				// // console.log(arr);
				// // var artArr = [];
				// // arr.forEach((item, index) => {
					// // artArr.push(item.getAttribute('data-id'));
					
				// // });
				// // console.log(artArr);
				// var artArr = '';
				// arr.forEach((item, index) => {
					// if(artArr == ''){
						// var com = '';
					// } else { com = ','}
					// artArr += com + el;
				// });
				 // //console.log(artArr);
	});
})
</script>
</body>
</html>