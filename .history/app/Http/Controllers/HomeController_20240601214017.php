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
        $order = Order::with('items.product')->where('user_id', Auth::user()->id)->latest()->get();
       // dd($order);
        return view('dashboard', compact('order'));
    }
}