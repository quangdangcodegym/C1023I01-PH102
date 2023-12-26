<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        {{ csrf_field() }}
        <label>Tuổi: </label>
        <input type="number" name="age" placeholder="Age" />
        <label>{{ $str?? ""}}</label>

        <a href="{{ route('Hello')}}">Xin chào</a>
        <button>Gửi</button>
    </form>
</body>

</html>