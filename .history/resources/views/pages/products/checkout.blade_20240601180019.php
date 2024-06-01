@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Checkout</h1>

        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="shipping_address">Shipping Address</label>
                <input type="text" class="form-control" id="shipping_address" name="shipping_address" required>
            </div>

            <h2>Mes commandes</h2>
            {{--  <table class="table">
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Cart::instance('cart')->content() as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->price * $item->qty }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>  --}}

            <div class="cart-table table-responsive mb-40">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="pro-title">Article</th>
                            <th class="pro-price">Prix</th>
                            <th class="pro-quantity">Quantité</th>
                            <th class="pro-subtotal">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::instance('cart')->content() as $item)
                            <tr>
                                <td class="pro-thumbnail"><a href="#"><img width="350" height="350"
                                            src="{{ $items->model->image }}" class="img-fluid" alt="Product"></a></td>
                                <td class="pro-title"><a href="#">{{ $item->name }}</a>
                                </td>
                                <td class="pro-quantity">
                                    <span>{{ $item->qty }} FCFA</span>
                                </td>
                                <td class="pro-price"><span>{{ $item->price }} FCFA</span></td>
                                <td class="pro-subtotal"><span>{{ $item->price * $item->qty }} FCFA</span></td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Valider</button>
            </div>
        </form>
    </div>
@endsection
