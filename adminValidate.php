<?php 
session_start();
require_once 'config.php';


if(isset($_POST['submit'])){

	$username=$_POST['uname'];
	$password=$_POST['pw'];

	$sql="SELECT * FROM admin WHERE username=  '$username'  && password ='$password';";
	if($result=$conn->query($sql)){

		if($result->num_rows>0){

			while($row=$result->fetch_assoc()){

					$_SESSION['log_user']=$row['admin_id'];
					$_SESSION['log_name']=$row['admin_name'];
					
					header("Location:addItem.php");
			}

		}else{ 

		
		echo '<script>alert("Invalid Credentials")</script>';//invalid creds
		
	}

	}else{ //query fail

		echo "error query";
	}	





}


?>