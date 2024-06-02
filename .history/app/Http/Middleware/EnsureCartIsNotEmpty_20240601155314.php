<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Cart;

class EnsureCartIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Cart::instance('cart')->count() == 0) {
            return redirect()->route('cart.view')->with('error', 'Your cart is empty!');
        }

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to log in to checkout.');
        }

        return $next($request);
    }
}
