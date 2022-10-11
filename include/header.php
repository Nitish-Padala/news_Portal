<!-- <?php //include('../controlpanel/config/connection.php'); 
      ?> -->
<?php $conn = new mysqli("localhost", "root", "", "timesfortime");
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radiustheme.com/demo/html/neeon/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2022 03:51:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
   <!-- Meta Data -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Times For Time </title>

   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">

   <!-- Dependency Stylesheet -->
   <link rel="stylesheet" type="text/css" href="dependencies/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="dependencies/fontawesome/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="dependencies/animate/animate.min.css">
   <link rel="stylesheet" type="text/css" href="dependencies/swiper/css/swiper.min.css">
   <link rel="stylesheet" type="text/css" href="dependencies/magnific-popup/css/magnific-popup.css">

   <!-- Site Stylesheet -->
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

   <!-- Start wrapper -->
   <div id="wrapper" class="wrapper">

      <!-- start perloader -->
      <div class="pre-loader" id="preloader">
         <div class="loader"></div>
      </div>
      <!-- end perloader -->

      <!-- Start main-content -->
      <div id="main_content" class="footer-fixed">

         <!-- Header -->
         <header class="rt-header sticky-on">

            <!-- sticky-placeholder -->
            <div id="sticky-placeholder"></div>

            <!-- start  topbar -->
            <div class="topbar topbar-style-1" id="topbar-wrap">
               <div class="container">
                  <div class="row align-items-center">

                     <div class="col-lg-7">
                        <div class="rt-trending rt-trending-style-1">
                           <p class="trending-title">
                              <i class="fas fa-bolt icon"></i>
                              Trending
                           </p>

                           <div class="rt-treding-slider1 swiper-container">

                              <div class="swiper-wrapper">
                                 <?php $sql = mysqli_query($conn, "SELECT * FROM `forms` ORDER BY trending DESC LIMIT 4");

                                 while ($row = mysqli_fetch_assoc($sql)) { ?>
                                    <?php
                                    $title1 = $row['title'];
                                    $trending = $row['trending'];

                                    if ($trending == 1) {
                                    ?>
                                       <div class="swiper-slide">

                                          <div class="item">
                                             <p class="trending-slide-title">
                                                <?php echo $row['title'] ?>

                                             </p>
                                          </div>


                                       </div>
                                 <?php
                                    }
                                 }
                                 ?>


                              </div>

                           </div>

                        </div>
                     </div>
                     <!-- end col -->

                     <div class="col-lg-5">
                        <div class="rt-topbar-right">
                           <div class="meta-wrap">
                              <span class="rt-meta">
                                 <i class="far fa-calendar-alt icon"></i>
                                 <span class="currentDate">
                                    <?php echo date('Y') ?>
                                 </span>
                              </span>
                           </div>
                           <div class="social-wrap d-none d-xl-block">
                              <ul class="rt-top-social">
                                 <li class="follow">Follow Us:</li>
                                 <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                       <i class="fab fa-facebook-f"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://twitter.com/" target="_blank">
                                       <i class="fab fa-twitter"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                       <i class="fab fa-linkedin-in"></i>
                                    </a>
                                 </li>
                                 <li><a href="https://www.pinterest.com/" target="_blank">
                                       <i class="fab fa-pinterest-p"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.whatsapp.com/" target="_blank">
                                       <i class="fab fa-skype"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>

                        </div>
                     </div>
                     <!-- end col -->

                  </div>
                  <!-- end row -->
               </div>
               <!-- end container -->
            </div>
            <!-- end topbar -->

            <!-- Header Main -->
            <div class="header-main header-main-style-1 navbar-wrap" id="navbar-wrap">
               <div class="container">
                  <div class="row">
                     <div class="d-flex align-items-center justify-content-between">

                        <!-- start logo here -->
                        <div class="site-branding">
                           <a class="dark-logo" href="index-2.html">
                              <img width="162" height="52" src="media/logo/logo-dark.svg" alt="neeon">
                           </a>
                           <a class="light-logo" href="index-2.html">
                              <img width="162" height="52" src="media/logo/logo-light.svg" alt="neeon">
                           </a>
                        </div>
                        <!-- end logo here -->

                        <!-- start main menu -->
                        <div class="main-menu">
                           <nav class="main-menu__nav">
                              <ul>
                                 <li class="main-menu__nav_sub list active">
                                    <a class="animation" href="javascript:void(0)">Home</a>
                                    <ul class="main-menu__dropdown">
                                       <li><a href="index-2.html">Home 01 - Main</a></li>
                                       <li><a href="index2.html">Home 02 - Technology</a></li>
                                       <li><a href="index3.html">Home 03 - Gaming</a></li>
                                       <li><a href="index4.html">Home 04 - Illustration</a></li>
                                       <li><a href="index5.html">Home 05 - Newspaper</a></li>
                                       <li><a href="index6.html">Home 06 - Magazine</a></li>
                                       <li><a href="index7.html">Home 07 - Sports</a></li>
                                       <li><a href="index8.html">Home 08 - Travels</a></li>
                                       <li><a href="index9.html">Home 09 - Fitness</a></li>
                                    </ul>
                                 </li>
                                 <li class="main-menu__nav_sub list">
                                    <a class="animation" href="javascript:void(0)">Features</a>
                                    <ul class="main-menu__dropdown">
                                       <li class="main-menu__nav_sub">
                                          <a href="javascript:void(0)">
                                             Post Layout
                                          </a> 
                                          <ul>
                                             <li><a href="single-post1.html">Single Post 01</a></li>
                                             <li><a href="single-post2.html">Single Post 02</a></li>
                                             <li><a href="single-post3.html">Single Post 03</a></li>
                                          </ul>
                                       </li>
                                       <li><a href="author.html">Author Deatils</a></li>
                                    </ul>
                                 </li>
                                 <li class="main-menu__nav_sub list">
                                    <a class="animation" href="javascript:void(0)">Categories </a>
                                    <ul class="main-menu__dropdown">
                                       <li><a href="life-style.html">Life Style</a></li>
                                       <li><a href="technology.html">Technology</a></li>
                                       <li><a href="gaming.html">Gaming</a></li>
                                       <li><a href="graphics.html">Graphics</a></li>
                                       <li><a href="politics.html">Politics</a></li>
                                    </ul>
                                 </li>
                                 <li class="main-menu__nav_sub list">
                                    <a class="animation" href="javascript:void(0)">Pages</a>
                                    <ul class="main-menu__dropdown">
                                       <li><a href="about.html">About Us</a></li>
                                       <li><a href="contact.html">Contact Us</a></li>
                                       <li><a href="404.html">404</a></li>

                                    </ul>
                                 </li>
                                 <li class="main-menu__nav_sub list">
                                    <a class="animation" href="javascript:void(0)">Shop</a>
                                    <ul class="main-menu__dropdown">
                                       <li><a href="shop.html">Shop</a></li>
                                       <li><a href="single-shop.html">Shop Deatils</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <!-- end main menu -->

                        <!-- start header actions -->
                        <ul class="header-action-items">
                           <li class="item">
                              <a href="#template-search"><i class="fas fa-search"></i></a>
                           </li>
                           <li class="item cart-icon">
                              <a href="javascript:void(0)" class="cart-menu-btn menu-open-btn">
                                 <i class="fas fa-shopping-cart"></i>
                                 <span class="item-count">0</span>
                              </a>
                           </li>
                           <li class="item humburger offcanvas-menu-btn menu-status-open">
                              <span></span>
                           </li>
                        </ul>
                        <!-- end header actions -->

                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- end container -->
            </div>
            <!-- End Header Main -->

         </header>
         <!-- end header -->

         <!-- start rt-mobile-header -->
         <div class="rt-mobile-header mobile-sticky-on">

            <div id="mobile-sticky-placeholder"></div>
            <!-- end mobile-sticky-placeholder -->

            <div class="mobile-top-bar" id="mobile-top-bar">
               <ul class="mobile-top-list">
                  <li>
                     <span class="rt-meta">
                        <i class="far fa-calendar-alt icon"></i>
                        <span class="currentDate">DECEMBER 9, 2022</span>
                     </span>
                  </li>
                  <li>
                     <span class="rt-meta">
                        <i class="fas fa-map-marker-alt icon"></i>
                        Chicago 12, Melborne City, USA
                     </span>
                  </li>
               </ul>
            </div>
            <!-- end mobile-top-bar -->

            <div class="mobile-menu-bar-wrap" id="mobile-menu-bar-wrap">
               <div class="mobile-menu-bar">
                  <div class="logo">
                     <a href="index-2.html">
                        <img src="media/logo/logo-dark.svg" alt="neeon" width="162" height="52">
                     </a>
                  </div>
                  <span class="sidebarBtn">
                     <span class="bar"></span>
                     <span class="bar"></span>
                     <span class="bar"></span>
                     <span class="bar"></span>
                  </span>
               </div>
               <div class="rt-slide-nav">
                  <div class="offscreen-navigation">
                     <nav class="menu-main-primary-container">
                        <ul class="menu">
                           <li class="list menu-item-has-children">
                              <a class="animation" href="javascript:void(0)">Home</a>
                              <ul class="main-menu__dropdown sub-menu">
                                 <li><a href="index-2.html">Home 01 - Main</a></li>
                                 <li><a href="index2.html">Home 02 - Technology</a></li>
                                 <li><a href="index3.html">Home 03 - Gaming</a></li>
                                 <li><a href="index4.html">Home 04 - Illustration</a></li>
                                 <li><a href="index5.html">Home 05 - Newspaper</a></li>
                                 <li><a href="index6.html">Home 06 - Magazine</a></li>
                                 <li><a href="index7.html">Home 07 - Sports</a></li>
                                 <li><a href="index8.html">Home 08 - Travels</a></li>
                                 <li><a href="index9.html">Home 09 - Fitness</a></li>
                              </ul>
                           </li>
                           <li class="list menu-item-has-children">
                              <a class="animation" href="javascript:void(0)">Features</a>
                              <ul class="main-menu__dropdown sub-menu">
                                 <li class="list menu-item-has-children">
                                    <a href="javascript:void(0)">
                                       Post Layout
                                    </a>
                                    <ul class="main-menu__dropdown sub-menu">
                                       <li><a href="single-post1.html">Single Post 01</a></li>
                                       <li><a href="single-post2.html">Single Post 02</a></li>
                                       <li><a href="single-post3.html">Single Post 03</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="author.html">Author Deatils</a></li>
                              </ul>

                           </li>
                           <li class="list menu-item-has-children">
                              <a class="animation" href="javascript:void(0)">Categories</a>
                              <ul class="main-menu__dropdown sub-menu">
                                 <li><a href="life-style.html">Life Style</a></li>
                                 <li><a href="technology.html">Technology</a></li>
                                 <li><a href="gaming.html">Gaming</a></li>
                                 <li><a href="graphics.html">Graphics</a></li>
                                 <li><a href="politics.html">Politics</a></li>
                              </ul>
                           </li>
                           <li class="list menu-item-has-children">
                              <a class="animation" href="javascript:void(0)">Pages</a>
                              <ul class="main-menu__dropdown sub-menu">
                                 <li><a href="about.html">About Us</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                                 <li><a href="404.html">404</a></li>

                              </ul>
                           </li>
                           <li class="list menu-item-has-children">
                              <a class="animation" href="javascript:void(0)">Shop</a>
                              <ul class="main-menu__dropdown sub-menu">
                                 <li><a href="shop.html">Shop</a></li>
                                 <li><a href="single-shop.html">Shop Deatils</a></li>
                              </ul>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>



         </div>