<?php require_once 'config.php'?>


<?php 


if(isset($_POST) && !empty($_POST)){


	$fname=$_POST['fname'];
	$dob=$_POST['dob'];
	$username=$_POST['username'];
	$pw=$_POST['password'];


	$sql="INSERT INTO customer(name,dob,username,password) VALUES('$fname','$dob','$username','$pw')";


	if(mysqli_query($conn,$sql)){
		//creating a cart for the customer in the cart table

		$sqli="SELECT MAX(cus_id) AS max_id FROM customer";//getting max cus Id from customer

		$max_id=$conn->query($sqli);

		$max_row=$max_id->fetch_assoc();

		$max_cus_id=$max_row["max_id"];

		$cart_sql="INSERT INTO cart(cus_id) VALUES($max_cus_id)";//Inserting the max cus id to cart table

		$conn->query($cart_sql);

		echo " <script>alert('Registration Succesfull')</script>";
		header("Location:login.php");
		
		
	}else
	
		echo "<script>alert('Registration Error.Please try again)</script>";



}?>