@extends('master/admin-master')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light admin-second-header">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin', ['page' => 'new']) }}">Новые</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin', ['page' => 'confirmed']) }}">Подтверждённые</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin', ['page' => 'sent']) }}">Отправленные</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin', ['page' => 'delivered']) }}">Полученные</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    @if($orders->total() != 0)
        <h2> Заказы {{ $orders->firstItem() }} - {{ $orders->lastItem() }} из {{ $orders->total() }}</h2>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Телефон</th>
            <th scope="col">Адрес</th>
            <th scope="col">Дата</th>
            <th scope="col">Сумма</th>
            @if($page == 'new')
                <th scope="col" style="min-width: 445px;">Действия</th>
            @elseif($page == 'confirmed')
                <th scope="col" style="min-width: 445px;">Действия</th>
            @elseif($page == 'sent')
                <th scope="col" style="min-width: 291px;">Действия</th>
            @elseif($page == 'delivered')
                <th scope="col">Действия</th>
            @endif
        </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    @if($order->userID == 0)
                        <td>{{$order->userName}}</td>
                    @else
                        <td><a class="text-info" href="{{ route('users.edit', $order->userID) }}">{{$order->userName}}</a></td>
                    @endif
                    <td>{{$order->userPhone}}</td>
                    <td>{{$order->userAddress}}</td>
                    <td>{{$order->created_at->format('H:i d/m/y')}}</td>
                    <td>{{$order->calculatePrice()}}</td>
                    <td>
                        <a href="{{route('orders.edit', $order)}}" class="btn btn-success">Открыть</a>
                        @if($page == 'new')
                            <form action="{{route('orders.destroy', $order)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Отменить</button>
                            </form>
                            <a href="{{ route('order-confirm', ['orderID' => $order->id, 'page' => $page]) }}" class="btn btn-primary">Подтвердить</a>
                        @elseif($page == 'confirmed')
                            <form action="{{route('orders.destroy', $order)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Отменить</button>
                            </form>
                            <a href="{{ route('order-confirm', ['orderID' => $order->id, 'page' => $page]) }}" class="btn btn-primary">Отправлено</a>
                        @elseif($page == 'sent')
                            <a href="{{ route('order-confirm', ['orderID' => $order->id, 'page' => $page]) }}" class="btn btn-primary">Завершить</a>
                        @elseif($page == 'delivered')
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $orders->links() }}
    </div>
</div>

@endsection
