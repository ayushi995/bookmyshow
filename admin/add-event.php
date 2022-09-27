<?php 
	session_start();
	
	if(!isset($_SESSION['tokenid']) && $_SESSION['tokenid'] == null){
		header("Location: login.php");
	}

	include 'config/config.php'; 
	$uid = null;
	$name = null;
	$desc = null;
	$type = null;
	$cate = null;
	$evenorgdate = null;
	$tickopendate = null;
	$noofseats = null;
	$smallimg = null;
	$bigimg = null;
	if(isset($_GET['id'])){
		$uid = $_GET['id'];
		$sqlid = "select * from events where event_id='".$uid."'";
		$resp = mysqli_query($conn, $sqlid);
		$result = mysqli_fetch_array($resp);
		
		$name = $result['name'];
		$desc = $result['description'];
		$type = $result['type'];
		$cate = $result['cate_id'];
		$evenorgdate = $result['event_organise_date'];
		$tickopendate = $result['ticket_opening_date'];
		$noofseats = $result['no_off_seats'];
		$smallimg = $result['small_img'];
		$bigimg = $result['big_img'];
	}
	
	$sqlcate = 'select * from categories';
	$querycate = mysqli_query($conn, $sqlcate)
	
	
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
				<div class="row">
								<ul id="bindList">
									
								</ul>
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
                                        <label class="col-md-12 p-0">Event Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="<?php echo $name; ?>" placeholder="" class="form-control p-0 border-0" id="name"> </div>
                                    </div>
									<div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Description</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea rows="5" placeholder="<?php echo $desc; ?>" class="form-control p-0 border-0" id="desc"></textarea>
										</div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Type(Comedy,Horror etc.)</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" id="type" value="<?php echo $type; ?>" class="form-control p-0 border-0" />
                                        </div>
                                    </div>
									<div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">--Select Artists--</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <div class="input_wrap">
												<div>
													<input type="text" value=""  class="form-control p-0 border-0" id="artist_id" placeholder="Search Artist" oninput="searchArtists(this)" />
												</div>
												<div class="artist_list" id="artist-focus-blur">
													<ul id="list_search">
													</ul>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Small Image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" placeholder="" src="asset/smallimg/<?php echo $small_img; ?>"  class="form-control p-0 border-0" id="small-img">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Big Image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" placeholder="" src="asset/smallimg/<?php echo $big_img; ?>" class="form-control p-0 border-0" id="big-img">
                                        </div>
                                    </div>
									 <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Event-Organise-Date</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="date" value="<?php echo $evenorgdate; ?>" placeholder="" class="form-control p-0 border-0" id="evenorgdate">
                                        </div>
                                    </div>
									 <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Ticket Opening Date</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="date" value="<?php echo $tickopendate; ?>" placeholder="" class="form-control p-0 border-0" id="tickopendate">
                                        </div>
                                    </div>
									 <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Number Of Seats Available In Event</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" value="<?php echo $noofseats; ?>" placeholder="" class="form-control p-0 border-0" id="noofseats">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Select Category</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none p-0 border-0 form-control-line" id="category">
                                               <option>---Select---</option>
													<?php
														while($row = mysqli_fetch_array($querycate)){
													?>
														<option <?php echo
														$row['cate_id'] == $cate ? 'selected' : '';  ?> value="<?php echo $row['cate_id'] ?>"><?php echo $row['cate_name']; ?></option>
													<?php
														}
													?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" id="submit">Submit Event</button>
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
$(document).ready(function(){
	/*$("#artist_id").focus(function(){
		$("#list_search").removeClass('hideartist');
	});
	$("#artist_id").blur(function(){
		$("#list_search").addClass('hideartist');
	})*/
	
	$("#submit").click(function(){
		
		var listEl = $("#bindList li");
		var listEl = $("#bindList li");
				var arr = [...listEl];
				// var artArr = [];
				// arr.forEach((item, index) => {
					// artArr.push(item.getAttribute('data-id'));
					
				// });
				// console.log(artArr);
				var artArr = '';
				arr.forEach((item, index) => {
					if(artArr == ''){
						var com = '';
					} else { com = ','}
					artArr += com + item.getAttribute('data-id');
				});
				console.log(artArr);
		var name = $("#name").val();
		var desc = $("#desc").val();
		var type = $("#type").val();
		
		// console.log($("#small-img")[0].files[0]);
		// var smallimg = $("#small-img")[0].file[0];
		// console.log(smallimg);
		
		var smallimg = $("#small-img")[0].files[0];
		var bigimg = $("#big-img")[0].files[0];
		var evenorgdate = $("#evenorgdate").val();
		var tickopendate = $("#tickopendate").val();
		var noofseats = $("#noofseats").val();
		var category = $("#category").val();
		
		
		
		var fd = new FormData();
		
		fd.append('u_artistid', artArr);
		fd.append('smallimg', smallimg);
		fd.append('bigimg', bigimg);
		fd.append('u_name', name);
		fd.append('u_desc', desc);
		fd.append('u_type', type);
		fd.append('evenorgdate', evenorgdate);
		fd.append('tickopendate', tickopendate);
		fd.append('noofseats', noofseats);
		fd.append('u_cate', category);
		
		$.ajax({
				url:"ajax/add-event.php",
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
		$(document).on('click', '.list_item', function(){
					var id = $(this).data('id');
					var image = $(this).find('img').attr('src');
					// console.log(image);
					var name = $(this).find('h4').html();
					// console.log(name);
					//$("#artist_id").val(name);
					var el = "<li data-id='"+id+"'>";
								el += "<div class='menuiamge'>";
								el += "<img src='"+image+"'/></div>";
								el += "<div>";
								el += "<h4>"+name+"</h4>";
								el += "<span>X</span></div></li>";
					$("#bindList").append(el);
				});
				$(document).on('click', '#bindList li span', function(){
					var el  = $(this).parents('li').remove();
					console.log(el);
				});
		});
		function searchArtists(event){
			var searchVal = event.value;
			$("#list_search").html("");
			$.ajax({
					url : "ajax/searchArtists.php",
					type : "POST",
					data : {s_val:searchVal},
					success : function(resp){
						if(resp != 0){
							var searchdata = JSON.parse(resp);
							//console.log(searchdata);
							searchdata.forEach((item, index) => {
								var el = "<li data-id='"+item.artist_id+"' class='list_item'><div>";
								el += "<img width='50px' src='asset/artist/"+item.image+"' /></div><div>";
								el += "<h4>"+item.artist_short_name+"</h4>";
								el += "<p>"+item.artist_type+"</p></div></li>";
								$("#list_search").append(el);
							});
						} else {
							$("#list_search").html("");
						}
						
					}
			})
		}
			
</script>
</body>

</html>