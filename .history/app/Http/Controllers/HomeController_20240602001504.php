<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ViewModels\HomepageViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

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

        $profile = Auth::user();
        return view('dashboard', compact('order', 'profile'));
    }

    public function updateProfile(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $p = $request->user()->save();

        dd($p);

        return Redirect::back()->with('message', 'Profile mis à jour avec succès');
    }
}