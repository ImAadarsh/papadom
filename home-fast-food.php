<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restar - Fast Food & Restaurant HTML Template - Fast Food</title>
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
Product Lightbox
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
<?php include "include/header.php" ?>

    <div id="smooth-wrapper">
        <div id="smooth-content"><!--==============================
Hero Area
==============================-->
            <div class="th-hero-wrapper hero-2" id="hero">
                <div class="hero-shape1">
                    <img src="assets/img/hero/hero_shape_2_1.png" alt="shape">
                </div>
                <div class="hero-shape2">
                    <img src="assets/img/hero/hero_shape_2_2.png" alt="shape">
                </div>
                <div class="hero-shape3">
                    <img src="assets/img/hero/hero_shape_2_3.png" alt="shape">
                </div>
                <div class="hero-inner">
                    <div class="container th-container">
                        <div class="hero-style2">
                            <div class="title-ani">
                                <span class="hero-subtitle text-center">Its Quick & Amusing!</span>
                            </div>
                            <h1 class="hero-title2">Fast Fresh</h1>
                            <h2 class="hero-title3">Flavorful</h2>
                            <div class="title-ani2">
                                <a href="shop.php" class="th-btn style3">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-img">
                    <img src="assets/img/hero/hero_2_1.png" alt="Hero Image">
                </div>
            </div>
            <!--======== / Hero Section ========-->
            <!--==============================
Contact Area   
==============================-->
            <div class="py-5 bg-smoke2">
                <div class="container py-2 my-4">
                    <form action="mail.php" method="POST" class="reservation-form2 input-white">
                        <div class="row">
                            <div class="form-group col-lg-3 col-sm-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6">
                                <input type="text" class="date-time-pick form-control" name="date-time" id="date-time-pick" placeholder="Date & Time">
                                <i class="fal fa-calendar-alt"></i>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6">
                                <input type="text" class="form-control" name="people" id="people" placeholder="Total Person">
                                <i class="fal fa-user-group"></i>
                            </div>
                            <div class="form-btn col-lg-3 col-sm-6">
                                <button class="th-btn w-100">Reservation Now</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
            <!--==============================
Menu Area  
==============================-->
            <section class="space">
                <div class="container">
                    <div class="title-area text-center">
                        <span class="sub-title2">Our Menu</span>
                        <h2 class="sec-title">Our Delicious Foods</h2>
                    </div>
                    <div class="text-ani">
                        <div class="nav tab-menu1" role="tablist">
                            <button class="th-btn style-border btn-sm active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">All Foods</button>
                            <button class="th-btn style-border btn-sm" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">Breakfast</button>
                            <button class="th-btn style-border btn-sm" id="nav-three-tab" data-bs-toggle="tab" data-bs-target="#nav-three" type="button" role="tab" aria-controls="nav-three" aria-selected="false">Lunch</button>
                            <button class="th-btn style-border btn-sm" id="nav-four-tab" data-bs-toggle="tab" data-bs-target="#nav-four" type="button" role="tab" aria-controls="nav-four" aria-selected="false">Dinner</button>
                        </div>
                    </div>

                    <div class="tab-content">
                        <!-- Single item -->
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="slider-area">
                                <div class="swiper th-slider blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Chicha Morada</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_1.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$40</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Oysters Dozen</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_2.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$50</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Wild Mushroom</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_3.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$30</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Crispy Chicken</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_4.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$20</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Vanilla Cake</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_5.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$50</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Testy Roll</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_6.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$40</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Bruno Scribble</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_7.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$30</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Oysters Dozen</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_8.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$20</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button data-slider-prev=".blogSlider1" class="slider-arrow slider-prev"><span class="icon"></span></button>
                                <button data-slider-next=".blogSlider1" class="slider-arrow slider-next"><span class="icon"></span></button>
                            </div>
                        </div>
                        <!-- Single item -->
                        <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                            <div class="slider-area">
                                <div class="swiper th-slider blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Chicha Morada</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_1.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$40</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Oysters Dozen</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_2.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$50</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Wild Mushroom</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_3.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$30</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Crispy Chicken</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_4.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$20</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Vanilla Cake</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_5.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$50</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Testy Roll</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_6.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$40</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Bruno Scribble</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_7.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$30</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Oysters Dozen</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_8.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$20</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button data-slider-prev=".blogSlider1" class="slider-arrow slider-prev"><span class="icon"></span></button>
                                <button data-slider-next=".blogSlider1" class="slider-arrow slider-next"><span class="icon"></span></button>
                            </div>
                        </div>
                        <!-- Single item -->
                        <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                            <div class="slider-area">
                                <div class="swiper th-slider blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Chicha Morada</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_1.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$40</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Oysters Dozen</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_2.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$50</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Wild Mushroom</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_3.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$30</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Crispy Chicken</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_4.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$20</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Vanilla Cake</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_5.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$50</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Testy Roll</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_6.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$40</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Bruno Scribble</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_7.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$30</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Oysters Dozen</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_8.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$20</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button data-slider-prev=".blogSlider1" class="slider-arrow slider-prev"><span class="icon"></span></button>
                                <button data-slider-next=".blogSlider1" class="slider-arrow slider-next"><span class="icon"></span></button>
                            </div>
                        </div>
                        <!-- Single item -->
                        <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">
                            <div class="slider-area">
                                <div class="swiper th-slider blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Chicha Morada</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_1.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$40</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Oysters Dozen</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_2.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$50</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Wild Mushroom</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_3.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$30</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Crispy Chicken</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_4.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$20</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Vanilla Cake</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_5.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$50</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Testy Roll</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_6.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$40</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Bruno Scribble</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_7.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$30</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-card">
                                                <div class="box-shape"></div>
                                                <h3 class="box-title"><a href="shop-details.php">Oysters Dozen</a></h3>
                                                <div class="box-img">
                                                    <img src="assets/img/product/menu_card_8.jpg" alt="Food">
                                                </div>
                                                <p class="box-text">A taste you’ll remember.</p>
                                                <h4 class="box-price">$20</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button data-slider-prev=".blogSlider1" class="slider-arrow slider-prev"><span class="icon"></span></button>
                                <button data-slider-next=".blogSlider1" class="slider-arrow slider-next"><span class="icon"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 pt-xl-2 text-center">
                        <div class="text-ani">
                            <a href="shop.php" class="th-btn style-border">View All Menu</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--==============================
About Area  
==============================-->
            <div class="overflow-hidden bg-smoke" id="about-sec">
                <div class="shape-mockup moving" data-top="10%" data-right="4%"><img src="assets/img/shape/garlic_3.png" alt="shape"></div>
                <div class="shape-mockup spin d-none d-lg-block" data-bottom="5%" data-right="3%"><img src="assets/img/shape/flower_5.png" alt="shape"></div>
                <div class="container">
                    <div class="row gx-0">
                        <div class="col-xl-6">
                            <div class="img-box4">
                                <img src="assets/img/normal/about_2_1.jpg" data-speed="auto" alt="Image">
                            </div>
                        </div>
                        <div class="col-xl-6 text-center text-xl-start space align-self-center">
                            <div class="about-space1">
                                <div class="title-area pe-xl-4 mb-35">
                                    <span class="sub-title2">About Us Restaurant</span>
                                    <h2 class="sec-title">The Artistry Behind the Menu</h2>
                                    <div class="text-ani">
                                        <p class="sec-text">From crispy and golden fries to mouthwatering burgers and wraps, our menu offers a variety of fast-food favorites. Each item is crafted with quality ingredients to ensure a tasty experience with every order.</p>
                                        <p class="sec-text">Elevate your dining experience with our extensive selection of fine wines and expertly crafted cocktails.</p>
                                    </div>

                                </div>
                                <div class="text-ani">
                                    <a href="about.php" class="th-btn style-border smoke-bg">More About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--==============================
About Area  
==============================-->
            <div class="overflow-hidden " id="about-sec2">
                <div class="shape-mockup moving" data-bottom="10%" data-left="40%"><img src="assets/img/shape/garlic_4.png" alt="shape" data-speed="1.12"></div>
                <div class="container">
                    <div class="row gx-0 flex-row-reverse">
                        <div class="col-xl-6 mb-40 mb-xl-0">
                            <div class="img-box5">
                                <div class="shape1">
                                    <img src="assets/img/shape/leaf-3.png" alt="shape">
                                </div>
                                <div class="shape2">
                                    <img src="assets/img/shape/leaf-4.png" alt="shape">
                                </div>
                                <div class="img1">
                                    <img src="assets/img/normal/about_3_1.jpg" alt="Why" data-speed="0.9">
                                </div>
                                <div class="img2">
                                    <img src="assets/img/normal/about_3_2.jpg" alt="Why" data-speed="1.1">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 text-center text-xl-start align-self-center">
                            <div class="pe-xxl-5 me-xl-5">
                                <div class="title-area pe-xl-4 mb-35">
                                    <span class="sub-title2">More About Us</span>
                                    <h2 class="sec-title">We Invite You to Visit Our Restaurant</h2>
                                    <div class="text-ani">
                                        <p class="sec-text pe-xl-5">Every time you perfectly dine with us, it should happy for great inspired food in an environment designed with individual touches unique to the local area. From crispy and golden fries to mouthwatering burgers.</p>
                                    </div>
                                </div>
                                <div class="text-ani">
                                    <a href="about.php" class="th-btn style-border">More About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--==============================
Brand Area  
==============================-->
            <div class="space">
                <div class="container">
                    <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"spaceBetween":45,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1300":{"slidesPerView":"5"},"1500":{"slidesPerView":"5"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-box style2">
                                    <img src="assets/img/brand/brand_2_1.svg" alt="Brand Logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box style2">
                                    <img src="assets/img/brand/brand_2_2.svg" alt="Brand Logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box style2">
                                    <img src="assets/img/brand/brand_2_3.svg" alt="Brand Logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box style2">
                                    <img src="assets/img/brand/brand_2_4.svg" alt="Brand Logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box style2">
                                    <img src="assets/img/brand/brand_2_5.svg" alt="Brand Logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box style2">
                                    <img src="assets/img/brand/brand_2_1.svg" alt="Brand Logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box style2">
                                    <img src="assets/img/brand/brand_2_2.svg" alt="Brand Logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box style2">
                                    <img src="assets/img/brand/brand_2_3.svg" alt="Brand Logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box style2">
                                    <img src="assets/img/brand/brand_2_4.svg" alt="Brand Logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box style2">
                                    <img src="assets/img/brand/brand_2_5.svg" alt="Brand Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--==============================
Menu Area  
==============================-->
            <section class="overflow-hidden bg-fixed " data-bg-src="assets/img/bg/menu_bg_2.jpg" data-overlay="theme" data-opacity="6">
                <div class="container">
                    <div class="row gx-0 justify-content-center">
                        <div class="col-xl-9">
                            <div class="slider-area menu-list-slider space" data-bg-src="assets/img/bg/square_pattern2.jpg">
                                <div class="title-area text-center">
                                    <span class="sub-title2">Menu Card</span>
                                    <h2 class="sec-title title-ani text-white">Our Restaurant Foods Menu</h2>
                                </div>
                                <div class="swiper th-slider" id="menuSlider3" data-slider-options='{}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="menu-list-area">
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_1.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">Grilled Salmon with Dil Sauce</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$40</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_2.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">Roast Beef with Vegetable</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$50</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_3.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">Marrakesh Vegetarian Curry</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$30</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_4.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">Spicy Vegan Potato Curry</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$20</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_5.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">Apple Pie with Cream</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$45</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_6.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">French Onion Soup</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$32</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="menu-list-area">
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_7.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">French Onion Soup</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$40</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_8.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">Roast Beef with Vegetable</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$50</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_9.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">Italian Vegetarian Pizza</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$30</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_10.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">Fried Rice Set Menu</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$20</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_11.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">Beef Fried and Kabab</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$45</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-list">
                                                    <div class="box-img">
                                                        <img src="assets/img/product/menu_thumb_6.png" alt="Food">
                                                        <div class="actions">
                                                            <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="shop-details.php">French Onion Soup</a></h3>
                                                        <div class="box-content">
                                                            <p class="box-text">Candied Jerusalem artichokes, truffle</p>
                                                            <div class="box-line"></div>
                                                            <h4 class="box-price">$32</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button data-slider-prev="#menuSlider3" class="slider-arrow slider-prev"><span class="icon"></span></button>
                                <button data-slider-next="#menuSlider3" class="slider-arrow slider-next"><span class="icon"></span></button>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <!--==============================
Schedule Area  
==============================-->
            <div class="overflow-hidden space">
                <div class="container">
                    <div class="schedule-sec2" data-bg-src="assets/img/bg/square_pattern3.png">
                        <h2 class="sec-title title-ani2"><span>OPEN</span> <span>HOUR</span></h2>
                        <div class="schedule-img">
                            <img class="flipY" src="assets/img/normal/schedule_2.png" alt="Chef">
                        </div>
                        <div class="schedule-box">
                            <div class="schedule-list-wrap">
                                <div class="schedule-list flipX">
                                    <h3 class="box-title">Monday to Tuesday</h3>
                                    <h4 class="box-time">10:00 AM</h4>
                                    <h4 class="box-time">20:00 PM</h4>
                                    <a href="tel:+16365982547" class="th-btn style-border border-two">+163 6598 2547</a>
                                </div>
                                <div class="schedule-list flipX">
                                    <h3 class="box-title">Friday to Sunday</h3>
                                    <h4 class="box-time">12:00 PM</h4>
                                    <h4 class="box-time">23:00 PM</h4>
                                    <a href="mailto:info@restar.com" class="th-btn style-border border-two">info@restar.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--==============================
Testimonial Area  
==============================-->
            <section class="space" id="testi-sec" data-bg-src="assets/img/bg/testi_bg_1.jpg">
                <div class="container">
                    <div class="title-area text-center">
                        <span class="sub-title2">Testimonials</span>
                        <h2 class="sec-title title-ani">What Our Customer Say?</h2>
                    </div>
                    <div class="slider-area">
                        <div class="swiper th-slider has-shadow" id="testiSlider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-box">
                                        <div class="box-profile">
                                            <div class="box-img">
                                                <img src="assets/img/testimonial/testi_2_1.jpg" alt="Image">
                                                <div class="box-quote">
                                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.52117 10.5804C3.22247 10.2795 3.83463 9.82201 4.35764 9.20808C4.88065 8.59414 5.19564 7.96817 5.30262 7.33016C5.36205 6.99309 5.39177 6.70418 5.39177 6.46342C5.39177 6.18655 5.36205 5.95783 5.30262 5.77726C4.74395 6.36712 4.0367 6.66205 3.18087 6.66205C2.32504 6.66205 1.62968 6.40925 1.09478 5.90366C0.559885 5.39806 0.292438 4.69986 0.292438 3.80905C0.292439 2.96639 0.577715 2.28023 1.14827 1.75056C1.70694 1.22089 2.42013 0.956056 3.28785 0.956056C4.4765 0.956056 5.34422 1.38942 5.891 2.25616C6.14062 2.62933 6.33675 3.08677 6.47939 3.62848C6.62203 4.18223 6.69334 4.74801 6.69334 5.32583C6.69334 6.58982 6.37241 7.74546 5.73053 8.79277C5.08866 9.84007 4.13179 10.6587 2.85993 11.2485L2.52117 10.5804ZM10.0454 10.5804C10.7467 10.2795 11.3588 9.82201 11.8818 9.20808C12.4048 8.59414 12.7198 7.96817 12.8268 7.33016C12.8862 6.99309 12.916 6.70418 12.916 6.46342C12.916 6.18655 12.8862 5.95783 12.8268 5.77726C12.2681 6.36712 11.5609 6.66205 10.7051 6.66205C9.84922 6.66205 9.15386 6.40925 8.61897 5.90366C8.08407 5.39806 7.81662 4.69986 7.81662 3.80905C7.81662 2.96639 8.1019 2.28023 8.67245 1.75056C9.23112 1.22089 9.94432 0.956056 10.812 0.956056C12.0007 0.956056 12.8684 1.38942 13.4152 2.25616C13.6648 2.62933 13.8609 3.08677 14.0036 3.62848C14.1462 4.18223 14.2175 4.74801 14.2175 5.32584C14.2175 6.58982 13.8966 7.74546 13.2547 8.79277C12.6128 9.84007 11.656 10.6587 10.3841 11.2485L10.0454 10.5804Z" fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="box-title">Daniyal Sppra</h3>
                                                <p class="box-desig">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <p class="box-text">"It is professional, considers everyones time, can think about the There are many variations of passages whole probls small niche, friendly.”</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-box">
                                        <div class="box-profile">
                                            <div class="box-img">
                                                <img src="assets/img/testimonial/testi_2_2.jpg" alt="Image">
                                                <div class="box-quote">
                                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.52117 10.5804C3.22247 10.2795 3.83463 9.82201 4.35764 9.20808C4.88065 8.59414 5.19564 7.96817 5.30262 7.33016C5.36205 6.99309 5.39177 6.70418 5.39177 6.46342C5.39177 6.18655 5.36205 5.95783 5.30262 5.77726C4.74395 6.36712 4.0367 6.66205 3.18087 6.66205C2.32504 6.66205 1.62968 6.40925 1.09478 5.90366C0.559885 5.39806 0.292438 4.69986 0.292438 3.80905C0.292439 2.96639 0.577715 2.28023 1.14827 1.75056C1.70694 1.22089 2.42013 0.956056 3.28785 0.956056C4.4765 0.956056 5.34422 1.38942 5.891 2.25616C6.14062 2.62933 6.33675 3.08677 6.47939 3.62848C6.62203 4.18223 6.69334 4.74801 6.69334 5.32583C6.69334 6.58982 6.37241 7.74546 5.73053 8.79277C5.08866 9.84007 4.13179 10.6587 2.85993 11.2485L2.52117 10.5804ZM10.0454 10.5804C10.7467 10.2795 11.3588 9.82201 11.8818 9.20808C12.4048 8.59414 12.7198 7.96817 12.8268 7.33016C12.8862 6.99309 12.916 6.70418 12.916 6.46342C12.916 6.18655 12.8862 5.95783 12.8268 5.77726C12.2681 6.36712 11.5609 6.66205 10.7051 6.66205C9.84922 6.66205 9.15386 6.40925 8.61897 5.90366C8.08407 5.39806 7.81662 4.69986 7.81662 3.80905C7.81662 2.96639 8.1019 2.28023 8.67245 1.75056C9.23112 1.22089 9.94432 0.956056 10.812 0.956056C12.0007 0.956056 12.8684 1.38942 13.4152 2.25616C13.6648 2.62933 13.8609 3.08677 14.0036 3.62848C14.1462 4.18223 14.2175 4.74801 14.2175 5.32584C14.2175 6.58982 13.8966 7.74546 13.2547 8.79277C12.6128 9.84007 11.656 10.6587 10.3841 11.2485L10.0454 10.5804Z" fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="box-title">Natasha Duke</h3>
                                                <p class="box-desig">Web Developer</p>
                                            </div>
                                        </div>
                                        <p class="box-text">"They are expert &, considers everyones time, can think about the There are many variations of passages whole probls small niche, operative.”</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-box">
                                        <div class="box-profile">
                                            <div class="box-img">
                                                <img src="assets/img/testimonial/testi_2_3.jpg" alt="Image">
                                                <div class="box-quote">
                                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.52117 10.5804C3.22247 10.2795 3.83463 9.82201 4.35764 9.20808C4.88065 8.59414 5.19564 7.96817 5.30262 7.33016C5.36205 6.99309 5.39177 6.70418 5.39177 6.46342C5.39177 6.18655 5.36205 5.95783 5.30262 5.77726C4.74395 6.36712 4.0367 6.66205 3.18087 6.66205C2.32504 6.66205 1.62968 6.40925 1.09478 5.90366C0.559885 5.39806 0.292438 4.69986 0.292438 3.80905C0.292439 2.96639 0.577715 2.28023 1.14827 1.75056C1.70694 1.22089 2.42013 0.956056 3.28785 0.956056C4.4765 0.956056 5.34422 1.38942 5.891 2.25616C6.14062 2.62933 6.33675 3.08677 6.47939 3.62848C6.62203 4.18223 6.69334 4.74801 6.69334 5.32583C6.69334 6.58982 6.37241 7.74546 5.73053 8.79277C5.08866 9.84007 4.13179 10.6587 2.85993 11.2485L2.52117 10.5804ZM10.0454 10.5804C10.7467 10.2795 11.3588 9.82201 11.8818 9.20808C12.4048 8.59414 12.7198 7.96817 12.8268 7.33016C12.8862 6.99309 12.916 6.70418 12.916 6.46342C12.916 6.18655 12.8862 5.95783 12.8268 5.77726C12.2681 6.36712 11.5609 6.66205 10.7051 6.66205C9.84922 6.66205 9.15386 6.40925 8.61897 5.90366C8.08407 5.39806 7.81662 4.69986 7.81662 3.80905C7.81662 2.96639 8.1019 2.28023 8.67245 1.75056C9.23112 1.22089 9.94432 0.956056 10.812 0.956056C12.0007 0.956056 12.8684 1.38942 13.4152 2.25616C13.6648 2.62933 13.8609 3.08677 14.0036 3.62848C14.1462 4.18223 14.2175 4.74801 14.2175 5.32584C14.2175 6.58982 13.8966 7.74546 13.2547 8.79277C12.6128 9.84007 11.656 10.6587 10.3841 11.2485L10.0454 10.5804Z" fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="box-title">Jack Sparrow</h3>
                                                <p class="box-desig">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <p class="box-text">"Ultimate goal is, considers everyones time, can think about the There are many variations of passages whole probls small niche, achieve.”</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-box">
                                        <div class="box-profile">
                                            <div class="box-img">
                                                <img src="assets/img/testimonial/testi_2_1.jpg" alt="Image">
                                                <div class="box-quote">
                                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.52117 10.5804C3.22247 10.2795 3.83463 9.82201 4.35764 9.20808C4.88065 8.59414 5.19564 7.96817 5.30262 7.33016C5.36205 6.99309 5.39177 6.70418 5.39177 6.46342C5.39177 6.18655 5.36205 5.95783 5.30262 5.77726C4.74395 6.36712 4.0367 6.66205 3.18087 6.66205C2.32504 6.66205 1.62968 6.40925 1.09478 5.90366C0.559885 5.39806 0.292438 4.69986 0.292438 3.80905C0.292439 2.96639 0.577715 2.28023 1.14827 1.75056C1.70694 1.22089 2.42013 0.956056 3.28785 0.956056C4.4765 0.956056 5.34422 1.38942 5.891 2.25616C6.14062 2.62933 6.33675 3.08677 6.47939 3.62848C6.62203 4.18223 6.69334 4.74801 6.69334 5.32583C6.69334 6.58982 6.37241 7.74546 5.73053 8.79277C5.08866 9.84007 4.13179 10.6587 2.85993 11.2485L2.52117 10.5804ZM10.0454 10.5804C10.7467 10.2795 11.3588 9.82201 11.8818 9.20808C12.4048 8.59414 12.7198 7.96817 12.8268 7.33016C12.8862 6.99309 12.916 6.70418 12.916 6.46342C12.916 6.18655 12.8862 5.95783 12.8268 5.77726C12.2681 6.36712 11.5609 6.66205 10.7051 6.66205C9.84922 6.66205 9.15386 6.40925 8.61897 5.90366C8.08407 5.39806 7.81662 4.69986 7.81662 3.80905C7.81662 2.96639 8.1019 2.28023 8.67245 1.75056C9.23112 1.22089 9.94432 0.956056 10.812 0.956056C12.0007 0.956056 12.8684 1.38942 13.4152 2.25616C13.6648 2.62933 13.8609 3.08677 14.0036 3.62848C14.1462 4.18223 14.2175 4.74801 14.2175 5.32584C14.2175 6.58982 13.8966 7.74546 13.2547 8.79277C12.6128 9.84007 11.656 10.6587 10.3841 11.2485L10.0454 10.5804Z" fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="box-title">Daniyal Sppra</h3>
                                                <p class="box-desig">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <p class="box-text">"It is professional, considers everyones time, can think about the There are many variations of passages whole probls small niche, friendly.”</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-box">
                                        <div class="box-profile">
                                            <div class="box-img">
                                                <img src="assets/img/testimonial/testi_2_2.jpg" alt="Image">
                                                <div class="box-quote">
                                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.52117 10.5804C3.22247 10.2795 3.83463 9.82201 4.35764 9.20808C4.88065 8.59414 5.19564 7.96817 5.30262 7.33016C5.36205 6.99309 5.39177 6.70418 5.39177 6.46342C5.39177 6.18655 5.36205 5.95783 5.30262 5.77726C4.74395 6.36712 4.0367 6.66205 3.18087 6.66205C2.32504 6.66205 1.62968 6.40925 1.09478 5.90366C0.559885 5.39806 0.292438 4.69986 0.292438 3.80905C0.292439 2.96639 0.577715 2.28023 1.14827 1.75056C1.70694 1.22089 2.42013 0.956056 3.28785 0.956056C4.4765 0.956056 5.34422 1.38942 5.891 2.25616C6.14062 2.62933 6.33675 3.08677 6.47939 3.62848C6.62203 4.18223 6.69334 4.74801 6.69334 5.32583C6.69334 6.58982 6.37241 7.74546 5.73053 8.79277C5.08866 9.84007 4.13179 10.6587 2.85993 11.2485L2.52117 10.5804ZM10.0454 10.5804C10.7467 10.2795 11.3588 9.82201 11.8818 9.20808C12.4048 8.59414 12.7198 7.96817 12.8268 7.33016C12.8862 6.99309 12.916 6.70418 12.916 6.46342C12.916 6.18655 12.8862 5.95783 12.8268 5.77726C12.2681 6.36712 11.5609 6.66205 10.7051 6.66205C9.84922 6.66205 9.15386 6.40925 8.61897 5.90366C8.08407 5.39806 7.81662 4.69986 7.81662 3.80905C7.81662 2.96639 8.1019 2.28023 8.67245 1.75056C9.23112 1.22089 9.94432 0.956056 10.812 0.956056C12.0007 0.956056 12.8684 1.38942 13.4152 2.25616C13.6648 2.62933 13.8609 3.08677 14.0036 3.62848C14.1462 4.18223 14.2175 4.74801 14.2175 5.32584C14.2175 6.58982 13.8966 7.74546 13.2547 8.79277C12.6128 9.84007 11.656 10.6587 10.3841 11.2485L10.0454 10.5804Z" fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="box-title">Natasha Duke</h3>
                                                <p class="box-desig">Web Developer</p>
                                            </div>
                                        </div>
                                        <p class="box-text">"They are expert &, considers everyones time, can think about the There are many variations of passages whole probls small niche, operative.”</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-box">
                                        <div class="box-profile">
                                            <div class="box-img">
                                                <img src="assets/img/testimonial/testi_2_3.jpg" alt="Image">
                                                <div class="box-quote">
                                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.52117 10.5804C3.22247 10.2795 3.83463 9.82201 4.35764 9.20808C4.88065 8.59414 5.19564 7.96817 5.30262 7.33016C5.36205 6.99309 5.39177 6.70418 5.39177 6.46342C5.39177 6.18655 5.36205 5.95783 5.30262 5.77726C4.74395 6.36712 4.0367 6.66205 3.18087 6.66205C2.32504 6.66205 1.62968 6.40925 1.09478 5.90366C0.559885 5.39806 0.292438 4.69986 0.292438 3.80905C0.292439 2.96639 0.577715 2.28023 1.14827 1.75056C1.70694 1.22089 2.42013 0.956056 3.28785 0.956056C4.4765 0.956056 5.34422 1.38942 5.891 2.25616C6.14062 2.62933 6.33675 3.08677 6.47939 3.62848C6.62203 4.18223 6.69334 4.74801 6.69334 5.32583C6.69334 6.58982 6.37241 7.74546 5.73053 8.79277C5.08866 9.84007 4.13179 10.6587 2.85993 11.2485L2.52117 10.5804ZM10.0454 10.5804C10.7467 10.2795 11.3588 9.82201 11.8818 9.20808C12.4048 8.59414 12.7198 7.96817 12.8268 7.33016C12.8862 6.99309 12.916 6.70418 12.916 6.46342C12.916 6.18655 12.8862 5.95783 12.8268 5.77726C12.2681 6.36712 11.5609 6.66205 10.7051 6.66205C9.84922 6.66205 9.15386 6.40925 8.61897 5.90366C8.08407 5.39806 7.81662 4.69986 7.81662 3.80905C7.81662 2.96639 8.1019 2.28023 8.67245 1.75056C9.23112 1.22089 9.94432 0.956056 10.812 0.956056C12.0007 0.956056 12.8684 1.38942 13.4152 2.25616C13.6648 2.62933 13.8609 3.08677 14.0036 3.62848C14.1462 4.18223 14.2175 4.74801 14.2175 5.32584C14.2175 6.58982 13.8966 7.74546 13.2547 8.79277C12.6128 9.84007 11.656 10.6587 10.3841 11.2485L10.0454 10.5804Z" fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="box-title">Jack Sparrow</h3>
                                                <p class="box-desig">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <p class="box-text">"Ultimate goal is, considers everyones time, can think about the There are many variations of passages whole probls small niche, achieve.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button data-slider-prev="#testiSlider2" class="slider-arrow slider-prev"><span class="icon"></span></button>
                        <button data-slider-next="#testiSlider2" class="slider-arrow slider-next"><span class="icon"></span></button>
                    </div>
                </div>
            </section>


            <!--==============================
Counter Area  
==============================-->
            <div class="space-extra" data-bg-color="#111">
                <div class="container pt-10 pb-10">
                    <div class="counter-card-wrap">
                        <div class="counter-card">
                            <div class="box-shadow">2.8k</div>
                            <h2 class="box-number"><span class="counter-number">2.8</span>k</h2>
                            <p class="box-text">Our Dally Order</p>
                        </div>
                        <div class="counter-card">
                            <div class="box-shadow">28</div>
                            <h2 class="box-number"><span class="counter-number">28</span></h2>
                            <p class="box-text">Specialist Chef</p>
                        </div>
                        <div class="counter-card">
                            <div class="box-shadow">139</div>
                            <h2 class="box-number"><span class="counter-number">139</span></h2>
                            <p class="box-text">Our Menu & Dish</p>
                        </div>
                        <div class="counter-card">
                            <div class="box-shadow">99</div>
                            <h2 class="box-number"><span class="counter-number">99</span></h2>
                            <p class="box-text">Our Members</p>
                        </div>
                        <div class="counter-card">
                            <div class="box-shadow">39</div>
                            <h2 class="box-number"><span class="counter-number">39</span></h2>
                            <p class="box-text">Won the Awards</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--==============================
Cta Area  
==============================-->
            <section class="space" data-bg-src="assets/img/bg/cta_bg_1.jpg">
                <div class="container z-index-common">
                    <div class="row justify-content-end">
                        <div class="col-xxl-6 col-xl-7 col-lg-6 col-md-8 text-center">
                            <div class="title-area mb-30">
                                <span class="sub-title2">We only bring you the best</span>
                                <h2 class="sec-title text-white">Creating Visual Masterpieces on Your Plate</h2>
                            </div>
                            <div class="text-ani">
                                <div class="btn-group justify-content-center">
                                    <a href="shop.php" class="th-btn style3">Get A Offer</a>
                                    <a href="contact.php" class="th-btn style-border border-three">Book A Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--==============================
Blog Area  
==============================-->
            <section class="space" id="blog-sec">
                <div class="container">
                    <div class="title-area text-center">
                        <span class="sub-title2">New & Blog</span>
                        <h2 class="sec-title title-ani">Our Latest News & Blog</h2>
                    </div>
                    <div class="slider-area">
                        <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="blog-img">
                                            <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <a href="blog.php">April 15, 2024</a>
                                                <a href="blog.php">RECHIPES</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.php">Classy Sauces To Make Meat Melt In Your Mouth</a></h3>
                                            <a href="blog-details.php" class="th-btn btn-sm style-border">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="blog-img">
                                            <img src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <a href="blog.php">April 16, 2024</a>
                                                <a href="blog.php">RECHIPES</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.php">Stories Behind Our Most Loved Recipes Foodies</a></h3>
                                            <a href="blog-details.php" class="th-btn btn-sm style-border">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="blog-img">
                                            <img src="assets/img/blog/blog_1_3.jpg" alt="blog image">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <a href="blog.php">April 17, 2024</a>
                                                <a href="blog.php">RECHIPES</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.php">The Fresh Ingredients That Define Our Dishes</a></h3>
                                            <a href="blog-details.php" class="th-btn btn-sm style-border">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="blog-img">
                                            <img src="assets/img/blog/blog_1_4.jpg" alt="blog image">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <a href="blog.php">April 18, 2024</a>
                                                <a href="blog.php">RECHIPES</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.php">Only Pure Ingredients Can Increase Food Taste</a></h3>
                                            <a href="blog-details.php" class="th-btn btn-sm style-border">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="blog-img">
                                            <img src="assets/img/blog/blog_1_5.jpg" alt="blog image">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <a href="blog.php">April 19, 2024</a>
                                                <a href="blog.php">RECHIPES</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.php">What Types of Massala Is The Best in Cooking</a></h3>
                                            <a href="blog-details.php" class="th-btn btn-sm style-border">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="blog-img">
                                            <img src="assets/img/blog/blog_1_6.jpg" alt="blog image">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <a href="blog.php">April 21, 2024</a>
                                                <a href="blog.php">RECHIPES</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.php">Good Cook Always Use These Types of Tricks</a></h3>
                                            <a href="blog-details.php" class="th-btn btn-sm style-border">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><span class="icon"></span></button>
                        <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><span class="icon"></span></button>
                    </div>
                </div>
            </section>
            <!--==============================
Gallery Area  
==============================-->
            <div class="space-bottom">
                <div class="container th-container">
                    <div class="swiper th-slider" id="gallerySlider2" data-slider-options='{"centeredSlides":true,"centeredSlidesBounds":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"7"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_1.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_1.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_2.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_2.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_3.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_3.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_4.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_4.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_5.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_5.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_6.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_6.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_7.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_7.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_1.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_1.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_2.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_2.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_3.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_3.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_4.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_4.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_5.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_5.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_6.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_6.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-card style2">
                                    <div class="box-img">
                                        <img src="assets/img/gallery/gallery_2_7.jpg" alt="gallery image">
                                        <a href="assets/img/gallery/gallery_2_7.jpg" class="box-btn popup-image"><i class="fat fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="gallery-border2">
                        <span></span><span></span><span></span><span></span><span></span><span></span>
                    </div>
                </div>
            </div>
            <!--==============================
	Footer Area
==============================-->
            <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer_bg_1.jpg">
                <div class="bg-title text-center">
                    <div class="footer-logo1">
                        <a href="index.php"><img src="assets/img/logo-footer.svg" alt="Restar"></a>
                    </div>
                </div>
                <div class="widget-area">
                    <div class="container">
                        <div class="row justify-content-between">
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
                                    <h3 class="widget_title">Newsletter</h3>
                                    <div class="newsletter-widget">
                                        <p class="footer-text">Subscribe to our newsletter and receive 15% discount from your order.</p>
                                        <form action="#" class="newsletter-form has-icon">
                                            <div class="form-group">
                                                <input class="form-control" type="email" placeholder="Enter email address" required="">
                                            </div>
                                            <button type="submit" class="icon-btn"><i class="fa-solid fa-paper-plane"></i></button>
                                        </form>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
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
   <?php include "include/script.php" ?>
</body>

</html>