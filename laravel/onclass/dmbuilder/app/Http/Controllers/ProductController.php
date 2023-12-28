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
    public function showDetailProduct($id)
    {
        // $product = DB::select('SELECT * from products where id = :id and category_id = :category_id', ["id" => $id, "category_id" => 1]);
        $product = DB::table('products')
            ->where('id', '=', $id)
            ->get();
        dd($product);
    }
}
