<?php 

include 'database_connection.php';
ob_start(); 

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

		.update_nav
		{
			float: left;
			height: 60px;   
			width: 100px;
		}

		.delete_nav
		{
			float: left; 
			height: 60px;   
			width: 100px;
		}

		/*Header CSS Ends*/

		/*Container CSS Starts*/

		.container_base
		{  
			height: 650px;
			border-color: darkblue; 
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
		}

		form 
		{
  			border: 3px;
  			border-style: groove;
		}

		input[type=text], input[type=password] 
		{
  			width: 100%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			box-sizing: border-box;
		}

		button 
		{
  			color: darkblue;
  			font-size: 15px;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
  			cursor: pointer;
  			width: 100%;
  			background-color: lightgrey;
		}

		button:hover 
		{
  			opacity: 0.8;
		}

		.cancelbtn 
		{
  			width: auto;
  			padding: 10px 18px;
  			background-color: lightgrey;
		}

		.imgcontainer 
		{
  			text-align: center;
  			margin: 24px 0 12px 0;
		}

		img.avatar 
		{
  			width: 20%;
  			border-radius: 50%;
		}

		.container 
		{
  			padding: 16px;
		}

		span.psw 
		{
  			float: right;
  			padding-top: 16px;
		}

		@media screen and (max-width: 300px) 
		{
  			span.psw 
  			{
    			display: block;
    			float: none;
  			}

  			.cancelbtn 
  			{
    			width: 100%;
  			}
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
					<a href="#">
						<h3 style="color: white; text-align: center; padding-top: 10px;">
							Insert
						</h3>
					</a>
				</div>

				<div class="update_nav">
					<a href="#">
						<h3 style="color: white; text-align: center; padding-top: 10px;">
							Update
						</h3>
					</a>
				</div>

				<div class="delete_nav">
					<a href="#">
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
			<form action="Admin_Login.php" method="post">
  				<div class="imgcontainer">
    				<img src="images/admin.jpg" alt="Avatar" class="avatar">
  				</div>

  				<div class="container">
    				<label for="uname" style="font-size: 20px; color: darkblue;"><b>Username</b></label>
    				<input type="text" placeholder="Enter Username" id="username" name = "username" required>

    				<label for="psw" style="font-size: 20px; color: darkblue;"><b>Password</b></label>
    				<input type="password" placeholder="Enter Password" id="password" name="password" required>

    				<button type="submit" name="login">
    					Login
    					
    					<?php 
      
                        if(isset($_POST['login']))
                        {
                            if($_POST['username'] != "" || $_POST['password'] != "")
    	                   {
    	                       $un = $_POST['username']; 
    	                       $pw = $_POST['password']; 
    					        
    	                       $qy = "SELECT * FROM `Employee` WHERE `Employee_Email` =? AND `Employee_Password` =?"; 
    	                       $res = $db->prepare($qy); 
    	                       $res->execute(array($un, $pw)); 
    	                       $row = $res->rowCount();
    	                       $fetch = $res->fetch(); 
    					        
    	                       if($row > 0)
    	                       {
    	                           header("Location: Admin_Welcome.php");
    	                           ob_end_flush(); 
    	                       }
    	                       else
                               {
    	                           echo '<script type="text/javascript">'; 
    	                           echo 'alert("Invalid username & password")'; 
                                   echo '</script>';
    	                       }
    	                   }
                        }
    					
                        ?>
                
    				</button>
    				<label style="font-size: 15px; color: darkblue;">
      					<input type="checkbox" name="remember"> Remember me
    				</label>
  				</div>

  				<div class="container" style="background-color:#f1f1f1">
    				<button type="reset" class="cancelbtn">Cancel</button>
    				<span class="psw">
    					<a href="https://www.google.com/gmail/" style="font-size: 15px; color: darkblue;">
    						Forget password?
    					</a>
    				</span>
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

