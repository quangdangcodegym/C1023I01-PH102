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
    <h4>Add product</h4>

    <form method="post" action="/add">
        <div>
            <label>Product Name</label>
            <input type="text" name="name" id="name" placeholder="Enter product name" />
        </div>
        <div>
            <label>Product Price</label>
            <input type="text" name="price" id="price" placeholder="Enter product price" />
        </div>
        <div>
            <button>Create</button>
        </div>
    </form>
</body>

</html>