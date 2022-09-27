<?php 
session_start();
	
	if(!isset($_SESSION['tokenid']) && $_SESSION['tokenid'] == null){
		header("Location: login.php");
	}
	include 'config/config.php'; 
	$event_list = "select * from events";
	
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
                            <div class="table-responsive" width="100%">
                                <table class="desc-table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Id</th>
                                            <th class="border-top-0">Event Name</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Type</th>
											<th class="border-top-0">Category-Id</th>
											<th class="border-top-0">Event-Organise-Date</th>
											<th class="border-top-0">Ticket-Opening-Date</th>
											<th class="border-top-0">Number Off Seats</th>
											<th class="border-top-0">Small-Image</th>
											<th class="border-top-0">Big-Image</th>
											<th class="border-top-0">Delete</th>
											<th class="border-top-0">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
											while($row = mysqli_fetch_array($querylis)){
												?>
													<tr>
														<td><?php echo $row['event_id']; ?></td>
														<td><?php echo $row['name']; ?></td>
														<td><?php echo $row['description']; ?></td>
														<td><?php echo $row['type']; ?></td>
														<td><?php echo $row['cate_id']; ?></td>
														<td><?php echo $row['event_organise_date']; ?></td>
														<td><?php echo $row['ticket_opening_date']; ?></td>
														<td><?php echo $row['no_off_seats']; ?></td>
														<td>   
															<img  src="<?php echo 'asset/smallimg/'.$row['small_img']; ?>" style="width:60px; height:60px; border-radius:60px" />
														</td>
														<td>   
															<img  src="<?php echo 'asset/bigimg/'.$row['big_img']; ?>" style="width:60px; height:60px; border-radius:60px" />
														</td>
														<td><a onclick="deleterecord(<?php echo $row['event_id'] ?>)" href="javascript:void(0)">Delete</a></td>
														<td class="edit"><a href="add-event.php?id=<?php echo $row["event_id"] ?>">Edit</a></td>
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
					url: 'ajax/event-delete.php',
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