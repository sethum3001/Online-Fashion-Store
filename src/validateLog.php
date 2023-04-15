<?php 
session_start();
require_once 'config.php';


if(isset($_POST['signIn'])){

	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="SELECT * FROM customer WHERE username='" . $username . "' ;";
	if($result=$conn->query($sql)){

		if($result->num_rows>0){

			while($row=$result->fetch_assoc()){


				if($row['password']==$password){

					$_SESSION['log_user']=$row['cus_id'];
					$_SESSION['log_name']=$row['name'];
					
					header("Location:index.php");

		
					}else{
				
				 echo '<script>alert("Invalid Credentials")</script>';//invalid creds			

				}

			}

		}else{ 

		
		echo '<script>alert("Invalid Credentials")</script>';//invalid creds
		
	}

	}else{ //query fail

		echo "error query";
	}	





}


?>