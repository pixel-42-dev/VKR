@extends('master/admin-master')
@section('content')
    <style>
        .table-actions {
            min-width: 150px;
        }
    </style>

    <div class="container mt-4">
        <h2>Категории</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">code</th>
                <th scope="col">Описание</th>
                <th scope="col">Пол</th>
                <th scope="col" style="min-width: 210px;">Действия</th>
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
                @endphp

                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->code}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$gender}}</td>
                    <td>
                        <button class="btn btn-primary">Изменить</button>
                        <button class="btn btn-danger">Удалить</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('categories.create')}}" class="btn btn-success">Добавить категорию</a>
    </div>

@endsection
