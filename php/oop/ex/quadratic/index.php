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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['a'])) {
        $a = $_POST['a'];
    }
    if (isset($_POST['b'])) {
        $b = $_POST['b'];
    }
    if (isset($_POST['c'])) {
        $c = $_POST['c'];
    }
    $quadratic = new Quadratic($a, $b, $c);
    $result = $quadratic->getEquation();
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h>Giải phương trình bậc 2</h>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <input type="number" placeholder="Nhập a" name="a" />
        <input type="number" placeholder="Nhập b" name="b" />
        <input type="number" placeholder="Nhập c" name="c" />

        <button type="submit" name="Giải">GIẢI</button>
    </form>

    <?php
    if (isset($result)) {
        if (empty($result)) {
            echo "<div> <label> Phương trình vô nghiệm</label> </div>";
        } else if (count($result) == 1) {
            $x1 = round($result[0], 2);
            echo "<div> <label> Phương trình có nghiệm kép {$x1}</label> </div>";
        } else {
            $x1 = round($result[0], 2);
            $x2 = round($result[1], 2);
            // echo  "<div> <label> Phương trình có 2 nghiệm x1: {round($result[0], 2)} , x2: {round($result[1], 2)}</label> </div>";
            echo sprintf("<div> <label> Phương trình có 2 nghiệm x1: %s , x2: %s</label> </div>", round($result[0], 2), round($result[0], 2));
        }
    }

    ?>

</body>

</html>