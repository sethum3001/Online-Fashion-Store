

<?php require 'header.php';

require 'config.php';

$cus_id=$_SESSION['log_user'];

$sql="SELECT * FROM orders WHERE cus_id=$cus_id";

?>

	<link rel="stylesheet" href="src/css/Order history.css" type="text/css">


</head>
<body>





<center><h1> My Orders </h1></center>

<!-- <div class="order_bar">
	<a href="#">All Orders</a>
	<a href="#">To Receive</a>
	<a href="#">Cancellations</a>
	<a href="#">Completed</a>
</div>

<input type="date" id="d1" name="date"> To
<input type="date" id="d2" name="date">
<br> -->







<center>
<table>
	
	<th>Order ID</th>
	<th>Status</th>
	<th>Address</th>

<?php 
	
$order_results=$conn->query($sql);

	if($order_results->num_rows>0){

		while($order_rows=$order_results->fetch_assoc()){


		echo "<tr>";

		echo "<td><center><a href='orderDetails.php?order_Id=".$order_rows['order_id']."'>".$order_rows['order_id']."</a></center></td>";
		echo "<td><center>".$order_rows['order_status']."</center></td>";
		echo "<td><center>".$order_rows['address']."</center></td>";

		echo "<tr>";





		}//loop end





	}else{

		echo "No orders :(";
	}  //no orders





?>



</center>
</table>

<br><br>






<?php include 'footer.php'?>