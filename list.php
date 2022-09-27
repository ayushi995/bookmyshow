<?php include 'config/config.php'; 
	
	$catid = $_GET['id'];
	// echo $catid;
	$sqlevent = "SELECT * FROM events where cate_id = '".$catid."' ORDER BY event_id ASC LIMIT 0, 8;";
	// echo $sqlevent;
	$queryevent = mysqli_query($conn, $sqlevent);
	 // $fetchpevent = mysqli_fetch_array($queryevent);
	 // print_r($fetchpevent);
		  
	$sqlcate = "select * from categories where cate_id='".$catid."'";
	$querycate = mysqli_query($conn, $sqlcate);
	$fetchcate = mysqli_fetch_array($querycate);
				
		
?>
<!DOCTYPE html>
<html>
<head>
<?php include "includes/css.php" ?>
</head>
<body>
<?php include "includes/header.php" ?>

<!-- section-three-slider -->
<section class="section_three_in">
	<div class="main-div_three_in">
		<div class="owl-carousel owl-theme" id="mainslider">
			<div class="item">
				<div class="slider-image_three_in">
					<img src="asset/slide1.jpg" />
				</div>
			</div>
			<div class="item">
				<div class="slider-image_three_in">
					<img src="asset/slide2.jpg" />
				</div>
			</div>
			<div class="item">
				<div class="slider-image_three_in">
					<img src="asset/slide3.jpg" />
				</div>
			</div>
			<div class="item">
				<div class="slider-image_three_in">
					<img src="asset/slide4.jpg" />
				</div>
			</div>
			<div class="item">
				<div class="slider-image_three_in">
					<img src="asset/slide5.jpg" />
				</div>
			</div>
		</div>	
	</div>
</section>

<!-- main-list-section-start -->
<section class="main-section-list">
	<div class="main-div_list">
		<div class="main-div-left_list">
			<div class="main-heading-left_list">filters</div>
			<div class="filter-main-div">
				<ul class="filter-main-ul">
					<li id="filter-show-hide_list1">
						<a href="javascript:void(0)">
							<div class="filters-menu-main-div">
								<div class="filters-menu"><span class="sign-down_list"><i onclick="myFunction(this)" class="fa-solid fa-angle-down"></i></span>date</div>
								<div class="clear-menu_list">clear</div>
							</div>
						</a>
					</li>
						<ul class="filter-slidedown_list" id="dropdown-slideshow1">
							<li><a href="#">today</a></li>
							<li><a href="#">tomorrow</a></li>
							<li><a href="#">this weekend</a></li>
						</ul>
					<li id="filter-show-hide_list2">
						<a href="javascript:void(0)">
							<div class="filters-menu-main-div">
								<div class="filters-menu"><span class="sign-down_list"><i onclick="myFunction(this)" class="fa-solid fa-angle-down"></i></span>languages</div>
								<div class="clear-menu_list">clear</div>
							</div>
						</a>
					</li>
						<ul class="filter-slidedown_list" id="dropdown-slideshow2">
							<li><a href="#">english</a></li>
							<li><a href="#">hindi</a></li>
							<li><a href="#">punjabi</a></li>
							<li><a href="#">urdu</a></li>
							<li><a href="#">hindustani</a></li>
							<li><a href="#">telugu</a></li>
						</ul>
					<li id="filter-show-hide_list3">
						<a href="javascript:void(0)">
							<div class="filters-menu-main-div">
								<div class="filters-menu"><span class="sign-down_list"><i onclick="myFunction(this)" class="fa-solid fa-angle-down"></i></span></span>categories</div>
								<div class="clear-menu_list">clear</div>
							</div>
						</a>
					</li>
						<ul class="filter-slidedown_list" id="dropdown-slideshow3">
							<li><a href="#">workshops</a></li>
							<li><a href="#">comedy shows</a></li>
							<li><a href="#">online streaming events</a></li>
							<li><a href="#">music shows</a></li>
							<li><a href="#">kids</a></li>
							<li><a href="#">spirituality</a></li>
							<li><a href="#">performances</a></li>
							<li><a href="#">online streaming events</a></li>
							<li><a href="#">beer  festival</a></li>
							<li><a href="#">conferences</a></li>
							<li><a href="#">screening</a></li>
							<li><a href="#">meetups</a></li>
							<li><a href="#">talks</a></li>
						</ul>
					<li id="filter-show-hide_list4">
						<a href="javascript:void(0)">
							<div class="filters-menu-main-div">
								<div class="filters-menu"><span class="sign-down_list"><i onclick="myFunction(this)" class="fa-solid fa-angle-down"></i></span>more filters</div>
								<div class="clear-menu_list">clear</div>
							</div>
						</a>
					</li>
						<ul class="filter-slidedown_list" id="dropdown-slideshow4">
							<li><a href="#">online streaming</a></li>
							<li><a href="#">outdoor events</a></li>
							<li><a href="#">kids allowed</a></li>
							<li><a href="#">amateur</a></li>
							<li><a href="#">kids activities</a></li>
						</ul>
					<li id="filter-show-hide_list5">
						<a href="javascript:void(0)">
							<div class="filters-menu-main-div">
								<div class="filters-menu"><span class="sign-down_list"><i onclick="myFunction(this)" class="fa-solid fa-angle-down"></i></span>price</div>
								<div class="clear-menu_list">clear</div>
							</div>
						</a>
					</li>
						<ul class="filter-slidedown_list" id="dropdown-slideshow5">
							<li><a href="#">free</a></li>
							<li><a href="#">0 - 500</a></li>
							<li><a href="#">501 - 2000</a></li>
							<li><a href="#">above 2000</a></li>
						</ul>
				</ul>
			</div>
			<div class="last-menu_list">browse by venues</div>
		</div>
		<div class="main-div-right_list">
			<div class="main-heading-left_list">events in delhi-NCR</div>
			<div class="image-list-main-section">
				<div class="row" id="loaddata">
					<?php
						while($row = mysqli_fetch_array($queryevent)){
					?>
						<div class="col-md-3">
							<a href="define.php?defid=<?php echo $row['event_id'] ?> ">
								<div class="images-div-list-main">
									<div class="image-div_list">
										<img src="<?php echo 'admin/asset/smallimg/'.$row['small_img']; ?>"/>
									</div>
									<div class="text-section_list">
										<h2><?php echo $row['name'] ?></h2>
										<!---<p><?php echo $row['description'] ?></p>-->
										<h4><?php echo $row['type'] ?></h4>
									</div>
								</div>
							</a>	
						</div>
					<?php 
						}
					?>	
				</div>
			</div>	
			<div class="loadmore-div" id="loader" >
				<!--<button id="loadmore" class="btn btn-primary">Load More</button>-->
				<input type="hidden" value="2" id="counter" />
			</div>
		</div>
	</div>
</section>
<?php include "includes/fotter.php" ?>
<?php include "includes/js.php" ?>
<script>
	var isScroll = true;
	$(window).scroll(function(){
		
	    /*console.log($(window).scrollTop());
		console.log($(window).height());
		console.log($(document).height());
		var footHeight = $("#footer").height();
		console.log(footHeight);
		if($(window).scrollTop() + $(window).height() >= $(document).height() - footHeight) {
		var position = $("#loader").scrollTop();
		var bottom = $(document).height() - $(window).height();		
		console.log(position);*/
		var footHeight = $("#footer").offset().top;
		console.log(isScroll);
			if(($(window).scrollTop() + $(window).height() >= footHeight + 100) && isScroll) {
				isScroll=false;
				var position = $("#loader").scrollTop();
				setTimeout(function(){isScroll=true},1000);
				console.log(position);
		
			
		var paged = parseInt($("#counter").val());
		var limit = 8;			
		var cid = '<?php echo $catid; ?>';
		
		var obj = {paged, limit, cid};
					
		$.ajax({
			url : "ajax/loadmore.php",
			type : "POST",
			data : obj,
			success : function(resp){
			var data = JSON.parse(resp);
			data.forEach((item, index) => {
			var bind = '<div class="col-md-3">';
			bind += '<a href="define.php?defid='+item.event_id+'"><div class="images-div-list-main"><div class="image-div_list">';
			bind += '<img src="admin/asset/smallimg/'+item.small_img+'"/>';
			bind += '</div><div class="text-section_list">';
			bind += '<h5 class="text-dark ">'+item.name+'</h5>';
			bind += '<h4>'+item.type+'</h4></div></div></a></div>';
			$("#loaddata").append(bind);
			});
			if(data.length < 8){
			$("#loadmore").hide();
			}
			//console.log(paged+1);
			$("#counter").val(paged+1);				
			}
			});
	}
});	
$(document).ready(function(){			
	$("#filter-show-hide_list1").click(function(){
		$("#dropdown-slideshow1").toggle();
		$("#filter-show-hide_list1 .sign-down_list i").toggleClass("fa-angle-up");
	});
	$("#filter-show-hide_list2").click(function(){
		$("#dropdown-slideshow2").toggle();
		$("#filter-show-hide_list2 .sign-down_list i").toggleClass("fa-angle-up");
	});
	$("#filter-show-hide_list3").click(function(){
		$("#dropdown-slideshow3").toggle();
		$("#filter-show-hide_list3 .sign-down_list i").toggleClass("fa-angle-up");
	});
	$("#filter-show-hide_list4").click(function(){
		$("#dropdown-slideshow4").toggle();
		$("#filter-show-hide_list4 .sign-down_list i").toggleClass("fa-angle-up");
	});
	$("#filter-show-hide_list5").click(function(){
		$("#dropdown-slideshow5").toggle();
		$("#filter-show-hide_list5 .sign-down_list i").toggleClass("fa-angle-up");
	});
	
$('#mainslider').owlCarousel({
	autoplay:true,
    loop:true,
	nav:true,
	mousedrag:true,
	navText:["<i class='fa-solid fa-chevron-left'></i>","<i class='fa-solid fa-chevron-right'></i>"],
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }
});
})			
</script>
</body>
</html>