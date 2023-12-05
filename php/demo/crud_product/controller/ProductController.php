<?php

namespace Controller;


require_once BASEPATH . "/model/Product.php";
require_once BASEPATH . "/model/ProductService.php";

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
        // client gửi lên theo method của form POST nên 
        // server sẽ đọc giá trị các ô input theo thuộc tính name, price: $_POST['name'], $_POST['price']
        $p = new Product(10, $_POST['name'], $_POST['price']);

        // nhờ productService lưu vô file
        $this->productService->addProduct($p);

        // chuyển trang redirect qua trang home (/)
        header('Location: /');
    }
    public function __construct()
    {
        $this->productService = new ProductService();
    }
}
