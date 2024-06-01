@extends('layouts.main')
@section('content')
    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="/"><i class="fa fa-home"></i> Accueil</a></li>
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
                                    @foreach ($product->images as $key => $image)
                                        <div class="single-small-image img-full">
                                            <a data-bs-toggle="tab" id="{{ 'single-slide-tab-' . $key }}"
                                                href="{{ '#single-slide' . $key }}"><img width="600" height="600"
                                                    src="{{ $image }}" class="img-fluid" alt=""></a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-content product-large-image-list">
                                @foreach ($product->images as $key => $image)
                                    <div class="tab-pane fade show {{ $image === $product->image ? 'active' : '' }}"
                                        id="{{ 'single-slide' . $key }}" role="tabpanel"
                                        aria-labelledby="{{ 'single-slide-tab-' . $key }}">
                                        <div class="single-product-img easyzoom img-full">
                                            <img width="600" height="600" src="{{ $image }}" class="img-fluid"
                                                alt="">
                                            <a href="{{ $image }}" class="big-image-popup"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                @endforeach
                            </div>
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
                                <form action="{{ route('cart.store', $product->id) }}" method="post">
                                    @csrf
                                    <div class="pro-qty mr-20 mb-xs-20">
                                        <input type="number" name="quantity" value="1" min="1">
                                    </div>
                                    <div class="add-to-cart-btn">
                                        <button type="submit" class="btn btn-warning" title="Add to cart">
                                            <span class="icon_cart_alt"></span>
                                            Ajouter au panier
                                        </button>

                                    </div>
                                </form>

                            </div>
                            {{--  <div class="single-product-action-btn mb-20">
                                <a href="#" data-tooltip="Add to wishlist"> <span
                                        class="icon_heart_alt"></span>Ajouter à la liste de souhaits</a>
                                <a href="#" data-tooltip="Add to compare"> <span class="arrow_left-right_alt"></span>
                                    Ajouter à la comparaison</a>
                            </div>  --}}
                            <div class="single-product-category mb-20">
                                <h3>Categorie: <span><a
                                            href="shop-left-sidebar.html">{{ $product->category->name }}</a></span></h3>
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
