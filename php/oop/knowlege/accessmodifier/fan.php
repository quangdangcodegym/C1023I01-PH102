<?php
define("SLOW", 1);
define("MEDIUM", 2);
define("FAST", 3);
class Fan
{
    private int $speed;             // private/public/protected
    private bool $status;        // true/false
    private float $radius;
    private string $color;

    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function __construct($color, $radius)
    {
        $this->color = $color;
        $this->radius = $radius;
        $this->status = false;
    }
    public function showInfo()
    {
        /*
        $showStatus = null;
        if ($this->status) {
            $showStatus = "ĐANG BẬT";
        } else {
            $showStatus = "ĐANG TẮT";
        }
        */

        $showStatus = $this->status ? "ĐANG BẬT" : "ĐANG TẮT";
        return "Quạt màu: " . $this->color . " radius: " . $this->radius . " trạng thái: " . $showStatus;
    }
}

$fan = new Fan("RED", 5);
$fan->setStatus(true);
echo $fan->showInfo();
