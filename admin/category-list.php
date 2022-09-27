<?php 
session_start();
	
	if(!isset($_SESSION['tokenid']) && $_SESSION['tokenid'] == null){
		header("Location: login.php");
	}
	include 'config/config.php'; 
	$cate_list = "select * from categories";
	
	$querylis = mysqli_query($conn, $cate_list);
	
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
                        <h4 class="page-title">Basic Table</h4>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Basic Table</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table text-nowrap listth_mystyle">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Category-Id</th>
                                            <th class="border-top-0">Category Name</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Created-Date</th>
											<th class="border-top-0">Delete</th>
											<th class="border-top-0">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
											while($row = mysqli_fetch_array($querylis)){
												?>
													<tr>
														<td><?php echo $row['cate_id']; ?></td>
														<td><?php echo $row['cate_name']; ?></td>	
														<td><?php echo $row['status']; ?></td>
														<td><?php echo $row['created_date']; ?></td>
														<td><a onclick="deleterecord(<?php echo $row['cate_id'] ?>)" href="javascript:void(0)">Delete</a></td>
														<td class="edit"><a href="add-category.php?cateid=<?php echo $row["cate_id"] ?>">Edit</a></td>
													</tr>
												<?php
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
        </div>
    </div>
	
<?php include "includes/js.php" ?>

<script>

function deleterecord(cateid){
		$.ajax({
					type: "POST",
					url: 'ajax/category-delete.php',
					data: {u_id:cateid},
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							location.reload();
						}
					}
			   });
		
	}

</script> 
</body>
</html>