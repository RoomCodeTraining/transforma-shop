    @props(['products'])
    <div class="slider slider-with-banner mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title red-title">
                        <h3>Produits en promotion</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-slider-wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="slider-side-banner">
                                    <a href="shop-left-sidebar.html">
                                        <img width="370" height="580"
                                            src="assets/images/banners/home4-category2-sidebar.webp" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="banner-slider-container">
                                    @foreach ($products as $product)
                                        <div class="gf-product banner-slider-product">
                                            <div class="image">
                                                <a href="single-product.html">
                                                    <span class="onsale">En promotion!</span>
                                                    <img style="width: 350px; height: 130px;"
                                                        src="{{ asset($product->image) }}" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-hover-icons">
                                                    <a href="#" data-tooltip="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"> <span
                                                            class="icon_search"></span> </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-categories">
                                                    <a href="#">{{ $product->category->name }}</a>
                                                </div>
                                                <h3 class="product-title">
                                                    <a href="{{ route('products.show', $product) }}">
                                                        {{ $product->name }}
                                                    </a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="main-price">{{ $product->price }} FCFA</span>
                                                    <br>
                                                    <span class="discounted-price">1000 FCFA</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="slider-banner">
                                            <a href="shop-left-sidebar.html">
                                                <img width="399" height="225"
                                                    src="assets/images/banners/home4-category2-banner1.webp"
                                                    class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="slider-banner">
                                            <a href="shop-left-sidebar.html">
                                                <img width="399" height="225"
                                                    src="assets/images/banners/home4-category2-banner2.webp"
                                                    class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
