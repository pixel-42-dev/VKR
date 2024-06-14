@extends('master/admin-master')
@section('content')
    <style>
        .table-actions {
            min-width: 150px;
        }
    </style>


    <div class="container mt-4">
        <h2>Товары</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Код</th>
                <th scope="col">Описание</th>
                <th scope="col">Категория</th>
                <th scope="col">Брэнд</th>
                <th scope="col">Цена</th>
                <th scope="col" style="min-width: 210px;">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->category['name']}}</td>
                    <td>{{$product->brand['name']}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{route('products.edit', $product)}}" class="btn btn-success">Изменить</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('products.create')}}" class="btn btn-success" style="margin-bottom: 100px;">Добавить товар</a>
    </div>

@endsection
