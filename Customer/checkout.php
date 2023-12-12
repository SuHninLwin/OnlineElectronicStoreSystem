<?php 

    include 'database_connect.php';
    
    session_start();
    
?>

<!doctype html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/style.css">
</head>

<style>

    .order_confirm
    {
        width: 1140px;
        height: 1000px;
        float: left;
    }
    
    .form_user_fill_outer
    {
        background-color: lightgrey; 
        margin-top: 20px;
        width: 639px;
        height: 600px;
        float: left; 
        border-style: groove; 
        border-color: red;
        border-weight: 2px; 
    }
    
    .company_logo_fill_outer
    {
        background-color: lightgrey; 
        margin-top: 20px;
        width: 499px;
        height: 600px;
        float: right; 
        border-style: groove; 
        border-color: red;
        border-weight: 2px;
    }
    
    .suggestion_container
    {
        background-color: lightgrey; 
        width: 1139px;
        height: 200px;
        border-style: groove; 
        border-color: red;
        border-weight: 2px;
        margin-top: 630px;
    }
    
    .btn_proceed_checkout
    {
        margin-left: 462px; 
        margin-top: 20px; 
    }

</style>

<body>

  <header>
    <!-- Header Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="images/Logos/company_logo_name.gif" alt="">
                </div>
            </div>
        </div>
    </div>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="images/Logos/company_logo_name2.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="shop.php">shop</a></li>
                                    <li><a href="about.php">about</a></li>
                                    <li class="hot"><a href="#">Latest</a>
                                        <ul class="submenu">
                                            <li><a href="shop.php"> Product list</a></li>
                                            <li><a href="product_details.php"> Product Details</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <li> <a href="login.php"><span class="flaticon-user"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Header End -->
  </header>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Checkout</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================Checkout Area =================-->
        
        <section class="checkout_area section_padding">
        	<div class="container">
        	
        	<form action="" method="post" class="form_cus_info_alignment">
        	
            	<div class="order_confirm">
              
              <h1 style="text-align: center; color: red; ">Checkout Process Here!</h1>
              <h3 style="text-align: center; color: black; ">Please fill billing address and payment type!</h3>
              
              		<div class="form_user_fill_outer">
              
              			<h1 style="text-align: center; margin-top: 30px;">Customer Information Here</h1>
              			
              			
              			
              			<table> 
              					
              				<tr height="40px">
              		
              				<tr>
              					<td width="212px" style="text-align: left">
              						<label style="font-size: 20px; color: red; padding-left: 75px; ">Full Name</label>
              					</td>
              			
              					<td width="50px">
              			
              					<td width="373px">
              						<input type="text" name="Customer_Name" value="" placeholder="Enter full name">
              					</td>
              				</tr>
              				
              				<tr height="40px">
              		
              				<tr>
              					<td width="212px" style="text-align: left">
              						<label style="font-size: 20px; color: red; padding-left: 75px;">Email</label>
              					</td>
              			
              					<td width="50px">
              			
              					<td width="373px">
              						<input type="text" name="Customer_Email" value="" placeholder="Enter email address">
              					</td>
              				</tr>
              				
              				<tr height="40px">
              				
              				<tr>
              					<td width="212px" style="text-align: left">
              						<label style="font-size: 20px; color: red; padding-left: 75px;">Phone Number</label>
              					</td>
              			
              					<td width="50px">
              			
              					<td width="373px">
              						<input type="text" name="Customer_Phone" value="" placeholder="Enter phone number" >
              					</td>
              				</tr>
              				
              				<tr height="40px">
              				
              				<tr>
              					<td width="212px" style="text-align: left">
              						<label style="font-size: 20px; color: red; padding-left: 75px;">Full Address</label>
              					</td>
              			
              					<td width="50px">
              			
              					<td width="373px">
              						<input type="text" name="Customer_Address" value="" placeholder="Enter full address">
              					</td>
              				</tr>
              	
              			</table>
              			
              		</div> 
              		
<!-- _______________________________________________________________________________________________________________________________________________________________________________________________________________ -->
              
              		<div class="company_logo_fill_outer">
              
              			<h1 style="text-align: center; margin-top: 30px;">Your Payment Here</h1>
              			
              			<table> 
              				
              				<tr height="40px"></tr>
              		
              				<tr>
              					<td width="224px" style="text-align: left">
              						<label style="font-size: 20px; color: red; red; padding-left: 55px;">Card Number</label>
              					</td>
              			
              					<td width="48px">
              			
              					<td width="224px">
              						<input type="text" name="Card_Number" value="" placeholder="Enter Card Number">
              					</td>
              				</tr>
              				
              				<tr height="40px">
              				
              				<tr>
              					<td width="224px" style="text-align: left">
              						<label style="font-size: 20px; color: red; padding-left: 55px;">Issue Date</label>
              					</td>
              			
              					<td width="48px">
              			
              					<td width="224px">
              						<input type="date" name="Issue_Date" value="" placeholder="Enter Issue Date">
              					</td>
              				</tr>
              				
              				<tr height="40px">
              				
              				<tr>
              					<td width="224px" style="text-align: left">
              						<label style="font-size: 20px; color: red; padding-left: 55px;">Payment Type</label>
              					</td>
              			
              					<td width="48px">
              			
              					<td width="224px">
              						<input type="text" name="Payment_Type" value="" placeholder="Enter Payment Type">
              					</td>
              				</tr>
              				
              				<tr height="60px">
              				
              				<tr>
              					<td width="224px" style="text-align: left">
              						<label style="font-size: 20px; color: red; padding-left: 55px;">Pay With</label>
              					</td>
              			
              					<td width="48px">
              			
              					<td width="224px">
              						<h3>PayPal</h3>
              					</td>
              				</tr>
              				
              				<tr height="65px">
              				
              				<tr>
              					<td width="212px" style="text-align: right; padding-left: 55px;">
              						<input type="reset" value="Cancel">
              					</td>
              			
              					<td width="50px">
              			
              					<td width="373px">
              						<input type="submit" value="Submit" name="submit">
              						
              						<?php 
        
                                        if(isset($_POST["submit"]))
                                        {
                                            $p_id = $_SESSION['shopping_cart'][0]["Product_ID"];
                
                                            $qty = $_SESSION['shopping_cart'][0]["Quantity"];
                
                                            $c_id = $_SESSION["cid"];
                                            
                                            $order_id = $db->lastInsertId();
                                            $order_id=$order_id;
            
                                            $sql= "INSERT INTO `Orders` (`Orders_ID`, `Customer_ID`, `Quantity`, `Product_ID`, `Delivery_Date`)
                                                        VALUES ($order_id, $c_id, $qty, $p_id, now())";
                 
                                            echo $sql; 
                                            $db->exec($sql);
                                         }
    
                                    ?>
                                    
              					</td>
              					
              				</tr>
              	
              			</table>
              			
              			</form>
              			
              		</div>
<!-- _______________________________________________________________________________________________________________________________________________________________________________________________________________ -->            
              		<div class="suggestion_container">
              			
              			<h2 style="text-align: center; margin-top: 30px;">Final Step To Checkout</h2>
              			
              			<form action="" method="post">
              			
              			<table>
              			
              				<tr>
              				
              					<td>
              						<input type="submit" value="Proceed To Payment" name="proceed_to_checkout" class="btn_proceed_checkout" style="color: red; align: center; padding-top: 6px;">
              					</td>
              					
              				</tr>
              			
              			</table>
              			
              			</form>
              			
              			<?php 
              			
              			   if(isset($_POST["proceed_to_checkout"]))
              			   {
              			       
              			   }
              			
              			?>
          		
          			</div>     
                    
          		</div>
          
        	</div>
          
        </section>
        
        <!--================End Checkout Area =================-->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.php"><img src="images/Logos/company_logo_name2.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>One and only Unique is now here.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="product_details.php">Offers & Discounts</a></li>
                                    <li><a href="product_details.php">Get Coupon</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href="shop.php">Apple</a></li>
                                    <li><a href="shop.php">Samsung</a></li>
                                    <li><a href="shop.php">Fossil</a></li>
                                    <li><a href="shop.php">Fitbit</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="contact.php">Frequently Asked Questions</a></li>
                                    <li><a href="checkout.php">Terms & Conditions</a></li>
                                    <li><a href="checkout.php">Privacy Policy</a></li>
                                    <li><a href="contact.php">Report a Payment Issue</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p><a href="https://en.wikipedia.org/wiki/Info_Myanmar_University" target="_blank">Su Hnin Lwin (B-29 SW)</a></p>                  
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="https://twitter.com/explore"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.behance.net"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

<!-- JS here -->

  <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="./assets/js/popper.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <!-- Jquery Mobile Menu -->
  <script src="./assets/js/jquery.slicknav.min.js"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="./assets/js/owl.carousel.min.js"></script>
  <script src="./assets/js/slick.min.js"></script>

  <!-- One Page, Animated-HeadLin -->
  <script src="./assets/js/wow.min.js"></script>
  <script src="./assets/js/animated.headline.js"></script>
  <script src="./assets/js/jquery.magnific-popup.js"></script>

  <!-- Scroll up, nice-select, sticky -->
  <script src="./assets/js/jquery.scrollUp.min.js"></script>
  <script src="./assets/js/jquery.nice-select.min.js"></script>
  <script src="./assets/js/jquery.sticky.js"></script>
  
  <!-- contact js -->
  <script src="./assets/js/contact.js"></script>
  <script src="./assets/js/jquery.form.js"></script>
  <script src="./assets/js/jquery.validate.min.js"></script>
  <script src="./assets/js/mail-script.js"></script>
  <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
      
  <!-- Jquery Plugins, main Jquery -->	
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/main.js"></script>
  
</body>
</html>