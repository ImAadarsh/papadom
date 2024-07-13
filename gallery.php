<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restar - Fast Food & Restaurant HTML Template - Gallery</title>
<?php include "include/main.php" ?>

</head>

<body>

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>

    <!--==============================
     Preloader
  ==============================-->
    <!--==============================
    Sidemenu
============================== -->
    
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div><!--==============================
    Mobile Menu
  ============================== -->
   <?php include "include/mobile.php" ?><!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout1 ">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-xxl-inline-block"><i class="fas fa-location-dot"></i> <a href="https://www.google.com/maps/">9402 Main St, Plymouth, CA 95669, United States</a></li>
                                <li><i class="fas fa-phone"></i> <a href="tel:+98782818015">+987-828-18015</a></li>
                                <li><i class="fas fa-envelope"></i> <a href="mailto:info@restar.com">info@restar.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <div class="shape1"></div>
                            <ul>
                                <li><i class="fas fa-clock"></i> <b>Mondat to Friday:</b> 9:00am - 22:00pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.php"><img src="assets/img/logo.svg" alt="Restar"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="index.php">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.php">Restaurant Shop</a></li>
                                            <li><a href="home-fast-food.php">Home Fast Food</a></li>
                                            <li><a href="home-restaurant.php">Home Restaurant</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="service.php">Service</a></li>
                                            <li><a href="service-details.php">Service Details</a></li>
                                            <li><a href="team.php">Chef</a></li>
                                            <li><a href="team-details.php">Chef Details</a></li>
                                            <li><a href="reservation.php">Reservation</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <li><a href="error.php">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Menus</a>
                                        <ul class="sub-menu">
                                            <li><a href="menu-one.php">Food Menu 1</a></li>
                                            <li><a href="menu-two.php">Food Menu 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="shop-details.php">Shop Details</a></li>
                                            <li><a href="cart.php">Cart Page</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="wishlist.php">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="blog-details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="header-button">
                                <button type="button" class="simple-icon searchBoxToggler d-none d-xl-block"><i class="fal fa-search"></i></button>
                                <button type="button" class="simple-icon sideMenuToggler">
                                    <span class="badge">5</span>
                                    <i class="fal fa-cart-shopping"></i>
                                </button>
                                <a href="contact.php" class="th-btn style4 d-none d-xl-block">Book A Table</a>
                                <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="smooth-wrapper">
        <div id="smooth-content"><!--==============================
    Breadcumb
============================== -->
            <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
                <div class="container">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Gallery</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--==============================
Gallery Area  
==============================-->
            <div class="space">
                <div class="container z-index-common">
                    <div class="row gy-30 filter-active">
                        <div class="col-xxl-auto col-md-6 filter-item">
                            <div class="gallery-card">
                                <div class="box-img">
                                    <img src="assets/img/gallery/gallery_3_1.jpg" alt="gallery image">
                                    <a href="assets/img/gallery/gallery_3_1.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-auto col-md-6 filter-item">
                            <div class="gallery-card">
                                <div class="box-img">
                                    <img src="assets/img/gallery/gallery_3_2.jpg" alt="gallery image">
                                    <a href="assets/img/gallery/gallery_3_2.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-auto col-md-6 filter-item">
                            <div class="gallery-card">
                                <div class="box-img">
                                    <img src="assets/img/gallery/gallery_3_3.jpg" alt="gallery image">
                                    <a href="assets/img/gallery/gallery_3_3.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-auto col-md-6 filter-item">
                            <div class="gallery-card">
                                <div class="box-img">
                                    <img src="assets/img/gallery/gallery_3_4.jpg" alt="gallery image">
                                    <a href="assets/img/gallery/gallery_3_4.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-auto col-md-6 filter-item">
                            <div class="gallery-card">
                                <div class="box-img">
                                    <img src="assets/img/gallery/gallery_3_5.jpg" alt="gallery image">
                                    <a href="assets/img/gallery/gallery_3_5.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-auto col-md-6 filter-item">
                            <div class="gallery-card">
                                <div class="box-img">
                                    <img src="assets/img/gallery/gallery_3_6.jpg" alt="gallery image">
                                    <a href="assets/img/gallery/gallery_3_6.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-auto col-md-6 filter-item">
                            <div class="gallery-card">
                                <div class="box-img">
                                    <img src="assets/img/gallery/gallery_3_7.jpg" alt="gallery image">
                                    <a href="assets/img/gallery/gallery_3_7.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-auto col-md-6 filter-item">
                            <div class="gallery-card">
                                <div class="box-img">
                                    <img src="assets/img/gallery/gallery_3_8.jpg" alt="gallery image">
                                    <a href="assets/img/gallery/gallery_3_8.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-auto col-md-6 filter-item">
                            <div class="gallery-card">
                                <div class="box-img">
                                    <img src="assets/img/gallery/gallery_3_9.jpg" alt="gallery image">
                                    <a href="assets/img/gallery/gallery_3_9.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-auto col-md-6 filter-item">
                            <div class="gallery-card">
                                <div class="box-img">
                                    <img src="assets/img/gallery/gallery_3_10.jpg" alt="gallery image">
                                    <a href="assets/img/gallery/gallery_3_10.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!--==============================
	Footer Area
==============================-->
            <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer_bg_1.jpg">
                <div class="widget-area">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-md-6 col-xl-auto">
                                <div class="widget footer-widget">
                                    <div class="th-widget-about">
                                        <div class="about-logo">
                                            <a href="index.php"><img src="assets/img/logo-footer.svg" alt="Restar"></a>
                                        </div>
                                        <p class="about-text">We believe that great food shouldn't break the bank. That's why we offer affordable options without compromising on taste.</p>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-auto">
                                <div class="widget widget_nav_menu footer-widget">
                                    <h3 class="widget_title">Quick Links</h3>
                                    <div class="menu-all-pages-container">
                                        <ul class="menu">
                                            <li><a href="team.php">Team Member</a></li>
                                            <li><a href="about.php">Testimonials</a></li>
                                            <li><a href="about.php">Company History</a></li>
                                            <li><a href="contact.php">Need a Career?</a></li>
                                            <li><a href="faq.php">FAQs</a></li>
                                        </ul>
                                    </div>
                                </div>










                            </div>
                            <div class="col-md-6 col-xl-auto">
                                <div class="widget widget_nav_menu footer-widget">
                                    <h3 class="widget_title">Food Menu</h3>
                                    <div class="menu-all-pages-container">
                                        <ul class="menu">
                                            <li><a href="shop.php">White Castle</a></li>
                                            <li><a href="shop.php">Beef Sandwich</a></li>
                                            <li><a href="shop.php">Cherry Limeade</a></li>
                                            <li><a href="shop.php">Sandwich</a></li>
                                            <li><a href="shop.php">Pumpkin Spice</a></li>
                                        </ul>
                                    </div>
                                </div>




                            </div>
                            <div class="col-md-6 col-xl-auto">
                                <div class="widget footer-widget">
                                    <h3 class="widget_title">Get In Touch</h3>
                                    <div class="th-widget-contact">
                                        <div class="info-box">
                                            <h4 class="box-title">Address Location</h4>
                                            <div class="box-content">
                                                <div class="box-icon">
                                                    <i class="fas fa-location-dot"></i>
                                                </div>
                                                <p class="box-text">138 MacArthur Ave, USA</p>
                                            </div>
                                        </div>
                                        <div class="info-box">
                                            <h4 class="box-title">Phone Number</h4>
                                            <div class="box-content">
                                                <div class="box-icon">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                                <p class="box-text"><a href="tel:+16326543564">+(163)-2654-3564</a></p>
                                            </div>
                                        </div>
                                        <div class="info-box">
                                            <h4 class="box-title">Email address</h4>
                                            <div class="box-content">
                                                <div class="box-icon">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <p class="box-text"><a href="mailto:info@restar.com">info@restar.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-wrap">
                    <div class="container">
                        <div class="row gx-1 gy-2 align-items-center">
                            <div class="col-md-7">
                                <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a href="index.php">Restar</a>. All Rights Reserved.</p>
                            </div>
                            <div class="col-md-5 text-center text-md-end">
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="about.php">Terms & Condition</a></li>
                                        <li><a href="about.php">Privacy & Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!--********************************
			Code End  Here 
	******************************** -->

            <!-- Smooth scroller -->
        </div>
    </div>



    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>



    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Date Time -->
    <script src="assets/js/jquery.datetimepicker.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- Gsap Animation -->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</body>

</html>