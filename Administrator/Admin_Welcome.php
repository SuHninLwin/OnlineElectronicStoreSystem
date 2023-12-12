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

		form 
		{
  			border: 3px;
  			border-style: groove;
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
  			<div class="imgcontainer">
    			<img src="images/adminservice.jpg" alt="Avatar" class="avatar">
  			</div>

  			<div class="btn_all">

  				<div class="product_table">
  					<a href="Admin_Product_View.php">
						<h3 style="color: darkblue; text-align: center; padding-top: 10px;">
							Product Table
						</h3>
					</a>
  				</div>

  				<div class="customer_table">
  					<a href="Admin_Customer_View.php">
						<h3 style="color: darkblue; text-align: center; padding-top: 10px;">
							Customer Table
						</h3>
					</a>
  				</div>

  				<div class="employee_table">
  					<a href="Admin_Employee_View.php">
						<h3 style="color: darkblue; text-align: center; padding-top: 10px;">
							Employee Table
						</h3>
					</a>
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