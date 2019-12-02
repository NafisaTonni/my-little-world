<!DOCTYPE html>
<!-- including php file -->
<?php
include("functions/functions.php");
if(!isset($_SESSION))
{
    session_start();
}
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--  <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->

   <!--  <script src="js/main.js"></script> -->
    
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
        <style type="text/css">
            
            th{
                background-color: yellowgreen;
                border-radius: 15px;
                margin: 2px;
            }
        </style>
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
    		 		<li><a href="index.php">Home</a></li>
    		 		<li><a href="index.php">All products</a></li>
    		 		<li><a href="#">My Account</a></li>
                     <!-- login -->
    		 		<?php
                                
                                    if(isset($_SESSION['username']))
                                    {
                                        echo "<li><a href='logout.php'>".$_SESSION['username']."</a></li>";
                                    }
                                    else
                                    {                                   
                                        echo "<li><a href='login/login.php'>logIn</a></li>";
                                    }
                    ?>
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
		    		 				<!-- calling function from php file -->
		    		 			<?php 
		    		 				 getcatagory();
		    		 			?>
		    		 		</ul>		    	  		 		
		    		</div>
            <!-- slidebar ended -->	

    <!-- contant area started -->
		    		 <div id="contant_area" style="overflow:scroll;">
                        
                            <div id='shopping_cart'>
                              
                      
                          <span style= margin-left:20px; font-size: 18px;padding: 15px;line-height: 40px;'><b>   Welcome: <b></span>
                                    <span float: right;><b style='padding: 15px;margin-left:300px;'>
                                        Total Item:<?php totalitems(); ?> Total Price:<?php totalprice();?>tk <a href='#';php'>Go To Cart</a> </b>

                                    </span>
        		    		</div>  



		    			 <div id="Product_box">
                            <!--  <?php //cart(); ?> -->
                            <br>
			    			  <div>
                                <form action="" method="" enctype="multipart/form-data">
                                    <table align="center" width="750" bgcolor="skyblue">
                                        <tr  align="center">
                                            <td colspan="5"><h2 style="background-color: yellowgreen; border-radius: 15px" >Update or checkout</h2></td>
                                        </tr>
                                        <tr align="center">
                                            <th>Remove</th>
                                            <th>Product(s)</th>
                                            <th>Quantity</th>
                                            <th>Total Price</th>
                                        </tr>


                                       
                                               
                                       <?php

                                            show();
                                       ?>
                                    <tr align="right">
                                       <td colspan="4">total: </td>
                                        <td > <?php echo $totalprice ?> tk</td>
                                      
                                    </tr>
                                    <tr align="center">
                                        <?php
                                         update();
                                         ?>
                                    </tr>
                                    </table>
                                    
                                </form>
			    		          

			    			    </div>
		    	    	 </div> 
		    		</div> 
		    <!-- contant area ended -->
		   
    		</div>
    		<!-- contant wrapper ended -->

    		<!-- footer started -->
    		<div id="footer">
    			<h2 style="text-align: center;padding-top:30px; ">&copy; 2019 by www.yourlittleworld14.com </h2>
    		</div>
    		<!-- footer ended -->
    </div>
    <!-- Main contaner ended -->
    <!-- Main -->
   
   </body>
</html>