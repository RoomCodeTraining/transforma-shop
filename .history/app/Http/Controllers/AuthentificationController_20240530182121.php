<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentificationController extends Controller
{
    public function register()
    {
        return view('pages.accounts.register');
    }

    public function store()
    {
        dd("mum");
    }
}
