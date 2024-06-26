@extends('layouts.main')
@section('content')
    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">Mon panier</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <!--=======  cart table  =======-->

                        <div class="cart-table table-responsive mb-40">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img width="350" height="350"
                                                    src="assets/images/products/product01.webp" class="img-fluid"
                                                    alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Cillum dolore tortor nisl fermentum</a></td>
                                        <td class="pro-price"><span>$29.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$29.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img width="350" height="350"
                                                    src="assets/images/products/product02.webp" class="img-fluid"
                                                    alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Auctor gravida pellentesque</a></td>
                                        <td class="pro-price"><span>$30.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="2"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$60.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img width="350" height="350"
                                                    src="assets/images/products/product03.webp" class="img-fluid"
                                                    alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Condimentum posuere consectetur</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$25.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img width="350" height="350"
                                                    src="assets/images/products/product04.webp" class="img-fluid"
                                                    alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Habitasse dictumst elementum</a></td>
                                        <td class="pro-price"><span>$11.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$11.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!--=======  End of cart table  =======-->


                    </form>

                    <div class="row">

                        <div class="col-lg-6 col-12">
                            {{--  <div class="calculate-shipping">
                                <h4>Calculate Shipping</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-25">
                                            <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <select class="nice-select">
                                                <option>Dhaka</option>
                                                <option>Barisal</option>
                                                <option>Khulna</option>
                                                <option>Comilla</option>
                                                <option>Chittagong</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="submit" value="Estimate">
                                        </div>
                                    </div>
                                </form>
                            </div>  --}}



                            <!--=======  Discount Coupon  =======-->

                            <div class="discount-coupon">
                                <h4>Code de réduction</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="text" placeholder="Code">
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="submit" value="Valider">
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!--=======  End of Discount Coupon  =======-->

                        </div>


                        <div class="col-lg-6 col-12 d-flex">


                            <div class="cart-summary">
                                <div class="cart-summary-wrap">
                                    <h4>Résumé du panier</h4>
                                    <p>Sous-total <span>$1250.00</span></p>
                                    <p>Frais dexpédition <span>$00.00</span></p>
                                    <h2>Total <span>$1250.00</span></h2>
                                </div>
                                <div class="cart-summary-button">
                                    <button class="checkout-btn">Checkout</button>
                                    <button class="update-btn">Update Cart</button>
                                </div>
                            </div>



                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
