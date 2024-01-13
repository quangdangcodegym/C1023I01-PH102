<?php

namespace App\Services\Impl;

use App\Models\Product;
use App\Services\IProductService;

class ProductServiceImpl implements IProductService
{
    public function getAllProducts()
    {
        return Product::all();
    }
}
