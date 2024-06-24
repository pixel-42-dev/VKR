@extends('master/admin-master')

@section('content')

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Поступления для: {{ $product->name }}</h2>
            <a href="{{route('products.index')}}" class="btn btn-secondary">Назад</a>
        </div>
        <form action="{{ route('addPost', $product->id) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="product_code">ID товара</label>
                <input type="text" class="form-control" id="product_code" name="product_code" value="{{$product->id}}" readonly>
            </div>

            <div class="form-group">
                <label for="product_name">Название товара</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="{{$product->name}}" readonly>
            </div>

            <div class="form-group">
                <label for="product_category">Категория товара</label>
                <input type="text" class="form-control" id="product_category" name="product_category" value="{{$product->category->name}}" readonly>
            </div>

            <h4>Размеры товара и количество:</h4>

            @foreach($sizes as $size)
                <div class="form-group">
                    <label class="size-label" for="size_{{$size->id}}">{{$size->clothes_size}}</label>
                    <input type="number" class="form-control" id="size_{{$size->id}}" name="sizes[{{$size->id}}]" value="0" min="0">
                </div>
            @endforeach

            <button type="submit" class="btn btn-success admin-last-object">Сохранить поставки</button>
        </form>
    </div>

@endsection
