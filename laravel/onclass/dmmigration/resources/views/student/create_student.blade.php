<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form method="POST" action="" class="col-6">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name </label>
                <input class="form-control" type="text" name="name" placeholder="Enter Student Name" />
            </div>
            <div class="mb-3">
                <label class="form-label">Phone </label>
                <input class="form-control" type="text" name="phone" placeholder="Enter Student Name" />
            </div>
            <div class="mb-3">
                <label class="form-label">Classname </label>
                <select name="classname_id" class="form-select">
                    @foreach ($classnames as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button class="btn btn-primary">Create</button>
                <button class="btn btn-dark">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>
