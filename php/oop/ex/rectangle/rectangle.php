<?php

class Rectangle
{
    private $width = 0;
    private $height = 0;

    public function __construct($w, $h)
    {
        $this->width = $w;
        $this->height = $h;
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function getPrimiter()
    {
        return ($this->width + $this->height) * 2;
    }
}
