<?php 
include 'database_connect.php';
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
                                <h2>Details About Smartwatches</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================Single Product Area =================-->
        <div class="product_image_area">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="product_img_slide owl-carousel">
                    <div class="single_product_img">
                        <img src="assets/img/gallery/gallery01.png" alt="#" class="img-fluid">
                    </div>
                    <div class="single_product_img">
                        <img src="assets/img/gallery/gallery01.png" alt="#" class="img-fluid">
                    </div>
                    <div class="single_product_img">
                        <img src="assets/img/gallery/gallery1.png" alt="#" class="img-fluid">
                    </div>
                </div>
                </div>
                <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h3>Why Smartwatches?</h3>
                    <h3>Is that necessary?</h3>
                    <p>
                        A Smartwatch displaying notifications are one of main reasons you would buy one. The ease of having messages sent to your wrist and being able to identify their importance without removing your phone from a pocket or bag is invaluable. It simplifies your life and it saves time.
                    </p>
                    <p></p>

                    <h3>Time</h3>
                    <p>
                        Isn’t it easier to glance at your wrist to check if you’re late for your appointment than to think where you’ve left your phone and look around for it? Sales of traditional watches have been on the decline as smartphones have dominated the market, but the smartwatch reminds us what a key item the watch actually is.
                    </p>
                    <p></p>

                    <h3>Fashion</h3>
                    <p>
                        The smartwatch can be confused with the digital watches we’ve mentioned above or even the more recent activity trackers and so you could be forgiven for thinking they are a bit boring, clunky and mechanical looking. On the contrary, the modern smartwatch comes complete with a library of colours, materials and watch faces to suit all types of occasions – whether it’s a work day or fun at the weekend.
                    </p>
                    <p></p>

                    <h3>Entertainment</h3>
                    <p>
                        The smartwatch makes entertainment even easier to access. Granted the screen size is a factor but it’s ideal for public transport journeys where keeping the phone aloft can prove to be a challenge. It’s also ideal to use the smartwatch when you want to quickly share a funny YouTube video with friends and family. Perhaps the better entertainment factor with a smartwatch is its music capabilities. Listening to music on your smartphone is even more enjoyable with a smartwatch. You can skip tracks, change the volume and play around with your playlist all from the device on your wrist. Newer smartwatches even allow music to be stored directly onto the device so no need to have the smartphone with you as well.
                    </p>
                    <p></p>

                    <h3>Notifications</h3>
                    <p>
                        Perhaps one of the smartwatches most useful features is its ability to alert you to calls, text messages and social media updates. Rather than having to get the handset out each time it vibrates or pings. Not every notification will be important i.e. requiring an action), a smartwatch makes it easier to manage notifications quickly and easily. It may seem trivial but the potential to save time and simplify situations you’re in is huge. For example a quick glance at your watch in a meeting wouldn’t be considered rude as it would if you were to start rummaging for your phone. Also when out and about running or taking part in other physical activity you may decide to not take your smartphone with you. You can decide when alerts come through on the smartphone so as to keep the process efficient.
                    </p>
                    <p></p>

                    <h3>Making and Answering Calls</h3>
                    <p>
                        How this activity is undertaken will vary on the type of smartwatch. Some devices allow the wearer to accept or decline calls through the watch. Others will allow this but also give you the option to answer the call through the watch itself. Both options require your handset to be nearby. There are now cellular versions of the smartwatch available on the market, which means you can use the watch independent to a smartphone including being able to make calls. Although the appearance of voice dictation into a smartwatch can look strange, it is a useful feature allowing you to respond to important messages in a timely manner without compromising what you may be doing at the time i.e. out for a run or busy in the kitchen.
                    </p>
                    <p></p>

                    <h3>Health and Wellbeing</h3>
                    <p>
                        It can be easy to assume that the smartwatch is only good for tracking yours steps. It does of course track daily steps but it does so much more which can really make a difference to a person’s health. Due to the smartwatch being capable of doing more than just tracking steps, it is more likely to be worn on a daily basis rather than taken off and being forgotten about. A smartwatch is not just a pedometer, it has various built in sensors to monitor and record other activity such as heart rate and blood pressure. The latest edition of the Apple Watch even has the capability to perform an ECG. Other useful health related features include sleep monitoring, calorie counting and a range of apps to support stress management.
                    </p>
                    <p></p>

                    <h3>Safety</h3>
                    <p>
                        Smartwatches are equipped with GPS as standard, most will require you to pair the watch with your handset whereas others have stand alone GPS built in. This is key for a number of reasons. Not only does GPS allow you to track sports activities such as running and hiking, measuring speed and distance accurately but it also helps to track your location for safety purposes, particularly useful if on your own or in an unfamiliar environment. For that reason smartwatches are ideal for offering loved ones peace of mind for when elderly relatives are out and about. Some smartwatches also have the ability to detect falls and take action if needed i.e. contact emergency services if no movement is detected. Many smartwatches, especially the specialty types, have SOS/panic buttons which if activated can contact identified individuals through the phone either via message or by making a call.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--================End Single Product Area =================-->
        <!-- subscribe part here -->
        <section class="subscribe_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="subscribe_part_content">
                            <h2>Get promotions & updates!</h2>
                            <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                            <div class="subscribe_form">
                                <input type="email" placeholder="Enter your mail">
                                <a href="product_details.php" class="btn_1">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe part end -->
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

        <!-- swiper js -->
        <script src="./assets/js/swiper.min.js"></script>
            <!-- swiper js -->
        <script src="./assets/js/mixitup.min.js"></script>
        <script src="./assets/js/jquery.counterup.min.js"></script>
        <script src="./assets/js/waypoints.min.js"></script>

</body>

</html>