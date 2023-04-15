
<?php 

session_start();
// print_r($_SESSION); die();
require_once 'config.php';




?>

<?php 

if(isset($_SESSION['log_user'])){

	$name=$_SESSION['log_name'];

	$log="<div class='drop-down'>
					<a href='#'><img src='src/img/user.png'></a>
					<div class='drop-down-cont'>
						<a href='#'>".$name."</a>
						
						<a href='Order_history.php'>Order History</a>				
						<a href='logOut.php'>Log Out</a>
					</div>
				</div>";

}else{

	$log="<div class='drop-down'>
					<a href='#'><img src='src/img/user.png'></a>
					<div class='drop-down-cont'>				
						<a href='login.php'>Log in</a>
					</div>
				</div>";
	$name="";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>insignia</title>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="src/css/home.css">
	<link rel="stylesheet" href="src/css/header_footer.css" type="text/css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<script src="https://use.fontawesome.com/55f6362d7f.js"></script>
	<!-- favi-con -->
	<link rel="shortcut icon" type="image/jpg" href="src/img/favi.jpg">



	<style type="text/css">
		

		#search_btn {
 			 width: 10%;
 			 background-color:#fe4253;
 			 color: white;
 			 padding: 14px 20px;
 			 margin: 3px 0 0 15px;
 			 border: none;
 			 border-radius: 10px;
  			cursor: pointer;
			}

			#search_btn:hover{

    		background-color: #EE2A34;

			}


		}


	</style>


	<div class="header">
		
		<div class="logo_box"><img src="src/img/logo1.jpg"></div>

		<div class="nav_bar">
			
			<center>

				<div class="search"><form method="post" action="search.php"><i class="fa fa-search" aria-hidden="true"></i><input type="text" name="search" id="search"><input type="submit" name="serachBtn" id="search_btn" value="Search"></form></div>

				<a href="index.php">Home</a>
				<a href="menItem.php">Men</a>
				<a href="womenItem.php">Women</a>
				<a href="kidItems.php">Kids</a>
				<a href="About_us.php">About Us</a>
				<a href="contact-us.php">Contact Us</a>

			</center>


		</div>

		<div class="user_cart">

			<center>
					<a href="cart.php"><img src="src/img/shopping-cart .png"></a>
					<?php echo $log;?>
					
			</center>

			<div class="social">
				<center>
					<a href="#"><img src="src/img/facebook.png"></a>
					<a href="#"><img src="src/img/twitter.png"></a>
					<a href="#"><img src="src/img/instagram.png"></a>
				</center>
			</div>
		</div>	
		
		<div class="clrfix"></div>

	</div>



