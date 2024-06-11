<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{--    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}" />--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />--}}
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Администратор</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin')}}">Заказы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Товары</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('categories.index')}}">Категории</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Пользователи</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{route('index')}}">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Выход</button>
        </form>
    </div>
</nav>


@yield('content')


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
