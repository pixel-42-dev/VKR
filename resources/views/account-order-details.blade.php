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
                            <a class="active" href="{{ route('settings', ['page' => 1]) }}" role="tab" aria-controls="sidebar-1" aria-selected="true">
                                <i class="fs-24 icon-box"></i> Заказы
                            </a>
                            <a href="{{ route('settings', ['page' => 2]) }}" role="tab" aria-controls="sidebar-1-2" aria-selected="false">
                                <i class="fs-24 icon-heart"></i> Избранное
                            </a>
                            <a href="{{ route('settings', ['page' => 3]) }}" role="tab" aria-controls="sidebar-1-3" aria-selected="false">
                                <i class="fs-24 icon-user"></i> Личные данные
                            </a>
                            <a href="{{ route('settings', ['page' => 4]) }}" role="tab" aria-controls="sidebar-1-4" aria-selected="false">
                                <i class="fs-24 icon-lock"></i> Сменить пароль
                            </a>
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

                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="tab-pane fade show active" id="sidebar-1-1" role="tabpanel" aria-labelledby="sidebar-1-1">
                                <div class="row align-items-end">
                                    <div class="col">
                                        <nav aria-label="breadcrumb">
                                            <div class="row align-items-center">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="{{ route('settings', ['page' => 1]) }}">Заказы</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">{{$order->id}}</li>
                                                </ol>
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
                                        </nav>
                                    </div>
                                </div>

                                <!-- meta -->
                                <div class="row">
                                    <div class="col">
                                        <div class="bordered p-3">
                                            <ul class="order-meta">
                                                <li>
                                                    <h5 class="order-meta-title">Заказ #</h5>
                                                    <span>{{$order->id}}</span>
                                                </li>
                                                <li>
                                                    <h5 class="order-meta-title">Дата заказа</h5>
                                                    <span>{{$order->created_at->format('H:i d/m/y')}}</span>
                                                </li>
                                                <li>
                                                    <h5 class="order-meta-title">Стоимость</h5>
                                                    <span>{{$order->calculatePrice() + 200}} ₽</span>
                                                </li>
                                                <li>
                                                    <h5 class="order-meta-title">Статус</h5>
                                                    <?php
                                                    if ($order->status == 1) {
                                                        $status = "В обработке";
                                                    } elseif ($order->status == 2) {
                                                        $status = "Подтверждён";
                                                    } elseif ($order->status == 3) {
                                                        $status = "В пути";
                                                    } else {
                                                        $status = "Получен";
                                                    }
                                                    ?>
                                                    <span class="text-muted">{{$status}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                                <!-- products -->
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="mb-1 text-uppercase fs-20">{{ $order->products->count() }} товара(ов)</h2>
                                    </div>
                                    <div class="col-12">
                                        <div class="bordered cart-item-list p-3">
                                            @foreach($order->products as $product)
                                                <div class="cart-item">
                                                    @if(!$product->trashed())
                                                        <a href="{{ route('product', ['number' => $product->id]) }}" class="cart-item-image">
                                                            <img src="{{ Storage::url($product->image1) }}" alt="Image">
                                                        </a>
                                                    @else
                                                        <img src="{{ Storage::url($product->image1) }}" alt="Image">
                                                    @endif
                                                    <div class="cart-item-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="cart-item-title">{{ $product->name }}</h5>
                                                                <small class="cart-item-subtitle">{{ $product->brand->name }}</small>
                                                            </div>
                                                            <div class="col text-right">
                                                                <ul class="cart-item-meta">
                                                                    <li>{{ $product->price }} ₽</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>


                                <!-- order total -->
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-uppercase fs-20 mb-1">Итоговая стоимость</h2>
                                    </div>
                                    <div class="col-12">
                                        <div class="bordered p-3">
                                            <ul class="list-group list-group-minimal">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Товары
                                                    <span>{{$order->calculatePrice()}} ₽</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Доставка
                                                    <span>200 ₽</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center text-red">
                                                    Скидка
                                                    <span class="text-red">0</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-bold">
                                                    Итого
                                                    <span>{{$order->calculatePrice() + 200}} ₽</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- delivery details -->
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="mb-1 text-uppercase fs-20">Информация о доставке</h2>
                                    </div>
                                    <div class="col-12">
                                        <div class="bordered p-3">
                                            <h5 class="eyebrow text-muted">Адрес доставки</h5>
                                            <p>{{$order->userAddress}}</p>
                                            <h5 class="eyebrow text-muted">Имя получателя</h5>
                                            <p>{{$order->userName}}</p>
                                            <h5 class="eyebrow text-muted">Телефон получателя</h5>
                                            <p>{{$order->userPhone}}</p>
                                            <h5 class="eyebrow text-muted">Способ доставки</h5>
                                            <p class="card-text">Стандартная доставка курьером</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
