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

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validation des données
        $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'contact' => 'required|string|max:15',
            'city' => 'required|string|max:255',
        ]);

        // Mise à jour des informations de l'utilisateur
        $user->last_name = $request->last_name;
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->city = $request->city;

        // if ($request->filled('new_password')) {
        //     $user->password = Hash::make($request->new_password);
        // }

        $user->save();

        return redirect()->back()->with('success', 'Profil mis à jour avec succès.');
    }
}