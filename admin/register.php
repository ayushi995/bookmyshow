<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<?php include "includes/css.php" ?>
</head>

<body>
<div id="msg"></div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-xlg-9 col-md-12">
                        <div class="card loginmaindiv">
                            <div class="card-body">
                                <div class="form-horizontal form-material">
								<div id="error" style="color:red"></div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Name</label>
                                        <div class="col-md-12 border-bottom p-0" id="nameerror">
                                            <input type="email" class="form-control p-0 border-0" id="name" />
                                        </div>
                                    </div>
									<div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" placeholder=""
                                                class="form-control p-0 border-0" id="email" />
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Password</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="password"  class="form-control p-0 border-0" id="pass">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" style="padding:10px 30px" id="signup">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <footer class="footer text-center" style="position: absolute; left: 0; right: 0; top: 500px;"> 2021 © Ample Admin brought to you by <a
                    href="login.php">Login In</a>
            </footer>
        </div>
    </div>
	
<?php include "includes/js.php" ?>

<script>
 $(document).ready(function(){
	$("#name").change(function(){
		$("#error").html("");
	});
	$("#email").change(function(){
		$("#error").html("");
	});
	$("#pass").change(function(){
		$("#error").html("");
	});
	
		$("#signup").click(function(){
			var name = $("#name").val();
			var email = $("#email").val();
			var password = $("#pass").val();
			if(name == ""){
				$("#error").html("Please Enter Your Name");
				return false;
			}
			else if(email == ""){
				$("#error").html("Please Enter Your Email");
				return false;
			}
			else if(password == ""){
				$("#error").html("Please Enter Your Password");
				return false;
			}
			
			$.ajax({
				url: "ajax/register.php",
				type: "POST",
				data: {u_name:name, u_email:email, u_password:password},
				success: function(resp){
					if(resp == 1){
						$("#msg").html("Your Register Successfully");
						$("#name").val('');
						$("#email").val('');
						$("#password").val('');
						
						window.location.href = "index.php";
					}
				}
			});
		});
})

</script>   
</body>

</html>