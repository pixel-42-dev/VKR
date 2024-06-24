@extends('master/admin-master')
@section('content')
@isset($category)   {{-- Редактирование --}}

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Редактировать категорию: <b>{{$category->name}}</b></h2>
            <a href="{{route('categories.index')}}" class="btn btn-secondary">Назад</a>
        </div>
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" required>
            </div>
            <div class="form-group">
                <label for="code">Тип</label>
                <select class="form-control" id="code" name="code" required>
                    <option value="1" {{ $category->code == 1 ? 'selected' : '' }}>Одежда</option>
                    <option value="2" {{ $category->code == 2 ? 'selected' : '' }}>Обувь</option>
                    <option value="3" {{ $category->code == 3 ? 'selected' : '' }}>Аксесуары</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{$category->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="forMen">Пол</label>
                <select class="form-control" id="forMen" name="forMen" required>
                    <option value="1" {{ $category->forMen == 1 ? 'selected' : '' }}>Мужская</option>
                    <option value="0" {{ $category->forMen == 0 ? 'selected' : '' }}>Женская</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success admin-last-object">Сохранить</button>
        </form>
    </div>

@else   {{-- Добавление --}}

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Добавить новую категорию</h2>
            <a href="{{route('categories.index')}}" class="btn btn-secondary">Назад</a>
        </div>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="code">Тип</label>
                <select class="form-control" id="code" name="code" required>
                    <option value="1">Одежда</option>
                    <option value="2">Обувь</option>
                    <option value="3">Аксесуары</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="forMen">Пол</label>
                <select class="form-control" id="forMen" name="forMen" required>
                    <option value="1">Мужская</option>
                    <option value="0">Женская</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success admin-last-object">Добавить категорию</button>
        </form>
    </div>

@endisset
@endsection
