@extends('master/master')
@section('content')

    <style type="text/css">
        body > section {
            padding: 8rem 0;
        }
        body {
            background-color: #f5f5f5 !important;
        }
    </style>

    <!-- content -->
    <section>
        <div class="container">
            <div class="row gutter-1 gutter-md-2">
                <div class="col-lg-4">
                    <aside class="bg-white p-2 p-md-3">
                        <h3 class="fs-20 text-uppercase text-muted mb-2">Добро пожаловать, {{ Auth::user()->nickname }}</h3>
                        <div class="nav nav-menu flex-column lavalamp" id="sidebar-1" role="tablist">
                            <a class="nav-link {{ $page == 1 ? 'active' : '' }}" data-toggle="tab" href="#sidebar-1-1" role="tab" aria-controls="sidebar-1" aria-selected="true">
                                <i class="fs-24 icon-box"></i> Заказы
                            </a>
                            <a class="nav-link {{ $page == 2 ? 'active' : '' }}" data-toggle="tab" href="#sidebar-1-2" role="tab" aria-controls="sidebar-1-2" aria-selected="false">
                                <i class="fs-24 icon-heart"></i> Избранное
                            </a>
                            <a class="nav-link {{ $page == 3 ? 'active' : '' }}" data-toggle="tab" href="#sidebar-1-3" role="tab" aria-controls="sidebar-1-3" aria-selected="false">
                                <i class="fs-24 icon-user"></i> Личные данные
                            </a>
                            <a class="nav-link {{ $page == 4 ? 'active' : '' }}" data-toggle="tab" href="#sidebar-1-4" role="tab" aria-controls="sidebar-1-4" aria-selected="false">
                                <i class="fs-24 icon-lock"></i> Сменить пароль
                            </a>
                            {{-- <a class="nav-link {{ $page==5 ? 'active' : '' }}" data-toggle="tab" href="#sidebar-1-5" role="tab" aria-controls="sidebar-1-5" aria-selected="false"><i class="fs-24 icon-home"></i> Адреса</a> --}}
                        </div>
                        <div class="mt-4">
                            <form id="logout-form" action="{{ route('logoutrPost') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-block">
                                    Выйти
                                </button>
                            </form>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8">
                    <div class="bg-white p-2 p-md-3">
                        <div class="tab-content" id="myTabContent">
                            <!-- orders -->
                            <div class="tab-pane {{ $page == 1 ? 'show active' : 'fade' }}" id="sidebar-1-1" role="tabpanel" aria-labelledby="sidebar-1-1">
                                <div class="row">
                                    <div class="col">
                                        <h2>Заказы</h2>
                                    </div>
                                </div>
                                <div class="row gutter-2">
                                    @foreach($orders as $order)
                                        <div class="col-12">
                                            <div class="card card-data bordered">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h2 class="card-title fs-18"><a href="{{ route('order-details', ['id' => $order->id]) }}">Заказ номер {{ $order->id }}</a></h2>
                                                        </div>
                                                        <div class="col text-right">
                                                        <span class="dropdown">
                                                            <button class="btn btn-lg btn-white btn-ico" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button">
                                                                <i class="icon-more-vertical"></i>
                                                            </button>
                                                            <span class="dropdown-menu dropdown-menu-padding" aria-labelledby="dropdown-1">
                                                                <form action="{{ route('orders-cancel', ['order' => $order->id]) }}" method="POST">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-lg btn-white btn-order-cancel">
                                                                        Отменить
                                                                    </button>
                                                                </form>
                                                            </span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="order-preview">
                                                        @foreach($order->products as $product)
                                                            @if($product->trashed())
                                                                <li>
                                                                    <a href="" title="{{ $product->name }}" data-toggle="tooltip" data-placement="top">
                                                                        <img class="product-order-listing" src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt="{{ $product->name }}">
                                                                    </a>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <a href="{{ route('product', ['number' => $product->id]) }}" title="{{ $product->name }}" data-toggle="tooltip" data-placement="top">
                                                                        <img class="product-order-listing" src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt="{{ $product->name }}">
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="order-meta">
                                                        <li>
                                                            <h5 class="order-meta-title">Заказ #</h5>
                                                            <span>{{ $order->id }}</span>
                                                        </li>
                                                        <li>
                                                            <h5 class="order-meta-title">Дата заказа</h5>
                                                            <span>{{ $order->created_at->format('H:i d.m.Y') }}</span>
                                                        </li>
                                                        <li>
                                                            <h5 class="order-meta-title">Итого</h5>
                                                            <span>{{ $order->calculatePrice() }} ₽</span>
                                                        </li>
                                                        <li>
                                                            <h5 class="order-meta-title">Статус</h5>
                                                            @php
                                                                if ($order->status == 1) {
                                                                    $status = "В обработке";
                                                                } elseif ($order->status == 2) {
                                                                    $status = "Подтверждён";
                                                                } elseif ($order->status == 3) {
                                                                    $status = "В пути";
                                                                } else {
                                                                    $status = "Получен";
                                                                }
                                                            @endphp
                                                            <span class="text-muted">{{ $status }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="tab-pane {{ $page == 2 ? 'show active' : 'fade' }}" id="sidebar-1-2" role="tabpanel" aria-labelledby="sidebar-1-2">
                                <div class="row align-items-end">
                                    <div class="col">
                                        <h2>Избранное</h2>
                                    </div>
                                    <div class="col text-right">
                                        <form id="clearFavoritesForm" action="{{ route('favorites-clear') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="underline" style="border: none; background: none; padding: 0; cursor: pointer;">
                                                <i class="">Очистить</i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="row gutter-2">
                                    @foreach(Auth::user()->favorites as $favoriteProduct)
                                        <div class="col-md-6" id="favorite-product-{{ $favoriteProduct->id }}">
                                            <div class="card card-product">
                                                <figure class="card-image">
                                                    <form action="{{ route('favorites-remove', ['product_id' => $favoriteProduct->id]) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="action icon-cross-container favorite-del-container">
                                                            <i class="icon-x"></i>
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('product', ['number' => $favoriteProduct->id]) }}">
                                                        <img class="home-favorive-images" src="{{ \Illuminate\Support\Facades\Storage::url($favoriteProduct->image1) }}" alt="Image">
                                                        <img class="home-favorive-images" src="{{ \Illuminate\Support\Facades\Storage::url($favoriteProduct->image2) }}" alt="Image">
                                                    </a>
                                                </figure>
                                                <div class="card-footer">
                                                    <h3 class="card-title"><a href="">{{ $favoriteProduct->name }}</a></h3>
                                                    <span class="price">{{ $favoriteProduct->price }} ₽</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Личные данные -->
                            <div class="tab-pane {{ $page == 3 ? 'show active' : 'fade' }}" id="sidebar-1-3" role="tabpanel" aria-labelledby="sidebar-1-3">
                                <div class="row">
                                    <div class="col">
                                        <h2>Личные данные</h2>
                                    </div>
                                </div>

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form action="{{ route('account-update') }}" method="POST">
                                    @csrf
                                    <fieldset class="mb-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="inputName2" class="form-control form-control-lg @error('nickname') is-invalid @enderror" placeholder="Никнейм" name="nickname" required value="{{ old('nickname', Auth::user()->nickname) }}">
                                                    <label for="inputName2">Никнейм</label>
                                                    @error('nickname')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="inputName3" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Имя" name="name" required value="{{ old('name', Auth::user()->name) }}">
                                                    <label for="inputName3">Имя</label>
                                                    @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="surname2" class="form-control form-control-lg @error('surname') is-invalid @enderror" placeholder="Фамилия" name="surname" required value="{{ old('surname', Auth::user()->surname) }}">
                                                    <label for="surname2">Фамилия</label>
                                                    @error('surname')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mb-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="inputAddress" class="form-control form-control-lg @error('address') is-invalid @enderror" placeholder="Адрес" name="address" required value="{{ old('address', Auth::user()->address) }}">
                                                    <label for="inputAddress">Адрес</label>
                                                    @error('address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mb-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="email" id="inputEmail" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Почта" name="email" required value="{{ old('email', Auth::user()->email) }}">
                                                    <label for="inputEmail">Почта</label>
                                                    @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="mobilePhone" class="form-control form-control-lg @error('phone') is-invalid @enderror" placeholder="Мобильный телефон" name="phone" required value="{{ old('phone', Auth::user()->phone) }}">
                                                    <label for="mobilePhone">Мобильный телефон</label>
                                                    @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <!-- change password -->
                            <div class="tab-pane {{ $page == 4 ? 'show active' : 'fade' }}" id="sidebar-1-4" role="tabpanel" aria-labelledby="sidebar-1-4">
                                <div class="row">
                                    <div class="col">
                                        <h2>Сменить пароль</h2>
                                    </div>
                                </div>


                                <form method="POST" action="{{ route('changePassword') }}">
                                    @csrf
                                    @if(session('success'))
                                        <div class="alert alert-success mb-3">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        <div class="alert alert-danger mb-3">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <fieldset class="mb-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="password" id="currentPassword" name="current_password" class="form-control form-control-lg" placeholder="Текущий пароль" required>
                                                    <label for="currentPassword">Текущий пароль</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="password" id="newPassword" name="new_password" class="form-control form-control-lg" placeholder="Новый пароль" required>
                                                    <label for="newPassword">Новый пароль</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="password" id="confirmNewPassword" name="new_password_confirmation" class="form-control form-control-lg" placeholder="Подтвердите новый пароль" required>
                                                    <label for="confirmNewPassword">Подтвердите новый пароль</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary">Сохранить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
