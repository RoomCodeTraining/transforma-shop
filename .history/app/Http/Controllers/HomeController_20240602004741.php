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

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Le mot de passe actuel est incorrect.');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Le mot de passe a été mis à jour avec succès.');
    }
}