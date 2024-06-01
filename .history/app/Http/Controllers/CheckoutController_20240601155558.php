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
    }
}
