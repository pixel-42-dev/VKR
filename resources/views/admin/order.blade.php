@extends('master/admin-master')
@section('content')

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
{{--        <tr>--}}
{{--            <th scope="row">1</th>--}}
{{--            <td>Иванов Иван</td>--}}
{{--            <td>123-456-7890</td>--}}
{{--            <td>2024-06-10</td>--}}
{{--            <td>$100</td>--}}
{{--            <td>--}}
{{--                <button class="btn btn-primary">Изменить</button>--}}
{{--                <button class="btn btn-danger">Удалить</button>--}}
{{--            </td>--}}
{{--        </tr>--}}
            @foreach($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->user->nickname}}</td>
                    <td></td>
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
