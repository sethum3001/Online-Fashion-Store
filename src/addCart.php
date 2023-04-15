<?php

session_start();
require 'config.php';

if(isset($_SESSION['log_user'])){// check if the user is logged in

	$cus_id=$_SESSION['log_user'];

	if(isset($_POST['addCart'])){// check if the button

		

	$sql="SELECT * FROM cart WHERE cus_id=$cus_id";//query cart id form cart table

	$result=$conn->query($sql);


		if($result->num_rows>0){


				while($row=$result->fetch_assoc()){


					$cart_id=$row['cart_id'];


				}



			$item_name=$_GET['item_name'];//get the item name form temDetails page using get Method
			
			$quantity=$_POST['qty'];//get size and quantity from item details page
			$size=$_POST['size'];

			$sqli="SELECT * FROM item WHERE name='$item_name' AND size='$size'";//query the item from cart table
			
			$item_result=$conn->query($sqli);

			if($item_result->num_rows>0){

					while($item_rows=$item_result->fetch_assoc()){



							$itm_id=$item_rows['item_code'];
							$price=$item_rows['unit_price'];
							$item_qty=$item_rows['stock'];
//not enough stocks



					}

						if($quantity<=$item_qty){


								$sql_add="INSERT INTO cart_details VALUES('$itm_id','$cart_id','$price','$size','$quantity')";//add the new cart items to cart

								if($conn->query($sql_add)){


									header("Location:cart.php");//Re direcrt to cart

								}else{
									echo "<script>alert('Item already in Cart')</script>";
								}


						}else{
							echo "<script>alert('Not enough stock')</script>";//if quantity>stocks
						}

			}else{

				echo "<script>alert('Not enough stock')</script>";//if item not available
			}//no items


		}



	}//button not pressed

	



}else{

	header("Location:login.php");
}//Direct to log in page