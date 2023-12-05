<?php

namespace Controller;


require_once "./model/Product.php";
require_once "./model/ProductService.php";

use Services\ProductService;
use Model\Product;

class ProductController
{
    private $productService;
    public function showProducts()
    {
        $products = $this->productService->getAllProducts();
        include "./view/list.php";
    }
    public function showAddProduct()
    {
        include "./view/add.php";
    }
    public function saveProduct()
    {
        $p = new Product(10, $_POST['name'], $_POST['price']);
        $this->productService->addProduct($p);

        header('Location: /');
    }
    public function __construct()
    {
        $this->productService = new ProductService();
    }
}
