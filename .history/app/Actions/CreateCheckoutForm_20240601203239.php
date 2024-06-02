<?php

namespace App\Actions\City;

use App\Models\Order;
use App\Models\Shipping;
use App\Models\OrderItem;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Cart;


class createCityAction
{
    public function execute(array $data): Shipping
    {
        DB::beginTransaction();

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

        DB::commit();

        return $shipping->fresh();
    }
}
