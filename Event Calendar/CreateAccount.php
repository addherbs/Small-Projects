<head>
	<title>Create Account</title>
	
<script language="javascript">

function update(){

//NAME VALIDATION STARTS

				var f = document.form.fname.value;
				if(f=="")
				{
				alert("Please Enter Your FirstName");
				document.form.fname.value=null;
				return false;
				}



				var l = document.form.lname.value;
				if(l=="")
				{
				alert("Please Enter Your LastName");
				document.form.lname.value=null;
				return false;
				}

//NAME VALIDATION ENDS




//USERNAME VALIDATION STARTS

				var a = document.form.uname.value;
				if(a=="")
				{
				alert("Please Enter Your UserName");
				document.form.uname.value=null;
				return false;
				}
				if(!isNaN(a))
				{
				alert("Please Enter Only Characters In Username");
				document.form.uname.value=null;
				return false;
				}
				if ((a.length < 5) || (a.length > 15))
				{
				alert("Username Characters must be 5 to 15 Character");
				document.form.uname.value=null;
				return false;
				}

//USERNAME VALIDATION ENDS



// PASSWORD VALIDATION STARTS


			var p = document.form.pass1.value;
			if(p=="")
			{
			alert("Please Enter Your Password");
			document.form.pass1.value=null;
			return false;
			}



			var pass1 = document.getElementById("pass1").value;
			var pass2 = document.getElementById("pass2").value;
			
			if (pass1 != pass2) {
            alert("Passwords Do not match");
            document.getElementById("pass1").value = null;
            document.getElementById("pass2").value = null;
			return false;
			}
			


			if(!document.form.pass1.value.match(/^[0-9a-zA-Z]+$/))  {
			document.getElementById('pass1').value = null;
			document.getElementById('pass2').value = null;
			alert("Password Error. Only Between A-Z a-z 0-9");
			return false;
			}
			

// PASSWORD VALIDATION ENDS




//E-mail VALIDATION STARTS

			var e = document.form.email.value;
			if(e=="")
			{
			alert("Please Enter Your E-mail");
			document.form.email.value=null;
			return false;
			}
			
			
// E-mail VALIDATION ENDS




//CHECKBOX VALIDATION STARTS


			var c = document.getElementById('check');
			if(c.checked==false)
			{
			alert("Please read About Us");
			return false;
			}
			
			
//CHECKBOX VALIDATION ENDS




}

</script>
	
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="new.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	

	
</head>



<?php

	if(isset($_GET['error'])) {

		//the page was redirected from CreatePHP.php
		echo 'username or email already exists';

	}

?>



<body class="templatemo-bg-gray">
	<h1 class="margin-bottom-15">Create Account</h1>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="CreatePHP.php" method="post" name="form" onsubmit="return update();">
				<div class="form-inner">
					<div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="first_name" class="control-label">First Name</label>
			            <input type="text" class="form-control" NAME="fname" id="fname" placeholder="">		            		            		            
			          </div>  
			          <div class="col-md-6">		          	
			            <label for="last_name" class="control-label">Last Name</label>
			            <input type="text" class="form-control" NAME="lname" id="lname" placeholder="">		            		            		            
			          </div>             
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">		          	
			            <label for="username" class="control-label">Email</label>
			            <input type="email" class="form-control" NAME="email" id="email" placeholder="">		            		            		            
			          </div>              
			        </div>			
			        <div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="username" class="control-label">Username</label>
			            <input type="text" class="form-control" NAME="uname" id="uname" placeholder="">		            		            		            
			          </div>
			          <div class="col-md-6 templatemo-radio-group">
			          	<label class="radio-inline">
		          			<input type="radio"  NAME="gender" id="optionsRadios1" value="option1"> Male
		          		</label>
		          		<label class="radio-inline">
		          			<input type="radio"  id="optionsRadios2" value="option2"> Female
		          		</label>
			          </div>             
			        </div>
			        <div class="form-group">
			          <div class="col-md-6">
			            <label for="password" class="control-label">Password</label>
			            <input type="password" class="form-control" NAME="password" id="pass1" placeholder="">
			          </div>
			          <div class="col-md-6">
			            <label for="password" class="control-label">Confirm Password</label>
			            <input type="password" class="form-control" NAME="password" id="pass2" placeholder="">
			          </div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <label>    <a href="aboutus.html">Click Me</a> to Read About Us&nbsp:&nbsp Did You Read?<INPUT TYPE="checkbox" NAME="check" id="check"></label>
    
			          </div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" value="Create account" class="btn btn-info">
			            <a href="login-1.html" class="pull-right">Login</a>
			          </div>
			        </div>	
				</div>				    	
		      </form>		      
		</div>
	</div>
	
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>