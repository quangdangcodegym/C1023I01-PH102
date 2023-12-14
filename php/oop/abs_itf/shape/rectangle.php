<?php

require_once("./shape.php");


class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height, $color, $filled)
    {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function resize($percent)
    {
        $this->width = $this->width * sqrt(1 - $percent / 100);
        $this->height = $this->height * sqrt(1 - $percent / 100);
    }
}
