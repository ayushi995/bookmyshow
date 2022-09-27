<!DOCTYPE html>
<html>
<head>
	<?php include "includes/css.php"; ?>
</head>
<body>
<?php include "includes/header.php"; ?>
<section class="section-one_userreg">
	<div class="main-div_userreg">
		<div class="header_userreg">Account Sign Up</div>
		<div class="content_userreg">
			<input type="email" placeholder="Enter Your Email" id="email"/>
			<input type="password" placeholder="Enter Your Password" id="pass"/>
		</div>
		<button id="login">Login In</button>
		<div class="header_userreg">OR</div>
		<a href="register.php">New Account</a>
	</div>
</section>
<?php include "includes/fotter.php"; ?>
<?php include "includes/js.php" ?>
<script>
	$(document).ready(function(){
		$("#login").click(function(){
			var email = $("#email").val();
			var pass = $("#pass").val();
			
			$.ajax({
				url: 'ajax/login.php',
				type: 'POST',
				data: {email, pass},
				success: function(resp){
					console.log(resp);
					if(resp == 1){
							window.history.go(-1);
						} else{
						window.location.href = 'register.php';
						
					}
				}
			})
		});
	})
</script>
</body>
</html>