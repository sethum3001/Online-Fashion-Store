
<?php require 'config.php';
include 'adminHeader.php';


?>

	<link rel="stylesheet" href="src/css/editItem.css" type="text/css">
	
</head>
<body>



<?php 





$sql="SELECT * FROM item ";
$result=$conn->query($sql);
if($result->num_rows>0){

		

		
		echo "<form id='UpdateItemform' method='post' action='updateItem.php'>";
		echo "<div class='cart-table'>" ;
		echo "<center>";
		echo "<table>";
		echo "<th>Description</th>";
		echo "<th>Size</th>";
		echo "<th>Item</th>";
		echo "<th>Price</th>";
		echo "<th>Quantity</th>";
		
		
		
		while($row=$result->fetch_assoc()){

			$itemCode=$row['item_code'];

			echo "<tr>";
			echo "<td><p>".$row['name']."</p></td>";
			echo "<td><center><p>".$row['size']."</p></center></td>";
			echo"<input type='hidden' name='itms_code[]' id='itms_code[]' value='".$row['item_code']."'>";
			echo"</td>";
			echo "<td><center><img src='".$row['image']."'></center></td>";
			echo" <td><center><p>".$row['unit_price']."</p></center></td>";
			echo "<td><center><input type='number' name='stock[]' min='1 ' value='".$row['stock']."'></center></td>";		
			echo "</tr>";

		}
		echo "<tr><td colspan='6'><input type='submit' name='updateItem' value='update'></td></tr>";
		echo "</table>";
		echo "</form>";

}


?>


</center>
</div>








