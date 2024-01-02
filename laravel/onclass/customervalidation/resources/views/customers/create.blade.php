<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .navbar-brand img {
            width: 140px;
        }

        .cw-15 {
            width: 15%;
        }

        .cp {
            margin-left: (var(--bs-gutter-x) * 0.5);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="head-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="https://cdn.hanoi.codegym.vn/wp-content/uploads/sites/7/2022/05/logor.jpg"
                            alt="" srcset="" />
                    </a>

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
        <div class="main-content row mt-3">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">First item</li>
                    <li class="list-group-item">Second item</li>
                    <li class="list-group-item">Third item</li>
                </ul>
            </div>
            <div class="col-9">
                <form method="POST" action="{{ route('customer.saveCustomer') }}">
                    @csrf
                    <h4>Create customer</h4>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label" for="">Fullname:</label>
                            <input name="fullname" value="{{ old('fullname') }}"
                                class="form-control {{ $errors->has('fullname') ? 'is-invalid' : '' }}" type="text"
                                placeholder="Enter fullname" />
                            @error('fullname')
                                <label class="invalid-feedback"> {{ $message }}</label>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="">Email:</label>
                            <input name="email" class="form-control" type="text" placeholder="Enter email" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label" for="">Phone:</label>
                            <input name="phone" class="form-control" type="text" placeholder="Enter phone" />
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="">Gender:</label>
                            <div class="d-flex">
                                <div class="form-check me-2">
                                    <input class="form-check-input" type="radio" name="gender" id="genderMale" />
                                    <label class="form-check-label" for="genderMale">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="genderFemale"
                                        checked />
                                    <label class="form-check-label" for="genderFemale">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label" for="">Customer type:</label>
                            <select class="form-select" name="customer_type">
                                <option>VIP</option>
                                <option>Super VIP</option>
                                <option>Normal</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 cp">
                        <button class="btn btn-primary cw-15 me-2">
                            Create
                        </button>
                        <button class="btn btn-dark cw-15">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
