<?php
require_once("./Ediable.php");
abstract class Fruit implements Ediable
{
    private $color;

    //public abstract function cachAn();
}


class Apple extends Fruit
{
    public function cachAn()
    {
        echo "Gọt vỏ cạp cạp";
    }
}

class ThanhLong extends Fruit
{
    ////public abstract function cachAn();
    public function cachAn()
    {
        echo "Lột vỏ và ăn";
    }
}



$a = new Apple();
echo $a->cachAn();
