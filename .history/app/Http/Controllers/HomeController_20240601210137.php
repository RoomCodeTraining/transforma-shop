<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\HomepageViewModel;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome', new HomepageViewModel());
    }

    public function home()
    {
        return view('dashoard');
    }
}
