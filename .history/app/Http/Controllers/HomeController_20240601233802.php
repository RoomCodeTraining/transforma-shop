<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ViewModels\HomepageViewModel;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome', new HomepageViewModel());
    }

    public function home()
    {
        $order = Order::with('items.product')->with('items', 'transaction')->where('user_id', Auth::user()->id)->latest()->limit(10)->get();
        //dd($order);
        foreach ($order as $key) {
            dd($key->transaction->mode);
            // foreach ($key->transaction as $value) {
            //     dd($value);
            // }
        }
        return view('dashboard', compact('order'));
    }
}