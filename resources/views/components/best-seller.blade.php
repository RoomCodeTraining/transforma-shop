    @props(['products'])
    <div class="slider best-seller-slider mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Tous nos produits</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="best-seller-slider-container pt-15 pb-15">
                        @foreach($products->chunk(3) as $products)
                        <div class="col">
                            <div class="single-best-seller-item">
                                @foreach($products as $product)
                                <div class="best-seller-sub-product">
                                    <div class="row">
                                        <div class="col-lg-4 pl-0 pr-0">
                                            <div class="image">
                                                <a href="{{ route('products.show', $product) }}">
                                                    <img width="350" height="350"
                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPT__f0V_twft63I09RJ3SAiVcWiQMpZB8rNp9ZeXB1KB8Uf4rThcA1O2gNpZh8lz9dr8&usqp=CAU" class="img-fluid"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 pl-0 pr-0">
                                            <div class="product-content">
                                                <div class="product-categories">
                                                    <a href="#">{{ $product->category->name }}</a>,
                                                </div>
                                                <h3 class="product-title"><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h3>
                                                <div class="price-box">
                                                    <span class="discounted-price">{{ $product->price }} FCFA</span>7
                                                    <br>
                                                      <span class="text-sm">graine, soja...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
