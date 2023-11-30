<?php
require_once './rectangle.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])) {
    $witdh = $_GET['width'];
    $height = $_GET['height'];
    $action = $_GET['action'];
    $rectangle = new Rectangle($witdh, $height);
    if ($action == 'Area') {
        $result = $rectangle->getArea();
    } else {
        $result = $rectangle->getPrimiter();
    }
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
    <div>
        <form method="get">
            <label>Width</label>
            <input type="text" name="width" value="<?= $witdh ?? 0 ?>" />
            <label>Heigth</label>
            <input type="text" name="height" value="<?= $height ?? 0 ?>" />
            <select name="action">
                <option>Area</option>
                <option>Primiter</option>
            </select>
            <button>Result</button>
        </form>
    </div>
    <?php
    if (isset($result)) {
        echo "<label>$result</label>";
    }
    ?>
</body>

</html>