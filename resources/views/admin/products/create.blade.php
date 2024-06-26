@extends('master/admin-master')
@section('content')
    @isset($product)   {{-- Редактирование --}}

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Редактировать товар: {{ $product->name }}</h2>
            <a href="{{route('products.index')}}" class="btn btn-secondary">Назад</a>
        </div>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
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
            <div class="form-group">
                <label for="image1">Изображение 1</label>
                <input type="file" class="form-control" id="image1" name="image1">
            </div>
            <div class="form-group">
                <label for="image2">Изображение 2</label>
                <input type="file" class="form-control" id="image2" name="image2">
            </div>
            <div class="form-group">
                <label for="image3">Изображение 3</label>
                <input type="file" class="form-control" id="image3" name="image3">
            </div>
            <div class="form-group">
                <label for="trend">Трендовый товар</label>
                <input type="checkbox" id="trend" name="trend" value="1" {{ $product->trend ? 'checked' : '' }}>
            </div>

            <h4>Размеры товара и количество:</h4>

            @foreach($sizes as $size)
                <div class="form-group">
                    <label class="size-label" for="current_size_{{ $size->id }}">{{$size->clothes_size}}</label>
                    <input type="number" class="form-control" id="current_size_{{ $size->id }}" value="{{ $size->count ?? 0 }}" readonly>
                </div>
            @endforeach

            <button type="submit" class="btn btn-success admin-last-object">Сохранить</button>
        </form>
    </div>

    @else   {{-- Добавление --}}

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Добавить новый товар</h2>
            <a href="{{route('products.index')}}" class="btn btn-secondary">Назад</a>
        </div>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" required>
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
            <div class="form-group">
                <label for="image1">Изображение 1</label>
                <input type="file" class="form-control" id="image1" name="image1">
            </div>
            <div class="form-group">
                <label for="image2">Изображение 2</label>
                <input type="file" class="form-control" id="image2" name="image2">
            </div>
            <div class="form-group">
                <label for="image3">Изображение 3</label>
                <input type="file" class="form-control" id="image3" name="image3">
            </div>
            <div class="form-group">
                <label for="trend">Трендовый товар</label>
                <input type="checkbox" id="trend" name="trend" value="1">
            </div>
            <button type="submit" class="btn btn-success admin-last-object">Добавить товар</button>
        </form>
    </div>

    @endisset
@endsection
