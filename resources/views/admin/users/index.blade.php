@extends('master/admin-master')
@section('content')
    <style>
        .table-actions {
            min-width: 150px;
        }
    </style>

    <div class="container mt-4">
        <h2> Пользователи {{ $users->firstItem() }} - {{ $users->lastItem() }} из {{ $users->total() }}</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ник</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Почта</th>
                <th scope="col">Телефон</th>
                <th scope="col">Адрес</th>
                <th scope="col" style="min-width: 284px;">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->nickname}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>
                        <a href="{{route('users.edit', $user)}}" class="btn btn-success">Профиль</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


        <div class="d-flex justify-content-center">
            {{ $users->links() }}
        </div>
    </div>
@endsection
