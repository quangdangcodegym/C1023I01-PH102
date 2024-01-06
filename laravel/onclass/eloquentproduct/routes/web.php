<?php

use App\Http\Controllers\ProductAdminController;
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

Route::get("/product", [ProductController::class, "showProducts"])->name("product.showProducts");
Route::get("/product/create", [ProductController::class, "showCreateProduct"])->name("product.showCreateProduct");
Route::post("/product/create", [ProductController::class, "saveProduct"])->name("product.saveProduct");

Route::get("/product/edit/{id}", [ProductController::class, "showEditProduct"])->name("product.showEditProduct");




Route::prefix("admin")->group(function () {
    Route::get("/product", [ProductAdminController::class, "showAdminProducts"])
        ->name("admin.showAdminProduct");
    Route::get("/product/create", [ProductAdminController::class, "showAdminCreateProduct"])
        ->name("admin.showAdminCreateProduct");
    Route::post("/product/create", [ProductAdminController::class, "saveAdminProduct"])
        ->name("admin.saveAdminProduct");
});
