<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\Impl\ProductServiceImpl;
use App\Services\IProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private IProductService $productService;
    public function __construct()
    {
        $this->productService = new ProductServiceImpl();
    }
    public function showCreateProduct()
    {
        $categories = Category::all();
        return view("product.create", compact('categories'));
    }
    public function showProducts()
    {
        $products = $this->productService->getAllProducts();
        return view("product.list", compact('products'));
    }
    public function saveProduct(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->img_url = $request->img_url;
        $product->category_id = $request->category_id;


        $product->save();
        // $categories = Category::all();
        // return view('product.create', compact('categories'));
        return redirect('/admin/product');
    }

    public function showEditProduct($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view("product.edit", compact("product", "categories"));
    }
    public function updateProduct(ProductRequest $request, $id)
    {
        $productUpdate = Product::find($id);

        $productUpdate->name = $request->name;
        $productUpdate->price = $request->price;
        $productUpdate->img_url = $request->img_url;
        $productUpdate->category_id = $request->category_id;

        $productUpdate->save();
        return redirect('/admin/product');
    }
    public function deleteProduct($id)
    {
        $productDelete = Product::find($id);
        $productDelete->delete();
        return redirect('/admin/product');
    }
}
