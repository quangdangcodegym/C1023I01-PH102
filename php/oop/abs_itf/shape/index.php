<?php
require_once("./shape.php");
require_once("./circle.php");
require_once("./rectangle.php");


$h1 = new Circle(5, "RED", true);
$h2 = new Circle(10, "RED", false);
$h3 = new Circle(10, "BLACK", false);

$h4 = new Rectangle(5, 5, "RED", true);
$h5 = new Rectangle(1, 7, "RED", false);

$shapes = array($h1, $h2, $h3, $h4, $h5);

foreach ($shapes as $s) {
    echo "Diện tích là: " . $s->getArea() . "<br/>";
}

echo  "THỰC HIỆN GIẢM 50% kích thước cho tui <br/>";
foreach ($shapes as $s) {
    $s->resize(50);
    echo "Đã giảm: " . $s->getArea() . "<br/>";
}
