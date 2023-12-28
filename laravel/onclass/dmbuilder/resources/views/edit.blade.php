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
            <input type="text" placeholder="Enter name" name="name" value="{{ $product->name ?? '' }}" />
        </div>
        <div>
            <label>Product price: </label>
            <input type="number" placeholder="Enter price" name="price" value="{{ $product->price ?? '' }}" />
        </div>
        <div>
            <label>Product create_at: </label>
            <input type="date" name="create_at"
                value="{{ !empty($product->create_at) ? $product->create_at : '' }}" />
        </div>
        <div>
            <label>Product Category: </label>
            <select name="category">
                <option value="1" {{ $product->category_id == '1' ? 'selected' : '' }}>Laptop</option>
                <option value="2" {{ $product->category_id == '2' ? 'selected' : '' }}>Phụ kiện</option>
                <option value="3" {{ $product->category_id == '3' ? 'selected' : '' }}>Phone</option>
            </select>
        </div>

        <button>Edit</button>
    </form>
</body>

</html>
