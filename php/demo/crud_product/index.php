<?php
define('BASEPATH', realpath(__DIR__));


require_once(BASEPATH . "/model/Product.php");
require_once(BASEPATH . "/model/ProductService.php");


require_once("./controller/ProductController.php");


use Model\Product;
use Services\ProductService;

use Controller\ProductController;



$controller = new ProductController();


$parseUrl = parse_url($_SERVER['REQUEST_URI']);         // chuyển thành mảng, để lấy đường dẫn "/" hay là "/add"

switch ($parseUrl['path']) {
    case "/": {
            // hiển thị trang danh sách sản phẩm
            $controller->showProducts();
            break;
        }
    case "/add": {
            // họ đang thêm sản phẩm
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                // hiển thị trang để thêm
                $controller->showAddProduct();
                break;
            } else {
                // thêm sản phẩm
                $controller->saveProduct();
                break;
            }
        }
}
