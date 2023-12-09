<?php
require_once("./circle.php");


class Cylinder extends Circle
{
    private $height;                    // lớp con có thể thể định nghĩa thêm thuộc tính $height

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);       // dùng parent:: để gọi tới phương thức khởi tạo của lớp cha
        $this->height = $height;
    }

    public function getHeight()       // lớp con có thể thể định nghĩa thêm phương thức   
    {
        return $this->height;
    }

    public function setHeight($height): void        // lớp con có thể thể định nghĩa thêm phương thức 
    {
        $this->height = $height;
    }

    public function getArea()           // lớp con có thể ghi đè phương thức getArea() của lớp cha
    {
        return parent::getArea() * 2 + parent::getPrimiter() * $this->height;
    }
    public function getPrimiter()       // lớp con có thể ghi đè phương thức getPrimiter() - chu vi của lớp cha
    {
        //2×π×xh
        // return 2 * 3.14 * $this->getRadius() * $this->height;
        return parent::getPrimiter()  * $this->height;
    }
}



$c = new Cylinder(5, "RED", 10);

var_dump($c->getArea());
