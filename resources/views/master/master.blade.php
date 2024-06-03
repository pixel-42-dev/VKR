<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>FashionHub</title>
    <meta name="description" content="В интернет магазине одежды Fashion Hub Вас ждут ТЫСЯЧИ моделей модной брендовой одежды, а также обуви и аксесуаров разных размеров с бесплатной доставкой!">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @yield('css')

    <script src="{{ asset('js/vendor.js') }}"></script>

    <script>
        window.SHOW_LOADING = false;
    </script>
</head>

<body>

    <!-- // LOADING -->
    <div class="awe-page-loading">
        <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
                <i class="fa fa-spinner fa-spin"></i>
            </div>

            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <!-- // END LOADING -->



    <div id="wrapper">

        <header id="header" class="awe-menubar-header">
            <nav class="awemenu-nav" data-responsive-width="1200">
                <div class="container">
                    <div class="awemenu-container">

                        <div class="navbar-header">
                            <ul class="navbar-icons">


                                <li class="menubar-account">
                                    <a href="#" title="" class="awemenu-icon">
                                        <i class="icon icon-user-circle"></i>
                                        <span class="awe-hidden-text">Аккаунт</span>
                                    </a>

                                    <ul class="submenu megamenu">
                                        <li>
                                            <div class="container-fluid">
                                                <div class="header-account">
                                                    <div class="header-account-avatar">
                                                        <a href="#" title="">
                                                            <img src="{{ asset('img/samples/avatars/1.jpg') }}" alt="" class="img-circle">

                                                        </a>
                                                    </div>

                                                    <div class="header-account-username">
                                                        <h4><a href="#">Виктор Фролов</a></h4>
                                                    </div>

                                                    <ul>
                                                        <li><a href="#">Профиль</a>
                                                        </li>
                                                        <li><a href="#">Заказы</a>
                                                        </li>
                                                        <li><a href="#">Выйти</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menubar-wishlist">
                                    <a href="#" title="" class="awemenu-icon">
                                        <i class="icon icon-star"></i>
                                        <span class="awe-hidden-text">Избранное</span>
                                    </a>

                                    <ul class="submenu megamenu">
                                        <li>
                                            <div class="container-fluid">
                                                <ul class="whishlist">

                                                    <li>
                                                        <div class="whishlist-item">
                                                            <div class="product-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/products/cart/1.jpg') }}" alt="">

                                                                </a>
                                                            </div>

                                                            <div class="product-body">
                                                                <div class="whishlist-name">
                                                                    <h3><a href="#" title="">Хлопковая рубашка Gin Lane Greenport</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Цена:</span>
                                                                    <strong>12000 ₽</strong>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" title="" class="remove">
                                                            <i class="icon icon-remove"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <div class="whishlist-item">
                                                            <div class="product-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/products/cart/2.jpg') }}" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="product-body">
                                                                <div class="whishlist-name">
                                                                    <h3><a href="#" title="">Хлопковая рубашка Gin Lane Greenport</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Цена:</span>
                                                                    <strong>12000 ₽</strong>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" title="" class="remove">
                                                            <i class="icon icon-remove"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <div class="whishlist-item">
                                                            <div class="product-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/products/cart/3.jpg') }}" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="product-body">
                                                                <div class="whishlist-name">
                                                                    <h3><a href="#" title="">Хлопковая рубашка Gin Lane Greenport</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Цена:</span>
                                                                    <strong>12000 ₽</strong>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" title="" class="remove">
                                                            <i class="icon icon-remove"></i>
                                                        </a>
                                                    </li>

                                                </ul>

                                                <hr>

                                                <div class="whishlist-action">
                                                    <a href="#" title="" class="btn btn-dark btn-lg btn-outline btn-block">Открыть избранное</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menubar-cart">
                                    <a href="#" title="" class="awemenu-icon menu-shopping-cart">
                                        <i class="icon icon-shopping-bag"></i>
                                        <span class="awe-hidden-text">Корзина</span>

                                        <span class="cart-number">2</span>
                                    </a>

                                    <ul class="submenu megamenu">
                                        <li>
                                            <div class="container-fluid">

                                                <ul class="whishlist">

                                                    <li>
                                                        <div class="whishlist-item">
                                                            <div class="product-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/products/cart/1.jpg') }}" alt="">

                                                                </a>
                                                            </div>

                                                            <div class="product-body">
                                                                <div class="whishlist-name">
                                                                    <h3><a href="#" title="">Хлопковая рубашка Gin Lane Greenport</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Цена:</span>
                                                                    <strong>12000 ₽</strong>
                                                                </div>

                                                                <div class="whishlist-quantity">
                                                                    <span>Количество:</span>
                                                                    <span>1</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" title="" class="remove">
                                                            <i class="icon icon-remove"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <div class="whishlist-item">
                                                            <div class="product-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/products/cart/2.jpg') }}" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="product-body">
                                                                <div class="whishlist-name">
                                                                    <h3><a href="#" title="">Какие то часы</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Цена:</span>
                                                                    <strong>12000 ₽</strong>
                                                                </div>

                                                                <div class="whishlist-quantity">
                                                                    <span>Количество:</span>
                                                                    <span>1</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" title="" class="remove">
                                                            <i class="icon icon-remove"></i>
                                                        </a>
                                                    </li>

                                                </ul>

                                                <div class="menu-cart-total">
                                                    <span>Того:</span>
                                                    <span class="price">29000 ₽</span>
                                                </div>

                                                <div class="cart-action">
                                                    <a href="#" title="" class="btn btn-lg btn-dark btn-outline btn-block">Открыть корзину</a>
                                                    <a href="#" title="" class="btn btn-lg btn-primary btn-block">Оформить заказ</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>


                            </ul>

                            <ul class="navbar-search">
                                <li>
                                    <a href="#" title="" class="awemenu-icon awe-menubar-search" id="open-search-form">
                                        <span class="sr-only">Поиск</span>
                                        <span class="icon icon-search"></span>
                                    </a>

                                    <div class="menubar-search-form" id="menubar-search-form">
                                        <form action="index.html" method="GET">
                                            <input type="text" name="s" class="form-control" placeholder="Введите ваш запрос здесь">
                                            <div class="menubar-search-buttons">
                                                <button type="submit" class="btn btn-sm btn-white">Поиск</button>
                                                <button type="button" class="btn btn-sm btn-white" id="close-search-form">
                                                    <span class="icon icon-remove"></span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.menubar-search-form -->
                                </li>
                            </ul>
                        </div>

                        <div class="awe-logo">
                            <a href="index.html" title="">
                                <img src="{{ asset('img/logo.png') }}" alt="">

                            </a>
                        </div>
                        <!-- /.awe-logo -->

                        <ul class="awemenu awemenu-right" id="left-menu">
                            <li class="awemenu-item">
                                <a href="#" title="">
                                    <span>Одежда</span>
                                </a>

                                <ul class="awemenu-submenu awemenu-megamenu" data-width="100%" data-animation="fadeup">
                                    <li class="awemenu-megamenu-item">
                                        <div class="container-fluid">
                                            <div class="awemenu-megamenu-wrapper">

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h2 class="upper">Одежда</h2>

                                                        <ul class="super">
                                                            <li><a href="#" title="">Мужская</a>
                                                            </li>
                                                            <li><a href="#" title="">Женскаяы</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#" title="">Джинсы</a>
                                                            </li>
                                                            <li><a href="#" title="">Куртки</a>
                                                            </li>
                                                            <li><a href="#" title="">Шорты</a>
                                                            </li>
                                                            <li><a href="#" title="">Кофты</a>
                                                            </li>
                                                            <li><a href="#" title="">Штаны</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#" title="">Футболки</a>
                                                            </li>
                                                            <li><a href="#" title="">Носки</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="awe-media inline margin-bottom-25">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/trending-shop.jpg') }}" alt="">

                                                                </a>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">В тренде</a>
                                                        </h4>
                                                        </div>

                                                        <div class="awe-media inline">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/shirt-shop.jpg') }}" alt="">
                                                                </a>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">Новинки</a>
                                                        </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bottom-link">
                                                    <a href="#" class="btn btn-lg btn-dark btn-outline">
                                                        <span>Вся одежда</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="awemenu-item">
                                <a href="#" title="">
                                    <span>Обувь</span>
                                </a>

                                <ul class="awemenu-submenu awemenu-megamenu" data-width="100%" data-animation="fadeup">
                                    <li class="awemenu-megamenu-item">
                                        <div class="container-fluid">
                                            <div class="awemenu-megamenu-wrapper">

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h2 class="upper">Обувь</h2>

                                                        <ul class="super">
                                                            <li><a href="#" title="">Мужская</a>
                                                            </li>
                                                            <li><a href="#" title="">Женская</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#">Сапоги</a>
                                                            </li>
                                                            <li><a href="#">Туфли</a>
                                                            </li>
                                                            <li><a href="#">Сандали</a>
                                                            </li>
                                                            <li><a href="#">Кросовки</a>
                                                            </li>
                                                            <li><a href="#">Кеды</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="sublist">
                                                            <ul class="sublist">
                                                                <li><a href="#">Ботинки</a>
                                                                </li>
                                                                <li><a href="#">Босоножки</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="awe-media inline margin-bottom-25">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/trending-shoes.jpg') }}" alt="">

                                                                </a>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">В тренде</a>
                                                        </h4>
                                                        </div>

                                                        <div class="awe-media inline">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/dress-shoes.jpg') }}" alt="">
                                                                </a>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">Новинки</a>
                                                        </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bottom-link">
                                                    <a href="#" class="btn btn-lg btn-dark btn-outline">
                                                        <span>Вся обувь</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="awemenu-item">
                                <a href="#" title="">
                                    <span>Аксесуары</span>
                                </a>

                                <ul class="awemenu-submenu awemenu-megamenu" data-width="100%" data-animation="fadeup">
                                    <li class="awemenu-megamenu-item">
                                        <div class="container-fluid">
                                            <div class="awemenu-megamenu-wrapper">

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h2 class="upper">Аксесуары</h2>

                                                        <ul class="super">
                                                            <li><a href="#" title="">Мужские</a>
                                                            </li>
                                                            <li><a href="#" title="">Женские</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#" title="#">Сумочки</a>
                                                            </li>
                                                            <li><a href="#" title="#">Ремни</a>
                                                            </li>
                                                            <li><a href="#" title="#">Цепочки</a>
                                                            </li>
                                                            <li><a href="#" title="#">Браслеты</a>
                                                            </li>
                                                            <li><a href="#" title="#">Кулоны</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#" title="">Очки</a>
                                                            </li>
                                                            <li><a href="#" title="">Кошельки</a>
                                                            </li>
                                                            <li><a href="#" title="">Часы</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="awe-media inline margin-bottom-25">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/trending-accessories.jpg') }}" alt="">

                                                                </a>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">В тренде</a>
                                                        </h4>
                                                        </div>

                                                        <div class="awe-media inline">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/new-arrivals.jpg') }}" alt="">

                                                                </a>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">Новинки</a>
                                                        </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bottom-link">
                                                    <a href="#" class="btn btn-lg btn-dark btn-outline">
                                                        <span>Все аксесуары</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="awemenu-item">
                                <a href="#" title="">
                                    <span>Контакты</span>
                                </a>

                    </div>
                </div>
                <!-- /.container -->

            </nav>
            <!-- /.awe-menubar -->
        </header>
        <!-- /.awe-menubar-header -->


        <div id="main">




            @yield('content')




        </div>
            <footer class="footer">
                <div class="footer-wrapper">
                    <div class="footer-widgets">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6">

                                            <div class="widget">
                                                <h3 class="widget-title">О нас</h3>

                                                <div class="widget-content">
                                                    <p>Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit. Cras neque nulla, convallis non commodo et, euismod nonsese.</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12 col-sm-6">

                                            <div class="widget">
                                                <h3 class="widget-title">WE CAN HELP YOU?</h3>

                                                <div class="widget-content">
                                                    <p>Phone 1: 8 (495) 989—20—11</p>
                                                    <p>Phone 2: 8 (800) 875—05—26</p>
                                                    <p>Open - Close: 09:00-21:00</p>
                                                    <p>Mail: hosoren@gmail.com</p>
                                                </div>
                                            </div>
                                            <!-- /.widget -->

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-6">

                                    <div class="widget">
                                        <h3 class="widget-title">Shopping</h3>

                                        <ul>
                                            <li><a href="#" title="">Your Cart</a>
                                            </li>
                                            <li><a href="#" title="">Your Orders</a>
                                            </li>
                                            <li><a href="#" title="">Wishlist Items</a>
                                            </li>
                                            <li><a href="#" title="">Shipping Detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.widget -->

                                </div>

                                <div class="col-md-2 col-sm-6">

                                    <div class="widget">
                                        <h3 class="widget-title">MORE LINK</h3>

                                        <ul>
                                            <li><a href="#" title="">Blog</a>
                                            </li>
                                            <li><a href="#" title="">Gift Center</a>
                                            </li>
                                            <li><a href="#" title="">Buying Guides</a>
                                            </li>
                                            <li><a href="#" title="">New Arrivals</a>
                                            </li>
                                            <li><a href="#" title="">Clearance</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.widget -->

                                </div>

                                <div class="col-md-4">

                                    <div class="widget">
                                        <h3 class="widget-title">Are You Like Me</h3>

                                        <ul class="list-socials">
                                            <li><a href="#" title=""><i class="icon icon-twitter"></i></a>
                                            </li>
                                            <li><a href="#" title=""><i class="icon icon-facebook"></i></a>
                                            </li>
                                            <li><a href="#" title=""><i class="icon icon-google-plus"></i></a>
                                            </li>
                                            <li><a href="#" title=""><i class="icon icon-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.footer-widgets -->
                </div>
                <!-- /.footer-wrapper -->

                <a href="#" class="back-top" title="">
                    <span class="back-top-image">
                        <img src="{{ asset('img/back-top.png') }}" alt="">

                    </span>

                    <small>Наверх</small>
                </a>
                <!-- /.back-top -->
            </footer>
            <!-- /footer -->

        </div>
        <!-- /#wrapper -->
        <script>
            $(function() {
                $('a[href="#login-popup"]').magnificPopup({
                    type:'inline',
                    midClick: false,
                    closeOnBgClick: false
                });
            });
        </script>



        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/docs.js"></script>

        @yield('scripts')

    </body>

    </html>
