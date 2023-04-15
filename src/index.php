<?php 

include 'header.php';
// print_r($_SESSION); die();
require_once 'config.php';





?>


	<!-- css -->
	<link rel="stylesheet" type="text/css" href="src/css/home.css">



</head>


<body>
	<!-- slider start -->

	<div class="sliderbox">
		

		<img src="" width="1360" height="450" id="slider">
	</div>


	<!-- slider end -->
	</div>


<center><img src="src/img/divider.png" style="margin: 30px 0px 10px 0px;"></center>


<!-- item-box-start -->

<!-- box-1 -->


<?php 
	$sql="SELECT * FROM item WHERE size='s'";

	if($result=$conn->query($sql)){

	if($result->num_rows>0){


		while($row=$result->fetch_assoc()){


			echo ("<div class='item-box' style='background-image: url(".$row['image'].");'>");

			echo ("<div class='item-box-overlay'>");

			echo ("<center><a href='itemDetails.php?id=".$row['item_code']."'><button class='item-view-button'>View Item</button></a></center>");


			echo ("</div>");

			echo ("<div class='item-box-disc'><p>" .$row['name']."</p></div>");

			echo ("</div>");


		}



	}else
		echo "no result";
		//no rows







}else
	echo "Failed";;//queryfailed

	
?>
		

<div class="clrfix"></div>


<!-- Bot menue box -->


<div class="bot-menue">

	<!-- box-1-start -->
	
	<div class="bot-menu-box-1">
			

		<div class="item-box-overlay">



			<center><a href="menItem.php"><button class="item-view-button">Mens</button></a></center>


		</div>

	</div>
	<!-- box-1-end -->

	<!-- box-2-start -->
	<div class="bot-menu-box-2">
		
		<div class="item-box-overlay">



			<center><a href="womenItem.php"><button class="cat-view-button">Women</button></a></center>


		</div>

	</div>

	<!-- box-2-end -->
	

	<!-- box-3-start -->
	<div class="bot-menu-box-3">
		

		<div class="item-box-overlay">



			<center><a href="kidItems.php"><button class="cat-view-button">Kids</button></a></center>


		</div>

	</div>

	<!-- box-3-end -->

</div>


			


			


<!-- scripts -->
	<script type="text/javascript" src="src/js/slider.js"></script>



<?php include 'footer.php';?>
