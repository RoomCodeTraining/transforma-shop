<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{

    public function index()
    {
        $cart = Cart::instance('cart')->content();
        return view('checkout.index', compact('cart'));
    }

    public function process()
    {
        $user = Auth::user();
        $cart = Cart::instance('cart')->content();

        // Create an order and associate it with the user
        $order = new Order();
        $order->user_id = $user->id;
        $order->save();

        // Add cart items to the order
        foreach ($cart as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->id;
            $orderItem->quantity = $item->qty;
            $orderItem->price = $item->price;
            $orderItem->save();
        }

        // Create a transaction
        $transaction = new Transaction();
        $transaction->order_id = $order->id;
        $transaction->status = 'pending';
        $transaction->save();

        // Create shipping info
        $shipping = new Shipping();
        $shipping->order_id = $order->id;
        $shipping->address = $request->input('shipping_address');
        $shipping->save();

        // Clear the cart
        Cart::instance('cart')->destroy();

        return redirect()->route('orders.show', $order->id)->with('success', 'Order placed successfully!');
    }
    }
}