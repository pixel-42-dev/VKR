@extends('master/master')
@section('content')

    <style type="text/css">
        body > section {
            padding: 10rem 0;
            padding-top: 15rem;
        }
        body {
            background-color: #f5f5f5 !important;
        }
    </style>

    <!-- login -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card boxed">
                        <div class="card-header">
                            <ul class="nav nav-tabs nav-fill card-header-tabs lavalamp" id="component-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#component-1-1" role="tab" aria-controls="component-1-1" aria-selected="true">Регистрация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#component-1-2" role="tab" aria-controls="component-1-2" aria-selected="false">Вход</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="component-1-content">
                                <div class="tab-pane fade show active" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
                                    <form method="POST" action="{{ route('registerPost') }}">
                                        @csrf
                                        <div class="row gutter-2">
                                            <div class="col-12">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-label-group">
                                                                <input type="text" id="inputName2" name="nickname" class="form-control form-control-lg" placeholder="First name" required="">
                                                                <label for="inputName2">Логин</label>
                                                            </div>
                                                            @error('nickname')
                                                            <div class="alert alert-danger mt-3">
                                                                <p>{{$message}}</p>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-label-group">
                                                                <input type="email" id="inputEmail2" name="email" class="form-control form-control-lg" placeholder="Email address" required="">
                                                                <label for="inputEmail2">Почта</label>
                                                            </div>
                                                            @error('email')
                                                            {{--                                                                <p>Неправильная почта</p>--}}
                                                            <div class="alert alert-danger mt-3">
                                                                <p>{{$message}}</p>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-label-group">
                                                                <input type="password" id="inputPassword2" name="password" class="form-control form-control-lg" placeholder="Password" required="">
                                                                <label for="inputPassword2">Пароль</label>
                                                            </div>
                                                            @error('password')
                                                            <div class="alert alert-danger mt-3">
                                                                <p>{{$message}}</p>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-label-group">
                                                                <input type="password" id="inputPassword3" name="password_confirmation" class="form-control form-control-lg" placeholder="Password" required="">
                                                                <label for="inputPassword2">Подтвердите пароль</label>
                                                            </div>
                                                            @error('password_confirmation')
                                                            <div class="alert alert-danger mt-3">
                                                                <p>{{$message}}</p>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                            </div>
                                            <div class="custom-control custom-checkbox mt-1">
                                                <input type="checkbox" id="customCheckbox1" name="terms" class="custom-control-input" required>
                                                <label class="custom-control-label text-muted" for="customCheckbox1">Да, я согласен с <a href="" class="underline">Правилами использования</a></label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block">Создать аккаунт</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="component-1-2" role="tabpanel" aria-labelledby="component-1-2">
                                    <form method="POST" action="{{ route('loginPost') }}">
                                        @csrf
                                        <div class="row gutter-2">
                                            <div class="col-12">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-label-group">
                                                                <input type="text" id="inputNameLog" name="nickname" class="form-control form-control-lg" placeholder="Логин" required="">
                                                                <label for="inputNameLog">Логин</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-label-group">
                                                                <input type="password" id="inputPassword" name="password" class="form-control form-control-lg" placeholder="Пароль" required="">
                                                                <label for="inputPassword">Пароль</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
{{--                                            <div class="col-12 text-center">--}}
{{--                                                <a href="" class="underline fs-14">Забыли пароль ?</a>--}}
{{--                                            </div>--}}
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-block">Войти</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
