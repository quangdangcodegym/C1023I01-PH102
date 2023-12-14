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
            <th>Title</th>
            <th>Author</th>
            <th>CreateAt</th>
            <th>Action</th>
        </tr>
        <?php foreach ($books as $b) : ?>
            <tr>
                <td><?= $b->getId() ?></td>
                <td><?= $b->getTitle() ?></td>
                <td><?= $b->getAuthor() ?></td>
                <td><?= $b->getCreateAt()->format('Y-m-d') ?></td>
                <td>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>