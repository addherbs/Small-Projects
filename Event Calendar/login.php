
<head>

	<title>LogIn Page</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="new.css" rel="stylesheet" type="text/css">

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-social.css" rel="stylesheet" type="text/css">	
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
	</head>
	
	
	
<?php

	if(isset($_GET['error'])) {

		//the page was redirected from CreatePHP.php
		echo "<script>alert('create account first')</script>";

	}

?>
	
	
	
<body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">	
<BR>		
<BR>	
<BR>	
<BR>	
<BR>	

		<h1 style="color: #ccccc;" > Welcome To Event Calendar </h1>
			<form class="form-horizontal templatemo-login-form-2" role="form" name="login" action="logintry.php" method="post">
				<div class="row">
					<div class="col-md-12">
						<h1>Login Page</h1>
					</div>
				</div>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
				        <div class="form-group">
				          <div class="col-md-12">		          	
				            <label for="username" class="control-label">Username</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-user"></i>
				            	<input type="text" class="form-control" name="username" id="username" placeholder="">
				            </div>		            		            		            
				          </div>              
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <label for="password" class="control-label">Password</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-lock"></i>
				            	<input type="password" class="form-control" name="password" id="password" placeholder="">
				            </div>
				          </div>
				        </div>
				       
				        <div class="form-group">
				          <div class="col-md-12">
				            <input type="submit" value="LOG IN" class="btn btn-warning">
				          </div>
				        </div>
				        <div class="form-group">
				          	<div class="col-md-12">
				        		<a href="CreateAccount.php" class="text-center">Create Account?</a>
				       	 	</div>
				    	</div>
					</div>
					<div class="templatemo-other-signin col-md-6">
						<label class="margin-bottom-15">
							One-click sign in using other services.
						</label>
						<a class="btn btn-block btn-social btn-facebook margin-bottom-15" href="https://www.facebook.com/">
						    <i class="fa fa-facebook"></i> Use Facebook
						</a>
						<a class="btn btn-block btn-social btn-twitter margin-bottom-15" href="https://twitter.com/?lang=en">
						    <i class="fa fa-twitter"></i> Use with Twitter
						</a>
						<a class="btn btn-block btn-social btn-google-plus" hre="https://plus.google.com/">
						    <i class="fa fa-google-plus"></i> Use Google
						</a>
					</div>   
				</div>				 	
		      </form>		      		      
		</div>
	</div>
	<h3 style="padding-left:20em;padding-top:1em;"> ** <a href="howitworks.html" > How It Works </a> ** <a href="aboutus.html"> About Us </a>
                    ** <a href="faq.html"> FAQ </a>    
</body>
</html>