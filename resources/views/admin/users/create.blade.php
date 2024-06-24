@extends('master/admin-master')
@section('content')

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Профиль пользователя: <b>{{ $user->nickname }}</b></h2>
            <a href="{{route('users.index')}}" class="btn btn-secondary">Назад</a>
        </div>
        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nickname">Никнейм</label>
                <input type="text" class="form-control" id="nickname" name="nickname" value="{{ $user->nickname }}" required>
            </div>

            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="surname">Фамилия</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
            </div>

            <div class="form-group">
                <label for="address">Адрес</label>
                <textarea class="form-control" id="address" name="address" rows="3">{{ $user->address }}</textarea>
            </div>

            <div class="form-group">
                <label for="isAdmin">Права администратора</label>
                <select class="form-control" id="isAdmin" name="isAdmin">
                    <option value="1" {{ $user->isAdmin == 1 ? 'selected' : '' }}>Да</option>
                    <option value="0" {{ $user->isAdmin == 0 ? 'selected' : '' }}>Нет</option>
                </select>
            </div>

            <div class="form-group">
                <label for="created_at">Дата регистрации</label>
                <input type="text" class="form-control" id="created_at" value="{{ $user->created_at }}" readonly>
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>

        <!-- Таблица заказов пользователя -->
        <br>
        <br>
        <br>

        <div class="col-md-9 mx-auto">
            <h3>Заказы пользователя</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Дата заказа</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Итого</th>
                    <th scope="col">Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->created_at->format('H:i d/m/y') }}</td>
                        <td>
                            @if($order->status == 1)
                                В обработке
                            @elseif($order->status == 2)
                                Подтверждён
                            @elseif($order->status == 3)
                                В пути
                            @elseif($order->status == 4)
                                Доставлен
                            @endif
                        </td>
                        <td>{{ $order->calculatePrice() }} ₽</td>
                        <td>
                            <a href="{{ route('orders.edit', $order) }}" class="btn btn-success">Открыть</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
