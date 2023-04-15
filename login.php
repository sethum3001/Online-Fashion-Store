

<!DOCTYPE html>
<html>
<head>


<title>Log In</title>

<link rel="stylesheet" href="src/css/login.css" type="text/css"  >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="shortcut icon" type="image/jpg" href="src/img/favi.jpg">

</head>



<body>

	<div class="back_img"></div>
	<div class="form_space">
		

		<div class="log_form" align="center">

			<img src="src/img/logo_1.jpg">
				<form method="post" action="validateLog.php" onsubmit="signInVal(event);">



					<input type="text" name="username" id="username" placeholder="Username"><br>
					<input type="password" name="password" id="password" placeholder="Password"><br>

					<a href="register.php"><input type="button" name="sign-up" value="Sign up" ></a>
					<input type="submit" name="signIn" value="sign-in">
					<b><i><div id="sign_msg"></div></i></b>

					

				</form>
		</div>

	</div>




<script type="text/javascript" src="src/js/regCheck.js"></script>

</body>
</html>