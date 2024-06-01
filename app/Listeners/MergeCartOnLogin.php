<?php

namespace App\Listeners;

use Cart;
use App\Models\Product;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MergeCartOnLogin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }


    public function handle(Login $event)
    {
        $user = $event->user;

        // // Get the session cart
        $sessionCart = Cart::instance('cart')->content();

        // // Set the user-specific cart instance
        Cart::instance('cart')->store($user->id);

        // // Merge session cart into user-specific cart
        foreach ($sessionCart as $item) {
            Cart::instance('cart')->add($item->id, $item->name, $item->qty, $item->price)
                ->associate(Product::class);
        }
    }
}
