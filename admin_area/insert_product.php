<!DOCTYPE html>

<?php
include("includes/connection.php");
?>

<html>
<head>
	<title>Insert Product</title>
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
	<form action="includes/insert.php" method="post" enctype="multipart/form-data">
		<table align="center" width="700" border="2px;" bgcolor="blue">

			<tr align="center">
				<td colspan="8"><h2>Insert New Product</h2></td>
            </tr>

			<tr>
				<td align="right"><strong>Product Title: </strong></td>
				<td><input type="text" name="Product_title" size="50" required/></td>
			</tr> 

			<tr>
				<td align="right"><strong>Product Category: </strong></td>
				<td> 
					<select name="Product_catagory">
							<option >
								select a category
							</option>
					 	<?php
						     $get_catagory ="select * from catagory";
	//////////////////////////////////////////////////execute query//////////////////////////////////// 
					        $run_catagory = mysqli_query($con,$get_catagory);
////////////////////////////////////////////////////// fetching query/////////////////////////////////////////
					       while ($row_catagory=mysqli_fetch_array($run_catagory)) 
					       {
						         $cata_id=$row_catagory['catgory_id'];
						         $cata_title=$row_catagory['catagory_title'];
						          echo "
						                <option value='$cata_id'>$cata_title </option>" ;
				           }
												?>
					</select>
				</td>
			</tr>

	        <tr>
				<td align="right"><strong>Product Image: </strong></td>
				<td><input type="file" name="Product_Image" required/></td>
			</tr>

			<tr>
				<td align="right"><strong>Product Price: </strong></td>
				<td><input type="text" name="Product_price" required/></td>
			</tr>

			<tr>
				<td align="right"><strong>Product description: </strong></td>
				<td><textarea name="Product_description" cols="20" rows="10"></textarea></td>
			</tr>

			<tr>
				<td align="center" colspan="8"><input type="submit" name="insert_post" value="Insert"/></td>
			</tr> 
		</table>
    </form>


</body>
</html>
