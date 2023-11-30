<?php

// 2x^2 + 5x = 10;
// 6x^2 - 3x = 20;
class Quadratic
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getA()
    {
        return $this->a;
    }
    public function setB($b)
    {
        $this->b = $b;
    }
    public function getDelta()
    {
        return $this->b * $this->b - 4 * $this->a * $this->c;
    }
    public function getEquation()
    {
        if ($this->getDelta() < 0) {
            return array();
        } else if ($this->getDelta() > 0) {
            $x1 = (-$this->b + sqrt($this->getDelta())) / (2 * $this->a);
            $x2 = (-$this->b - sqrt($this->getDelta())) / (2 * $this->a);
            return array($x1, $x2);
        } else {
            $x1 = -$this->b / (2 * $this->a);
            return array($x1);
        }
    }
}

$a = 1;
$b = 3;
$c = 1;

$quadratic = new Quadratic($a, $b, $c);
var_dump($quadratic->getEquation());
