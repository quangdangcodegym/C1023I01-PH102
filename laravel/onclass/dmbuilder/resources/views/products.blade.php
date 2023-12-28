<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products page</title>
</head>

<body>
    <a href="{{ route('product.showAddProduct') }}"><button>Create</button></a>
    <table>
        <thead>
            <tr>
                <td>Product Name</td>
                <td>Price</td>
                <td>Date</td>
                <td>Category</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $p)
                <tr>
                    <td>
                        <a href="{{ route('product.showEditProduct', [$p->id]) }}">{{ $p->name }} </a>
                    </td>
                    <td>{{ $p->price }}</td>
                    <td>{{ $p->create_at }}</td>
                    <td>{{ $p->cate_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
