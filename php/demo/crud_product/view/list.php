<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Products</title>
    <style>
        table {
            width: 500px;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <a href="/add">Add Product</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php foreach ($products as $p) : ?>
            <tr>
                <td><?= $p->getId() ?></td>
                <td><?= $p->getName() ?></td>
                <td><?= $p->getPrice() ?></td>
                <td>
                    <button type="button">Edit</button>
                    <button type="button">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>