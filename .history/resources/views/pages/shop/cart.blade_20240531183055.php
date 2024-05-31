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
            @if ($cartItems->Count() > 0)
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
                                            <th class="pro-remove">Annuler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $items)
                                            <tr>
                                                <td class="pro-thumbnail"><a href="#"><img width="350"
                                                            height="350" src="{{ $items->model->image }}"
                                                            class="img-fluid" alt="Product"></a></td>
                                                <td class="pro-title"><a href="#">{{ $items->model->name }}</a>
                                                </td>
                                                <td class="pro-price"><span>{{ $items->price }} FCFA</span></td>
                                                <td class="pro-quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" data-rowid="{{ $items->rowId }}"
                                                            value="{{ $items->qty }}" onchange="updateQuantity(this)">
                                                    </div>
                                                </td>
                                                <td class="pro-subtotal"><span>{{ $items->subtotal() }} FCFA</span></td>
                                                <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach


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
                                        <p>Sous-total <span>${{ Cart::instance('cart')->subtotal() }}</span></p>
                                        <p>Taxe<span>{{ Cart::instance('cart')->tax() }}</span></p>
                                        <p>Frais de livraison <span>$00.00</span></p>
                                        <h2>Total <span>${{ Cart::instance('cart')->total() }}</span></h2>
                                    </div>
                                    <div class="cart-summary-button">
                                        <button class="checkout-btn">Commander</button>
                                        <button class="update-btn">Actualiser</button>
                                    </div>
                                </div>



                            </div>

                        </div>

                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Votre panier est vide !</h2>
                        <h5 class="mt-3">Ajouter les produits maintenant.</h5>
                        <a href="{{ route('shopping') }}" class="btn btn-warning mt-5">Faire des achats</a>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <form id="updateCartQty" action="{{ route('cart.update') }}" method="post">
        @csrf
        @method('put')
        <input type="hidden" id="rowId" name="rowId">
        <input type="hidden" id="quantity" name="quantity">
    </form>
@endsection

@push('scripts')
    <script>
        function updateQuantity(qty) {
            $('#rowId').val($(qty).data('rowid'));
            $('#quantity').val($(qty).val());
            $('#updateCartQty').submit();
        }
    </script>
@endpush
