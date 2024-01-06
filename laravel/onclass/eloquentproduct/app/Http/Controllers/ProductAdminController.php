<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductAdminRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    public function showAdminProducts()
    {
        $products = Product::all();
        return view("admin.product.list", compact('products'));
    }
    public function showAdminCreateProduct()
    {
        $categories = Category::all();
        return view("admin.product.create", compact('categories'));
    }
    public function saveAdminProduct(ProductAdminRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->img_url = $request->image;
        $product->category_id = $request->category_id;


        $product->save();
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }
}
