<?php
require 'config.php';
session_start();


if(isset($_SESSION['log_user'])){

	$cus_id = $_SESSION['log_user'];

	if(isset($_POST['revBtn'])){

		$description = $_POST['reviewDesc'];
		$item_code = $_GET['item_code'];

		$sql = "INSERT INTO review(item_code,cus_id,review_disc) VALUES($item_code,$cus_id,'$description')";
		//echo $sql;die();

		if($conn->query($sql)){

			echo "<script>alert('Review added')</script>";

		}else{

			echo "<script>alert('Can not add review')</script>";

		}


	}//else button not set

}else{

	header("Location:login.php");

}//else login

	

?>