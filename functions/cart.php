<?php
	$con = mysqli_connect("localhost","root","","ecomarce");
 $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 


 
/////////////////////////////////////////////////////





            global $con;
			if(isset($_GET['product_id'])){
				$ip= getIp();
				$pro_id = $_GET['product_id'];
				
				$sql= "INSERT INTO cart(p_id,ip_address) VALUES ('$pro_id','$ip')";
				$run_pro= $con->query($sql);
				echo "<script> window.open('index.php','_self'); </script>";	
			}


	
