<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        return view('pages.shop.cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        $price =   Cart::instance('cart')->add($request->id, $product->name, $request->quantity);
    }
}