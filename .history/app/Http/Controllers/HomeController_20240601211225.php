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
        $order = Order::where('user_id',Auth::user()->id)->latest()->take(10);
        return view('dashboard',compact('order'));
    }
}