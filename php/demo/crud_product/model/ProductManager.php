<?php

namespace Services;

require_once("./model/Product.php");

use Model\Product;

class ProductManager
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
        $this->products[] = new Product(1, "IPhone 11", 12000);
        $this->products[] = new Product(2, "IPhone 12", 12000);
        $this->products[] = new Product(3, "IPhone 13", 12000);
    }

    public function getAllProducts()
    {
        return $this->products;
    }
}
