<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts()
    {
        // Truy vấn database theo cách truyền thống: viết câu lệnh giống 100% SQL
        // $products = DB::select('SELECT p.*, c.id as cate_id, c.name as cate_name FROM products p join categories c on p.category_id = c.id');


        // Truy vấn bằng Query builders: truy vấn bằng những HÀM laravel đã xây dựng
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.id as cate_id', 'categories.name as cate_name')
            ->get();
        return view('products', compact('products'));
    }
    public function showEditProduct($id)
    {
        $product = DB::table('products')
            ->where('id', '=', $id)
            ->first();

        return view('edit', compact('product'));
    }
    public function showAddProduct()
    {
        return view('add');
    }
    public function saveProduct(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $category = $request->category;
        $create_at = $request->create_at;

        DB::table('products')
            ->insert([
                "name" => $name,
                "price" => $price,
                "category_id" => $category,
                "create_at" => $create_at
            ]);
        return redirect('/product');
    }
    public function updateProduct(Request $request, $id)
    {
        $name = $request->name;
        $price = $request->price;
        $category = $request->category;
        $create_at = $request->create_at;
        DB::table('products')
            ->where('id', $id)
            ->update(
                [
                    "name" => $name,
                    "price" => $price,
                    "category_id" => $category,
                    "create_at" => $create_at
                ]
            );
        return redirect('/product');
    }
    public function deleteProduct($id)
    {
        DB::table('products')
            ->where('id', '=', $id)
            ->delete();
        return redirect('/product');
    }
}
