<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('pages.accounts.register');
    }

    public function store(RegisterRequest $request)
    {
        $validated = $request->validated();
        $user = User::create([
            'identifier' => Str::random(4),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'contact' => $request->contact,
            'city' => $request->city,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        return back()->with('message', 'Compte créer avec succès ,verifier votre boîte de messagerie');
        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}
