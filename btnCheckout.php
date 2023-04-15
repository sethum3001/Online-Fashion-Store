<?php 
	require 'config.php';
	session_start();

	if(isset($_SESSION['log_user'])){
		if(isset($_POST['btnCheckout'])){
			$address=$_POST['address'];
			$cus_id=$_SESSION['log_user'];
			$payment_id=$_POST['delivery'];     
			                // insert into the order table
			$sqlOrder_tbl="INSERT INTO orders (address,order_status,cus_id,courier_id,payment_id) VALUES ('$address','pending','$cus_id','1','$payment_id')";
			$conn->query($sqlOrder_tbl); //add an if()
							// insert into the order_details table
			$order_id=$conn->insert_id;
			$cart_id=$_GET['cartId'];
			$sqlCart_details_tbl="SELECT * FROM cart_details WHERE cart_id=$cart_id";
			if($rsltCart_details=$conn->query($sqlCart_details_tbl)){
				if($rsltCart_details->num_rows>0){
					while($rowsCart_details=$rsltCart_details->fetch_assoc()){
						$item_code=$rowsCart_details['item_code'];
						$quantity=$rowsCart_details['quantity'];
						$price=$rowsCart_details['price']*$quantity;
						$size=$rowsCart_details['size'];
						$sqlOrder_details_tbl="INSERT INTO order_details  VALUES('$order_id','$item_code','$price','$size','$quantity')";
						$conn->query($sqlOrder_details_tbl); //add an if()
						$sqlItem_tbl="UPDATE item SET stock=stock-$quantity WHERE item_code=$item_code";
						$conn->query($sqlItem_tbl); //add an if()
						$conn->query("DELETE FROM cart_details");
					}
				}	
			}else{
				echo "No result in cart_details";
			}

			echo "<script>alert('Payment successful')</script>";
			header("Location:cart.php");

		}

	}else{
		echo "<script>alert('User has not logged')</script>";
	}

?>