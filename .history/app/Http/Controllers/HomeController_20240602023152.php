<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\ViewModels\HomepageViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\UpdatePasswordRequest;

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


    public function ChangePasswordForm(UpdatePasswordRequest $request)
    {

        $validated = $request->validated();


        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Le mot de passe actuel est incorrect.');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        Auth::logout();

        return redirect()->route('connexion')->with('message', 'Le mot de passe a été mis à jour avec succès. Veuillez vous reconnecter avec votre nouveau mot de passe.');
    }
}