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

                <div class="summary">
                    <p>Subtotal: ${{ number_format($subtotal, 2) }}</p>
                    <p>Tax: ${{ number_format($taxRate, 2) }}</p>
                    <h3>Total: ${{ number_format($total, 2) }}</h3>
                </div>

            </div>


            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Place Order</button>
            </div>
        </form>
    </div>
@endsection
