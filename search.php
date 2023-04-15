<?php

require 'config.php';
include  'header.php';

?>

<link rel="stylesheet" type="text/css" href="src/css/home.css">

</head>

<body>

<?php



if(isset($_POST['serachBtn'])){


	$search=$_POST['search'];

	$searc_sql="SELECT * FROM item WHERE name  LIKE '%" . $search. "%' AND size='s'"  ;

	if($search_result=$conn->query($searc_sql)){


		if($search_result->num_rows>0){


			while($search_row=$search_result->fetch_assoc()){

			echo ("<div class='item-box' style='background-image: url(".$search_row['image'].");'>");

			echo ("<div class='item-box-overlay'>");

			echo ("<center><a href='itemDetails.php?id=".$search_row['item_code']."'><button class='item-view-button'>View Item</button></a></center>");


			echo ("</div>");

			echo ("<div class='item-box-disc'><p>" .$search_row['name']."</p></div>");

			echo ("</div>");



			}




		}else

			echo "<h3 style='font-size:20px;margin-bottom:20px;margin-left:20px;'>So much empty :(</h3>";


	}//query_error



}//not cliked



?>

<div class="clrfix"></div>

<!-- footer -->

<div class="footer">
	<div class="footer_sect_1">
		
		
		<h3>Company</h3>
		
		<ul>

			<li><a href="#">About Us</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Privacy Policy</a></li>


		</ul>
	
	</div>
	<div class="footer_sect_2">
		
		<h3>Support</h3>
		
		<ul>

			<li><a href="#">About Us</a></li>
			<li><a href="#">Accessabilty</a></li>
			<li><a href="#">Custmer Service</a></li>


		</ul>

	</div>
	<div class="footer_sect_3">
		
		<h3>Categories</h3>
		
		<ul>

			<li><a href="#">Mens</a></li>
			<li><a href="#">Ladies</a></li>
			<li><a href="#">Kids</a></li>


		</ul>


	</div>
	<div class="footer_sect_4">	<h3>Contact Us</h3>
		
		<ul>

			<li><a href="#">Contact us</a></li>
			


		</ul>


	</div></div>













</div>



</body>
</html>