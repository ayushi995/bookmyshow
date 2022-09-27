<?php 
	session_start();
	
	if(!isset($_SESSION['tokenid']) && $_SESSION['tokenid'] == null){
		header("Location: login.php");
	}

	include 'config/config.php'; 
	$uid = null;
	$artist_short_name = null;
	$artist_full_name = null;
	$artist_type = null;
	$born_date = null;
	$born_place = null;
	$about_artist = null;
	$image = null;
	
	if(isset($_GET['id'])){
		$uid = $_GET['id'];
		$sqlid = "select * from artist where artist_id='".$uid."'";
		$resp = mysqli_query($conn, $sqlid);
		$result = mysqli_fetch_array($resp);
		
		$artist_short_name = $result['artist_short_name'];
		$artist_full_name = $result['artist_full_name'];
		$artist_type = $result['artist_type'];
		$born_date = $result['born_date'];
		$born_place = $result['born_place'];
		$about_artist = $result['about_artist'];
		$image = $result['image'];
	}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<?php include "includes/css.php" ?>
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
		
		 <!--start-includes-file-header-and-sidebar-->
        <?php include "includes/header.php" ?>
		
		<?php include "includes/sidebar.php" ?>
        <!--end-includes-file-header-and-sidebar-->
		
		<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Artist page</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-horizontal form-material">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Artist Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="<?php echo $artist_short_name; ?>" placeholder="" class="form-control p-0 border-0" id="short_name"> </div>
                                    </div>
									<div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Artist Full Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="<?php echo $artist_full_name; ?>" placeholder="" class="form-control p-0 border-0" id="full_name"> </div>
                                    </div>
									<div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Artist Type(Actor, Comedian)</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="<?php echo $artist_type; ?>" placeholder="" class="form-control p-0 border-0" id="type"> </div>
                                    </div>
									<div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Birth Date</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="<?php echo $born_date; ?>" placeholder="" class="form-control p-0 border-0" id="birth_date"> </div>
                                    </div>
									<div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Birth Place</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="<?php echo $born_place; ?>" placeholder="" class="form-control p-0 border-0" id="birth_place"> </div>
                                    </div>
									<div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Description</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea rows="5" placeholder="<?php echo $about_artist; ?>" class="form-control p-0 border-0" id="desc"></textarea>
										</div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Artist Image</label>
                                        <div class="col-md-12 border-bottom p-0">
										<?php 
											if($uid == null){
										?>
                                            <input type="file" class="form-control p-0 border-0" id="pimage1" accept="image.png/,image.jpeg">
											<input type="hidden" class="form-control p-0 border-0" id="hideimage1" />
											
											<div id="uploadprev1" class="uploadimageclass"><img src="asset/artist/default.jpg" width="150px" height="150px" id="image1"/></div>
											<?php
												} else {
											?>
											<div class="product_img">
												<input type="file" class="form-control"  id="updateimage1" accept="image.png/,image.jpeg" />
												<div class="" id="updatefront_btn"><img src="asset/artist/<?php echo $image; ?>" /></div>
										<?php
											}
										?>	
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            	<?php 
													if($uid == null){
														?>
														<button type="submit" id="submit" class="btn btn-success">Submit</button>
														<?php
													} else {
														?>
														<button type="submit" id="update" class="btn btn-success">update</button>
														<?php
													}
												  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
        </div>
    </div>
	
<?php include "includes/js.php" ?>

<script>
$(function(){
	$("#uploadprev1").click(function(){
			$("#pimage1").click();
		});
		
		$("#pimage1").change(function(){
			var file = $(this)[0].files[0];
			var filename = $("#hideimage1").val();
			var fd = new FormData();  
			fd.append("T_photo",file);
			fd.append("T_photoname",filename);
			
			$.ajax({
				 url:"ajax/artist-image-upload.php",
				 type:"POST",
				 data:fd,
				 processData:false,
				 contentType:false,
				 success:function(res){
					$("#hideimage1").val(res);
					$("#image1").attr("src", "");
					$("#image1").attr("src", "asset/artist/"+res);
				 }
		   });
		});
	
		$("#updatefront_btn").click(function(){
			$("#updateimage1").click();
		});
	
	$("#submit").click(function(){
		var shortname = $("#short_name").val();
		var fullname = $("#full_name").val();
		var type = $("#type").val();
		
		// console.log($("#small-img")[0].files[0]);
		// var smallimg = $("#small-img")[0].file[0];
		// console.log(smallimg);
		
		// var image = $("#image")[0].files[0];
		var imagename1 = $("#hideimage1").val();
		var birthdate = $("#birth_date").val();
		var birthplace = $("#birth_place").val();
		var desc = $("#desc").val();
		
		var fd = new FormData();
		
		fd.append('file1', imagename1);
		fd.append('shortname', shortname);
		fd.append('fullname', fullname);
		fd.append('type', type);
		fd.append('birthdate', birthdate);
		fd.append('birthplace', birthplace);
		fd.append('desc', desc);
		
		$.ajax({
				url:"ajax/add-artist.php",
				type:"POST",
				data:fd,
				processData:false,
				contentType:false,
				success:function(resp){
					if(resp == 1){
						location.reload();
						
					}
				}
		})
	});
	
	$("#update").click(function(){
			var uid = '<?php echo $uid; ?>';
			var photo1 = "<?php echo $image; ?>";
			var shortname = $("#short_name").val();
			var fullname = $("#full_name").val();
			var type = $("#type").val();
			var birthdate = $("#birth_date").val();
			var birthplace = $("#birth_place").val();
			var desc = $("#desc").val();
			var upimage1 = $('#updateimage1')[0].files[0];
			
			let fData = new FormData();
			fData.append('uid', uid);
			fData.append('photo1', photo1);
			fData.append('shortname', shortname);
			fData.append('fullname', fullname);
			fData.append('type', type);
			fData.append('birthdate', birthdate);
			fData.append('birthplace', birthplace);
			fData.append('desc', desc);
			fData.append('upimage1', upimage1);
			
			$.ajax({
				url:"ajax/artist-update.php",
				type:"POST",
				data: fData,
				processData: false,
				contentType: false,
				success:function(resp){
					if(resp == 1){
						window.location.href = 'add-artist-list.php';
					}
				}
			})
		});
})
</script>
</body>

</html>