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

        $maxId = $this->productService->getMaxId();

        $p = new Product($maxId + 1, $_POST['name'], $_POST['price']);

        // nhờ productService lưu vô file
        $this->productService->addProduct($p);

        // chuyển trang redirect qua trang home (/)
        header('Location: /');
    }
    public function __construct()
    {
        $this->productService = new ProductService();
    }
    public function showEditProduct()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $product = $this->productService->getProductById($id);
            include "./view/edit.php";
        } else {
            include "./view/not-found.php";
        }
    }
    public function updateProduct()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $productEdit = $this->productService->getProductById($id);
            $productEdit->setName($_POST['name']);
            $productEdit->setPrice($_POST['price']);


            $this->productService->updateProduct($id, $productEdit);
            header('Location: /');
        } else {
            include "./view/not-found.php";
        }
    }
    public function deleteProduct()
    {
        $id = $_GET["id"];
        if (isset($id)) {
            $this->productService->deleteProductById($id);
            header('Location: /');
        }
    }
}
