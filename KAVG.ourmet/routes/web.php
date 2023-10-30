<?php

use App\Http\Controllers\CarShoppingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\CarShopping;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/Catalogo', function () {
    return view('catalogo');
})->name('catalogo');



Route::get('/products', [ProductController::class,'index'])->name('products');

Route::get('/users', [UserController::class,'index'])->name('users');

Route::get('/car-shopping', [CarShoppingController::class, 'index'])->name('carShoppings');

Route::get('/dashboard', function () {
    $produtos = Product::all();
    $carrinho = CarShopping::all();
    $usuario = User::all();
    return view('dashboard', ['produtos' => $produtos, 'carrinho' => $carrinho,'usuario'=> $usuario]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
