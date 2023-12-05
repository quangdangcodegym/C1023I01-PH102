<?php



require_once("./model/Product.php");
require_once("./model/ProductService.php");


require_once("./controller/ProductController.php");


use Model\Product;
use Services\ProductService;

use Controller\ProductController;



$controller = new ProductController();


$parseUrl = parse_url($_SERVER['REQUEST_URI']);

switch ($parseUrl['path']) {
    case "/": {
            $controller->showProducts();
            break;
        }
    case "/add": {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $controller->showAddProduct();
                break;
            } else {
                $controller->saveProduct();
                break;
            }
        }
}
