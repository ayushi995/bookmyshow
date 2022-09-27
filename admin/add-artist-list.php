<?php 
session_start();
	
	if(!isset($_SESSION['tokenid']) && $_SESSION['tokenid'] == null){
		header("Location: login.php");
	}
	include 'config/config.php'; 
	$event_list = "select * from artist";
	
	$querylis = mysqli_query($conn, $event_list);
	
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
                                            <th class="border-top-0">Id</th>
											<th class="border-top-0">Artist Image</th>
                                            <th class="border-top-0">Artist Name</th>
                                            <th class="border-top-0">Artist Full Name</th>
                                            <th class="border-top-0">Artist Type</th>
											<th class="border-top-0">Birth Date</th>
											<th class="border-top-0">Birth Place</th>
											<th class="border-top-0">About Artist</th>
											<th class="border-top-0">Delete</th>
											<th class="border-top-0">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
											while($row = mysqli_fetch_array($querylis)){
												?>
													<tr>
														<td><?php echo $row['artist_id']; ?></td>
														
														<td>   
															<img  src="<?php echo 'asset/artist/'.$row['image']; ?>" style="width:60px; height:60px; border-radius:60px" />
														</td>
														<td><?php echo $row['artist_short_name']; ?></td>
														<td style=""><?php echo $row['artist_full_name']; ?></td>
														<td><?php echo $row['artist_type']; ?></td>
														<td><?php echo $row['born_date']; ?></td>
														<td><?php echo $row['born_place']; ?></td>
														<td><?php echo $row['about_artist']; ?></td>
														<td><a onclick="deleterecord(<?php echo $row['artist_id'] ?>)" href="javascript:void(0)">Delete</a></td>
														<td class="edit"><a href="add-artist.php?id=<?php echo $row["artist_id"] ?>">Edit</a></td>
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

function deleterecord(id){
		$.ajax({
					type: "POST",
					url: 'ajax/artist-delete.php',
					data: {u_id:id},
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