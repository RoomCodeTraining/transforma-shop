
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('app.name') }}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/elegent.min.css" rel="stylesheet">
	<link href="assets/css/plugins.css" rel="stylesheet">
	<link href="assets/css/helper.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<header>
		<div class="header-top pt-10 pb-10 pt-lg-10 pb-lg-10 pt-md-10 pb-md-10">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center text-sm-start text-lg-end">
						<!-- currncy language dropdown -->
						<div class="lang-currency-dropdown">
							<ul>
								<li> <a href="#">English <i class="fa fa-chevron-down"></i></a>
									<ul>
										<li><a href="#">French</a></li>
									</ul>
								</li>
								<li><a href="#"></a>
								</li>
							</ul>
						</div>
						<!-- end of currncy language dropdown -->
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  text-center text-sm-end">
						<!-- header top menu -->
						<div class="header-top-menu">
							<ul>
								<li><a href="my-account.html">Mon compte</a></li>
								<li><a href="checkout.html">Mon panier</a></li>
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
							<a href="index.html">
								<img width="111" height="111" src="assets/images/logo.webp" class="img-fluid" alt="">
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
									<img width="40" height="35" src="assets/images/icon-phone.webp" class="img-fluid" alt="">
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
								<a href="cart.html">
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
											<span class="remove-item"><a href="#"><i class="fa fa-times"></i></a></span>
											<div class="cart-float-single-item-image">
												<a href="single-product.html"><img width="350" height="350" src="assets/images/products/product01.webp" class="img-fluid"
														alt=""></a>
											</div>
											<div class="cart-float-single-item-desc">
												<p class="product-title"> <a href="single-product.html">Duis pulvinar obortis eleifend </a></p>
												<p class="price"><span class="count">1x</span> $20.50</p>
											</div>
										</div>
										<div class="cart-float-single-item d-flex">
											<span class="remove-item"><a href="#"><i class="fa fa-times"></i></a></span>
											<div class="cart-float-single-item-image">
												<a href="single-product.html"><img width="350" height="350" src="assets/images/products/product02.webp" class="img-fluid"
														alt=""></a>
											</div>
											<div class="cart-float-single-item-desc">
												<p class="product-title"> <a href="single-product.html">Fusce ultricies dolor vitae</a></p>
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
									<li class="active menu-"><a href="#">Accueil</a>
									</li>
									<li><a href="contact.html">CONTACT</a></li>
								</ul>
							</nav>
						</div>
						<!-- end of navigation section -->

						<!--=====  End of navigation menu  ======-->


					</div>
					<div class="col-12">
						<!-- Mobile Menu -->
						<div class="mobile-menu d-block d-lg-none"></div>
					</div>
				</div>
			</div>

			<!--=============================================
		=            navigation menu         =
		=============================================-->

			<div class="home-other-navigation-menu">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<!-- navigation section -->
							<div class="main-menu">
								<nav>
									<ul>
										<li class="active"><a href="#">Acceuil</a>
										</li>
										<li><a href="contact.html">Nos produits</a></li>
										<li><a href="contact.html">CONTACT</a></li>
										<li><a href="contact.html">CONTACT</a></li>
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

	<div class="hero-slider-container mb-35">
		<div class="hero-slider-one">
			<div class="hero-slider-item slider-bg-7">
				<div class="slider-content d-flex flex-column justify-content-center align-items-center">
					<h1>Organic Farm</h1>
					<p>get fresh food from our firm to your table</p>
					<a href="shop-left-sidebar.html" class="slider-btn">SHOP NOW</a>
				</div>
			</div>
			<div class="hero-slider-item slider-bg-8">
				<div class="slider-content d-flex flex-column justify-content-center align-items-center">
					<h1>Fresh & Nature</h1>
					<p>get fresh food from our firm to your table</p>
					<a href="shop-left-sidebar.html" class="slider-btn">SHOP NOW</a>
				</div>
			</div>
		</div>
	</div>

	<div class="policy-section mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="policy-titles d-flex align-items-center flex-wrap">
						<!--=======  single policy  =======-->

						<div class="single-policy">
							<span><img width="30" height="25" src="assets/images/policy-icon1.webp" class="img-fluid" alt=""></span>
							<p> FREE SHIPPING ON ORDERS OVER $200</p>
						</div>

						<!--=======  End of single policy  =======-->


						<!--=======  single policy  =======-->

						<div class="single-policy">
							<span><img width="30" height="29" src="assets/images/policy-icon2.webp" class="img-fluid" alt=""></span>
							<p>30 -DAY RETURNS MONEY BACK</p>
						</div>

						<!--=======  End of single policy  =======-->

						<!--=============================================
						=            single policy         =
						=============================================-->

						<div class="single-policy">
							<span><img width="30" height="29" src="assets/images/policy-icon3.webp" class="img-fluid" alt=""></span>
							<p> 24/7 SUPPORT</p>
						</div>

						<!--=====  End of single policy  ======-->

					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="slider category-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category slider section title  =======-->
					<div class="section-title">
						<h3>Nos produits recents</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category container  =======-->

					<div class="category-slider-container">
						<div class="single-category">
							<div class="category-image">
								<a href="shop-left-sidebar.html" title="Vegetables">
									<img width="121" height="121" src="assets/images/categories/category1.webp" class="img-fluid" alt="">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="shop-left-sidebar.html"> Vegetables</a>
								</h3>
							</div>
						</div>
						<div class="single-category">
							<div class="category-image">
								<a href="shop-left-sidebar.html" title="Fast Food">
									<img width="121" height="121" src="assets/images/categories/category2.webp" class="img-fluid" alt="">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="shop-left-sidebar.html"> Fast Food</a>
								</h3>
							</div>
						</div>
						<div class="single-category">
							<div class="category-image">
								<a href="shop-left-sidebar.html" title="Fish & Meats">
									<img width="121" height="121" src="assets/images/categories/category3.webp" class="img-fluid" alt="">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="shop-left-sidebar.html"> Fish & Meats</a>
								</h3>
							</div>
						</div>
						<div class="single-category">
							<div class="category-image">
								<a href="shop-left-sidebar.html" title="Fruits">
									<img width="121" height="121" src="assets/images/categories/category4.webp" class="img-fluid" alt="">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="shop-left-sidebar.html"> Fruits</a>
								</h3>
							</div>
						</div>
						<div class="single-category">
							<div class="category-image">
								<a href="shop-left-sidebar.html" title="Salads">
									<img width="121" height="121" src="assets/images/categories/category5.webp" class="img-fluid" alt="">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="shop-left-sidebar.html"> Salads</a>
								</h3>
							</div>
						</div>
						<div class="single-category">
							<div class="category-image">
								<a href="shop-left-sidebar.html" title="Bread">
									<img width="121" height="121" src="assets/images/categories/category6.webp" class="img-fluid" alt="">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="shop-left-sidebar.html"> Bread</a>
								</h3>
							</div>
						</div>

						<!--=======  End of single category  =======-->

						<!--=======  single category  =======-->

						<div class="single-category">
							<div class="category-image">
								<a href="shop-left-sidebar.html" title="Beans">
									<img width="121" height="121" src="assets/images/categories/category7.webp" class="img-fluid" alt="">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="shop-left-sidebar.html"> Beans</a>
								</h3>
							</div>
						</div>

						<!--=======  End of single category  =======-->

					</div>

					<!--=======  End of category container  =======-->

				</div>
			</div>
		</div>
	</div>

	<!--=====  End of category slider  ======-->

	<!--=============================================
	=            Slider with banner        =
	=============================================-->

	<div class="slider slider-with-banner mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog slider section title  =======-->

					<div class="section-title red-title">
						<h3>Tout nos produits</h3>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-lg-12">
					<!--=======  banner slider wrapper  =======-->

					<div class="banner-slider-wrapper">
						<div class="row no-gutters">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="slider-side-banner">
									<a href="shop-left-sidebar.html">
										<img width="370" height="580" src="assets/images/banners/home4-category2-sidebar.webp" class="img-fluid" alt="">
									</a>
								</div>

								<!--=======  End of slider side banner  =======-->
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12">
								<!--=======  banner slider container  =======-->
								<div class="banner-slider-container">
                                    @for($i=0; $i<=5;$i++)
									<div class="gf-product banner-slider-product">
										<div class="image">
											<a href="single-product.html">
												<span class="onsale">Sale!</span>
												<img width="350" height="350" src="assets/images/products/product01.webp" class="img-fluid" alt="">
											</a>
											<div class="product-hover-icons">
												<a href="#" data-tooltip="Quick view" data-bs-toggle="modal"
													data-bs-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
											</div>
										</div>
										<div class="product-content">
											<div class="product-categories">
												<a href="shop-left-sidebar.html">Fast Foods</a>,
												<a href="shop-left-sidebar.html">Vegetables</a>
											</div>
											<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
											<div class="price-box">
												<span class="main-price">$89.00</span>
												<span class="discounted-price">$80.00</span>
											</div>
										</div>

									</div>
                                    @endfor

								</div>

								<!--=======  End of banner slider container  =======-->

								<div class="row no-gutters">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<!--=======  slider banner  =======-->

										<div class="slider-banner">
											<a href="shop-left-sidebar.html">
												<img width="399" height="225" src="assets/images/banners/home4-category2-banner1.webp" class="img-fluid" alt="">
											</a>
										</div>

										<!--=======  End of slider banner  =======-->
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<!--=======  slider banner  =======-->

										<div class="slider-banner">
											<a href="shop-left-sidebar.html">
												<img width="399" height="225" src="assets/images/banners/home4-category2-banner2.webp" class="img-fluid" alt="">
											</a>
										</div>

										<!--=======  End of slider banner  =======-->
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--=======  End of banner slider wrapper =======-->
				</div>
			</div>
		</div>
	</div>

	<div class="slider best-seller-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h3>Meilleures ventes</h3>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  best seller slider container  =======-->

					<div class="best-seller-slider-container pt-15 pb-15">

						<!--=======  single best seller product  =======-->
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product01.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product02.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Officiis debitis varius risus</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--=======  End of single best seller product  =======-->

						<!--=======  single best seller product  =======-->
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product03.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Phasellus vel hendrerit eget</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product04.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--=======  End of single best seller product  =======-->

						<!--=======  single best seller product  =======-->
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product05.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product06.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product07.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product08.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--=======  End of single best seller product  =======-->

						<!--=======  single best seller product  =======-->
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product09.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product10.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product11.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img width="350" height="350" src="assets/images/products/product12.webp" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--=======  End of single best seller product  =======-->

					</div>

					<!--=======  End of best seller slider container  =======-->
				</div>
			</div>
		</div>
	</div>


	<div class="slider blog-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog slider section title  =======-->

					<div class="section-title">
						<h3>greenfarm news</h3>
					</div>

					<!--=======  End of blog slider section title  =======-->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog slide container  =======-->

					<div class="blog-slider-container pt-30 pb-30 pr-30 pl-30">

						<!--=======  single blog post  =======-->
						<div class="col">
							<div class="single-post-wrapper">
								<div class="post-thumb">
									<a href="blog-post-image-format.html">
										<img width="500" height="300" src="assets/images/blog-image/blog01.webp" class="img-fluid" alt="">
									</a>
								</div>
								<div class="post-info">
									<div class="post-meta">
										<div class="post-date">29.09.2022</div>
									</div>
									<h3 class="post-title"><a href="blog-post-image-format.html">Blog image post</a></h3>
									<a href="blog-post-image-format.html" class="readmore-btn">continue <i
											class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<!--=======  End of single blog post  =======-->

						<!--=======  single blog post  =======-->
						<div class="col">
							<div class="single-post-wrapper">
								<div class="post-thumb">
									<a href="blog-post-image-gallery.html">
										<img width="500" height="300" src="assets/images/blog-image/blog02.webp" class="img-fluid" alt="">
									</a>
								</div>
								<div class="post-info">
									<div class="post-meta">
										<div class="post-date">29.09.2022</div>
									</div>
									<h3 class="post-title"><a href="blog-post-image-gallery.html">Post with gallery</a></h3>
									<a href="blog-post-image-gallery.html" class="readmore-btn">continue <i
											class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<!--=======  End of single blog post  =======-->

						<!--=======  single blog post  =======-->
						<div class="col">
							<div class="single-post-wrapper">
								<div class="post-thumb">
									<a href="blog-post-audio-format.html">
										<img width="500" height="300" src="assets/images/blog-image/blog03.webp" class="img-fluid" alt="">
									</a>
								</div>
								<div class="post-info">
									<div class="post-meta">
										<div class="post-date">29.09.2022</div>
									</div>
									<h3 class="post-title"><a href="blog-post-audio-format.html">Blog with audio</a></h3>
									<a href="blog-post-audio-format.html" class="readmore-btn">continue <i
											class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<!--=======  End of single blog post  =======-->

						<!--=======  single blog post  =======-->
						<div class="col">
							<div class="single-post-wrapper">
								<div class="post-thumb">
									<a href="blog-post-video-format.html">
										<img width="500" height="300" src="assets/images/blog-image/blog04.webp" class="img-fluid" alt="">
									</a>
								</div>
								<div class="post-info">
									<div class="post-meta">
										<div class="post-date">29.09.2022</div>
									</div>
									<h3 class="post-title"><a href="blog-post-video-format.html">Blog with video</a></h3>
									<a href="blog-post-video-format.html" class="readmore-btn">continue <i
											class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<!--=======  End of single blog post  =======-->

					</div>

					<!--=======  End of blog slide container  =======-->
				</div>
			</div>
		</div>
	</div>



	<div class="slider brand-logo-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog slider section title  =======-->

					<div class="section-title">
						<h3>Nos partenaires</h3>
					</div>

					<!--=======  End of blog slider section title  =======-->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<!--=======  brand logo wrapper  =======-->

					<div class="brand-logo-wrapper pt-20 pb-20">
						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img width="186" height="92" src="assets/images/brands/brand1.webp" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img width="186" height="92" src="assets/images/brands/brand2.webp" class="img-fluid" alt="">
								</a>
							</div>
						</div>

						<!--=======  End of single-brand-logo  =======-->
						<!--=======  single-brand-logo  =======-->

						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img width="186" height="92" src="assets/images/brands/brand3.webp" class="img-fluid" alt="">
								</a>
							</div>
						</div>

						<!--=======  End of single-brand-logo  =======-->
						<!--=======  single-brand-logo  =======-->

						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img width="186" height="92" src="assets/images/brands/brand4.webp" class="img-fluid" alt="">
								</a>
							</div>
						</div>

						<!--=======  End of single-brand-logo  =======-->
						<!--=======  single-brand-logo  =======-->

						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img width="186" height="92" src="assets/images/brands/brand5.webp" class="img-fluid" alt="">
								</a>
							</div>
						</div>

						<!--=======  End of single-brand-logo  =======-->
						<!--=======  single-brand-logo  =======-->

						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img width="186" height="92" src="assets/images/brands/brand6.webp" class="img-fluid" alt="">
								</a>
							</div>
						</div>

						<!--=======  End of single-brand-logo  =======-->
					</div>

					<!--=======  End of brand logo wrapper  =======-->
				</div>
			</div>
		</div>
	</div>

    @include('shared.footer')
