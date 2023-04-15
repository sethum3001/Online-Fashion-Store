<?php require 'config.php';?>


<?php 

	if(isset($_POST['updateItem'])){

				$i_code=$_POST['itms_code'];
				//$cart_id=$_GET['cart_id'];
				
				$stock=$_POST['stock'];

			

				$i=0;
				$j=0;

				while($i<count($i_code)){
				 
					$update="UPDATE item set stock=$stock[$j] WHERE item_code=$i_code[$i]";				

					$conn->query($update);

					$i++;
					$j++;


		}
			
					
			header("location:editItem.php");


				

	}





?>




