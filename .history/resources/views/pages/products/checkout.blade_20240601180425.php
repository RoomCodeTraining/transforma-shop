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
            <table class="table">
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
            </table>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Place Order</button>
            </div>
        </form>
    </div>
@endsection
