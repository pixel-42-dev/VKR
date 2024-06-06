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
            <a href="/" class="navbar-brand order-1 order-lg-1"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
            <div class="collapse navbar-collapse order-4 order-lg-2" id="navbarMenu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown dropdown-lg dropdown-hover"> {{-- Одежда --}}
                        <a class="nav-link dropdown-toggle" href="/listing" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Одежда
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                            <div class="container mx-auto">
                                <div class="row gutter-2">
                                    <div class="col-lg-2">
                                        <a href="/listing" class="navbar-button">Вся одежда</a>
                                        <span class="eyebrow text-muted mb-1">Пол</span>
                                        <ul class="menu-list">
                                            <li class="menu-list-item"><a href="" class="menu-list-link">Мужская</a></li>
                                            <li class="menu-list-item"><a href="" class="menu-list-link">Женская</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">Категории</span>
                                        <ul class="menu-list">
                                            @foreach($categories['categories1'] as $category)
                                                <li class="menu-list-item"><a href="" class="menu-list-link">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1"></span>
                                        <ul class="menu-list">
{{--                                            @foreach($categories['categories1'] as $category)--}}
{{--                                                <li class="menu-list-item"><a href="" class="menu-list-link">{{ $category->name }}</a></li>--}}
{{--                                            @endforeach--}}
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">Предложения</span>
                                        <ul class="menu-list">
                                            <li class="menu-list-item"><a href="" class="menu-list-link">Новинки</a></li>
                                            <li class="menu-list-item"><a href="" class="menu-list-link">В тренде</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 offset-lg-1">
                                        <div class="awe-media inline mb-3 text-center">
                                            <div class="awe-media-image">
                                                <a href="#" title="">
                                                    <img src="{{ asset('images/demo/trending-shoes.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <h4 class="awe-media-title medium upper center">
                                                <a href="#" title="">В тренде</a>
                                            </h4>
                                        </div>

                                        <div class="awe-media inline  text-center">
                                            <div class="awe-media-image">
                                                <a href="#" title="">
                                                    <img src="{{ asset('images/demo/trending-shoes.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <h4 class="awe-media-title medium upper center">
                                                <a href="#" title="">Новинки</a>
                                            </h4>
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
                                    <div class="col-lg-2">
                                        <a href="/listing" class="navbar-button">Вся обувь</a>
                                        <span class="eyebrow text-muted mb-1">Пол</span>
                                        <ul class="menu-list">
                                            <li class="menu-list-item"><a href="" class="menu-list-link">Мужская</a></li>
                                            <li class="menu-list-item"><a href="" class="menu-list-link">Женская</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">Категории</span>
                                        <ul class="menu-list">
                                            @foreach($categories['categories2'] as $category)
                                                <li class="menu-list-item"><a href="" class="menu-list-link">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1"></span>
                                        <ul class="menu-list">

                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">Предложения</span>
                                        <ul class="menu-list">
                                            <li class="menu-list-item"><a href="" class="menu-list-link">Новинки</a></li>
                                            <li class="menu-list-item"><a href="" class="menu-list-link">В тренде</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 offset-lg-1">
                                        <div class="awe-media inline mb-3 text-center">
                                            <div class="awe-media-image">
                                                <a href="#" title="">
                                                    <img src="{{ asset('images/demo/trending-shoes.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <h4 class="awe-media-title medium upper center">
                                                <a href="#" title="">В тренде</a>
                                            </h4>
                                        </div>

                                        <div class="awe-media inline  text-center">
                                            <div class="awe-media-image">
                                                <a href="#" title="">
                                                    <img src="{{ asset('images/demo/trending-shoes.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <h4 class="awe-media-title medium upper center">
                                                <a href="#" title="">Новинки</a>
                                            </h4>
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
                                    <div class="col-lg-2">
                                        <a href="/listing" class="navbar-button">Все аксесуары</a>
                                        <span class="eyebrow text-muted mb-1">Пол</span>
                                        <ul class="menu-list">
                                            <li class="menu-list-item"><a href="" class="menu-list-link">Мужские</a></li>
                                            <li class="menu-list-item"><a href="" class="menu-list-link">Женские</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">Категории</span>
                                        <ul class="menu-list">
                                            @foreach($categories['categories3'] as $category)
                                                <li class="menu-list-item"><a href="" class="menu-list-link">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1"></span>
                                        <ul class="menu-list">

                                        </ul>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="eyebrow text-muted mb-1">Предложения</span>
                                        <ul class="menu-list">
                                            <li class="menu-list-item"><a href="" class="menu-list-link">Новинки</a></li>
                                            <li class="menu-list-item"><a href="" class="menu-list-link">В тренде</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 offset-lg-1">
                                        <div class="awe-media inline mb-3 text-center">
                                            <div class="awe-media-image">
                                                <a href="#" title="">
                                                    <img src="{{ asset('images/demo/trending-shoes.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <h4 class="awe-media-title medium upper center">
                                                <a href="#" title="">В тренде</a>
                                            </h4>
                                        </div>

                                        <div class="awe-media inline  text-center">
                                            <div class="awe-media-image">
                                                <a href="#" title="">
                                                    <img src="{{ asset('images/demo/trending-shoes.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <h4 class="awe-media-title medium upper center">
                                                <a href="#" title="">Новинки</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> {{-- /// Аксесуары /// --}}
                    <li class="nav-item dropdown-lg dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="/about" id="navbarDropdown-3">
                            О нас
                        </a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse order-5 order-lg-3" id="navbarMenu2">
                <ul class="navbar-nav ml-auto position-relative">

                    <!-- search -->
                    <li class="nav-item dropdown dropdown-md dropdown-hover">
                        <a class="nav-icon dropdown-toggle" id="navbarDropdown-4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-search d-none d-lg-inline-block"></i>
                            <span class="d-inline-block d-lg-none">Search</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="searchForm" placeholder="Search for items and brands">
                            </div>
                        </div>
                    </li>


                    <!-- user area -->
                    <li class="nav-item dropdown dropdown-md dropdown-hover">
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
                                                    <input type="text" id="inputName" class="form-control form-control-lg" placeholder="Name" required="" value="Dumitru">
                                                    <label for="inputName">First Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="inputSurname" class="form-control form-control-lg" placeholder="Surname" required="">
                                                    <label for="inputSurname">Surname</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="" class="underline fs-14">Forgot Password ?</a>
                                </div>
                                <div class="col-12">
                                    <a href="" class="btn btn-primary btn-block">Sign In</a>
                                    <a href="" class="btn btn-outline-secondary btn-block">Create Account</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- favourites -->
                    <li class="d-none d-lg-inline nav-item dropdown dropdown-md dropdown-hover">
                        <a class="nav-icon" id="navbarDropdown-7" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-heart"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown-7">
                            <div class="row gutter-3">
                                <div class="col-12">
                                    <h3 class="eyebrow text-dark fs-16 mb-1">My Favorites</h3>
                                    <p class="text-muted fs-14"><a href="" class="underline">Sign in</a> to keep your saves for up to 60 days.</p>
                                </div>
                                <div class="col-12">
                                    <div class="cart-item">
                                        <a href="#!" class="cart-item-image"><img src="{{ asset('images/demo/product-1.jpg') }}" alt="Image"></a>
                                        <div class="cart-item-body">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h5 class="cart-item-title">Bold Cuff Insert Polo Shirt</h5>
                                                    <small>Fred Perry</small>
                                                    <ul class="list list--horizontal fs-14">
                                                        <li><s>$85.00</s></li>
                                                        <li class="text-red">$42.00</li>
                                                    </ul>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <ul class="cart-item-options">
                                                        <li><a href="" class="icon-x"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="" class="btn btn-primary btn-block">Add all to cart</a>
                                    <a href="" class="btn btn-outline-secondary btn-block">View favorites</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- cart -->
                    <li class="nav-item dropdown dropdown-md dropdown-hover">
                        <a class="nav-icon dropdown-toggle" id="navbarDropdown-8" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-shopping-bag d-none d-lg-inline-block"></i>
                            <span class="d-inline-block d-lg-none">Bag</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown-8">
                            <div class="row gutter-3">
                                <div class="col-12">
                                    <h3 class="eyebrow text-dark fs-16 mb-0">My Bag</h3>
                                </div>
                                <div class="col-12">
                                    <div class="cart-item">
                                        <a href="#!" class="cart-item-image"><img src="{{ asset('images/demo/product-1.jpg') }}" alt="Image"></a>
                                        <div class="cart-item-body">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h5 class="cart-item-title">Bold Cuff Insert Polo Shirt</h5>
                                                    <small>Fred Perry</small>
                                                    <ul class="list list--horizontal fs-14">
                                                        <li><s>$85.00</s></li>
                                                        <li class="text-red">$42.00</li>
                                                    </ul>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <ul class="cart-item-options">
                                                        <li><a href="" class="icon-x"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="list-group list-group-minimal">
                                        <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-bold">
                                            Subtotal
                                            <span>$78.00</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <a href="" class="btn btn-primary btn-block">Add all to cart</a>
                                    <a href="" class="btn btn-outline-secondary btn-block">View favorites</a>
                                </div>
                            </div>
                        </div>
                    </li>
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
                        <h4 class="eyebrow mb-1">Company</h4>
                        <ul class="menu-list">
                            <li class="menu-list-item"><a href="" class="menu-list-link">Our story</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">Careers</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">Press</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4 class="eyebrow mb-1">Help Center</h4>
                        <ul class="menu-list">
                            <li class="menu-list-item"><a href="" class="menu-list-link">Shipping</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">Returns</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">Payment</a></li>
                            <li class="menu-list-item"><a href="" class="menu-list-link">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- subscribe -->
            <div class="order-2 order-md-3 order-lg-2 col-md-8 col-lg-4">
                <h4 class="eyebrow mb-1">Subscribe to Newsletter</h4>
                <div class="input-combined mb-2">
                    <input type="text" class="form-control" placeholder="Your email" aria-label="Your Email" aria-describedby="button-addon2">
                    <button class="btn btn-white" type="button" id="button-addon2">Subscribe</button>
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
                <h4 class="eyebrow mb-1">Region & Currency</h4>
                <div class="select-frame mb-2">
                    <select class="custom-select custom-select-lg mb-2" id="countrySelect2">
                        <option value="1">United States</option>
                        <option value="2">Germany</option>
                        <option value="3">France</option>
                    </select>
                </div>
                <div class="select-frame">
                    <select class="custom-select custom-select-lg" id="curencySelect2">
                        <option value="1">USD</option>
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

    <div class="bg-transparent mt-8 py-2">
        <div class="container">
            <div class="row align-items-center gutter-1">
                <div class="col-md-8">
                    <p class="small text-muted">&copy; 2020 SHOPY. Bootstrap template by https://htmlhunters.com, скачен с <a href="https://bayguzin.ru" class="underline">bayguzin.ru</a>.</p>
                </div>
                <div class="col-md-4 text-md-right text-muted">
                    <ul class="list list--horizontal list--separated">
                        <li>
                            <a class="small underline" href="#!">Privacy Policy</a>
                        </li>
                        <li>
                            <a class="small underline" href="#!">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{ asset('js/vendor.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
