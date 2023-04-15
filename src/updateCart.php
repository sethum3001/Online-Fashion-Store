<?php require 'config.php';?>



<?php 

	if(isset($_POST['update'])){

				$i_code=$_POST['it_code'];
				$cart_id=$_GET['cart_id'];
				
				$quantity=$_POST['quantity'];

			

				$i=0;
				$j=0;

				while($i<count($i_code)){
				 
					$update="UPDATE cart_details set quantity=$quantity[$j] WHERE cart_id=$cart_id AND item_code=$i_code[$i]";				

					$conn->query($update);

					$i++;
					$j++;


		}

					
			header("location:cart.php");


				

	}





?>




