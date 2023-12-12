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
			height: 650px; 
			border-style: double; 
			border-radius: 30px; 
			border-width: 5px;
		}

		.login_base
		{
			width: 1000px;
			height: 550px;
			margin: auto;
			margin-top: 32px;
			border-radius: 30px;
			background-color: lightblue;  
		}
		
		.search_fun
		{
		    width: 1000px;
			height: 150px;
			border-radius: 30px;  
		}
		
		.search_function_mid
		{
		    width: 350px;
			height: 80px;
			margin: auto;
			padding-top: 60px; 
			border-radius: 30px;
		}
		
		.show_data
		{
		    width: 1000px;
			height: 400px;
			border-radius: 30px;   
		}
		
		.show_data_view
		{
		    width: 500px;
			height: 300px;
			margin: auto;
			border-radius: 30px;
			border-color: darkblue; 
			border-style: solid; 
		}
		
		.table_view
		{
		    padding-left: 35px; 
		    padding-top: 14px; 
		}
		
		input[type=text]
		{
		    width: 250px; 
		    height: 40px;
		    border-style: solid; 
		    border-radius: 30px;
		}
		
		.insert
		{
	        width: 80px; 
		    box-sizing: border-box;
		    height: 30px;
		    border-radius: 15%; 
		    color: darkblue; 
		    font-weight: bold; 
		}

		.imgcontainer 
		{
  			text-align: center;
  			margin: 24px 0 12px 0;
		}

		img.avatar 
		{
  			width: 60%;
  			border-radius: 30%;
  			padding-top: 16px;
		}

		.btn_all
		{
			height: 55px;
			width: 1000px;
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

		<div class="login_base">
		
		<form action="Admin_Search.php" method="post">
  			
  			<div class="search_fun">
  				<div class="search_function_mid">
  					<input type="text" name="Product_ID" value="<?php echo $Product_ID;?>">
  					<input type="submit" class="insert" value="Search" name = "search">
  					
  					<?php
  			
  			if(isset($_POST['search']))
  			{
  			    
  			    $Product_ID = $_POST['Product_ID'];
  			    
  			    $qy = "SELECT * FROM Product WHERE Product_ID = :Product_ID"; 
  			    $res = $db->prepare($qy); 
  			    
  			    if($res->execute(array(":Product_ID"=>$Product_ID)))
  			    {
  			        if($res->rowCount()>0)
  			        {
  			            foreach($res as $row)
  			            {
  			                $Product_ID = $row['Product_ID'];
  			                $Product_Name = $row['Product_Name'];
  			                $Product_Category = $row['Product_Category'];
  			                $Product_Brand = $row['Product_Brand'];
  			                $Product_Price = $row['Product_Price'];
  			                $Product_Image = $row['Product_Image'];
  			            }
  			        }
  			        else
  			        {
  			            echo 'No Data With This ID';
  			        }
  			    }
  			    else
  			    {
  			        echo 'ERROR Data Not Inserted';
  			    }
  			}
  			
  			?>
  				</div>
  			</div>
  			
  			<div class="show_data">
  			
  				<div class="show_data_view">
  				
  					<table class="table_view">
  					
  						<tr>
  						
  							<td width="150px">
  							
  								Product Name
  							
  							</td>
  						
  							<td>
  							
  								<input type="text" name="Product_Name" value="<?php echo $Product_Name;?>">
  							
  							</td>
  						
  						</tr>
  						
  						<tr height="10px"></tr>
  						
  						<tr>
  						
  							<td width="150px">
  							
  								Product Category
  							
  							</td>
  						
  							<td>
  							
  								<input type="text" name="Product_Category" value="<?php echo $Product_Category;?>">
  							
  							</td>
  						
  						</tr>
  						
  						<tr height="10px"></tr>
  						
  						<tr>
  						
  							<td width="150px">
  							
  								Product Brand
  							
  							</td>
  						
  							<td>
  							
  								<input type="text" name="Product_Brand" value="<?php echo $Product_Brand;?>">
  							
  							</td>
  						
  						</tr>
  						
  						<tr height="10px"></tr>
  						
  						<tr>
  						
  							<td width="150px">
  							
  								Product Price
  							
  							</td>
  						
  							<td>
  							
  								<input type="text" name="Product_Price" value="<?php echo $Product_Price;?>">
  							
  							</td>
  						
  						</tr>
  						
  						<tr height="10px"></tr>
  						
  						<tr>
  						
  							<td width="150px">
  							
  								Product Image
  							
  							</td>
  						
  							<td>
  							
  								<input type="text" name="Product_Image" value="<?php echo $Product_Image;?>">
  							
  							</td>
  						
  						</tr>
  					
  					</table>

				</div>	
					
  			</div>
  			
  			</form>
  			
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


