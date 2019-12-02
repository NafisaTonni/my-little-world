<!DOCTYPE html>
<!-- including php file -->
<?php
include("functions/functions.php");
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
 
</head>
<body> 
	<!-- Main contaner started -->
    <div class="main_wrapper"> 

    	<!-- Header started -->
    		<div class="header_wrapper">
    			<img id="logo" src="images/yourlittleworld.jpg">
    		</div>
    		<!-- Header ended -->

    		 <!-- menubar started  -->
    		<div class="menubar">
    		 	<ul id="menu">
    		 		<li><a href="#">Home</a></li>
    		 		<li><a href="#">All products</a></li>
    		 		<li><a href="#">My Account</a></li>
    		 		<li><a href="#">Sign Up</a></li>
    		 		<li><a href="#">Shooping Cart</a></li>
    		 		<li><a href="#">Contact Us</a></li>
    		 	</ul>
    		<div id="searchbox">
    		 	<form method="get" action="result.php" enctype="multipart/form-data">
    				  <input type="text" name="user_search" placeholder="Seach Product">	
    				  <input type="submit" name="search" value="Search">

    			</form>
    		</div>
    	   	</div>
    	   	<!-- Menubar ended -->

    	   	<!-- contant wrapper started -->
    	    <div class="contant_wrapper">
    	     <!-- slidebar started -->
		    		<div id="sidebar">
		    		 		<div id="sidebar_title">Catagories</div>
		    		 			<ul id="catagory">
		    		 				 <?php 
		    		 				 	getcatagory();
		    		 				 ?>
		    		 			</ul>
		    	    </div>

		    <!-- slidebar ended -->	

    	    <!-- contant area started -->
		    		 <div id="contant_area" style="overflow:scroll;">

		    		 	<div id="shopping_cart">
		    			   <span style="float: right;font-size: 18px;padding: 5px;line-height: 40px;">Welcome Guest!<b>           Total Item: Total Price:<a href="cart.php">Go To Cart</a> </b>
		    			   </span>
		    		 	</div>
                          
		    			 <div id="Product_box">
		    			 	<?php
		    			 	     if(isset($_GET['product_id']))
		    			 	    {
		    			 		     $product        = $_GET['product_id'];
			    			         $gettingproduct = "select * from products where product_id='$product'"; 
		    			
		                        $run_pro= mysqli_query($con,$gettingproduct);
         
		                        while ($row_product=mysqli_fetch_array($run_pro))
		                        {
		             	          $Product_id= $row_product['product_id'];
                                  $Product_title= $row_product['product_title'];
			                      $Product_price= $row_product['product_price'];
			                      $Product_description= $row_product['product_description'];
			                      $Product_image= $row_product['product_image'];
			
			                    echo " <div id='single_product'>

					                         <h3>$Product_title</h3>
					                         <img src='admin_area/product_images/$Product_image' width=400;height=300;/>

						                     <p><strong> $$Product_price</strong></p>
						                     <p>$Product_description</p>
						                     <a href='index.php' style= 'float:left;' >Go Back</a>
						                     <a href='cart.php?product_id=$Product_id'><button style=float:right >
						                        Add To Cart</button></a>
				                         </div>";
			                    }	
		                        }
		                    ?>

		    	    	 </div> 
		    		</div> 
		    <!-- contant area ended -->
		   
    		</div>
    		<!-- footer started -->
    		<div id="footer">
    			<h2 style="text-align: center;padding-top:30px; ">&copy;2019 by www.yourlittleworld14.com </h2>
    		</div>
    		<!-- footer ended -->

    </div>
    <!-- Main contaner ended -->
</body>
</html>