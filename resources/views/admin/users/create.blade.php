@extends('master/admin-master')
@section('content')

    <div class="container mt-4">
        <h2>Профиль пользователя <b>{{ $user->nickname }}</b></h2>
        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nickname">Никнейм</label>
                <input type="text" class="form-control" id="nickname" name="nickname" value="{{ $user->nickname }}" required>
            </div>

            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="surname">Фамилия</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
            </div>

            <div class="form-group">
                <label for="address">Адрес</label>
                <textarea class="form-control" id="address" name="address" rows="3">{{ $user->address }}</textarea>
            </div>

            <div class="form-group">
                <label for="isAdmin">Права администратора</label>
                <select class="form-control" id="isAdmin" name="isAdmin">
                    <option value="1" {{ $user->isAdmin == 1 ? 'selected' : '' }}>Да</option>
                    <option value="0" {{ $user->isAdmin == 0 ? 'selected' : '' }}>Нет</option>
                </select>
            </div>

            <div class="form-group">
                <label for="created_at">Дата регистрации</label>
                <input type="text" class="form-control" id="created_at" value="{{ $user->created_at }}" readonly>
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>

@endsection
