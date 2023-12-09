<?php
class Circle
{
    protected $radius;
    protected $color;


    public function getArea()
    {
        return 3.14 * $this->radius  * $this->radius;
    }
    public function getPrimiter()
    {
        return 2 * 3.14 * $this->radius;
    }

    // ctrl + shift + P

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }



    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
}
