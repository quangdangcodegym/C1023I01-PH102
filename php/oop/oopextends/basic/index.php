<?php
class Shape
{
    protected $color = "BLACK";         // màu của 1 hình
    private $filled;        // trạng thái đã được tô hay chưa

    public function getColor()
    {
        return $this->color;
    }
    public function __construct($c, $f)
    {
        $this->color = $c;
        $this->filled = $f;
    }
    public function setFilled($filled)
    {
        $this->filled = $filled;
    }
    public function getFilled()
    {
        return $this->filled;
    }
}


class Rectangle extends Shape
{
    private $width;
    private $height;
    public function __construct($w, $h, $color, $filled)
    {
        // parent::__construct($color, $filled);
        // $this->color = $color;

        // $this->setFilled($filled);
        // Shape::setFilled($filled);
        parent::setFilled($filled);
    }
}


$r = new Rectangle(5, 10, "RED", true);
