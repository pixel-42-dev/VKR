@extends('master/admin-master')
@section('content')
    <style>
        .table-actions {
            min-width: 150px;
        }
    </style>

    <div class="container mt-4">
        <h2> Товары {{ $products->firstItem() }} - {{ $products->lastItem() }} из {{ $products->total() }}</h2>
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Описание</th>
                <th scope="col">Категория</th>
                <th scope="col">Брэнд</th>
                <th scope="col">Цена</th>
                <th scope="col">Trend</th>
                <th scope="col" style="min-width: 447px;">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr class="{{ $product->category ? '' : 'table-danger' }}">
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category['name'] }}</td>
                    <td>{{ $product->brand['name'] }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->trend }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-success">Изменить</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены, что хотите удалить товар?')">Удалить</button>
                        </form>
                        <a href="{{ route('products-add', ['product_id' => $product->id]) }}" class="btn btn-primary">Поступления</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>

        <a href="{{ route('products.create') }}" class="btn btn-success" style="margin-bottom: 100px;">Добавить товар</a>
    </div>
@endsection
