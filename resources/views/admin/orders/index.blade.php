@extends('master/admin-master')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light admin-second-header">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="">Новые</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Подтверждённые</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Отправленные</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Полученные</a>
            </li>
        </ul>
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
            <th scope="col">Адрес</th>
            <th scope="col">Дата</th>
            <th scope="col">Сумма</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->userName}}</td>
                    <td>{{$order->userPhone}}</td>
                    <td>{{$order->userAddress}}</td>
                    <td>{{$order->created_at->format('H:i d/m/y')}}</td>
                    <td>{{$order->calculatePrice()}}</td>
                    <td>
                        <button class="btn btn-primary">Изменить</button>
                        <button class="btn btn-danger">Удалить</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
