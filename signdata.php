<?php
	
	if(!isset($_SESSION))
	{
		session_start();
	}
	include("admin_area/includes/connection.php");

	$username     = $_POST['Username'];
	$phone_number = $_POST['Phone_number'];
	$email        = $_POST['Mail'];
	$pass         = $_POST['Password'];
	
	$sql = "INSERT INTO users(username,phone_number,email,pass) 
	        VALUES ('$username','$phone_number','$email','$pass')";

			 $con->query($sql);
		
    $_SESSION['username']=$username;
	
	     if($_SESSION['username']!='')
	     {
			header("location:index.php");
		 }
			
	$result= $conn->query($sql);
	echo $conn->query($sql);
?>
