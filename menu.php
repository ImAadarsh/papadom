<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pappadom On The Hill - Menu | Order Now</title>
<?php include "include/main.php" ?>
<style>
    #papadomlogo{
        width: 50px !important;
    }
</style>

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
<header class="th-header header-layout3 ">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="w-100">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div style="background-color: #EFEADE;" class="header-logo">
                                <a href="index.php"><img src="assets/img/papadom.png" style="width: 35px !important;" id="papadomlogo" alt="papadomlogo"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                <li>
                                        <a href="index.php">Home</a>
                                    </li><li>
                                        <a href="menu.php">Menu</a>
                                    </li><li>
                                        <a href="about.php">About Us</a>
                                    </li><li>
                                        <a href="service.php">Services</a>
                                    </li>
                                    <li>
                                        <a href="gallery.php">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="header-button">
                                <form class="header-search">
                                    <input type="text" placeholder="Enter Keyword">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                                
                                <div class="header-call">
                                    <h3 class="box-title"><a href="tel:+442087614318"><span class="icon"></span> 
                                   +44 20 8761 4318</a></h3>
                                    <p class="box-text">Contact us for delivery</p>
                                </div>
                                <button type="button" class="square-btn sideMenuInfo">
                                    <i class="fal fa-bars"></i>
                                </button>
                                <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="smooth-wrapper">
        <div id="smooth-content">


        <iframe src="https://www.food-order.net/index.php/web_orders/home/TUhGU0VX?uid=63cdacdd46854" id="outer_fream" width="100%" style="height: 90vh;"  allow="payment" ></iframe>





<?php include "include/footer.php" ?>

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
   <?php include "include/script.php" ?>
</body>

</html>