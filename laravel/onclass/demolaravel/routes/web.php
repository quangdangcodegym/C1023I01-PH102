<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PostController;
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

Route::get('/blade/hello', [HelloController::class, 'xinchao'])->name("Hello");


Route::middleware(['throttle:globalss'])->get("/info", [InfoController::class, "showInfo"]);

Route::post("/info", [InfoController::class, "calculateInfo"]);


Route::get("/user", function () {
    return view("users");
});

/*
Route::get("/post/{idpost}/comments/{idcomment}", function ($idpost, $idcomment) {
    return view("post", compact("idpost", "idcomment"));
});
Route::get("/post/{idpost}/comments/{idcomment}", [PostController::class, "getComment"])->where('idpost', '[0-9]+');

Route::get("/post/detail", function () {
    echo "<h1>Post Detail</h1>";
});
*/


Route::group(['prefix' => 'post'], function () {
    Route::get("/{idpost}/comments/{idcomment}", function ($idpost, $idcomment) {
        return view("post", compact("idpost", "idcomment"));
    });
    Route::get("/detail", function () {
        echo "<h1>Post Detail</h1>";
    });
});
