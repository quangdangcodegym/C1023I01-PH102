<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add product</title>
</head>

<body>

    <form action="{{ route('product.saveProduct') }}" method="POST">
        @csrf
        <div>
            <label>Product Name</label>
            <input type="text" placeholder="Enter name" name="name" />
        </div>
        <div>
            <label>Product price: </label>
            <input type="number" placeholder="Enter price" name="price" />
        </div>
        <div>
            <label>Product create_at: </label>
            <input type="date" name="create_at" />
        </div>
        <div>
            <label>Product Category: </label>
            <select name="category">
                <option value="1">Phụ kiện</option>
                <option value="2">Phone</option>
                <option value="3">Laptop</option>
            </select>
        </div>

        <button>Create</button>
    </form>
</body>

</html>
