<?php
	$con = mysqli_connect("localhost","root","","ecomarce");

 $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 


 
/////////////////////////////////////////////////////

				$pro_id = $_GET['product_id'];
        $check_pro= "SELECT * FROM cart WHERE ip_address ='$ip' AND  p_id = '$pro_id'";

    		$run_pro= $con->query($check_pro);

    		if(mysqli_num_rows($run_pro)>0){

    			echo "<script>alert('already in the cart'); location='index.php' ;</script>";
    		}


    		else{
         
			
				
				$pro_id = $_GET['product_id'];
				
				$sql= "INSERT INTO cart(p_id,ip_address) VALUES ('$pro_id','$ip')";
				$run_pro= $con->query($sql);
				echo "<script> window.open('index.php','_self'); </script>";	
			}


	
