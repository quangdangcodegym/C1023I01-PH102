<?php


class Product
{
    private $id;
    private $name = "IPhone";
    private $description;
    private $price;

    public function __construct()
    {
    }
}

$p = new Product();
var_dump($p->name);
