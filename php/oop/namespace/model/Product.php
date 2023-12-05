<?php

namespace Model;

class Product
{
    private $id;
    private $name;

    private $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;

        echo "PRODUCT in folder model";
    }
}
