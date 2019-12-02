<?php

	include ("connection.php");

	$Email = $_POST['Email'];
	$pass = $_POST['pass'];

	$sql= "SELECT * FROM admin WHERE Admin_Email='$Email'  AND pass='$pass'";
	 $result = $con->query($sql);

	 $num_rows = mysqli_num_rows($result);
	 if($num_rows == 1)
	  {
 		header("location:../insert_product.php");
	  }
 		else
 		{
 		    
 		     echo "<script> alert('Wrong Username or password');
 		      location='../login.php';
 		      </script>";
	
 		}
?>