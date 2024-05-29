<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/elegent.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <header>
        <div class="header-top pt-10 pb-10 pt-lg-10 pb-lg-10 pt-md-10 pb-md-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center text-sm-start text-lg-end">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  text-center text-sm-end">
                        <!-- header top menu -->
                        <div class="header-top-menu">
                            <ul>
                                <li><a href="{{ route('connexion') }}">Connexion </a></li>
                                <li><a href="{{ route('form.inscription') }}">Inscription</a></li>
                            </ul>
                        </div>
                        <!-- end of header top menu -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-other header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 text-lg-start text-md-center text-sm-center">
                        <!-- logo -->
                        <div class="logo">
                            <a href="/">
                                <img width="60" height="60" src="{{ asset('assets/images/logo.webp') }}"
                                    class="img-fluid mb-4" style="text-items: center" alt="">
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
                                    <img width="40" height="35"
                                        src="{{ asset('assets/images/icon-phone.webp') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="phone-number">
                                    Contact: <span class="number">1-888-123-456-89</span>
                                </div>
                            </div>
                            <div class="header-advance-search">
                                <form action="#">
                                    <input type="text" placeholder="Search your product">
                                    <button><span class="icon_search"></span></button>
                                </form>
                            </div>
                            <div class="shopping-cart" id="shopping-cart">
                                <a href="{{ route('shopping') }}">
                                    <div class="cart-icon d-inline-block">
                                        <span class="icon_bag_alt"></span>
                                    </div>
                                    <div class="cart-info d-inline-block">
                                        <p>Mon panier
                                            <span>
                                                0 items - 0.00 XOF
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
                                                        src="{{ asset('assets/images/products/product01.webp') }}"
                                                        class="img-fluid" alt=""></a>
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
                                                        src="{{ asset('assets/images/products/product02.webp') }}"
                                                        class="img-fluid" alt=""></a>
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

                        <div class="main-menu main-menu-other-homepage">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{ route('home') }}">Acceuil</a>
                                    </li>
                                    <li><a href="{{ route('products.index') }}">Nos produits</a></li>
                                    <li><a href="{{ route('articles.index') }}">Blog</a></li>
                                    <li><a href="{{ route('contacts.index') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
            <div class="home-other-navigation-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="{{ route('home') }}">Acceuil</a>
                                        </li>
                                        <li><a href="{{ route('products.index') }}">Nos produits</a></li>
                                        <li><a href="{{ route('articles.index') }}">Blog</a></li>
                                        <li><a href="{{ route('contacts.index') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end of navigation section -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
