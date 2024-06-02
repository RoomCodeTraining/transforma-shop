{{--  @extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Checkout</h1>

        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="shipping_address">Shipping Address</label>
                <input type="text" class="form-control" id="shipping_address" name="shipping_address" required>
            </div>

            <h2>Order Summary</h2>
            <div class="cart-table table-responsive mb-40">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Article</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::instance('cart')->content() as $item)
                            <tr>
                                <td class="pro-thumbnail"><a href="#"><img width="150" height="150"
                                            src="{{ $item->model->image }}" class="img-fluid" alt="Product"></a></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->price * $item->qty }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

            <div class="col-lg-6 col-12 d-flex justify-content-end">


                <div class="cart-summary">
                    <div class="cart-summary-wrap">
                        <h4>Somme à payer</h4>
                        <p>Sous-total <span>${{ Cart::instance('cart')->subtotal() }}</span></p>
                        <p>Taxe<span>{{ Cart::instance('cart')->tax() }}</span></p>
                        <h2>Total <span>{{ Cart::instance('cart')->total() }} FCFA </span></h2>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Place Order</button>
            </div>
        </form>
    </div>
@endsection  --}}


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
                                                    <div class="qty-box">
                                                        <div class="input-group">
                                                            <input type="number" name="quantity"
                                                                data-rowid="{{ $items->rowId }}"
                                                                onchange="updateQuantity(this)"
                                                                class="form-control input-number" style="width: 50px"
                                                                value="{{ $items->qty }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pro-subtotal"><span>{{ $items->subtotal() }} FCFA</span></td>
                                                <td class="pro-remove">
                                                    <a href="javascript:void(0)"
                                                        onclick="removeItemFromCart('{{ $items->rowId }}')">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                    {{--  <a href="javascript:void(0)"
                                                        onclick="deleteCart('{{ $items->rowId }}')"><i
                                                            class="fa fa-trash-o"></i></a>  --}}
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="col-sm-7 col-5 order-1">
                                    <div class="left-side-button text-end d-flex d-block justify-content-end">
                                        <a href="javascript:void(0)" onclick="clearCart()"
                                            class="text-decoration-underline theme-color d-block text-capitalize">clear
                                            all items</a>
                                    </div>
                                </div>
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
            @else
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Votre panier est vide !</h2>
                        <h5 class="mt-3">Ajouter les produits maintenant.</h5>
                        <a href="{{ route('products.index') }}" class="btn btn-warning mt-5">Faire des achats</a>
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


    <form id="deleteFromCart" action="{{ route('cart.remove') }}" method="post">
        @csrf
        @method('delete')
        <input type="hidden" id="rowId_D" name="rowId">
    </form>

    <form id="clearCart" action="{{ route('cart.clear') }}" method="post">
        @csrf
        @method('delete')
    </form>
@endsection


<script>
    function updateQuantity(qty) {
        $('#rowId').val($(qty).data('rowid'));
        $('#quantity').val($(qty).val());
        $('#updateCartQty').submit();
    }

    function removeItemFromCart(rowId) {
        $('#rowId_D').val(rowId);
        $('#deleteFromCart').submit();
    }

    function clearCart() {
        $('#clearCart').submit();
    }
</script>
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
                                                    <div class="qty-box">
                                                        <div class="input-group">
                                                            <input type="number" name="quantity"
                                                                data-rowid="{{ $items->rowId }}"
                                                                onchange="updateQuantity(this)"
                                                                class="form-control input-number" style="width: 50px"
                                                                value="{{ $items->qty }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pro-subtotal"><span>{{ $items->subtotal() }} FCFA</span></td>
                                                <td class="pro-remove">
                                                    <a href="javascript:void(0)"
                                                        onclick="removeItemFromCart('{{ $items->rowId }}')">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                    {{--  <a href="javascript:void(0)"
                                                        onclick="deleteCart('{{ $items->rowId }}')"><i
                                                            class="fa fa-trash-o"></i></a>  --}}
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="col-sm-7 col-5 order-1">
                                    <div class="left-side-button text-end d-flex d-block justify-content-end">
                                        <a href="javascript:void(0)" onclick="clearCart()"
                                            class="text-decoration-underline theme-color d-block text-capitalize">clear
                                            all items</a>
                                    </div>
                                </div>
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
            @else
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Votre panier est vide !</h2>
                        <h5 class="mt-3">Ajouter les produits maintenant.</h5>
                        <a href="{{ route('products.index') }}" class="btn btn-warning mt-5">Faire des achats</a>
                    </div>
                </div>
            @endif
        </div>
    </div>


@endsection
