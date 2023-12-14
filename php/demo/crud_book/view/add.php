<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add book</title>
</head>

<body>
    <h4>Add Book</h4>

    <form method="post" action="/add">
        <div>
            <label>Book title:</label>
            <input type="text" name="title" placeholder="Enter book name" />
        </div>
        <div>
            <label>Book author:</label>
            <input type="text" name="author" placeholder="Enter book author" />
        </div>
        <div>
            <label>Book create at:</label>
            <input type="date" name="create_at" placeholder="Enter book create" />
        </div>
        <div>
            <button>Create</button>
        </div>
    </form>
</body>

</html>