<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>FashionHub</title>
</head>
<body>


<!-- header -->
<header class="header header-absolute">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ route('index')  }}" class="navbar-brand order-1 order-lg-1"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
            <div class="collapse navbar-collapse order-4 order-lg-2" id="navbarMenu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown dropdown-lg dropdown-hover"> {{-- Одежда --}}
                        <a class="nav-link dropdown-toggle" href="{{ route('listing', ['gender' => 'men']) }}" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Одежда
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                            <div class="container mx-auto">
                                <div class="row gutter-2">
                                    @php
                                        $menCategories = $categories['categories1']->where('forMen', 1);
                                        $womenCategories = $categories['categories1']->where('forMen', 0);

                                        $menChunks = $menCategories->chunk(6);
                                        $womenChunks = $womenCategories->chunk(6);
                                    @endphp

                                    {{-- Мужская одежда --}}
                                    <div class="col-lg-2">
                                        <a href="{{ route('listing', ['gender' => 'all']) }}" class="navbar-button">Все товары</a>
                                        <span class="eyebrow text-muted mb-1">Мужская</span>
                                        <ul class="menu-list">
                                            @foreach($menChunks->first() as $category)
                                                <li class="menu-list-item">
                                                    <a href="{{ route('listingCategory', ['gender' => 'men', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">⠀</span>
                                        <ul class="menu-list">
                                            @if($menChunks->count() > 1)
                                                @foreach($menChunks->last() as $category)
                                                    <li class="menu-list-item">
                                                        <a href="{{ route('listingCategory', ['gender' => 'men', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>

                                    {{-- Женская одежда --}}
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">Женская</span>
                                        <ul class="menu-list">
                                            @foreach($womenChunks->first() as $category)
                                                <li class="menu-list-item">
                                                    <a href="{{ route('listingCategory', ['gender' => 'women', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">⠀</span>
                                        <ul class="menu-list">
                                            @if($womenChunks->count() > 1)
                                                @foreach($womenChunks->last() as $category)
                                                    <li class="menu-list-item">
                                                        <a href="{{ route('listingCategory', ['gender' => 'women', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>

                                    <div class="col-lg-2 offset-lg-1">
                                        <div class="awe-media inline mb-3 text-center">
                                            <a href="{{ route('listing-2', ['parameters' => 'clothes-trend']) }}" title="">
                                                <div class="awe-media-image">
                                                    <img src="{{ asset('images/header-images/trending-clothes.jpg') }}" alt="">
                                                </div>
                                                <h4 class="awe-media-title medium upper center">
                                                    <p>В тренде</p>
                                                </h4>
                                            </a>
                                        </div>

                                        <div class="awe-media inline text-center">
                                            <a href="{{ route('listing-2', ['parameters' => 'clothes-new']) }}" title="">
                                                <div class="awe-media-image">
                                                    <img src="{{ asset('images/header-images/new-clothes.jpg') }}" alt="">
                                                </div>
                                                <h4 class="awe-media-title medium upper center">
                                                    <p>Новинки</p>
                                                </h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> {{-- /// Одежда /// --}}

                    <li class="nav-item dropdown dropdown-lg dropdown-hover"> {{-- ОБУВЬ --}}
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Обувь
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                            <div class="container mx-auto">
                                <div class="row gutter-2">
                                    @php
                                        $menCategories = $categories['categories2']->where('forMen', 1);
                                        $womenCategories = $categories['categories2']->where('forMen', 0);

                                        $menChunks = $menCategories->chunk(6);
                                        $womenChunks = $womenCategories->chunk(6);
                                    @endphp

                                    {{-- Мужская обувь --}}
                                    <div class="col-lg-2">
                                        <a href="{{ route('listing', ['gender' => 'all']) }}" class="navbar-button">Все товары</a>
                                        <span class="eyebrow text-muted mb-1">Мужская</span>
                                        <ul class="menu-list">
                                            @foreach($menChunks->first() as $category)
                                                <li class="menu-list-item">
                                                    <a href="{{ route('listingCategory', ['gender' => 'men', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">⠀</span>
                                        <ul class="menu-list">
                                            @if($menChunks->count() > 1)
                                                @foreach($menChunks->last() as $category)
                                                    <li class="menu-list-item">
                                                        <a href="{{ route('listingCategory', ['gender' => 'men', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>

                                    {{-- Женская обувь --}}
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">Женская</span>
                                        <ul class="menu-list">
                                            @foreach($womenChunks->first() as $category)
                                                <li class="menu-list-item">
                                                    <a href="{{ route('listingCategory', ['gender' => 'women', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">⠀</span>
                                        <ul class="menu-list">
                                            @if($womenChunks->count() > 1)
                                                @foreach($womenChunks->last() as $category)
                                                    <li class="menu-list-item">
                                                        <a href="{{ route('listingCategory', ['gender' => 'women', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>

                                    <div class="col-lg-2 offset-lg-1">
                                        <div class="awe-media inline mb-3 text-center">
                                            <a href="{{ route('listing-2', ['parameters' => 'shoes-trend']) }}" title="">
                                                <div class="awe-media-image">
                                                    <img src="{{ asset('images/header-images/trending-shoes.jpg') }}" alt="">
                                                </div>
                                                <h4 class="awe-media-title medium upper center">
                                                    <p>В тренде</p>
                                                </h4>
                                            </a>
                                        </div>

                                        <div class="awe-media inline text-center">
                                            <a href="{{ route('listing-2', ['parameters' => 'shoes-new']) }}" title="">
                                                <div class="awe-media-image">
                                                    <img src="{{ asset('images/header-images/new-shoes.jpg') }}" alt="">
                                                </div>
                                                <h4 class="awe-media-title medium upper center">
                                                    <p>Новинки</p>
                                                </h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> {{-- /// ОБУВЬ /// --}}

                    <li class="nav-item dropdown dropdown-lg dropdown-hover"> {{-- Аксесуары --}}
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Аксесуары
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                            <div class="container mx-auto">
                                <div class="row gutter-2">
                                    @php
                                        $menCategories = $categories['categories3']->where('forMen', 1);
                                        $womenCategories = $categories['categories3']->where('forMen', 0);

                                        $menChunks = $menCategories->chunk(6);
                                        $womenChunks = $womenCategories->chunk(6);
                                    @endphp

                                    {{-- Мужская одежда --}}
                                    <div class="col-lg-2">
                                        <a href="{{ route('listing', ['gender' => 'all']) }}" class="navbar-button">Все товары</a>
                                        <span class="eyebrow text-muted mb-1">Мужские</span>
                                        <ul class="menu-list">
                                            @foreach($menChunks->first() as $category)
                                                <li class="menu-list-item">
                                                    <a href="{{ route('listingCategory', ['gender' => 'men', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">⠀</span>
                                        <ul class="menu-list">
                                            @if($menChunks->count() > 1)
                                                @foreach($menChunks->last() as $category)
                                                    <li class="menu-list-item">
                                                        <a href="{{ route('listingCategory', ['gender' => 'men', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>

                                    {{-- Женская одежда --}}
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">Женские</span>
                                        <ul class="menu-list">
                                            @foreach($womenChunks->first() as $category)
                                                <li class="menu-list-item">
                                                    <a href="{{ route('listingCategory', ['gender' => 'women', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">⠀</span>
                                        <ul class="menu-list">
                                            @if($womenChunks->count() > 1)
                                                @foreach($womenChunks->last() as $category)
                                                    <li class="menu-list-item">
                                                        <a href="{{ route('listingCategory', ['gender' => 'women', 'categoryNumber' => $category->id]) }}" class="menu-list-link">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>

                                    <div class="col-lg-2 offset-lg-1">
                                        <div class="awe-media inline mb-3 text-center">
                                            <a href="{{ route('listing-2', ['parameters' => 'accessories-trend']) }}" title="">
                                                <div class="awe-media-image">
                                                    <img src="{{ asset('images/header-images/trending-accessories.jpg') }}" alt="">
                                                </div>
                                                <h4 class="awe-media-title medium upper center">
                                                    <p>В тренде</p>
                                                </h4>
                                            </a>
                                        </div>

                                        <div class="awe-media inline text-center">
                                            <a href="{{ route('listing-2', ['parameters' => 'accessories-new']) }}" title="">
                                                <div class="awe-media-image">
                                                    <img src="{{ asset('images/header-images/new-accessories.jpg') }}" alt="">
                                                </div>
                                                <h4 class="awe-media-title medium upper center">
                                                    <p>Новинки</p>
                                                </h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> {{-- /// Аксесуары /// --}}

                    <li class="nav-item dropdown-lg dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="{{ route('about')  }}" id="navbarDropdown-3">
                            О нас
                        </a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse order-5 order-lg-3" id="navbarMenu2">
                <ul class="navbar-nav ml-auto position-relative">

                    <li class="nav-item">
                        @if(Auth::check() && Auth::user()->isAdmin)
                            <div style="margin-top: 26px">
                                <a href="{{ route('admin', ['page' => 'new']) }}">Панель администратора</a>
                            </div>
                        @endif
                    </li>

                    <!-- search -->
                    <li class="nav-item dropdown dropdown-md dropdown-hover">
                        <a class="nav-icon dropdown-toggle" id="navbarDropdown-4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-search d-none d-lg-inline-block"></i>
                            <span class="d-inline-block d-lg-none">Search</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown-4">
                            <form action="{{ route('listing-2', ['parameters' => 'search']) }}" method="GET" class="form-inline">
                                <div class="form-group header-search">
                                    <input type="text" class="form-control" name="query" id="searchForm" placeholder="Поиск товаров" autocomplete="off">
                                </div>
                                <button type="submit" class="btn btn-primary">Поиск</button>
                            </form>
                        </div>
                    </li>


                    <!-- user area -->
                    <li class="nav-item dropdown dropdown-md dropdown-hover">
                        @guest
                            <form method="POST" action="{{ route('loginPost') }}">
                                @csrf
                                <a class="nav-icon dropdown-toggle" id="navbarDropdown-6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-user d-none d-lg-inline-block"></i>
                                    <span class="d-inline-block d-lg-none">Account</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-6">
                                    <div class="row gutter-2">
                                        <div class="col-12">
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="inputName" name="nickname" class="form-control form-control-lg" placeholder="Логин" required="" autocomplete="off">
                                                            <label for="inputName">Логин</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-label-group">
                                                            <input type="password" id="inputPassword2" name="password" class="form-control form-control-lg" placeholder="Пароль" required="" autocomplete="off">
                                                            <label for="inputPassword2">Пароль</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        {{-- Проверка на наличие ошибки аутентификации --}}
                                        @if(session('error'))
                                            <div class="col-12">
                                                <div class="alert alert-danger mt-3">
                                                    {{ session('error') }}
                                                </div>
                                            </div>
                                        @endif

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block">Войти</button>
                                            <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-block">Создать аккаунт</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endguest
                        @auth
                            <a class="nav-icon dropdown-toggle" id="navbarDropdown-6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-user d-none d-lg-inline-block"></i>
                                <span class="d-inline-block d-lg-none">Аккаунт</span>
{{--                                <span class="d-none d-lg-inline-block ml-2 head-nickname">{{$nickname}}</span>--}}
                            </a>
                                <div class="dropdown-menu dropdown-menu-custom dropdown-menu-auth" aria-labelledby="navbarDropdown-6">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="profile-info">
                                                    <h3>{{$nickname}}</h3>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="col-12">
                                                <div class="profile-links">
                                                    <a href="{{ route('settings', ['page' => 3]) }}" class="dropdown-item">Профиль</a>
                                                    <a href="{{ route('settings', ['page' => 1]) }}" class="dropdown-item">Заказы</a>
                                                    <a href="{{ route('settings', ['page' => 2]) }}" class="dropdown-item">Избранное</a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <hr>
                                                <form method="POST" action="{{ route('logoutrPost') }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-secondary btn-block">Выйти</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endauth
                    </li>

                    <!-- favourites -->
                    <li class="d-none d-lg-inline nav-item">
                        <a class="nav-icon" href="{{ route('settings', ['page' => 2]) }}">
                            <i class="icon-heart"></i>
                        </a>
                    </li>

                    <!-- cart -->
                    @if($orderCount > 0)
                    <li class="d-none d-lg-inline nav-item position-relative">
                        <a class="nav-icon" href="{{ route('cart') }}" data-toggle="tooltip" data-placement="bottom" title="{{ $orderCount == 0 ? 'Корзина пуста' : '' }}">
                            <i class="icon-shopping-bag"></i>
                            <span class="position-absolute translate-middle badge rounded-pill bg-light text-dark cart-count">{{ $orderCount }}</span>
                        </a>
                    </li>
                    @else
                        <li class="nav-item dropdown dropdown-md dropdown-hover">
                            <a class="nav-icon dropdown-toggle" id="navbarDropdown-8" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-shopping-bag d-none d-lg-inline-block"></i>
                                <span class="d-inline-block d-lg-none">Bag</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown-8">
                                <div class="row gutter-3">
                                    <div class="col-12">
                                        <h3 class="eyebrow text-dark fs-16 mb-0">Корзина пустая</h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="order-2 d-flex d-lg-none" id="navbarMenuMobile">
                <ul class="navbar-nav navbar-nav--icons ml-auto position-relative">

                    <!-- search -->
                    <li class="nav-item">
                        <a href="" class="nav-icon"><i class="icon-search"></i></a>
                    </li>

                    <!-- cart -->
                    <li class="nav-item dropdown dropdown-md dropdown-hover">
                        <a href="" class="nav-icon"><i class="icon-shopping-bag"></i></a>
                    </li>

                    <!-- menu -->
                    <li class="nav-item dropdown dropdown-md dropdown-hover">
                        <a href="" class="nav-icon" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="icon-menu"></i>
                        </a>
                    </li>

                </ul>
            </div>

        </nav>
    </div>
</header>





@yield('content')





<!-- footer -->
<footer class="bg-dark pb-0 text-white">
    <div class="container">
        <div class="row justify-content-md-between gutter-2">

            <!-- menu -->
            <div class="order-1 col-md-8 col-lg-4">
                <div class="row">
                    <div class="col">
                        <h4 class="eyebrow mb-1">Компания</h4>
                        <ul class="menu-list">
                            <li class="menu-list-item"><a href="" class="menu-list-link">Наша история</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">Контакты</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">Товары</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">О нас</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4 class="eyebrow mb-1">Помощь</h4>
                        <ul class="menu-list">
                            <li class="menu-list-item"><a href="" class="menu-list-link">Оплата</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">Возвраты</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">Доставка</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- subscribe -->
            <div class="order-2 order-md-3 order-lg-2 col-md-8 col-lg-4">
                <h4 class="eyebrow mb-1">Подписка на новости</h4>
                <div class="input-combined mb-2">
                    <input type="text" class="form-control" placeholder="Ваша почта" aria-label="Ваша почта" aria-describedby="button-addon2">
                    <button class="btn btn-white" type="button" id="button-addon2">Подписаться</button>
                    <span class="input-combined_indicator"></span>
                </div>
                <ul class="list list--horizontal">
                    <li><a href="#!" class="text-hover-facebook"><i class="fs-28 icon-facebook-square-brands"></i></a></li>
                    <li><a href="#!" class="text-hover-instagram"><i class="fs-28 icon-instagram-square-brands"></i></a></li>
                    <li><a href="#!" class="text-hover-twitter"><i class="fs-28 icon-twitter-square-brands"></i></a></li>
                    <li><a href="#!" class="text-hover-pinterest"><i class="fs-28 icon-pinterest-square-brands"></i></a></li>
                </ul>
            </div>

            <!-- settings -->
            <div class="order-3 order-md-2 order-lg-3 col-md-4 col-lg-3">
                <h4 class="eyebrow mb-1">Регион и валюта</h4>
                <div class="select-frame mb-2">
                    <select class="custom-select custom-select-lg mb-2" id="countrySelect2">
                        <option value="1">Россия</option>
                        <option value="2">Germany</option>
                        <option value="3">France</option>
                    </select>
                </div>
                <div class="select-frame">
                    <select class="custom-select custom-select-lg" id="curencySelect2">
                        <option value="1">RUB</option>
                        <option value="2">EUR</option>
                        <option value="3">RUB</option>
                    </select>
                </div>
                <ul class="list list--horizontal mt-2">
                    <li><img src="{{ asset('images/demo/visa-1.svg') }}" class="payment" alt="Image"></li>
                    <li><img src="{{ asset('images/demo/master-card-1.svg') }}" class="payment" alt="Image"></li>
                    <li><img src="{{ asset('images/demo/amex-1.svg') }}" class="payment" alt="Image"></li>

                </ul>
            </div>
        </div>
    </div>


</footer>



<script src="{{ asset('js/vendor.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
