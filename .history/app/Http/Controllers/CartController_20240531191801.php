<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

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
        //dd($product);
        $price = $product->price ? $product->price : 0;
        Cart::instance('cart')->add($request->id, $product->name, $request->quantity, $price)
            ->associate(Product::class);

        return redirect()->route('shopping');
    }

    public function updateCart(Request $request)
    {
        Cart::instance('cart')->update($request->rowId, $request->quantity);
        return redirect()->route('shopping');
    }

    public function removeItem(Request $request)
    {
        Cart::instance('cart')->remove($request->rowId);
        return redirect()->return redirect()->back();
    }
}