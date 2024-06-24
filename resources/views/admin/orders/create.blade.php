@extends('master/admin-master')
@section('content')

    <div class="container mt-4">
        <h2>Информация о заказе {{ $order->id }}</h2>
        <form action="{{ route('orders.update', $order->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id">ID заказа</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $order->id }}" readonly>
            </div>

            <div class="form-group">
                <label for="userID">ID пользователя</label>
                <input type="text" class="form-control" id="userID" name="userID" value="{{ $order->userID }}" readonly>
            </div>

            <div class="form-group">
                <label for="userName">Имя пользователя</label>
                <input type="text" class="form-control" id="userName" name="userName" value="{{ $order->userName }}" readonly>
            </div>

            <div class="form-group">
                <label for="userPhone">Телефон пользователя</label>
                <input type="text" class="form-control" id="userPhone" name="userPhone" value="{{ $order->userPhone }}" readonly>
            </div>

            <div class="form-group">
                <label for="userAddress">Адрес пользователя</label>
                <input type="text" class="form-control" id="userAddress" name="userAddress" value="{{ $order->userAddress }}" readonly>
            </div>

            <div class="form-group">
                <label for="status">Статус заказа</label>
                <select class="form-control" id="status" name="status">
                    <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Новый</option>
                    <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Подтвержденный</option>
                    <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Отправленный</option>
                    <option value="4" {{ $order->status == 4 ? 'selected' : '' }}>Полученный</option>
                </select>
            </div>

            <div class="form-group">
                <label for="created_at">Дата создания</label>
                <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $order->created_at }}" readonly>
            </div>

            <div class="form-group">
                <label for="updated_at">Дата обновления</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $order->updated_at }}" readonly>
            </div>

            <h3>Товары в заказе</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID товара</th>
                    <th>Название</th>
                    <th>Бренд</th>
                    <th>Цена</th>
                    <th>Размер</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->brand->name }}</td>
                        <td>{{ $product->price }}₽</td>
                        <td>{{ $product->pivot->size }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>

@endsection
