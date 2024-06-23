@extends('master/admin-master')
@section('content')

    <div class="container mt-4">
        <h2>Категории</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Тип</th>
                <th scope="col">Описание</th>
                <th scope="col">Пол</th>
                <th scope="col" style="min-width: 284px;">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                @php
                    if ($category->forMen == 1) {
                        $gender = 'Мужская';
                    } else {
                        $gender = 'Женская';
                    }
                    if ($category->code == 1) {
                        $type = 'Одежда';
                    } elseif ($category->code == 2) {
                        $type = 'Обувь';
                    } else {
                        $type = 'Аксесуары';
                    }
                @endphp

                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$type}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$gender}}</td>
                    <td>
                        <a href="{{route('categories.edit', $category)}}" class="btn btn-success">Изменить</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('categories.create')}}" class="btn btn-success" style="margin-bottom: 100px;">Добавить категорию</a>
    </div>

@endsection
