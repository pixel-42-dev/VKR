@extends('master/master')
@section('content')

    <style type="text/css">
        body > section {
            padding: 7rem 0;
        }
        body {
            background-color: #f5f5f5 !important;
        }
        #map {
            margin-top: 20px;
            width: 100%;
            height: 400px;
        }
    </style>

    <!-- checkout -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Оформление заказа</h1>
                </div>
            </div>
            <div class="row gutter-1">
                <div class="col">
                    <form action="{{ route('basketConfirm') }}" method="POST">
                        @csrf
                        <div class="bg-white p-2 p-lg-3 mb-1">
                            <div class="row gutter-1 align-items-center">
                                <div class="col-md-6">
                                    <h2 class="text-uppercase fs-20">Информация для доставки</h2>
                                </div>
                            </div>

                            <fieldset class="mb-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <input type="text" id="inputName2" name="name" class="form-control form-control-lg" placeholder="Name" required="" value="{{ Auth::check() ? Auth::user()->name : '' }}">
                                            <label for="inputName2">Имя</label>
                                        </div>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <input type="text" id="inputPhone" name="phone" class="form-control form-control-lg" placeholder="телефон" required="" value="{{ Auth::check() ? Auth::user()->phone : '' }}">
                                            <label for="phone">Телефон</label>
                                        </div>
                                        @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mb-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <input type="text" id="inputAddress" name="address" class="form-control form-control-lg" placeholder="Address" required="" value="{{ Auth::check() ? Auth::user()->address : '' }}">
                                            <label for="inputAddress">Адрес</label>
                                        </div>
                                        @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="mb-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="map"></div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <!-- place order -->
                        <div class="bg-white p-2 p-md-3">
                            <button type="submit" class="btn btn-lg btn-primary btn-block mb-2">Оформить заказ</button>
                        </div>
                    </form>
                </div>

                <!-- sidebar -->
                <aside class="col-lg-5">
                    <div class="bg-white p-2 p-lg-3">
                        <h2 class="mb-3 text-uppercase fs-20">Итого</h2>
                        @foreach($order->products as $product)
                            <div class="cart-item">
                                <a href="{{ route('product', ['number' => $product->id]) }}" class="cart-item-image"><img src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt="Image"></a>
                                <div class="cart-item-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <h5 class="cart-item-title">{{$product->name}}</h5>
                                            <ul class="list list--horizontal fs-14">
                                                <li>{{$product->price}}₽</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <hr class="my-3"/>
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
                                <?php $final = $order->calculatePrice() + 200?>
                                <span>{{$final}} ₽</span>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=7d846d95-6905-4435-9040-64b65faaa789&lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {
                center: [53.249236, 34.342387],
                zoom: 17
            });

            var myPlacemark;
            myMap.events.add('click', function (e) {
                var coords = e.get('coords');

                if (myPlacemark) {
                    myPlacemark.geometry.setCoordinates(coords);
                } else {
                    myPlacemark = createPlacemark(coords);
                    myMap.geoObjects.add(myPlacemark);
                }

                getAddress(coords);
            });

            function createPlacemark(coords) {
                return new ymaps.Placemark(coords, {
                    iconCaption: 'поиск...'
                }, {
                    preset: 'islands#violetDotIconWithCaption',
                    draggable: true
                });
            }

            function getAddress(coords) {
                myPlacemark.properties.set('iconCaption', 'поиск...');
                ymaps.geocode(coords).then(function (res) {
                    var firstGeoObject = res.geoObjects.get(0);
                    var address = firstGeoObject.getAddressLine();

                    myPlacemark.properties.set({
                        iconCaption: address,
                        balloonContent: address
                    });

                    document.getElementById('inputAddress').value = address;
                });
            }
        }
    </script>

@endsection
