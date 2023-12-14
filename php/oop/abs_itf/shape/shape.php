<?php

interface Resizable
{
    // trong interface mặc định là public abstract function resize($percent);
    public function resize($percent);
}
abstract class Shape implements Resizable
{
    protected string $color;
    protected bool $filled;

    public function __construct(string $color, bool $filled)
    {
        $this->color = $color;
        $this->filled = $filled;
    }

    public abstract function getArea();
}
