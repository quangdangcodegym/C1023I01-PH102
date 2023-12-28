<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = DB::table('products')->select('id', 'name')->where('name', 'like', '%dell%')->get();

        dd($products);
    }
}
