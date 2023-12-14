<?php
require_once("./shape.php");

class Circle extends Shape
{
    private $radius;

    public function __construct($radius, $color, $filled)
    {
        parent::__construct($color, $filled);
        // Shape::__construct($color, $filled);

        $this->radius = $radius;
    }
    public function getArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }

    public function resize($percent)
    {
        $this->radius = $this->radius * sqrt(1 - $percent / 100);
    }
}
