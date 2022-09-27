<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<?php include "includes/css.php" ?>
</head>

<body>
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
                                        <label for="example-email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" placeholder=""
                                                class="form-control p-0 border-0" id="email">
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
                                            <button class="btn btn-success" style="padding:10px 30px" id="login">Log In</button>
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
                    href="register.php">Sign Up</a>
            </footer>
        </div>
    </div>
	
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
							window.location.href = "index.php";
						} else{
						window.location.href = 'login.php';
						
					}
				}
			})
		});
	})
</script>
</body>

</html>