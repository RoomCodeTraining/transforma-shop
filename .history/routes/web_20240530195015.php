<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
// Route::view('account', 'pages.accounts.login')->name('connexion');
// Route::view('inscription', 'pages.accounts.register')->name('form.inscription');


Route::controller(AuthentificationController::class)->group(function () {
    Route::get('inscription', 'register')->name('form.inscription');
    Route::post("inscription", "store")->name("store.register");

    Route::get('account', 'login')->name('connexion');
    Route::post("account", "authenticate")->name("store.login");
});

//Route::post('inscription', [AuthentificationController::class, 'store'])->name("lo");

Route::view('cart', 'pages.shop.cart')->name('shopping');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
