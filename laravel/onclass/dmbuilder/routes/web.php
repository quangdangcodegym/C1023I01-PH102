<?php

use App\Http\Controllers\ProductController;
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
});

Route::get('/product', [ProductController::class, 'showProducts'])->name('product.showProducts');
Route::get("/product/edit/{id}", [ProductController::class, 'showEditProduct'])->name('product.showEditProduct');
Route::post("/product/edit/{id}", [ProductController::class, 'updateProduct'])->name('product.updateProduct');
Route::get("/product/add", [ProductController::class, 'showAddProduct'])->name('product.showAddProduct');

Route::post('/product', [ProductController::class, "saveProduct"])->name('product.saveProduct');

Route::get('/product/delete/{id}', [ProductController::class, 'deleteProduct'])->name('product.deleteProduct');
