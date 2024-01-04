<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts()
    {
        // $products = DB::table('products')->get();   // Dùng query builder
        $products = Product::all();
        // $product = Product::where('name', 'like', '%Iphone%')->get();

        return view('product.list', compact('products'));
    }
    public function saveProduct(Request $request)
    {
        $this->validate($request, [
            "name" => "required|min:5|max:50",
            "image" => "required",
            "price" => "required|numeric|min:1000|max:5000000",
        ], [
            "name.required" => "Name not empty",
            "name.min" => "Name at least 5 characters",
            "name.max" => "Name at maximum 50 characters",
            "image.required" => "Name not empty",
            "price.required" => "Price not empty",
            "price.min" => "Price at least 1000",
            "price.max" => "Price at maximum 5000000",
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->img_url = $request->image;
        $product->category_id = $request->category_id;


        $product->save();
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }
    public function showCreateProduct(Request $request)
    {
        $categories = Category::all();

        return view('product.create', compact('categories'));
    }
}
