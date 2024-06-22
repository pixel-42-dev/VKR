@extends('master/master')
@section('content')

    <style type="text/css">
        body > section {
            padding: 7rem 0;
        }
        body {
            background-color: #f5f5f5 !important;
        }
    </style>

    <!-- cart -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Корзина</h1>
                </div>
            </div>

            <div class="row gutter-3 gutter-lg-1">

                <!-- content -->
                <div class="col">
                    <div class="bg-white cart-item-list p-2 p-lg-3 mb-1">

                        @foreach($order->products as $product)
                            <div class="cart-item">
                                <a href="{{ route('product', ['number' => $product->id]) }}" class="cart-item-image"><img src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt="Image"></a>
                                <div class="cart-item-body">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="cart-item-title">{{$product->name}}</h5>
                                                    <small class="cart-item-subtitle">{{$product->brand->name}}</small>
                                                    <ul class="cart-item-meta">
                                                        <li>{{$product->price}}₽</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list list--horizontal">
                                                        <li class="mr-2">
                                                            <div class="dropdown">
                                                                <a class="dropdown-toggle" href="#!" role="button" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Размер <span>M</span>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 text-right">
                                            <form action="{{ route('basketRemove', ['id' => $product->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-link"><i class="icon-x fas fa-times"></i></button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a href="{{ route('listing', ['gender' => 'all']) }}" class="underlined">Продолжить покупки</a>
                </div>


                <!-- sidebar -->
                <aside class="col-lg-4">
                    <div class="bg-white p-2 p-lg-3">
                        <h2 class="mb-3 text-uppercase fs-20">Итого</h2>
                        <div class="input-combined mb-2">
                            <input type="text" class="form-control" placeholder="Промокод" aria-label="Promo code" aria-describedby="button-addon2">
                            <button class="btn btn-white" type="button" id="button-addon2">Применить</button>
                            <span class="input-combined_indicator"></span>
                        </div>
                        <ul class="list-group list-group-minimal mb-3">
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
                                <?php $final = $order->calculatePrice() + 200?>
                                <span>{{$final}} ₽</span>
                            </li>
                        </ul>
                        <a href="{{route('checkout')}}" class="btn btn-primary btn-block">Оформить заказ</a>
                    </div>
                </aside>
            </div>
        </div>
    </section>


@endsection
