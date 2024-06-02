@extends('layouts.main')
@section('content')
    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">valider ma commande</li>
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
                                        <th class="pro-title">Article</th>
                                        <th class="pro-price">Prix</th>
                                        <th class="pro-quantity">Quantité</th>
                                        <th class="pro-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::instance('cart')->content() as $item)
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img width="150" height="150"
                                                        src="{{ $item->model->image }}" class="img-fluid"
                                                        alt="Product"></a></td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->price * $item->qty }}</td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>

                        </div>

                        <!--=======  End of cart table  =======-->


                    </form>

                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="calculate-shipping">
                                <h4>Lieu de livraison</h4>
                                <form action="{{ route('checkout.process') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="first-name" name="full_name" placeholder="Nom complet"
                                                type="text">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="last-name" name="phone" placeholder="Contact" type="text">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <input id="display-name" name="address" placeholder="addresse" type="text">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <input id="email" placeholder="Email Address" type="email">
                                        </div>

                                        <div class="col-12 ">
                                            <h4>Mode paiement</h4>
                                        </div>

                                        {{--  <div class="col-12 mb-20">
                                            <input id="current-pwd" placeholder="Current Password" type="password">
                                        </div>  --}}

                                        <div class="col-md-12 col-12 mb-20">
                                            {{--  <label>Mode*</label>  --}}
                                            <select class="nice-select">
                                                <option value="card">Visa</option>
                                                <option value="Mobile">Mobile money</option>
                                                <option value="shipping">Sur place</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <button class="save-change-btn"
                                                style="background-color: #80bb01; border: 2px solid; border-radius: 10px; color: white; padding: 10px 20px; text-decoration: none;">
                                                Soumettre</button>

                                        </div>

                                    </div>
                                </form>
                            </div>



                            <!--=======  Discount Coupon  =======-->

                            {{--  <div class="discount-coupon">
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
                            </div>  --}}

                            <!--=======  End of Discount Coupon  =======-->

                        </div>

                        <div class="col-lg-6 col-12 d-flex">
                            <div class="cart-summary">
                                <div class="cart-summary-wrap">
                                    <h4>Montant à payer</h4>
                                    <p>Sous-total <span>{{ Cart::instance('cart')->subtotal() }} FCFA</span></p>
                                    <p>Taxe<span>{{ Cart::instance('cart')->tax() }}</span></p>
                                    {{--  <p>Frais de livraison <span>$00.00</span></p>  --}}
                                    <h2>Total <span>{{ Cart::instance('cart')->total() }} FCFA </span></h2>
                                </div>
                                <div class="cart-summary-button">

                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('checkout.index') }}" class="checkout-btn"
                                            style="background-color: #80bb01; border: 2px solid; border-radius: 10px; color: white; padding: 10px 20px; text-decoration: none;">
                                            Commander
                                        </a>
                                    </div>
                                    {{--  <button class="checkout-btn">Commander</button>  --}}
                                    {{--  <a href="{{ route('checkout.index') }}" class="checkout-btn"
                                            style="background-color:green;border:2px;border-radius:10px text-color:white">Commander</a>  --}}
                                    {{--  <button class="update-btn">Actualiser</button>  --}}
                                </div>
                            </div>



                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
