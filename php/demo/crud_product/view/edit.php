<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
</head>

<body>
    <h4>Edit product</h4>

    <form method="post" action="/edit?id=<?= $product->getId() ?>">
        <div>
            <label>Product Name</label>
            <input type="text" name="name" id="name" placeholder="Enter product name" value="<?= $product->getName() ?>" />
        </div>
        <div>
            <label>Product Price</label>
            <input type="text" name="price" id="price" placeholder="Enter product price" value="<?= $product->getPrice() ?>" />
        </div>
        <div>
            <button>Update</button>
        </div>
    </form>
</body>

</html>