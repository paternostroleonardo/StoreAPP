<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('products');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Routes Products
Route::resource('/products', ProductController::class);

//Routes orders
Route::get('/orders/{product_id}', [OrderController::class, 'index'])->name('orders.index'); //only have access if selection a product
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/resume', [OrderController::class, 'show'])->name('orders.detail');
Route::post('/orders/pay', [OrderController::class, 'pay'])->name('orders.pay');

