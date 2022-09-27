<!DOCTYPE html>
<html>
<head>
	<?php include "includes/css.php"; ?>
</head>
<body>
<?php include "includes/header.php"; ?>
<section class="section-one_userreg">
	<div class="main-div_userreg">
		<div class="header_userreg">Register New Account</div>
		<div class="content_userreg">
			<input type="text" placeholder="Enter Your Full Name" id="name"/>
			<input type="email" placeholder="Enter Your Email" id="email"/>
			<input type="password" placeholder="Enter Your Password" id="pass"/>
		</div>
		<button id="register">Register</button>
		<div class="header_userreg">OR</div>
		<a href="login.php">Login In</a>
	</div>
</section>
<?php include "includes/fotter.php"; ?>
<?php include "includes/js.php" ?>
<script>
 $(document).ready(function(){
	 
	$("#register").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var pass = $("#pass").val();
		 // console.log(name+"----"+email+"---"+pass);	
		$.ajax({
			url: "ajax/register.php",
			type: "POST",
			data: {u_name:name, u_email:email, u_pass:pass},
			success: function(resp){
				if(resp == 1){
					location.reload();
					window.history.go(-2);
				}
			}
		});
	});
 });
</script>
</body>
</html>