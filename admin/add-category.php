<?php 
	session_start();
	
	if(!isset($_SESSION['tokenid']) && $_SESSION['tokenid'] == null){
		header("Location: login.php");
	}
	
	include 'config/config.php'; 
	$cateid = null;
	$name = null;
	if(isset($_GET['cateid'])){
		$cateid = $_GET['cateid'];
		$sqlid = "select * from categories where cate_id='".$cateid."'";
		$resp = mysqli_query($conn, $sqlid);
		$result = mysqli_fetch_array($resp);
		
		$name = $result['cate_name'];
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
                        <h4 class="page-title">Profile page</h4>
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
                                        <label class="col-md-12 p-0">Category Name</label>
										<div id="error"></div>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="<?php echo $name; ?>" placeholder="" class="form-control p-0 border-0" id="catename" /> 
										</div>
                                    </div>
									
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <?php 
													if($cateid == null){
												?>
													<button class="btn btn-success" type="submit" id="submit">Submit</button>
												<?php
													} else {
												?>
													<button class="btn btn-success" type="submit" id="update">update</button>
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
	$("#submit").click(function(){
		var name = $("#catename").val();
		
		
		if(name == ""){
				$("#error").html("Please Enter Category Name");
				$("#error").css("color","red");
				return false;
		}
		
		$.ajax({
			type: "POST",
			url: "ajax/add-category.php",
			data: {name: name},
			success: function(response){
				console.log(response);
				if(response == 1){
					location.reload();
				}
			}
		});
	});
	
		$("#update").click(function(){
			var cateid = '<?php echo $cateid; ?>';
			var name = $("#catename").val();
			
			var fd = new FormData();
		
			fd.append('cateid', cateid);
			fd.append('f_name', name);
		
			$.ajax({
				url:"ajax/category-update.php",
				type:"POST",
				data: fd,
				processData: false,
				contentType: false,
				success:function(resp){
					if(resp == 1){
						window.location.href = 'category-list.php';
					}
				}
			})
		});
});
</script>
</body>

</html>