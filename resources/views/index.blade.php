<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hosoren Homepage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,700italic&amp;subset=latin,vietnamese">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <script src="js/vendor.js"></script>

    <script>
        window.SHOW_LOADING = false;
    </script>
</head>

<body>

    <!-- // LOADING -->
    <div class="awe-page-loading">
        <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
                <span class="icon icon-logo"></span>
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
                                        <span class="awe-hidden-text">Account</span>
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
                                                        <h4><a href="#">Jessica Alba</a></h4>
                                                    </div>

                                                    <ul>
                                                        <li><a href="#">Invite Friends</a>
                                                        </li>
                                                        <li><a href="#">Account Infomation</a>
                                                        </li>
                                                        <li><a href="#">Logout</a>
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
                                        <span class="awe-hidden-text">Wishlist</span>
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
                                                                    <h3><a href="#" title="">Gin Lane Greenport Cotton Shirt</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Price:</span>
                                                                    <strong>$120</strong>
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
                                                                    <h3><a href="#" title="">Gin Lane Greenport Cotton Shirt</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Price:</span>
                                                                    <strong>$120</strong>
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
                                                                    <h3><a href="#" title="">Gin Lane Greenport Cotton Shirt</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Price:</span>
                                                                    <strong>$120</strong>
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
                                                    <a href="#" title="" class="btn btn-dark btn-lg btn-outline btn-block">View Wishlist</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menubar-cart">
                                    <a href="#" title="" class="awemenu-icon menu-shopping-cart">
                                        <i class="icon icon-shopping-bag"></i>
                                        <span class="awe-hidden-text">Cart</span>

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
                                                                    <h3><a href="#" title="">Gin Lane Greenport Cotton Shirt</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Price:</span>
                                                                    <strong>$120</strong>
                                                                </div>

                                                                <div class="whishlist-quantity">
                                                                    <span>Quantity:</span>
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
                                                                    <h3><a href="#" title="">Gin Lane Greenport Cotton Shirt</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Price:</span>
                                                                    <strong>$120</strong>
                                                                </div>

                                                                <div class="whishlist-quantity">
                                                                    <span>Quantity:</span>
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
                                                    <span>Total</span>
                                                    <span class="price">$180</span>
                                                </div>

                                                <div class="cart-action">
                                                    <a href="#" title="" class="btn btn-lg btn-dark btn-outline btn-block">View cart</a>
                                                    <a href="#" title="" class="btn btn-lg btn-primary btn-block">Proceed To Checkout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>


                            </ul>

                            <ul class="navbar-search">
                                <li>
                                    <a href="#" title="" class="awemenu-icon awe-menubar-search" id="open-search-form">
                                        <span class="sr-only">Search</span>
                                        <span class="icon icon-search"></span>
                                    </a>

                                    <div class="menubar-search-form" id="menubar-search-form">
                                        <form action="index.html" method="GET">
                                            <input type="text" name="s" class="form-control" placeholder="Search your entry here...">
                                            <div class="menubar-search-buttons">
                                                <button type="submit" class="btn btn-sm btn-white">Search</button>
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

                        <ul class="awemenu awemenu-right">
                            <li class="awemenu-item">
                                <a href="#" title="">
                                    <span>Clothing</span>
                                </a>

                                <ul class="awemenu-submenu awemenu-megamenu" data-width="100%" data-animation="fadeup">
                                    <li class="awemenu-megamenu-item">
                                        <div class="container-fluid">
                                            <div class="awemenu-megamenu-wrapper">

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h2 class="upper">Clothing</h2>

                                                        <ul class="super">
                                                            <li><a href="#" title="">Bestseller</a>
                                                            </li>
                                                            <li><a href="#" title="">New Arrivals</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#" title="">Blazers &amp; Vests</a>
                                                            </li>
                                                            <li><a href="#" title="">Graphics Tees</a>
                                                            </li>
                                                            <li><a href="#" title="">Jeans</a>
                                                            </li>
                                                            <li><a href="#" title="">Jackets &amp; Outerwear</a>
                                                            </li>
                                                            <li><a href="#" title="">Pants</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#" title="">Shirts</a>
                                                            </li>
                                                            <li><a href="#" title="">Short &amp; Swim</a>
                                                            </li>
                                                            <li><a href="#" title="">Tees</a>
                                                            </li>
                                                            <li><a href="#" title="">Underwear &amp; Socks</a>
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
                                                            <a href="#" title="">The trend shop</a>
                                                        </h4>
                                                        </div>

                                                        <div class="awe-media inline">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/shirt-shop.jpg') }}" alt="">
                                                                </a>
                                                                <div class="awe-media-overlay overlay-dark-50 fullpage">
                                                                    <div class="fp-table">
                                                                        <div class="fp-table-cell center">
                                                                            <a href="#" class="btn btn-white">Show now</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">Shirt shop</a>
                                                        </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bottom-link">
                                                    <a href="#" class="btn btn-lg btn-dark btn-outline">
                                                        <span>Shop All Clothing</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="awemenu-item">
                                <a href="#" title="">
                                    <span>Shoes</span>
                                </a>

                                <ul class="awemenu-submenu awemenu-megamenu" data-width="100%" data-animation="fadeup">
                                    <li class="awemenu-megamenu-item">
                                        <div class="container-fluid">
                                            <div class="awemenu-megamenu-wrapper">

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h2 class="upper">Shoes</h2>

                                                        <ul class="super">
                                                            <li><a href="#" title="">Bestseller</a>
                                                            </li>
                                                            <li><a href="#" title="">New Arrivals</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#">Boat Shoes</a>
                                                            </li>
                                                            <li><a href="#">Boots</a>
                                                            </li>
                                                            <li><a href="#">Casual Shoes</a>
                                                            </li>
                                                            <li><a href="#">Dress Shoes</a>
                                                            </li>
                                                            <li><a href="#">Sneakers</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="sublist">
                                                            <p>Shop Size</p>
                                                            <ul class="numbers-list">
                                                                <li><a href="#">7</a>
                                                                </li>
                                                                <li><a href="#">7.5</a>
                                                                </li>
                                                                <li><a href="#">7.5</a>
                                                                </li>
                                                                <li><a href="#">8</a>
                                                                </li>
                                                                <li><a href="#">8.5</a>
                                                                </li>
                                                                <li><a href="#">9</a>
                                                                </li>
                                                                <li><a href="#">10</a>
                                                                </li>
                                                                <li><a href="#">10.5</a>
                                                                </li>
                                                                <li><a href="#">11</a>
                                                                </li>
                                                                <li><a href="#">11.5</a>
                                                                </li>
                                                                <li><a href="#">12</a>
                                                                </li>
                                                                <li><a href="#">13</a>
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
                                                            <a href="#" title="">Hot trend shoes</a>
                                                        </h4>
                                                        </div>

                                                        <div class="awe-media inline">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/dress-shoes.jpg') }}" alt="">
                                                                </a>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">Dress shoes shop</a>
                                                        </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bottom-link">
                                                    <a href="#" class="btn btn-lg btn-dark btn-outline">
                                                        <span>Shop All Shoes</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="awemenu-item">
                                <a href="#" title="">
                                    <span>Accessories</span>
                                </a>

                                <ul class="awemenu-submenu awemenu-megamenu" data-width="100%" data-animation="fadeup">
                                    <li class="awemenu-megamenu-item">
                                        <div class="container-fluid">
                                            <div class="awemenu-megamenu-wrapper">

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h2 class="upper">Shoes</h2>

                                                        <ul class="super">
                                                            <li><a href="#" title="">Bestseller</a>
                                                            </li>
                                                            <li><a href="#" title="">New Arrivals</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#" title="#">Bags</a>
                                                            </li>
                                                            <li><a href="#" title="#">Belts</a>
                                                            </li>
                                                            <li><a href="#" title="#">Grooming</a>
                                                            </li>
                                                            <li><a href="#" title="#">Hats</a>
                                                            </li>
                                                            <li><a href="#" title="#">Jewelry</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#" title="">Scarves &amp; Glovers</a>
                                                            </li>
                                                            <li><a href="#" title="">Wallets</a>
                                                            </li>
                                                            <li><a href="#" title="">Watches</a>
                                                            </li>
                                                            <li><a href="#" title="">Glasses</a>
                                                            </li>
                                                            <li><a href="#" title="">Zippo</a>
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
                                                            <a href="#" title="">Hot Trend Accessories</a>
                                                        </h4>
                                                        </div>

                                                        <div class="awe-media inline">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/new-arrivals.jpg') }}" alt="">

                                                                </a>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">New Arrivals Swatch</a>
                                                        </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bottom-link">
                                                    <a href="#" class="btn btn-lg btn-dark btn-outline">
                                                        <span>Shop All Accessories</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="awemenu-item">
                                <a href="#" title="">
                                    <span>Brand</span>
                                </a>

                                <ul class="awemenu-submenu awemenu-megamenu" data-width="100%" data-animation="fadeup">
                                    <li class="awemenu-megamenu-item">
                                        <div class="container-fluid">
                                            <div class="awemenu-megamenu-wrapper">

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h2 class="upper">Brand</h2>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <ul class="sublist">
                                                            <li><a href="#" title="">Dr.Matten</a>
                                                            </li>
                                                            <li><a href="#" title="">The Police</a>
                                                            </li>
                                                            <li><a href="#" title="">Adidas</a>
                                                            </li>
                                                            <li><a href="#" title="">Like</a>
                                                            </li>
                                                            <li><a href="#" title="">The Sandiago</a>
                                                            </li>
                                                            <li><a href="#" title="">Pollo</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="sublist">
                                                            <p>Brand</p>
                                                            <ul class="numbers-list">
                                                                <li><a href="#" title="">A</a>
                                                                </li>
                                                                <li><a href="#" title="">B</a>
                                                                </li>
                                                                <li><a href="#" title="">C</a>
                                                                </li>
                                                                <li><a href="#" title="">D</a>
                                                                </li>
                                                                <li><a href="#" title="">E</a>
                                                                </li>
                                                                <li><a href="#" title="">F</a>
                                                                </li>
                                                                <li><a href="#" title="">G</a>
                                                                </li>
                                                                <li><a href="#" title="">H</a>
                                                                </li>
                                                                <li><a href="#" title="">I</a>
                                                                </li>
                                                                <li><a href="#" title="">J</a>
                                                                </li>
                                                                <li><a href="#" title="">K</a>
                                                                </li>
                                                                <li><a href="#" title="">L</a>
                                                                </li>
                                                                <li><a href="#" title="">M</a>
                                                                </li>
                                                                <li><a href="#" title="">N</a>
                                                                </li>
                                                                <li><a href="#" title="">O</a>
                                                                </li>
                                                                <li><a href="#" title="">P</a>
                                                                </li>
                                                                <li><a href="#" title="">Q</a>
                                                                </li>
                                                                <li><a href="#" title="">R</a>
                                                                </li>
                                                                <li><a href="#" title="">S</a>
                                                                </li>
                                                                <li><a href="#" title="">T</a>
                                                                </li>
                                                                <li><a href="#" title="">U</a>
                                                                </li>
                                                                <li><a href="#" title="">V</a>
                                                                </li>
                                                                <li><a href="#" title="">W</a>
                                                                </li>
                                                                <li><a href="#" title="">X</a>
                                                                </li>
                                                                <li><a href="#" title="">Y</a>
                                                                </li>
                                                                <li><a href="#" title="">Z</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="awe-media inline margin-bottom-25">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/horosen-shop.jpg') }}" alt="">

                                                                </a>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">Horosen shop</a>
                                                        </h4>
                                                        </div>

                                                        <div class="awe-media inline">
                                                            <div class="awe-media-image">
                                                                <a href="#" title="">
                                                                    <img src="{{ asset('img/samples/menu/police-shop.jpg') }}" alt="">

                                                                </a>
                                                            </div>
                                                            <h4 class="awe-media-title medium upper center">
                                                            <a href="#" title="">The police shop</a>
                                                        </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bottom-link">
                                                    <a href="#" class="btn btn-lg btn-dark btn-outline">
                                                        <span>Shop All Accessories</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="awemenu-item">
                                <a href="#" title="">Pages</a>

                                <ul class="awemenu-submenu awemenu-megamenu" data-width="100%" data-animation="fadeup">
                                    <li class="awemenu-megamenu-item">
                                        <div class="container-fluid">

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul class="list-unstyled">
                                                        <li class="awemenu-item">
                                                            <a href="" title="">Home Page</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Home Page 2</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Home Page 3</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Home Page 4</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Home Page sytle</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Home with empty cart</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">404</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Comming soon</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-3">
                                                    <ul class="list-unstyled">
                                                        <li class="awemenu-item">
                                                            <a href="" title="">About us</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Contact</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Customers Say</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Blog left</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Blog right</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Blog nobar</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Blog masonry</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Blog details</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-3">
                                                    <ul class="list-unstyled">
                                                        <li class="awemenu-item">
                                                            <a href="" title="">Lookbook</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Lookbook details</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Portfolio 1</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Portfolio 2</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Portfolio 3</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Portfolio 4</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Portfolio details</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-3">
                                                    <ul class="list-unstyled">
                                                        <li class="awemenu-item">
                                                            <a href="" title="">Product grid</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Product grid 2</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Product list</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Product detail</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Product detail 2</a>
                                                        </li>

                                                        <li class="awemenu-item">
                                                            <a href="" title="">Checkout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="awemenu-item">
                                <a href="#">Elements</a>

                                <ul class="awemenu-submenu awemenu-megamenu" data-width="650px" data-animation="fadeup">
                                    <li class="awemenu-megamenu-item">

                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        <li class="awemenu-item"><a href="">Alert</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Background</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Bar (Progress)</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Box</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Buttons</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Form Fields</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Grid</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Page Title</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Maps</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        <li class="awemenu-item"><a href="">Icons (Aweicon)</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Icons (Glyphicon)</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Icons (FontAwesome)</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Carousel</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Tabs</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Typography</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Video / Sound</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Divider</a>
                                                        </li>
                                                        <li class="awemenu-item"><a href="">Counter</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <!-- /.awemenu -->
                    </div>
                </div>
                <!-- /.container -->

            </nav>
            <!-- /.awe-menubar -->
        </header>
        <!-- /.awe-menubar-header -->


        <div id="main">

            <section>





                <div class="main-slider-wrapper">
                    <div class="main-slider owl-carousel owl-carousel-inset">

                        <div class="main-slider-item">
                            <div class="main-slider-image">
                                <img src="{{ asset('img/samples/sliders/1.jpg') }}" alt="">

                            </div>

                            <div class="main-slider-text">
                                <div class="fp-table">
                                    <div class="fp-table-cell center">
                                        <div class="container">
                                            <h3>The Shoes For Summer</h3>
                                            <h2>Shoes Vans<br>$160.00</h2>

                                            <div class="button">
                                                <a href="#" class="btn btn-lg btn-primary margin-right-15">Shop now</a>
                                                <a href="#" class="btn btn-lg btn-white btn-outline">Browse category</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-slider-item">
                            <div class="main-slider-image">
                                <img src="{{ asset('img/samples/sliders/2.jpg') }}" alt="">
                            </div>

                            <div class="main-slider-text">
                                <div class="fp-table">
                                    <div class="fp-table-cell center">
                                        <div class="container">
                                            <h3 class="small">New Fashion For Winter</h3>
                                            <h2 class="small">New Jacket <br> only $60</h2>

                                            <div class="button">
                                                <a href="#" class="btn btn-lg btn-primary margin-right-15">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-slider-item">
                            <div class="main-slider-image">
                                <img src="{{ asset('img/samples/sliders/3.jpg') }}" alt="">
                            </div>

                            <div class="main-slider-text">
                                <div class="fp-table">
                                    <div class="fp-table-cell center">
                                        <div class="container">
                                            <h3 class="light">New T-shirt</h3>
                                            <h2 class="small margin-bottom-25">Vintage Raglan</h2>

                                            <div class="dots-color center margin-bottom-35">
                                                <span class="orange"></span>
                                                <span class="blue"></span>
                                                <span class="green"></span>
                                                <span class="red"></span>
                                                <span class="black"></span>
                                            </div>

                                            <div class="button">
                                                <a href="#" class="btn btn-lg btn-primary">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-slider-item">
                            <div class="main-slider-image">
                                <img src="{{ asset('img/samples/sliders/4.jpg') }}" alt="">
                            </div>

                            <div class="main-slider-text">

                                <div class="fp-table">
                                    <div class="fp-table-cell center">
                                        <div class="container">
                                            <h3 class="small">What's Trending</h3>
                                            <h2 class="small">Look Book<br>fashion 2015</h2>

                                            <div class="button">
                                                <a href="#" class="btn btn-lg btn-primary margin-right-15">View now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <script>
                    $(function() {  aweMainSlider(); });
                </script>

            </section>
            <!-- /section -->



            <div class="container">
                <div class="divider"></div>
            </div>

            <section>
                <div class="container">

                    <div class="home-trending padding-vertical-50">
                        <div class="section-header center">
                            <h2 class="upper margin-bottom-20">What's Trending</h2>
                            <p>All trend style for man</p>
                        </div>
                        <!-- ./section-header -->

                        <div class="row">

                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="awe-media">
                                    <div class="awe-media-image">
                                        <a href="#" title="New Collection For Man">
                                            <img src="{{ asset('img/samples/collections/trending/1.jpg') }}" alt="">

                                        </a>
                                    </div>
                                    <!-- /.awe-media-image -->

                                    <div class="awe-media-body center margin-vertical-20">
                                        <a href="#" title="New Collection For Man">New Collection For Man</a>
                                    </div>
                                    <!-- /.awe-media-body -->
                                </div>
                                <!-- /.awe-media -->
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="awe-media">
                                    <div class="awe-media-image">
                                        <a href="#" title="New Trending Shop">
                                            <img src="{{ asset('img/samples/collections/trending/2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!-- /.awe-media-image -->

                                    <div class="awe-media-body center margin-vertical-20">
                                        <a href="#" title="New Trending Shop">New Trending Shop</a>
                                    </div>
                                    <!-- /.awe-media-body -->
                                </div>
                                <!-- /.awe-media -->
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="awe-media">
                                    <div class="awe-media-image">
                                        <a href="#" title="New Fashion for Cafe Racer Boy">
                                            <img src="{{ asset('img/samples/collections/trending/3.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!-- /.awe-media-image -->

                                    <div class="awe-media-body center margin-vertical-20">
                                        <a href="#" title="New Fashion for Cafe Racer Boy">New Fashion for Cafe Racer Boy</a>
                                    </div>
                                    <!-- /.awe-media-body -->
                                </div>
                                <!-- /.awe-media -->
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="awe-media">
                                    <div class="awe-media-image">
                                        <a href="#" title="New Watch Style">
                                            <img src="{{ asset('img/samples/collections/trending/4.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!-- /.awe-media-image -->

                                    <div class="awe-media-body center margin-vertical-20">
                                        <a href="#" title="New Watch Style">New Watch Style</a>
                                    </div>
                                    <!-- /.awe-media-body -->
                                </div>
                                <!-- /.awe-media -->
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.home-trending -->

                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->

            <div class="container">
                <div class="divider"></div>
            </div>

            <section>
                <div class="container">
                    <div class="padding-vertical-50">

                        <div class="arrivals">
                            <div class="section-header center">
                                <h2>New Arrivals</h2>
                            </div>
                            <!-- /.section-header -->

                            <div class="products home-products owl-carousel" data-items="4">


                                <div class="product product-grid">
                                    <div class="product-media">
                                        <div class="product-thumbnail">
                                            <a href="product-fullwidth.html" title="">
                                                <img src="{{ asset('img/samples/products/index/arrivals/1.jpg') }}" alt="" class="current">
                                            </a>
                                        </div>
                                        <!-- /.product-thumbnail -->


                                        <div class="product-hover">
                                            <div class="product-actions">
                                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                                    <i class="icon icon-shopping-bag"></i>
                                                </a>

                                                <a href="#" class="awe-button product-quick-whistlist" data-toggle="tooltip" title="Add to whistlist">
                                                    <i class="icon icon-star"></i>
                                                </a>

                                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                                    <i class="icon icon-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.product-hover -->



                                    </div>
                                    <!-- /.product-media -->

                                    <div class="product-body">
                                        <h2 class="product-name">
                                    <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                                </h2>
                                        <!-- /.product-product -->

                                        <div class="product-category">
                                            <span>Short</span>
                                        </div>
                                        <!-- /.product-category -->

                                        <div class="product-price">

                                            <span class="amount">$80</span>

                                        </div>
                                        <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-body -->
                                </div>
                                <!-- /.product -->



                                <div class="product product-grid">
                                    <div class="product-media">
                                        <div class="product-thumbnail">
                                            <a href="product-fullwidth.html" title="">
                                                <img src="{{ asset('img/samples/products/index/arrivals/2.jpg') }}" alt="" class="current">
                                            </a>
                                        </div>
                                        <!-- /.product-thumbnail -->


                                        <div class="product-hover">
                                            <div class="product-actions">
                                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                                    <i class="icon icon-shopping-bag"></i>
                                                </a>

                                                <a href="#" class="awe-button product-quick-whistlist" data-toggle="tooltip" title="Add to whistlist">
                                                    <i class="icon icon-star"></i>
                                                </a>

                                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                                    <i class="icon icon-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.product-hover -->



                                    </div>
                                    <!-- /.product-media -->

                                    <div class="product-body">
                                        <h2 class="product-name">
                                    <a href="#" title="Goodale Rutledge Navy/White">Goodale Rutledge Navy/White</a>
                                </h2>
                                        <!-- /.product-product -->

                                        <div class="product-category">
                                            <span>Shirt</span>
                                        </div>
                                        <!-- /.product-category -->

                                        <div class="product-price">

                                            <span class="amount">$50</span>

                                        </div>
                                        <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-body -->
                                </div>
                                <!-- /.product -->



                                <div class="product product-grid">
                                    <div class="product-media">
                                        <div class="product-thumbnail">
                                            <a href="product-fullwidth.html" title="">
                                                <img src="{{ asset('img/samples/products/index/arrivals/3.jpg') }}" alt="" class="current">
                                            </a>
                                        </div>
                                        <!-- /.product-thumbnail -->


                                        <div class="product-hover">
                                            <div class="product-actions">
                                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                                    <i class="icon icon-shopping-bag"></i>
                                                </a>

                                                <a href="#" class="awe-button product-quick-whistlist" data-toggle="tooltip" title="Add to whistlist">
                                                    <i class="icon icon-star"></i>
                                                </a>

                                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                                    <i class="icon icon-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.product-hover -->



                                    </div>
                                    <!-- /.product-media -->

                                    <div class="product-body">
                                        <h2 class="product-name">
                                    <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                                </h2>
                                        <!-- /.product-product -->

                                        <div class="product-category">
                                            <span>Shirt</span>
                                        </div>
                                        <!-- /.product-category -->

                                        <div class="product-price">

                                            <span class="amount">$60</span>

                                        </div>
                                        <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-body -->
                                </div>
                                <!-- /.product -->



                                <div class="product product-grid">
                                    <div class="product-media">
                                        <div class="product-thumbnail">
                                            <a href="product-fullwidth.html" title="">
                                                <img src="{{ asset('img/samples/products/index/arrivals/4.jpg') }}" alt="" class="current">
                                            </a>
                                        </div>
                                        <!-- /.product-thumbnail -->


                                        <div class="product-hover">
                                            <div class="product-actions">
                                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                                    <i class="icon icon-shopping-bag"></i>
                                                </a>

                                                <a href="#" class="awe-button product-quick-whistlist" data-toggle="tooltip" title="Add to whistlist">
                                                    <i class="icon icon-star"></i>
                                                </a>

                                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                                    <i class="icon icon-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.product-hover -->



                                    </div>
                                    <!-- /.product-media -->

                                    <div class="product-body">
                                        <h2 class="product-name">
                                    <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                                </h2>
                                        <!-- /.product-product -->

                                        <div class="product-category">
                                            <span>Shirt</span>
                                        </div>
                                        <!-- /.product-category -->

                                        <div class="product-price">

                                            <span class="amount">$50</span>

                                        </div>
                                        <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-body -->
                                </div>
                                <!-- /.product -->



                                <div class="product product-grid">
                                    <div class="product-media">
                                        <div class="product-thumbnail">
                                            <a href="product-fullwidth.html" title="">
                                                <img src="{{ asset('img/samples/products/index/arrivals/5.jpg') }}" alt="" class="current">
                                            </a>
                                        </div>
                                        <!-- /.product-thumbnail -->


                                        <div class="product-hover">
                                            <div class="product-actions">
                                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                                    <i class="icon icon-shopping-bag"></i>
                                                </a>

                                                <a href="#" class="awe-button product-quick-whistlist" data-toggle="tooltip" title="Add to whistlist">
                                                    <i class="icon icon-star"></i>
                                                </a>

                                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                                    <i class="icon icon-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.product-hover -->



                                    </div>
                                    <!-- /.product-media -->

                                    <div class="product-body">
                                        <h2 class="product-name">
                                    <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                                </h2>
                                        <!-- /.product-product -->

                                        <div class="product-category">
                                            <span>Shirt</span>
                                        </div>
                                        <!-- /.product-category -->

                                        <div class="product-price">

                                            <span class="amount">$50</span>

                                        </div>
                                        <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-body -->
                                </div>
                                <!-- /.product -->


                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.arrivals -->

                    </div>
                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->

            <div class="container">
                <div class="divider"></div>
            </div>

            <section>
                <div class="container">

                    <div class="padding-vertical-50 border-bottom">
                        <div class="section-header center">
                            <h2>Featured Items</h2>
                        </div>
                        <!-- /.section-header -->

                        <div class="products scroll">
                            <div class="row">

                                <div class="col-md-3 col-sm-6 col-xs-6">

                                    <div class="product product-grid">
                                        <div class="product-media">
                                            <div class="product-thumbnail">
                                                <a href="product-fullwidth.html" title="">
                                                    <img src="{{ asset('img/samples/products/index/featured/1.jpg') }}" alt="" class="current">
                                                </a>
                                            </div>
                                            <!-- /.product-thumbnail -->


                                            <div class="product-hover">
                                                <div class="product-actions">
                                                    <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                                        <i class="icon icon-shopping-bag"></i>
                                                    </a>

                                                    <a href="#" class="awe-button product-quick-whistlist" data-toggle="tooltip" title="Add to whistlist">
                                                        <i class="icon icon-star"></i>
                                                    </a>

                                                    <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                                        <i class="icon icon-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- /.product-hover -->



                                            <span class="product-label hot">
                                    <span>hot</span>
                                            </span>

                                        </div>
                                        <!-- /.product-media -->

                                        <div class="product-body">
                                            <h2 class="product-name">
                                    <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                                </h2>
                                            <!-- /.product-product -->

                                            <div class="product-category">
                                                <span>Jackets</span>
                                            </div>
                                            <!-- /.product-category -->

                                            <div class="product-price">

                                                <span class="amount">$260</span>

                                            </div>
                                            <!-- /.product-price -->
                                        </div>
                                        <!-- /.product-body -->
                                    </div>
                                    <!-- /.product -->

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6">

                                    <div class="product product-grid">
                                        <div class="product-media">
                                            <div class="product-thumbnail">
                                                <a href="product-fullwidth.html" title="">
                                                    <img src="{{ asset('img/samples/products/index/featured/2.jpg') }}" alt="" class="current">
                                                </a>
                                            </div>
                                            <!-- /.product-thumbnail -->


                                            <div class="product-hover">
                                                <div class="product-actions">
                                                    <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                                        <i class="icon icon-shopping-bag"></i>
                                                    </a>

                                                    <a href="#" class="awe-button product-quick-whistlist" data-toggle="tooltip" title="Add to whistlist">
                                                        <i class="icon icon-star"></i>
                                                    </a>

                                                    <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                                        <i class="icon icon-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- /.product-hover -->



                                            <span class="product-label new">
                                    <span>new</span>
                                            </span>

                                        </div>
                                        <!-- /.product-media -->

                                        <div class="product-body">
                                            <h2 class="product-name">
                                    <a href="#" title="Goodale Rutledge Navy/White">Goodale Rutledge Navy/White</a>
                                </h2>
                                            <!-- /.product-product -->

                                            <div class="product-category">
                                                <span>Shorts</span>
                                            </div>
                                            <!-- /.product-category -->

                                            <div class="product-price">

                                                <span class="amount">$150</span>

                                            </div>
                                            <!-- /.product-price -->
                                        </div>
                                        <!-- /.product-body -->
                                    </div>
                                    <!-- /.product -->

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6">

                                    <div class="product product-grid">
                                        <div class="product-media">
                                            <div class="product-thumbnail">
                                                <a href="product-fullwidth.html" title="">
                                                    <img src="{{ asset('img/samples/products/index/featured/1.jpg') }}" alt="" class="current">
                                                </a>
                                            </div>
                                            <!-- /.product-thumbnail -->


                                            <div class="product-soldout">
                                                <div class="fp-table">
                                                    <div class="fp-table-cell">
                                                        <span class="soldout">Sold Out</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.product-hover -->



                                        </div>
                                        <!-- /.product-media -->

                                        <div class="product-body">
                                            <h2 class="product-name">
                                    <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                                </h2>
                                            <!-- /.product-product -->

                                            <div class="product-category">
                                                <span>Shirt</span>
                                            </div>
                                            <!-- /.product-category -->

                                            <div class="product-price">

                                                <span class="amount">$60</span>

                                            </div>
                                            <!-- /.product-price -->
                                        </div>
                                        <!-- /.product-body -->
                                    </div>
                                    <!-- /.product -->

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6">

                                    <div class="product product-grid">
                                        <div class="product-media">
                                            <div class="product-thumbnail">
                                                <a href="product-fullwidth.html" title="">
                                                    <img src="{{ asset('img/samples/products/index/featured/4.jpg') }}" alt="" class="current">
                                                </a>
                                            </div>
                                            <!-- /.product-thumbnail -->


                                            <div class="product-hover">
                                                <div class="product-actions">
                                                    <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                                        <i class="icon icon-shopping-bag"></i>
                                                    </a>

                                                    <a href="#" class="awe-button product-quick-whistlist" data-toggle="tooltip" title="Add to whistlist">
                                                        <i class="icon icon-star"></i>
                                                    </a>

                                                    <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                                        <i class="icon icon-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- /.product-hover -->



                                            <span class="product-label sale">
                                    <span>sale</span>
                                            </span>

                                        </div>
                                        <!-- /.product-media -->

                                        <div class="product-body">
                                            <h2 class="product-name">
                                    <a href="#" title="Goodale Rutledge Navy/White">Goodale Rutledge Navy/White</a>
                                </h2>
                                            <!-- /.product-product -->

                                            <div class="product-category">
                                                <span>Vests</span>
                                            </div>
                                            <!-- /.product-category -->

                                            <div class="product-price">

                                                <span class="amount">$630</span>
                                                <del class="amount">$230</del>

                                            </div>
                                            <!-- /.product-price -->
                                        </div>
                                        <!-- /.product-body -->
                                    </div>
                                    <!-- /.product -->

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.products -->

                        <div class="center">
                            <a href="#" class="btn btn-lg btn-dark btn-outline">
                                <span>View More Products</span>
                            </a>
                        </div>
                        <!-- /.margin-top-50 -->
                    </div>
                    <!-- /.padding-vertical-50 -->

                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->

            <section class="background background-color-dark background-image-section-customers-say">
                <div class="container">
                    <div class="padding-top-60">
                        <div class="section-header center">
                            <h2>Customer Say</h2>
                        </div>
                        <!-- /.section-header -->

                        <div class="section-customers">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="customers-carousel owl-carousel" id="customers-carousel" data-toggle="carousel" data-dots="true" data-nav="0">
                                        <div class="center">
                                            <h4>Natasha Roson</h4>
                                            <p>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If
                                                you are going to use a passage of Lorem Ipsum“</p>
                                        </div>
                                        <!-- /.center -->

                                        <div class="center">
                                            <h4>Natasha Roson</h4>
                                            <p>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If
                                                you are going to use a passage of Lorem Ipsum“</p>
                                        </div>
                                        <!-- /.center -->

                                        <div class="center">
                                            <h4>Natasha Roson</h4>
                                            <p>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If
                                                you are going to use a passage of Lorem Ipsum“</p>
                                        </div>
                                        <!-- /.center -->
                                    </div>
                                    <!-- /.customers-say-carousel -->
                                </div>
                            </div>
                        </div>
                        <!-- /.section-content -->
                    </div>
                </div>
                <!-- /.container -->

                <div class="section-brands">
                    <div class="container">
                        <div class="brands-carousel owl-carousel" id="brands-carousel">


                            <div class="center">
                                <img src="{{ asset('img/samples/brands/brand-1.png') }}" alt="">

                            </div>
                            <!-- /.center -->

                            <div class="center">
                                <img src="{{ asset('img/samples/brands/brand-2.png') }}" alt="">
                            </div>
                            <!-- /.center -->

                            <div class="center">
                                <img src="{{ asset('img/samples/brands/brand-3.png') }}" alt="">
                            </div>
                            <!-- /.center -->

                            <div class="center">
                                <img src="{{ asset('img/samples/brands/brand-4.png') }}" alt="">
                            </div>
                            <!-- /.center -->



                            <div class="center">
                                <img src="{{ asset('img/samples/brands/brand-1.png') }}" alt="">
                            </div>
                            <!-- /.center -->

                            <div class="center">
                                <img src="{{ asset('img/samples/brands/brand-2.png') }}" alt="">
                            </div>
                            <!-- /.center -->

                            <div class="center">
                                <img src="{{ asset('img/samples/brands/brand-3.png') }}" alt="">
                            </div>
                            <!-- /.center -->

                            <div class="center">
                                <img src="{{ asset('img/samples/brands/brand-4.png') }}" alt="">
                            </div>
                            <!-- /.center -->


                        </div>
                        <!-- /.brands-carousel -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.section-brands -->

            </section>
            <!-- /section -->

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
                                            <h3 class="widget-title">ABOUT HOSOREN</h3>

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
                                        <li><a href="#" title="">Compared Items</a>
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



                                <div class="widget">
                                    <h3 class="widget-title">PAYMENT ACCEPT</h3>

                                    <ul class="list-socials">
                                        <li>
                                            <a href="#" title="">
                                                <i class="fa fa-cc-paypal"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="">
                                                <i class="fa fa-cc-visa"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="">
                                                <i class="fa fa-cc-amex"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.widget -->

                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.footer-widgets -->

                <div class="footer-copyright">
                    <div class="container">
                        <div class="copyright">
                            <p>Copyright &copy; 2015 Hosoren - All Rights Reserved.</p>
                        </div>

                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="#" title="">Contact Us</a>
                                    </li>
                                    <li><a href="#" title="">Term of Use</a>
                                    </li>
                                    <li><a href="#" title="">Privacy Policy</a>
                                    </li>
                                    <li><a href="#" title="">Site Map</a>
                                    </li>
                                </ul>
                            </nav>

                            <nav>
                                <ul>
                                    <li class="dropdown dropup">
                                        <div class="language-select">
                                            <span class="select-title">Language:</span>

                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <span>ENG</span>
                                                <span class="icon icon-arrow-down"></span>
                                            </a>

                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">English</a>
                                                </li>
                                                <li><a href="#">Vietnamese</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="dropdown dropup">
                                        <div class="price-select">
                                            <span class="select-title">Price:</span>

                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <span>USD</span>
                                                <span class="icon icon-arrow-down"></span>
                                            </a>

                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">USD</a>
                                                </li>
                                                <li><a href="#">VND</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /.footer-copyright -->
            </div>
            <!-- /.footer-wrapper -->

            <a href="#" class="back-top" title="">
                <span class="back-top-image">
                    <img src="{{ asset('img/back-top.png') }}" alt="">

                </span>

                <small>Back top top</small>
            </a>
            <!-- /.back-top -->
        </footer>
        <!-- /footer -->

    </div>
    <!-- /#wrapper -->


    <div id="login-popup" class="white-popup login-popup mfp-hide">
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#account-login" aria-controls="account-login" role="tab" data-toggle="tab">Account Login</a>
                </li>

                <li role="presentation">
                    <a href="#account-register" aria-controls="account-register" role="tab" data-toggle="tab">Register</a>
                </li>
            </ul>
            <!-- /.nav -->

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="account-login">
                    <form action="index.html" method="POST">
                        <div class="form-group">
                            <label for="login-account">Account</label>
                            <input type="text" class="form-control" id="login-account">
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label for="login-password">Password</label>
                            <input type="password" class="form-control" id="login-password" data-show-password="true">
                        </div>
                        <!-- /.form-group -->

                        <div class="forgot-passwd">
                            <a href="#" title="">
                                <i class="icon icon-key"></i>
                                <span>Forgot your password?</span>
                            </a>
                        </div>
                        <!-- /.forgot-passwd -->

                        <div class="form-button">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->

                <div role="tabpanel" class="tab-pane" id="account-register">
                    <form action="index.html" method="POST">
                        <div class="form-group">
                            <label for="register-username">Username <sup>*</sup>
                            </label>
                            <input type="text" class="form-control" id="register-username">
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label for="register-email">Email <sup>*</sup>
                            </label>
                            <input type="text" class="form-control" id="register-email">
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label for="register-password">Password <sup>*</sup>
                            </label>
                            <input type="password" class="form-control" id="register-password">
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label for="register-confirm-password">Confirm Password <sup>*</sup>
                            </label>
                            <input type="password" class="form-control" id="register-confirm-password">
                        </div>
                        <!-- /.form-group -->

                        <div class="form-button">
                            <button type="submit" class="btn btn-lg btn-warning btn-block">Register</button>
                        </div>
                        <!-- /.form-button -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
    </div>
    <!-- /.login-popup -->

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
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <script src="js/plugins.js"></script>

    <script src="js/main.js"></script>

    <script src="js/docs.js"></script>
<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-20585382-5', 'megadrupal.com');
        ga('send', 'pageview');
    </script>
</body>

</html>
