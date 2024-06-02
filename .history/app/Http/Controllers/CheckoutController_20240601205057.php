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
        $user = Auth::user();
        $cart = Cart::instance('cart')->content();
        $subtotal = floatval(Cart::instance('cart')->subtotal());

        // Create an order and associate it with the user
        $order = new Order();
        $order->user_id = $user->id;
        $order->total = $subtotal;
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
        $transaction->user_id = $user->id;
        $transaction->status = 'pending';
        $transaction->mode = $request->mode;
        $transaction->save();

        // Create shipping info
        $shipping = new Shipping();
        $shipping->order_id = $order->id;
        $shipping->full_name = $request->full_name;
        $shipping->phone = $request->phone;
        $shipping->address = $request->address;
        $shipping->save();

        // Clear the cart
        Cart::instance('cart')->destroy();

        return redirect()->back()->with('success', 'Commande validé avec  succès!');
    }
}