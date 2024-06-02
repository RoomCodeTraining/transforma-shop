<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function index()
    {
        $cart = Cart::instance('cart')->content();
        return view('pages.products.checkout', compact('cart'));
    }

    public function process(Request $request)
    {
        

        return redirect()->route('orders.show', $order->id)->with('success', 'Order placed successfully!');
    }
}