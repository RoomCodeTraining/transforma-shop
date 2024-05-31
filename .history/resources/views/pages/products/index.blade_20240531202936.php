@extends('layouts.main')
@section('content')
    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i> Accueil</a></li>
                            <li><a href="#">Produits</a></li>
                            <li><a href="#">Liste de nos produits</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-page-container mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="sidebar-area">
                        <div class="sidebar mb-35">
                            <h3 class="sidebar-title">Categories de produits</h3>
                            <ul class="product-categories">
                                <li><a class="active" href="shop-left-sidebar.html">Toutes</a></li>
                                <li><a href="shop-left-sidebar.html">Alimentaire</a></li>
                            </ul>
                        </div>
                        <div class="sidebar mb-35">
                            <h3 class="sidebar-title">Filtrer par</h3>
                            <ul class="product-categories">
                                <li><a class="active" href="shop-left-sidebar.html">Gold</a></li>
                                <li><a href="shop-left-sidebar.html">Green</a></li>
                            </ul>
                        </div>
                        <div class="sidebar mb-35">
                            <h3 class="sidebar-title">Filtrer par prix</h3>
                            <div class="sidebar-price">
                                <div id="price-range"></div>
                                <input type="text" id="price-amount" readonly>
                            </div>
                        </div>
                        <div class="sidebar mb-35">
                            <h3 class="sidebar-title">Mieux notés</h3>
                            <div class="top-rated-product-container">
                                <div class="single-top-rated-product d-flex align-content-center">
                                    <div class="image">
                                        <a href="single-product.html">
                                            <img width="350" height="350" src="assets/images/products/product01.webp"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><a href="single-product.html">Eodem modo vel mattis</a></p>
                                        <p class="product-rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                        </p>

                                        <p class="product-price">
                                            <span class="discounted-price"> $10.00</span>
                                            <span class="main-price">$12.90</span>

                                        </p>
                                    </div>
                                </div>
                                <div class="single-top-rated-product d-flex align-content-center">
                                    <div class="image">
                                        <a href="single-product.html">
                                            <img width="350" height="350" src="assets/images/products/product02.webp"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><a href="single-product.html">Mirum est notare tellus</a></p>
                                        <p class="product-rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                        </p>

                                        <p class="product-price">
                                            <span class="discounted-price"> $10.00</span>
                                            <span class="main-price">$12.90</span>

                                        </p>
                                    </div>
                                </div>


                                <div class="single-top-rated-product d-flex align-content-center">
                                    <div class="image">
                                        <a href="single-product.html">
                                            <img width="350" height="350" src="assets/images/products/product03.webp"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><a href="single-product.html">Aliquam lobortis est turpis</a></p>
                                        <p class="product-rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                        </p>

                                        <p class="product-price">
                                            <span class="discounted-price"> $10.00</span>
                                            <span class="main-price">$12.90</span>

                                        </p>
                                    </div>
                                </div>

                                <!--=======  End of single top rated product  =======-->

                            </div>

                            <!--=======  End of top rated product container  =======-->
                        </div>
                    </div>

                    <!--=======  End of sidebar area  =======-->
                </div>
                <div class="col-lg-9 order-1 order-lg-2 mb-sm-35 mb-xs-35">
                    <div class="shop-page-banner mb-35">
                        <a href="shop-left-sidebar.html">
                            <img width="870" height="331" src="assets/images/banners/shop-banner.webp"
                                class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="shop-header mb-35">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center">
                                <!--=======  view mode  =======-->

                                <div class="view-mode-icons mb-xs-10">
                                    <a href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                    <a class="active" href="#" data-target="list"><i class="fa fa-list"></i></a>
                                </div>

                                <!--=======  End of view mode  =======-->

                            </div>
                            <div
                                class="col-lg-8 col-md-8 col-sm-12 d-flex flex-column flex-sm-row justify-content-between align-items-left align-items-sm-center">
                                <!--=======  Sort by dropdown  =======-->

                                <div class="sort-by-dropdown d-flex align-items-center mb-xs-10">
                                    <p class="mr-10">Sort By: </p>
                                    <select name="sort-by" id="sort-by" class="nice-select">
                                        <option value="0">Sort By Popularity</option>
                                        <option value="0">Sort By Average Rating</option>
                                        <option value="0">Sort By Newness</option>
                                        <option value="0">Sort By Price: Low to High</option>
                                        <option value="0">Sort By Price: High to Low</option>
                                    </select>
                                </div>

                                <!--=======  End of Sort by dropdown  =======-->

                                <p class="result-show-message">Showing 1–12 of 41 results</p>
                            </div>
                        </div>
                    </div>
                    <div class="shop-product-wrap list row no-gutters mb-35">
                        @foreach ($products as $product)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="gf-product shop-grid-view-product">
                                    <div class="image">
                                        <a href="{{ route('products.show', $product) }}">
                                            <span class="onsale">Sale!</span>
                                            <img style="width: 350px; height: 250px;" src="{{ asset($product->image) }}"
                                                class="img-fluid" alt="">
                                        </a>
                                        <div class="product-hover-icons">
                                            <a href="javascript:void(0)"
                                                onclick="addItemInCart({{ $product->id }},{{ $product->name }},1)"
                                                data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
                                            <a href="#" data-tooltip="Add to wishlist"> <span
                                                    class="icon_heart_alt"></span> </a>
                                            <a href="#" data-tooltip="Compare"> <span
                                                    class="arrow_left-right_alt"></span> </a>
                                            <a href="#" data-tooltip="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal-container">
                                                <span class="icon_search"></span> </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-categories">
                                            <a href="shop-left-sidebar.html">{{ $product->category->name }}</a>
                                        </div>
                                        <h3 class="product-title"><a
                                                href="{{ route('products.show', $product) }}">{{ $product->name }}
                                            </a></h3>
                                        <div class="price-box">
                                            <span class="main-price">{{ $product->price }} FCFA</span>
                                            <span class="discounted-price">{{ $product->price }} FCFA</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="gf-product shop-list-view-product">
                                    <div class="image">
                                        <a href="{{ route('products.show', $product) }}">
                                            <span class="onsale">Sale!</span>
                                            <img style="width: 350px; height: 250px;" src="{{ asset($product->image) }}"
                                                class="img-fluid" alt="">
                                        </a>
                                        <div class="product-hover-icons">
                                            <a href="#" data-tooltip="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal-container">
                                                <span class="icon_search"></span> </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-categories">
                                            <a href="shop-left-sidebar.html">{{ $product->category->name }}</a>
                                        </div>
                                        <h3 class="product-title"><a
                                                href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                                        </h3>
                                        <div class="price-box mb-20">
                                            <span class="main-price">{{ $product->price }} FCFA</span>
                                            <span class="discounted-price">{{ $product->price }} FCFA</span>
                                        </div>
                                        <p class="product-description">{{ $product->description }}</p>
                                        <div class="list-product-icons">
                                            <a href="#" data-tooltip="Add to cart"> <span
                                                    class="icon_cart_alt"></span></a>
                                            <a href="#" data-tooltip="Add to wishlist"> <span
                                                    class="icon_heart_alt"></span> </a>
                                            <a href="#" data-tooltip="Compare"> <span
                                                    class="arrow_left-right_alt"></span> </a>
                                        </div>
                                    </div>

                                </div>

                                <!--=======  End of Shop list view product  =======-->
                            </div>
                        @endforeach

                    </div>

                    <!--=======  End of Grid list view  =======-->

                    <!--=======  Pagination container  =======-->

                    <div class="pagination-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  pagination-content  =======-->

                                    <div class="pagination-content text-center">
                                        <ul>
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>

                                    <!--=======  End of pagination-content  =======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


<script>
    function addItemInCart(id, name, quantity, price) {
        $.ajax({
            type: 'POST',
            url: '{{ route('cart.store') }}'
            data {
                "_token": "{{ csrf_token() }}",
                id: id,
                name: name,
                quantity: quantity,
                price: price
            },
            success: function(data) {
                if (data.status == 200) {
                    $.notify({
                        icon: 'fa fa-check-circle',
                        title: 'Success',
                        message: 'Item added successfully'
                    })
                }
            }
        });
    }
</script>
