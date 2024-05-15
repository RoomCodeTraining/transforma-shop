@extends('layouts.main')
@section('content')
    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i> Accueil</a></li>
                            <li><a href="#">{{ $product->category->name }}</a></li>
                            <li class="active">{{ $product->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="single-product-content ">
        <div class="container">
            <!--=======  single product content container  =======-->
            <div class="single-product-content-container mb-35">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div
                            class="product-image-slider d-flex flex-custom-xs-wrap flex-sm-nowrap align-items-center mb-sm-35">
                            <div class="product-small-image-list">
                                <div class="nav small-image-slider-single-product" role="tablist">
                                    <div class="single-small-image img-full">
                                        <a data-bs-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img
                                                width="600" height="600" src="{{ asset('assets/images/big-product-image/product04.webp') }}" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-bs-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img
                                                width="600" height="600" src="{{ asset('assets/images/big-product-image/product05.webp') }}" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-bs-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img
                                                width="600" height="600" src="{{ asset('assets/images/big-product-image/product06.webp') }}" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-bs-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img
                                                width="600" height="600" src="{{ asset('assets/images/big-product-image/product07.webp') }}" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!--Modal Tab Menu End-->

                            <!--Modal Tab Content Start-->
                            <div class="tab-content product-large-image-list">
                                <div class="tab-pane fade show active" id="single-slide1" role="tabpanel"
                                    aria-labelledby="single-slide-tab-1">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img easyzoom img-full">
                                        <img width="600" height="600" src="{{ asset('assets/images/big-product-image/product04.webp') }}" class="img-fluid"
                                            alt="">
                                        <a href="{{ asset('assets/images/big-product-image/product04.webp') }}"
                                            class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                                <div class="tab-pane fade" id="single-slide2" role="tabpanel"
                                    aria-labelledby="single-slide-tab-2">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img easyzoom img-full">
                                        <img width="600" height="600" src="{{ asset('assets/images/big-product-image/product05.webp') }}" class="img-fluid"
                                            alt="">
                                        <a href="{{ asset('assets/images/big-product-image/product05.webp') }}"
                                            class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                                <div class="tab-pane fade" id="single-slide3" role="tabpanel"
                                    aria-labelledby="single-slide-tab-3">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img easyzoom img-full">
                                        <img width="600" height="600" src="{{ asset('assets/images/big-product-image/product06.webp') }}" class="img-fluid"
                                            alt="">
                                        <a href="{{ asset('assets/images/big-product-image/product06.webp') }}"
                                            class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                                <div class="tab-pane fade" id="single-slide4" role="tabpanel"
                                    aria-labelledby="single-slide-tab-4">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img easyzoom img-full">
                                        <img width="600" height="600" src="{{ asset('assets/images/big-product-image/product07.webp') }}" class="img-fluid"
                                            alt="">
                                        <a href="assets/images/big-product-image/product07.webp"
                                            class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                            </div>
                            <!--Modal Content End-->

                        </div>
                        <!-- end of product image gallery -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <!-- product quick view description -->
                        <div class="product-feature-details">
                            <h2 class="product-title mb-15">{{ $product->name }}</h2>

                            <p class="product-rating">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <a href="#">(1 avis de client)</a>
                            </p>
                            <h2 class="product-price mb-15">
                                <span class="discounted-price">{{ $product->price }} FCFA</span>
                                {{-- <span class="main-price">{{ $product->price }} FCFA</span> --}}
                                {{-- <span class="discounted-price"> $10.00</span> --}}
                            </h2>
                            <p class="product-description mb-20">{!! $product->description !!}</p>
                            <div class="cart-buttons mb-20">
                                <div class="pro-qty mr-20 mb-xs-20">
                                    <input type="text" value="1">
                                </div>
                                <div class="add-to-cart-btn">
                                    <a href="#"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                </div>
                            </div>
                            <div class="single-product-action-btn mb-20">
                                <a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span>Ajouter à la liste de souhaits</a>
                                <a href="#" data-tooltip="Add to compare"> <span class="arrow_left-right_alt"></span>
                                    Ajouter à la comparaison</a>
                            </div>
                            <div class="single-product-category mb-20">
                                <h3>Categorie: <span><a href="shop-left-sidebar.html">{{ $product->category->name }}</a></span></h3>
                            </div>
                            <div class="social-share-buttons">
                                <h3>share this product</h3>
                                <ul>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
