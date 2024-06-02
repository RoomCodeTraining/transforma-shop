<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthentificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::resource('products', ProductController::class)->only(['index', 'show']);
Route::resource('articles', ArticleController::class)->only(['index', 'show']);
Route::view('/contact', 'pages.contact')->name('contacts.index');

/**
 * ROUTE FOR REGSTER
 */
Route::controller(RegisterController::class)->group(function () {
    Route::get('inscription', 'register')->name('form.inscription');
    Route::post("inscription", "store")->name("store.register");
});

/**
 * ROUTE FOR LOGIN
 */
Route::controller(AuthentificationController::class)->group(function () {
    Route::get('account', 'login')->name('connexion');
    Route::post("account", "authenticate")->name("store.login");
    Route::post('logout', 'logout')->name("logout.user")->middleware('auth');
});


/**
 * ROUTE FOR ADD PRODUCT IN CART
 */

Route::controller(CartController::class)->group(function () {
    Route::get('cart', 'index')->name('shopping');
    Route::post('cart/store/{id}', 'addToCart')->name('cart.store');

    Route::put('cart/update/{id}', 'updateCart')->name('cart.update');
    Route::delete('cart/remove', 'removeItem')->name('cart.remove');
    Route::delete('cart/clear', 'clearCart')->name('cart.clear');

    // Route::post('cart/detail', 'StoreDetailToCart')->name('detail.store');
});

/**
 * ROUTE FOR CHECKOUT
 */

Route::middleware(['CardIsNotEmpty'])->group(function () {
    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('checkout', [CheckoutController::class, 'process'])->name('checkout.process');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
