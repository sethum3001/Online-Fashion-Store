<?php require_once 'config.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="src/css/register.css" type="text/css">
	<link rel="shortcut icon" type="image/jpg" href="src/img/favi.jpg">

	<script type="text/javascript">

		// View password
		
		function checkPw(){

			var y=document.getElementById('password');


			if (y.type === "password") {
   				 y.type = "text";
 			} else {
   				 y.type = "password";
 			}

		}

	</script>



</head>
<body>
<center><img src="src/img/logo1.jpg">
<div class="reg_overlay">
	
			<form name="regform" id="regform" method="post" action="enterReg.php"  onsubmit="regValdiate(event);">

					<input type="text" name="fname" id="fname" placeholder="Full name"><br>
					<input type="date" name="dob" id="dob" ><br>
					<input type="text" name="username" id="username" placeholder="Username"><br>
					<input type="password" name="password" id="password" placeholder="Password"><br>
					<input type="checkbox" name="" onclick="checkPw()">Check Password<br>
					<input type="submit" name="submit" value="Sign Up" ><br>
					<b><i><div id="error_msg"></div></i></b>
					

			</form>





</div>
</center>





<script type="text/javascript" src="src/js/regCheck.js"></script>
</body>
</html>