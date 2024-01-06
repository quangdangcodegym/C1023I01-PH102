<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .nav-item a {
            color: black !important;
        }

        .sidebar img {
            max-width: 100%;
        }

        .validation-error {
            color: red;
        }

        .form-error {
            color: red;
        }
    </style>
    <title>Show Edit Product</title>
</head>

<body>
    <div class="container">
        <div class="head-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#">Action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1"
                                    aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn btn-outline-success" type="submit">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="content row">
            <div class="sidebar col-3">
                <img src="https://plus.unsplash.com/premium_photo-1703775439859-02ac42d6e322" alt=""
                    srcset="">
            </div>
            <div class="col-9 row">
                <form class="col-6" method="POST"
                    action="{{ route('admin.updateAdminProduct', ['id' => $product->id]) }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Name: </label>
                        <input value="{{ old('name') ?? $product->name }}" name="name" type="text"
                            class="form-control" placeholder="Enter fullname" />
                        @error('name')
                            <div class="form-error"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Price: </label>
                        <input value="{{ old('price') ?? $product->price }}" name="price" type="number"
                            class="form-control" placeholder="Enter price" />
                        @error('price')
                            <div class="form-error"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Image: </label>
                        <input value="{{ old('img_url') ?? $product->img_url }}" name="img_url" type="text"
                            class="form-control" placeholder="Enter image" />
                        @error('img_url')
                            <div class="form-error"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Image: </label>
                        <select class="form-select" name="category_id">
                            @foreach ($categories as $cate)
                                <option value="{{ $cate->id }}"
                                    {{ old('category_id') == $cate->id || $product->category_id == $cate->id ? 'selected' : '' }}>
                                    {{ $cate->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="form-error"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary">Save</button>
                        <a class="btn btn-dark" href="{{ route('admin.showAdminProduct') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
