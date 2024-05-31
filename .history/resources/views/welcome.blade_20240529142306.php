@extends('layouts.main')
@section('content')
    <x-slider />
    <x-announcement />
    <x-last-product :products='$latestProducts' />
    <x-product-list :products='$products' />

    <x-best-seller :products='$products' />
    <div class="slider blog-slider mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Blog</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-slider-container pt-30 pb-30 pr-30 pl-30">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="col">
                                <div class="single-post-wrapper">
                                    <div class="post-thumb">
                                        <a href="blog-post-image-format.html">
                                            <img width="500" height="300"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDiKuS1JfU-nr2-bzbDmfuHxNjBpsyCvFU4w&s"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-meta">
                                            <div class="post-date">29.09.2022</div>
                                        </div>
                                        <h3 class="post-title">
                                            <a href="blog-post-image-format.html">
                                                {{ $i }}. Blog post title
                                            </a>
                                        </h3>
                                        <a href="blog-post-image-format.html" class="readmore-btn">Lire l'article <i
                                                class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider brand-logo-slider mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Nos partenaires</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-logo-wrapper pt-20 pb-20">
                        <div class="col">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img width="186" height="92" src="assets/images/brands/brand1.webp"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img width="186" height="92" src="assets/images/brands/brand2.webp"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img width="186" height="92" src="assets/images/brands/brand3.webp"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <!--=======  End of single-brand-logo  =======-->
                        <!--=======  single-brand-logo  =======-->

                        <div class="col">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img width="186" height="92" src="assets/images/brands/brand4.webp"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <!--=======  End of single-brand-logo  =======-->
                        <!--=======  single-brand-logo  =======-->

                        <div class="col">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img width="186" height="92" src="assets/images/brands/brand5.webp"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <!--=======  End of single-brand-logo  =======-->
                        <!--=======  single-brand-logo  =======-->

                        <div class="col">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img width="186" height="92" src="assets/images/brands/brand6.webp"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
