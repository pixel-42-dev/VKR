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
                <a class="nav-link" href="#">Заказы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Товары</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Категории</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{route('index')}}">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Выход</button>
        </form>
    </div>
</nav>
<div class="container mt-4">
    <h2>Заказы</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Телефон</th>
            <th scope="col">Дата</th>
            <th scope="col">Сумма</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Иванов Иван</td>
            <td>123-456-7890</td>
            <td>2024-06-10</td>
            <td>$100</td>
            <td>
                <button class="btn btn-primary">Изменить</button>
                <button class="btn btn-danger">Удалить</button>
            </td>
        </tr>
        <!-- Добавьте другие строки заказов сюда -->
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
