<?php require 'config.php';?>



<?php 

	if(isset($_POST['delete'])){

				$i_code=$_GET['it_code'];
				$cart_id=$_GET['cart_id'];

				$del="DELETE FROM cart_details WHERE cart_id=$cart_id AND item_code=$i_code";

				if($conn->query($del)){

					echo "<script>alert('Record deleted')</script>";
					header("location:cart.php");


				}

			}


?>