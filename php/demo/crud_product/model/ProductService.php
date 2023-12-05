<?php

namespace Services;

require_once("./model/Product.php");

use Model\Product;

class ProductService
{

    public function __construct()
    {
    }

    public function getAllProducts()
    {
        $jsonString = file_get_contents('./data.json');
        $decodedData = json_decode($jsonString);            // chuyển file JSON thành mảng

        $products = [];
        foreach ($decodedData as $p) {
            $product = new Product($p->id, $p->name, $p->price);
            $products[] = $product;
        }
        return $products;
    }
    public function addProduct(Product $product)
    {
        $products = $this->getAllProducts();

        $products[] = $product;
        $data = [];
        foreach ($products as $product) {
            $data[] = [
                "id" => $product->getId(),
                "name" => $product->getName(),
                "price" => $product->getPrice()
            ];
        }

        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents("./data.json", $jsonData);
    }
}
