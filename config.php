<?php


$server="localhost";
$username="root";
$password="";
$database="online_fashion";


$conn=new mysqli($server,$username,$password,$database);

if($conn->connect_error){

	echo "Connection failed". $conn->connect_error;

}else
	//echo "Connected";
?>