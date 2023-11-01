<?php

use App\Models\User;
use App\Models\Product;
use App\Models\CarShopping;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarShoppingController;

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

Route::get('/detailProduct', function () {
    return view('detailProduct');
})->name('detailProduct');

Route::get('/sobreNos', function () {
    return view('sobreNos');
})->name('sobreNos');



Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/products/{product_id}', [ProductController::class,'getProductsId'])->name('productsId');
Route::delete('/products/{product_id}', [ProductController::class,'destroy'])->name('products.destroy');

Route::post('/carrinho/adicionar/{product}', [CarShoppingController::class, 'add'])->name('cart.add');
Route::get('/carrinho/verSessao', [CarShoppingController::class, 'verSessao'])->name('cart.verSessao');

Route::get('/users', [UserController::class,'index'])->name('users');
Route::get('/users/{user_id}', [UserController::class,'destroy'])->name('user.destroy');

Route::get('/car-shopping', [CarShoppingController::class, 'index'])->name('carShoppings');
Route::get('/car-shopping/{car_shopping_id}', [CarShoppingController::class, 'destroy'])->name('carShopping.destroy');

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
