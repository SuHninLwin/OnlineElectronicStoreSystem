<?php 

    include 'database_connection.php';

    $Product_ID = "";
    $Product_Name = "";
    $Product_Category = "";
    $Product_Brand = "";
    $Product_Price = "";
    $Product_Image = "";  
?>

<!DOCTYPE html>
<html>
<head>

	<title>
		Unique Electronic Store Admin Page
	</title>

	<style>

		/*Header CSS start*/
		.header_base
		{ 
			background-color: darkblue; 
			height: 100px;
			border-style: double; 
			border-radius: 30px; 
		}

		.nav_base
		{ 
			height: 60px;
			margin-top: 14px; 
			margin-left: 170px;   
			width: 1000px; 
		}

		.admin_logo_nav
		{
			float: left; 
			height: 60px;   
			width: 600px;
		}

		.btn_nav
		{
			float: left;
			height: 60px;   
			width: 400px;
		}

		.home_nav
		{
			float: left;
			height: 60px;   
			width: 100px;
		}

		.home_nav:hover
		{
			transform: scale(1.5);
		}

		.insert_nav
		{
			float: left;
			height: 60px;   
			width: 100px;
		}

		.insert_nav:hover
		{
			transform: scale(1.5);
		}

		.update_nav
		{
			float: left;
			height: 60px;   
			width: 100px;
		}

		.update_nav:hover
		{
			transform: scale(1.5);
		}

		.delete_nav
		{
			float: left; 
			height: 60px;   
			width: 100px;
		}

		.delete_nav:hover
		{
			transform: scale(1.5);
		}

		/*Header CSS Ends*/

		/*Container CSS Starts*/

		.container_base
		{ 
			background-color: lightblue;
			height: 650px;
			border-style: double; 
			border-radius: 30px; 
		}
		
		.insert_container
		{
		    width: 1000px;
			height: 550px;
			margin: auto;
			margin-top: 32px;
			border-radius: 30px;
		}
		
		.container 
		{
  			padding: 16px;
  			width: 550px;
  			padding: 16px;
  			height: 448px;
			float: left;
			margin-top: 40px;  
		}
		
		input[type=text]
		{
		    width: 200px; 
		    box-sizing: border-box;
		    height: 30px;
		    margin-left: 60px; 
		}
		
		input[type=number]
		{
		    width: 200px; 
		    box-sizing: border-box;
		    height: 30px;
		    margin-left: 60px;
		}
		
		.insert
		{
	        width: 80px; 
		    box-sizing: border-box;
		    height: 30px;
		    border-radius: 15%; 
		    color: darkblue; 
		    font-weight: bold; 
		    margin-left: 120px;
		}
		
		.product_table
		{
			float: left;
			height: 55px;   
			width: 333px;
		}

		.customer_table
		{
			float: left;
			height: 55px;   
			width: 333px;
		}

		.employee_table
		{
			float: left;
			height: 55px;   
			width: 333px;
		}
		
		.other_btn
		{
  			width: 300px;
  			height: 480px; 
  			float: left;   
		}
		
		.btn_show_products_container
		{
		    width: 300px;
  			height: 50px;
  			float: left;
		}
		
		.see_all
		{
		    margin-top: 5px;
		    width: 200px; 
		    box-sizing: border-box;
		    height: 30px;
		    border-radius: 15%; 
		    color: darkblue; 
		    font-weight: bold; 
		    margin-left: 135px;
		}
		
		.show_table
		{
		    height: 400px;
		    width: 450px; 
		    overflow: scroll; 
		    border-style: groove; 
		    border-color: darkblue; 
		    background-color: white; 
		}
		
		input[type=file]
		{
		    width: 200px; 
		    box-sizing: border-box;
		    height: 20px;
		    margin-left: 60px;
		}
		
		.search
		{
		    width: 80px; 
		    box-sizing: border-box;
		    height: 30px;
		    border-radius: 15%; 
		    color: darkblue; 
		    font-weight: bold; 
		    margin-left: 120px;
		}

		/*Container CSS Ends*/

		/*Footer CSS Starts*/

		.footer_base
		{ 
			background-color: darkblue; 
			height: 70px; 
		}

		.notice_sentence
		{
			text-align: center;
			height: 40px;   
		}

		.crd
		{
			height: 20px;  
			float: all;
			text-align: center;
		}

		/*Footer CCS Ends*/

	</style>
</head>
<body>

	<!-- Start header for admin page -->
	<div class="header_base">

		<div class="nav_base">

			<div class="admin_logo_nav">
				<h1 style="color: white; text-align: center;">
					Only For Authorized Person
				</h1>
			</div>
			
			<div class="btn_nav">

				<div class="home_nav">
					<a href="Admin_Login.php">
						<h3 style="color: white; text-align: center; padding-top: 10px;">
							Home
						</h3>
					</a>
				</div>
		
				<div class="insert_nav">
					<a href="Admin_Insert.php">
						<h3 style="color: white; text-align: center; padding-top: 10px;">
							Insert
						</h3>
					</a>
				</div>

				<div class="update_nav">
					<a href="Admin_Update.php">
						<h3 style="color: white; text-align: center; padding-top: 10px;">
							Update
						</h3>
					</a>
				</div>

				<div class="delete_nav">
					<a href="Admin_Delete.php">
						<h3 style="color: white; text-align: center; padding-top: 10px;">
							Delete
						</h3>
					</a>
				</div>
				
			</div>
			
		</div>

	</div>
	<!-- End header for admin page -->

	<!-- Start of container for admin page -->

	<div class="container_base">

		<div class="insert_container">
			
			<h1 style="color: darkblue; text-align: center;">Update Products</h1>
			<h5 style="color: darkblue; text-align: center;">______________</h5>
			
			<div class="container">
				
				<form action="" method="post" method="get">
				
				<table>
					
					<tr height="20px">
				
					<tr>
					
						<td>
							<label for="Product_ID" style="font-size: 20px; color: darkblue; padding-left:50px;"><b>Product ID</b></label>
						</td>
					
						<td>
							<input type="number" placeholder="Product ID" name="Product_ID">
						</td>
					
					</tr>
					
					<tr height="20px">
					
					<tr>
					
						<td>
							<label for="Product_Name" style="font-size: 20px; color: darkblue; padding-left:50px;"><b>Product Name</b></label>
						</td>
					
						<td>
							<input type="text" placeholder="Product Name" name="Product_Name">
						</td>
					
					</tr>
					
					<tr height="20px">
					
					<tr>
					
						<td>
							<label for="Product_Category" style="font-size: 20px; color: darkblue; padding-left:50px;"><b>Product Category</b></label>
						</td>
					
						<td>
							<input type="text" placeholder="Product Category" name="Product_Category" >
						</td>
					
					</tr>
					
					<tr height="20px">
				
					<tr>
					
						<td>
							<label for="Product_Brand" style="font-size: 20px; color: darkblue; padding-left:50px;"><b>Product Brand</b></label>
						</td>
					
						<td>
							<input type="text" placeholder="Product Brand" name="Product_Brand">
						</td>
					
					</tr>
					
					<tr height="20px">
				
					<tr>
					
						<td>
							<label for="Product_Price" style="font-size: 20px; color: darkblue; padding-left:50px;"><b>Product Price</b></label>
						</td>
					
						<td>
							<input type="text" placeholder="Product Price" name="Product_Price">
						</td>
					
					</tr>
					
					<tr height="20px">
				
					<tr>
					
						<td>
							<label for="Product_Image" style="font-size: 20px; color: darkblue; padding-left:50px;"><b>Product Image</b></label>
						</td>
					
						<td>
        					<input type="text" placeholder="Product_Image" name='Product_Image'>
						</td>
					
					</tr>
					
					<tr height="20px">
					
					<tr>
					
						<td>
							<button type="reset" class="insert">Cancel</button>
						</td>
						
						<td>
							<button type="submit" class="insert" value="update" name="update">Update</button>
						</td>
					
					</tr>				
					
				</table>
				
			</form>
			
			<?php 
			
			     if(isset($_POST['update']))
			     {
			         $Product_ID = $_POST['Product_ID']; 
			         $Product_Name = $_POST['Product_Name']; 
			         $Product_Category = $_POST['Product_Category']; 
			         $Product_Brand = $_POST['Product_Brand'];
			         $Product_Price = $_POST['Product_Price'];
			         $Product_Image = $_POST['Product_Image']; 
			         
			         $qy = $db->prepare("UPDATE Product SET Product_Name=:Product_Name, Product_Category=:Product_Category, Product_Brand=:Product_Brand, Product_Price=:Product_Price, Product_Image=:Product_Image WHERE Product_ID=:Product_ID"); 
			         $qy->execute(array(":Product_Name"=>$Product_Name, ":Product_Category"=>$Product_Category, ":Product_Brand"=>$Product_Brand, ":Product_Price"=>$Product_Price, ":Product_Image"=>$Product_Image, ":Product_ID"=>$Product_ID));
			     
			         $qy->bindParam(':Product_Name', $Product_Name);
			         $qy->bindParam(':Product_Category', $Product_Category);
			         $qy->bindParam(':Product_Brand', $Product_Brand);
			         $qy->bindParam(':Product_Price', $Product_Price);
			         $qy->bindParam(':Product_Image', $Product_Image);
			         $qy->bindParam(':Product_ID', $Product_ID); 
			     }
			
			?>
				
  			</div>
  				
  			<div class="other_btn">
  			
  				<div class="see_all">
  				
  				<h1>
  				
  					See All Data
  				
  				</h1>
  				
  				</div>
  				
  				<div class="show_table">
  				
  					<?php
  					
  					include 'database_connection.php';
  					$viewquery = "select * from Product";
  					  
  					if(isset($_POST['update']))
  					{
  					    echo "<table border= '2' color= 'darkblue' border-style=' groove'>";
  					    echo "<tr> <th>Product_ID</th> <th>Product_Name</th> <th>Product_Category</th> <th>Product_Brand</th> <th>Product_Price</th> <th>Product_Image</th>";
  					    foreach($db->query($viewquery)as $row)
  					    {
  					        echo "<tr>";
  					        
  					        echo "<td>". $row['Product_ID']."</td>";
  					        echo "<td>". $row['Product_Name']."</td>";
  					        echo "<td>". $row['Product_Category']."</td>";
  					        echo "<td>". $row['Product_Brand']."</td>";
  					        echo "<td>". $row['Product_Price']."</td>";
  					        echo "<td> <img src='/Administrator/images/". $row['Product_Image']."' width = '100px' height = '100px'> </td>";
  					        echo "</form>";
  					        echo "</tr>";
  					    }
  					    echo "</table>";
  					}
                    ?>
  				
  				</div>
  				
  			</div>
			
		</div>

	</div>

	<!-- End of container for admin page -->

	<!-- Start of footer for admin page -->

	<div class="footer_base">

		<div class="notice_sentence">
			<h2 style="font: italic; color: white;">
				Only Authorized Person Can Assess Here!
				<a href="#" style="color: red;">Terms and Condition</a>
			</h2>
		</div>

		<div class="crd" style="color: white;">
			Developed and Maintained By SU HNIN LWIN (B-29 SW)
		</div>

	</div>

	<!-- End of footer for admin page -->

</body>
</html>