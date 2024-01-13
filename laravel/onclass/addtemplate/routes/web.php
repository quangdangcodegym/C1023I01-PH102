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






Route::prefix("admin")->group(function () {
    Route::get("/product", [ProductController::class, "showProducts"])->name("admin.product.showProducts");
    Route::get("/product/create", [ProductController::class, "showCreateProduct"])->name("admin.product.showCreateProduct");
    Route::post("/product/create", [ProductController::class, "saveProduct"])->name("admin.product.saveProduct");


    Route::get("/product/edit/{id}", [ProductController::class, "showEditProduct"])->name("admin.product.showEditProduct");
    Route::post("/product/edit/{id}", [ProductController::class, "updateProduct"])->name("admin.product.updateProduct");

    Route::get("/product/delete/{id}", [ProductController::class, "deleteProduct"])->name("admin.product.deleteProduct");
});
