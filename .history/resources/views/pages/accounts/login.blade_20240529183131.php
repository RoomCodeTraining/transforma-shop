<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/greenfarm/greenfarm/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2024 11:56:18 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Greenfarm - Organic Food eCommerce Bootstrap 5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- CSS
 ============================================ -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Elegent CSS -->
    <link href="assets/css/elegent.min.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Helper CSS -->
    <link href="assets/css/helper.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

    <!--=============================================
 =            Header         =
 =============================================-->

    <header>
        <!--=======  header top  =======-->

        <div class="header-top pt-10 pb-10 pt-lg-10 pb-lg-10 pt-md-10 pb-md-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center text-sm-start">
                        <!-- currncy language dropdown -->
                        <div class="lang-currency-dropdown">
                            <ul>
                                <li> <a href="#">English <i class="fa fa-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Japanease</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dollar <i class="fa fa-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="#">Euro</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- end of currncy language dropdown -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  text-center text-sm-end">
                        <!-- header top menu -->
                        <div class="header-top-menu">
                            <ul>
                                <li><a href="my-account.html">My account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                        <!-- end of header top menu -->
                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of header top  =======-->

        <!--=======  header bottom  =======-->

        <div class="header-bottom header-bottom-one header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 text-lg-start text-md-center text-sm-center">
                        <!-- logo -->
                        <div class="logo mt-15 mb-15">
                            <a href="index.html">
                                <img width="111" height="111" src="assets/images/logo.webp" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <!-- end of logo -->
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div
                            class="menubar-top d-flex justify-content-between align-items-center flex-sm-wrap flex-md-wrap flex-lg-nowrap mt-sm-15">
                            <!-- header phone number -->
                            <div class="header-contact d-flex">
                                <div class="phone-icon">
                                    <img width="40" height="35" src="assets/images/icon-phone.webp"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="phone-number">
                                    Phone: <span class="number">1-888-123-456-89</span>
                                </div>
                            </div>
                            <!-- end of header phone number -->
                            <!-- search bar -->
                            <div class="header-advance-search">
                                <form action="#">
                                    <input type="text" placeholder="Search your product">
                                    <button><span class="icon_search"></span></button>
                                </form>
                            </div>
                            <!-- end of search bar -->
                            <!-- shopping cart -->
                            <div class="shopping-cart" id="shopping-cart">
                                <a href="cart.html">
                                    <div class="cart-icon d-inline-block">
                                        <span class="icon_bag_alt"></span>
                                    </div>
                                    <div class="cart-info d-inline-block">
                                        <p>Shopping Cart
                                            <span>
                                                0 items - $0.00
                                            </span>
                                        </p>
                                    </div>
                                </a>
                                <!-- end of shopping cart -->

                                <!-- cart floating box -->
                                <div class="cart-floating-box" id="cart-floating-box">
                                    <div class="cart-items">
                                        <div class="cart-float-single-item d-flex">
                                            <span class="remove-item"><a href="#"><i
                                                        class="fa fa-times"></i></a></span>
                                            <div class="cart-float-single-item-image">
                                                <a href="single-product.html"><img width="350" height="350"
                                                        src="assets/images/products/product01.webp" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart-float-single-item-desc">
                                                <p class="product-title"> <a href="single-product.html">Duis pulvinar
                                                        obortis eleifend </a></p>
                                                <p class="price"><span class="count">1x</span> $20.50</p>
                                            </div>
                                        </div>
                                        <div class="cart-float-single-item d-flex">
                                            <span class="remove-item"><a href="#"><i
                                                        class="fa fa-times"></i></a></span>
                                            <div class="cart-float-single-item-image">
                                                <a href="single-product.html"><img width="350" height="350"
                                                        src="assets/images/products/product02.webp" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart-float-single-item-desc">
                                                <p class="product-title"> <a href="single-product.html">Fusce
                                                        ultricies dolor vitae</a></p>
                                                <p class="price"><span class="count">1x</span> $20.50</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-calculation">
                                        <div class="calculation-details">
                                            <p class="total">Subtotal <span>$22</span></p>
                                        </div>
                                        <div class="floating-cart-btn text-center">
                                            <a href="checkout.html">Checkout</a>
                                            <a href="cart.html">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of cart floating box -->
                            </div>
                        </div>

                        <!-- navigation section -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="active menu-item-has-children"><a href="#">HOME</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home Shop 1</a></li>
                                            <li><a href="index-2.html">Home Shop 2</a></li>
                                            <li><a href="index-3.html">Home Shop 3</a></li>
                                            <li><a href="index-4.html">Home Shop 4</a></li>
                                            <li><a href="index-5.html">Home Shop 5</a></li>
                                            <li><a href="index-6.html">Home Shop 6</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop-left-sidebar.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><a href="shop-4-column.html">shop
                                                    grid</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop-3-column.html">shop 3 column</a></li>
                                                    <li><a href="shop-4-column.html">shop 4 column</a></li>
                                                    <li><a href="shop-left-sidebar.html">shop left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="shop-list.html">shop List</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop-list.html">shop List</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">shop List Left
                                                            Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">shop List Right
                                                            Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="single-product.html">Single
                                                    Product</a>
                                                <ul class="sub-menu">
                                                    <li><a href="single-product.html">Single Product</a></li>
                                                    <li><a href="single-product-variable.html">Single Product
                                                            variable</a></li>
                                                    <li><a href="single-product-affiliate.html">Single Product
                                                            affiliate</a></li>
                                                    <li><a href="single-product-group.html">Single Product group</a>
                                                    </li>
                                                    <li><a href="single-product-tabstyle-2.html">Tab Style 2</a></li>
                                                    <li><a href="single-product-tabstyle-3.html">Tab Style 3</a></li>
                                                    <li><a href="single-product-gallery-left.html">Gallery Left</a>
                                                    </li>
                                                    <li><a href="single-product-gallery-right.html">Gallery Right</a>
                                                    </li>
                                                    <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                    <li><a href="single-product-sticky-right.html">Sticky Right</a>
                                                    </li>
                                                    <li><a href="single-product-slider-box.html">Slider Box</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">PAGES</a>
                                        <ul class="mega-menu three-column">
                                            <li><a href="#">Column One</a>
                                                <ul>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#">Column Two</a>
                                                <ul>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="login-register.html">Login Register</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Column Three</a>
                                                <ul>
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">BLOG</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-3-column.html">Blog 3 column</a></li>
                                            <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                            <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                            <li><a href="blog-post-left-sidebar.html">Blog Post Left Sidebar</a></li>
                                            <li><a href="blog-post-right-sidebar.html">Blog Post Right Sidebar</a></li>
                                            <li><a href="blog-post-image-format.html">Blog Post Image Format</a></li>
                                            <li><a href="blog-post-image-gallery.html">Blog Post Image Gallery
                                                    Format</a></li>
                                            <li><a href="blog-post-audio-format.html">Blog Post Audio Format</a></li>
                                            <li><a href="blog-post-video-format.html">Blog Post Video Format</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end of navigation section -->
                    </div>
                    <div class="col-12">
                        <!-- Mobile Menu -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of header bottom  =======-->
    </header>

    <!--=====  End of Header  ======-->

    <!--=============================================
    =            breadcrumb area         =
    =============================================-->

    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">Login - Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of breadcrumb area  ======-->

    <!--=============================================
 =            Login register page content         =
 =============================================-->

    <div class="page-content mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xs-6 col-lg-6 mb-30">
                    <!-- Login Form -->
                    <form action="#">

                        <div class="login-form">
                            <h4 class="login-title">Login</h4>

                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" placeholder="Email Address">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-8">

                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>

                                </div>

                                <div class="col-md-4 mt-10 mb-20 text-start text-md-end">
                                    <a href="#"> Forgotten pasward?</a>
                                </div>

                                <div class="col-md-12">
                                    <button class="register-button mt-0">Login</button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!--=====  End of Login register page content  ======-->


    <!--=============================================
 =            Footer         =
 =============================================-->

    <footer>

        <!--=======  social contact section  =======-->

        <div class="social-contact-section pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 order-2 order-md-2 order-sm-2 order-lg-1">
                        <!--=======  social media links  =======-->

                        <div class="social-media-section">
                            <h2>Follow us</h2>
                            <div class="social-links">
                                <a class="facebook" href="http://www.facebook.com/" data-tooltip="Facebook"><i
                                        class="fa fa-facebook"></i></a>
                                <a class="twitter" href="http://www.twitter.com/" data-tooltip="Twitter"><i
                                        class="fa fa-twitter"></i></a>
                                <a class="instagram" href="http://www.instagram.com/" data-tooltip="Instagram"><i
                                        class="fa fa-instagram"></i></a>
                                <a class="linkedin" href="http://www.linkedin.com/" data-tooltip="Linkedin"><i
                                        class="fa fa-linkedin"></i></a>
                                <a class="rss" href="http://www.rss.com/" data-tooltip="RSS"><i
                                        class="fa fa-rss"></i></a>
                            </div>
                        </div>

                        <!--=======  End of social media links  =======-->

                    </div>
                    <div class="col-lg-8 col-md-12 order-1 order-md-1 order-sm-1 order-lg-2  mb-sm-50 mb-xs-50">
                        <!--=======  contact summery  =======-->

                        <div class="contact-summery">
                            <h2>Contact us</h2>

                            <!--=======  contact segments  =======-->

                            <div class="contact-segments d-flex justify-content-between flex-wrap flex-lg-nowrap">
                                <!--=======  single contact  =======-->

                                <div class="single-contact d-flex mb-xs-20">
                                    <div class="icon">
                                        <span class="icon_pin_alt"></span>
                                    </div>
                                    <div class="contact-info">
                                        <p>Address: <span>123 New Design Str, Melbourne, Australia</span></p>
                                    </div>
                                </div>

                                <!--=======  End of single contact  =======-->
                                <!--=======  single contact  =======-->

                                <div class="single-contact d-flex mb-xs-20">
                                    <div class="icon">
                                        <span class="icon_mobile"></span>
                                    </div>
                                    <div class="contact-info">
                                        <p>Phone: <span>1-888-123-456-89</span></p>
                                    </div>
                                </div>

                                <!--=======  End of single contact  =======-->
                                <!--=======  single contact  =======-->

                                <div class="single-contact d-flex">
                                    <div class="icon">
                                        <span class="icon_mail_alt"></span>
                                    </div>
                                    <div class="contact-info">
                                        <p>Email: <span>support@hastech.company</span></p>
                                    </div>
                                </div>

                                <!--=======  End of single contact  =======-->
                            </div>

                            <!--=======  End of contact segments  =======-->



                        </div>

                        <!--=======  End of contact summery  =======-->

                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of social contact section  =======-->



        <!--=======  copyright section  =======-->

        <div class="copyright-section pt-35 pb-35">
            <div class="container">
                <div class="row align-items-md-center align-items-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 text-center text-md-start">
                        <!--=======  copyright text	  =======-->

                        <div class="copyright-segment">
                            <p>
                                <a href="#">Privacy Policy</a>
                                <span class="separator">|</span>
                                <a href="#">Term and conditions</a>
                            </p>
                            <p class="copyright-text">&copy; 2022 <a href="https://htmldemo.net/">Greenfarm</a>. All
                                Rights Reserved</p>
                        </div>

                        <!--=======  End of copyright text	  =======-->

                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                        <!--=======  payment info  =======-->

                        <div class="payment-info text-center text-md-end">
                            <p>Allow payment base on <img width="316" height="44"
                                    src="assets/images/payment-icon.webp" class="img-fluid" alt=""></p>
                        </div>

                        <!--=======  End of payment info  =======-->

                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of copyright section  =======-->
    </footer>

    <!--=====  End of Footer  ======-->


    <!-- scroll to top  -->
    <a href="#" class="scroll-top"></a>
    <!-- end of scroll to top -->

    <!-- JS
 ============================================ -->
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>




</html>
