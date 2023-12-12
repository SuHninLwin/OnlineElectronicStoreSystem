<?php

include 'database_connect.php'; 

session_start();

if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "Product_ID");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'Product_ID'		=>	$_GET["id"],
                'Product_Name'		=>	$_POST["Product_Name"],
                'Product_Price'		=>	$_POST["Product_Price"],
                'Quantity'		=>	$_POST["Quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
        }
    }
    else
    {
        $item_array = array(
            'Product_ID'		=>	$_GET["id"],
            'Product_Name'		=>	$_POST["Product_Name"],
            'Product_Price'		=>	$_POST["Product_Price"],
            'Quantity'		=>	$_POST["Quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["Product_ID"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="shop.php"</script>';
            }
        }
    }
}

// if(isset($_GET["action"]))
// {
//     if($_GET["action"] == "update")
//     {
        
//         foreach($_SESSION["shopping_cart"] as $keys => $values)
//         {
//             if($values["Product_ID"] == $_GET["id"])
//             {
//                 $count=count($_SESSION["shopping_cart"]);
                
//                 unset($_SESSION["shopping_cart"] $_SESSION["Quantity"]);
                
//                 $item_array=array(
                   
                    
//                     'Product_ID'		=>	$_GET["id"],
//                     'Product_Name'		=>	$_GET["ProductName"],
//                     'Product_Price'		=>	$_GET["ProductPrice"],
//                     $_POST["Quantity"]	    =>  $_POST["qty"]
//                 );
                
                
//                 $_SESSION["shopping_cart"][$count] = $item_array;
                
//                 echo '<script>alert("Item Updated")</script>';
//                 echo '<script>window.location="shop.php"</script>';
//             }
//         }
//     }
// }


?>

<!doctype html>
<html class="no-js" lang="zxx">
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

    .cart_container
    { 
        width: 1440px;
        height: 500px;
    }
    
    .cart_title
    {  
        width: 233px; 
        height: 50px;
        margin-left: 610px;
    }
    
    .cart
    { 
        width: 1440px; 
        height: 400px;
    }
    
    .cart_table1
    {
        border-style: groove; 
        border-color: red;  
        border-weight: 2px; 
        font-size: 26px; 
        text-align: center; 
    }
    
    .cart_table2
    {
         
        font-size: 20px; 
        text-align: center;  
    }
    
    .cart_table_total
    {
        width: 1440px; 
        height: 50px; 
        background-color: yellow; 
    }
    
    .btn_proceed_checkout
    {
        margin-left: 626px;
    }

</style>

<body>
    <!--? Preloader Start -->
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
    <!-- Preloader Start -->
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
                                <h2>Smartwatches</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <section class="popular-items latest-padding">
            <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>                                                      
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Newest Arrivals</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Price high to low</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Most populer </a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                    <!-- Grid and List view -->
                    <div class="grid-list-view">
                    </div>
                    <!-- Select items -->
                    <div class="select-this">
                    
                        <form action="#">
                            <div class="select-itms">
                                <select name="select" id="select1">
                                    <option value="">Choose Your Brand</option>
                                    <option value="1" >Apple</option>
                                    <option value="2">Samsung</option>
                                    <option value="3">Fossil</option>
                                    <option value="4">Fitbit</option>
                                </select>
                            </div>
                        </form>
                        
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                  
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                       <div class="row">
                       	<?php 
                       	
                       	$vq = "SELECT * FROM Product";
                       
                       	foreach($db->query($vq)as $row)
                       	{
                       	?>
                       	
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                           
                           <form action="shop.php?action=add&id=<?php echo $row['Product_ID']?>" method="post">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="images/<?php echo $row['Product_Image'];?>" width="40px" height="350px" alt="">
                                       
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                    
                                        <h3><a href="product_details.php"><?php echo $row['Product_Name'];?></a></h3>
                                        <span>$ <?php echo $row['Product_Price'];?>
                                        </span>
                                        
                                    </div>
                                    
                                    <div>

                                    	<input type = "hidden" name = "Product_Name" value="<?= $row['Product_Name'] ?>">
                                    	<input type = "hidden" name = "Product_Price" value="<?= $row['Product_Price']?>">
                                    	
                                    	
                                    	<input type="number" name="Quantity" value="" Placeholder="Enter quantity">
                                    	<input type="submit" name="add_to_cart" value="Add To Cart">
                                    	
                                    </div>
                                    
                                </div>
                                </form>
                            </div>
                        <?php }?>
                        
                        </div>
                    </div>
            </div>
        </section>
        <!-- Latest Products End -->
        <!--? Shop Method Start-->
        <div class="shop-method-area">
            <div>
                <div >
                    <div>
                    
                        <div class="cart_container">
                        
                        	<div class="cart_title">
                        		<h1>
                        			My Cart List
                        		</h1>
                        	</div>
                        	
                        	<div class="cart">
                        	
                        		<table class="cart_table1">
                        		
									<tr>
									
										<td width="300px">Product Name</td>
										<td width="300px">Quantity</td>
										<td width="300px">Price</td>
										<td width="300px">Total</td>
										<td width="240px">Action</td>
									</tr>
								</table>
								
								<table><tr height ="30px"></table>
								<form action="">
								<table class="cart_table2">
										
									<?php
										
		                              if(!empty($_SESSION["shopping_cart"]))
		                              {
		                                  $total = 0;
		                                      
		                                  foreach($_SESSION["shopping_cart"] as $keys => $values)
		                                  {
		                            ?>
		                                
									<tr>
									
										<td width="300px"><?php echo $values["Product_Name"]; ?></td>
										<td width="300px">
										<input type="number" name="qty" value="<?php echo $values["Quantity"];?>" ></td>
									<td width="300px">$ <?php echo $values["Product_Price"]; ?></td>
										<td width="300px">$ <?php echo number_format($values["Quantity"] * $values["Product_Price"], 2);?></td>
										<td width="120px"><a href="shop.php?action=update&id=<?php echo $values['Product_ID'];?>&ProductName=<?php echo $values['Product_Name'];?>&ProductPrice=<?php echo $values['Product_Price'];?>&qty" style="color: black;" method="post" >Update</a></td>
									<td width="120px"><a href="shop.php?action=delete&id=<?php echo $values['Product_ID']; ?>" style="color: black;">Remove</a></td>
										
									</tr>
				
									<?php
									
		                                      $total = $total + ($values["Quantity"] * $values["Product_Price"]);
		                                      $_SESSION["amount"] = $total;
		                                  }
		                                  
		                            ?>
		                            
		                            <tr height="30px"></tr>
		                            
									<tr>
		
										<td></td>
										<td></td>
										<td></td>
										<td text-align="right">Total Amount: $ <?php echo number_format($total, 2); ?></td>
										<td></td>
						
									</tr>
		
									<?php
										
		                              }
		                                  
		                            ?>
		
								</table>
								</form>	
								
								<div>
								
									<button class="btn_proceed_checkout"><a href="login.php"><h5 style="color: red; align: center; padding-top: 10px;">Proceed To Checkout</h5></a></button>
								
								</div>
                        	
                        	</div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
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

    <!-- All JS Custom Plugins Link Here here -->
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