
<?php
     $con = mysqli_connect("localhost","root","","ecomarce");
 
		//// getting data from insert_product 
		$product_title       = $_POST['Product_title'];
		$product_category    = $_POST['Product_catagory'];
		$product_price       = $_POST['Product_price'];
		$product_description = $_POST['Product_description'];

		/// getting image from insert_post
		$product_Image      = $_FILES['Product_Image']['name'];
		$product_image_tmp  = $_FILES['Product_Image']['tmp_name'];
		move_uploaded_file($product_image_tmp,"../product_images/$product_Image");

		///// insert data in database
       $insert_product ="insert into products 
                                (product_id,product_catagory,product_title,product_price,product_description,product_image)VALUES('0','$product_category','$product_title',
                                               '$product_price','$product_description','$product_Image')";
       //echo $insert_product;
       $insert_pro=mysqli_query($con,$insert_product);
       echo "<script> alert('Product Inserted'); location = '../insert_product.php'</scritp>";

     //  if($insert_pro){
       /*	echo "<script> alert('Product Inserted'); location = '../insert_product.php'</scritp>";*/
       	/*echo"<script>window.open('insert_product.php','_self');</scritp>";*/
       //}

?>