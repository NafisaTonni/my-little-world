<?php
	
	if(!isset($_SESSION))
	{
		session_start();
	}
	include("../admin_area/includes/connection.php");
	$email= $_POST['Mail'];
	$pass= $_POST['pass'];

	$sql= "SELECT * FROM users WHERE email='$email'  AND pass='$pass'";
	
	$con->query($sql);
	
	$result=$con-> query($sql);
	//echo $sql;
	//die();
	$row= mysqli_fetch_assoc($result);
	//$_SESSION['username']= $row['Username'];
	$_SESSION['username']=$row['username'];
	echo $_SESSION['username'];
	if($_SESSION['username']!=''){
		header("location:../index.php");
	}
	else{
		
		 // echo "<script> alert('Wrong Username or password');
 		//       location='../index.php';
 		//       </script>";
	}

?>