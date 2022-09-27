<?php include 'config/config.php';
	
	session_start();
	
	//print_r($userinfo);
	$sqlcate = "select * from categories";
	$querycate = mysqli_query($conn, $sqlcate);
 ?>
<!-- section-one-header -->

	<section class="section_one_in">
		<div class="main-div_one_in">
			<div class="left-side-main_one_in">
				<div class="main-logo_one_in">
					<a href="index.php">
						<img src="asset/logo2.png" />
					</a>
				</div>
				<div class="searchbar_one_in">
					<i class="fa-solid fa-magnifying-glass"></i>
					<input type="text" placeholder="Search for Movies, Events, Plays, Sports, and Activities" />
				</div>
			</div>
			<div class="right-side-main_one_in">
				<div class="ul-div_one_in">
					<ul class="ul_one_in">
						<li class="li_one_in"><a href="#">NCR<i class="fa-solid fa-caret-down"></i></a></li>
						 <?php 
							if(isset($_SESSION["userid"])){
							$username = $_SESSION["name"];
						?>
									<li class="li_two_in loginusername">
										<a class="" href="#"><span class="text-white font-medium"><?php echo $username; ?></span></a>
										 <div class="down-icon_one"><i class="fas fa-caret-up"></i></div>
										<div class="login_hover_one">
										<ul>	
											<li><a href="userorder.php"><span><i class="fas fa-user-circle"></i></span>Purchase History</a></li>
											<li><a href="logout.php"><span><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
										</ul>
										</div>
									</li>
									<?php
								} else {
									?>
									<li class="li_two_in">
										<a class="" href="login.php"><span class="text-white font-medium">Login In</span></a>
									</li>
									<?php
								}
							  ?>
						<li class="li_three_in"><a href="#"><i class="fa-solid fa-bars"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- section-two-navigation -->
<section class="fixed-header">
<section class="section_two_in">
	<div class="main-div_two_in">
		<div class="navigation-container_two_in">
			<div class="row">
				<div class="col-md-6">
					<div class="right-navigation_two_in">
						<ul>
						<?php
							while($row = mysqli_fetch_array($querycate)){
						?>
							<li><a  href="list.php?id=<?php echo $row["cate_id"] ?>"><?php echo $row['cate_name']; ?><a/></li>
						<?php 
							}
						?>	
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="left-navigation_two_in">
						<ul>
							<li><a href="#">list your show</a/></li>
							<li><a href="#">corporates</a/></li>
							<li><a href="#">offers</a/></li>
							<li><a href="#">gift cards</a/></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</section>	
