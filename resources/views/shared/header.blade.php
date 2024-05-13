	<header>
    @include('shared.top-bar')
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
											<a href="checkout.html">Valider</a>
											<a href="cart.html">Panier</a>
										</div>
									</div>
								</div>
								<!-- end of cart floating box -->
							</div>
						</div>

						<div class="main-menu main-menu-other-homepage">
							<nav>
								<ul>
									<li class="active"><a href="/">Acceuil</a>
										</li>
										<li><a href="contact.html">Nos produits</a></li>
										<li><a href="contact.html">Blog</a></li>
										<li><a href="contact.html">Contact</a></li>
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

			<div class="home-other-navigation-menu">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="main-menu">
								<nav>
									<ul>
										<li class="active"><a href="/">Acceuil</a>
										</li>
										<li><a href="contact.html">Nos produits</a></li>
										<li><a href="contact.html">Blog</a></li>
										<li><a href="contact.html">Contact</a></li>
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
