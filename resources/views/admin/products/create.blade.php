@extends('master/admin-master')
@section('content')
    @isset($product)   {{-- Редактирование --}}

    <div class="container mt-4">
        <h2>Редактировать товар {{$product->name}}</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="code">Код товара</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ $product->code }}" required>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Категория</label>
                <select class="form-control" id="category" name="categoryID" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->categoryID == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="brand">Бренд</label>
                <select class="form-control" id="brand" name="BrandID" required>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ $product->BrandID == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>

    @else   {{-- Добавление --}}

    <div class="container mt-4">
        <h2>Добавить новый товар</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="code">Код товара</label>
                <input type="text" class="form-control" id="code" name="code" required>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Категория</label>
                <select class="form-control" id="category" name="categoryID" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="brand">Бренд</label>
                <select class="form-control" id="brand" name="BrandID" required>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-success">Добавить товар</button>
        </form>
    </div>

    @endisset
@endsection
