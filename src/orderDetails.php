<?php require 'header.php';

require 'config.php';

$order_id=$_GET['order_Id'];
$sql="SELECT  * FROM order_details o,item i WHERE o.item_code=i.item_code AND o.order_id=$order_id ";

?>



	<link rel="stylesheet" href="src/css/orderDetails.css" type="text/css">


<!-- Header end -->

</head>
<body>

<div class="order-details">
<h3>Order ID:<?php echo $order_id?></h3>
</div>

<div class="order-table"> 

<center>
<table>
	





	<th>Name</th>
	<th>Item</th>
	<th>Size</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Total</th>


<?php 


$order_det_results=$conn->query($sql);

if($order_det_results->num_rows>0){

	while($order_det_row=$order_det_results->fetch_assoc()){


	echo "<tr>";
		echo "<td><p>".$order_det_row['name']."</p></td>";
		echo "<td><center><img src='".$order_det_row['image']."'></center></td>";
		echo "<td><center><p>".$order_det_row['size']."</p></center></td>";
		echo "<td><center><p>".$order_det_row['price']."</p></center></td>";
		echo "<td><center><p>".$order_det_row['quantity']."</p></center></td>";
		echo "<td><center><p>".$order_det_row['price']*$order_det_row['quantity']."</p></center></td>";
	echo "</tr>";


	}


}// no items

?>

</center>




</table>
</div>







<?php include 'footer.php';?>

