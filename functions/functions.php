<?php
	//getting the catagories
/// establish connection with database
	$con = mysqli_connect("localhost","root","","ecomarce");
    $total=0;
    $totalprice=0;
    $product_title='';
function getcatagory()
{
	global $con;
    /////////////////////////////////////////////////// writing query for fetching data from database 
	$get_catagory =	"select * from catagory";
	///////////////////////////////////////////////////////execute query 
	$run_catagory = mysqli_query($con,$get_catagory);
///////////////////////////////////////////////////////////// fetching query
	while ($row_catagory=mysqli_fetch_array($run_catagory)) 
	{
		 $cata_id    = $row_catagory['catgory_id'];
		 $cata_title = $row_catagory['catagory_title'];

		  echo "<li><a href='index.php?cat=$cata_id'>$cata_title</a></li>" ;
    }
}

// /////////////Brands //////////////
// 	function getbrands()
// 	{
// 	global $con;
//     //// writing query for fetching data from database 
// 	$get_brand =	"select * from brand";
// 	//execute query 
// 	$run_brand= mysqli_query($con,$get_brand);
// /////// fetching query
// 	while ($row_brand=mysqli_fetch_array($run_brand))
// 	 {
// 		 $brand_id=$row_brand['brand_id'];
// 		 $brand_title=$row_brand['brand_title'];
// 		  echo "<li>
//                   <a href='#' >$brand_title</a></li>" ;
// 	  }
// 	}
// ////////////////////////////////////////////////////////////////end brand////////////////////////////////////

	///// getting product from database
    function getproduct()
    {
		global $con;
		if(!isset($_GET['cat'])){

		$gettingproduct="select * from products"; 

		$run_pro= mysqli_query($con,$gettingproduct);
         
		while ($row_product = mysqli_fetch_array($run_pro))
		 {
			$Product_id          = $row_product['product_id'];
			$Product_catagory    = $row_product['product_catagory'];
			$Product_title       = $row_product['product_title'];
			$Product_price       = $row_product['product_price'];
			$Product_description = $row_product['product_description'];
			$Product_image       = $row_product['product_image'];

			echo " <div id='single_product'>
					<h3>$Product_title</h3>
					<img src='admin_area/product_images/$Product_image' width=180px;height=180px;/>
					<p><strong> Price :$Product_price tk</strong></p>
					<a href='details.php?product_id=$Product_id' float:left >Details</a>
					
				    </div>";

		 }
	}
}
	/////////// sidebar function //////////////// 
   function getcatproduct()
    {
		global $con;
		if(isset($_GET['cat'])){
		$cata= 	$_GET['cat'];	
		$gettingcatproduct="select * from products where product_catagory='$cata'"; 

		$run_cat_pro= mysqli_query($con,$gettingcatproduct);
         
		while ($row_cat_product = mysqli_fetch_array($run_cat_pro))
		 {
			$Product_id          = $row_cat_product['product_id'];
			$Product_catagory    = $row_cat_product['product_catagory'];
			$Product_title       = $row_cat_product['product_title'];
			$Product_price       = $row_cat_product['product_price'];
			$Product_description = $row_cat_product['product_description'];
			$Product_image       = $row_cat_product['product_image'];

			echo " <div id='single_product'>
					<h3>$Product_title</h3>
					<img src='admin_area/product_images/$Product_image' width=180px;height=180px;/>
					<p><strong> Price :$Product_price tk</strong></p>
					<a href='details.php?product_id=$Product_id' float:left >Details</a>
					
				    </div>";

		 }
	}
}


function getip(){
	$ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
   //echo $ip;
    return $ip;
 }
    function totalitems(){
		global $con;
		$count='';
		//echo "hi";
   if(isset($_GET['product_id'])){
   	$ip=getip();
    echo "after";
   	$sql=$check_pro= "SELECT * FROM cart WHERE ip_address ='$ip'";
    echo $sql;
   	$result= $con->query($sql);

   $count= mysqli_num_rows($result);
   //echo $count;
   }
   else{
  	$ip=getip();
  // echo $ip;
   	$sql= "SELECT * FROM cart WHERE ip_address ='$ip'";
   //echo $sql;
   	$result= $con->query($sql);
//echo$result;
   $count= mysqli_num_rows($result);
  //echo $count; 

   }
   echo $count;

}
function totalprice(){
	global $con;
	global $totalprice;
	$ip=getip();
  // echo $ip;
   	$sql= "SELECT * FROM cart WHERE ip_address ='$ip'";
   //echo $sql;
   	$result= $con->query($sql);
   //echo $result;
   while ($row = $result->fetch_assoc()) {
    $p_id= $row['p_id'];
   	//echo $p_id;
   	$pro_id= "SELECT * FROM products  WHERE product_id='$p_id'";
   	//echo $pro_id;
   	$results= $con->query($pro_id);
    //echo $result['product_price'];
   	while ($product= mysqli_fetch_array($results)) {
   		# code...$product_price;
   		$product_price =$product['product_price'];
   		 $product_title=$product['product_title'];
         $product_img = $product['product_image'];
                                                    //
   		//echo $product_price;
   		//$values= array_sum($product_price);
   		//echo $values;
   		$totalprice+=(int)$product_price;
   		
   	}
   	
	}
   echo $totalprice;
   	//echo $total;
   

   //echo $total;

}


function show(){

												global $con;
												 global $total;
                                                $ip=getip();
                                              // echo $ip;
                                                $sql= "SELECT * FROM cart WHERE ip_address ='$ip'";
                                               //echo $sql;
                                                $result= $con->query($sql);
                                               //echo $result;
                                               while ($row = $result->fetch_assoc()) {
                                                $p_id= $row['p_id'];
                                                //echo $p_id;
                                                $pro_id= "SELECT * FROM products  WHERE product_id='$p_id'";
                                                //echo $pro_id;
                                                $results= $con->query($pro_id);
                                                //echo $result['product_price'];
                                                while ($product= mysqli_fetch_array($results)) {
                                                    # code...$product_price;
                                                    $product_price =$product['product_price'];
                                                   $product_title=$product['product_title'];
                                                   $product_img = $product['product_image'];
                                                    //echo $product_price;
                                                    //$values= array_sum($product_price);
                                                    //echo $values;
                                                    $total+=(int)$product_price;
                                                    
                                                }
                                                echo " <tr align='center'>
                                                <td><input type='checkbox' name='remove[]'value=".$pro_id."></td>
                                                <td> $product_title<br> 
                                                <img src='admin_area/product_images/".$product_img." ' width='60' height='60'/>
                                                <td><input type='text' name='qntity' size=4></td>
                                            </td>
                                            
                                            	<td>$product_price</td>
                                            	</tr>

                                        ";


                                                
                                                }
                                            }
                                            function update(){
                                           echo" 	 <td colspan='2'><input type='button' value='update'></td>
                                        <td colspan='2'><input type='button' value='continue shopping'></td>
                                        <td ><input type='button'value='checkout'></td>
                                        ";


                                            }
									
///////////////////// getting client ip ////////////////

 
/////////////////////////////////////////////////////





