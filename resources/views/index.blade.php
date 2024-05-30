@extends('master/master')
@section('content')

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
                                            <h3>Обувь на лето</h3>
                                            <h2>Лёгкая обувь<br>От 1100 ₽</h2>

                                            <div class="button">
                                                <a href="#" class="btn btn-lg btn-primary margin-right-15">Просмотреть</a>
                                                <a href="#" class="btn btn-lg btn-white btn-outline">Вся категория</a>
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
                                            <h3 class="small">Новая зимняя мода</h3>
                                            <h2 class="small">Новые куртки <br> От 4000 ₽</h2>

                                            <div class="button">
                                                <a href="#" class="btn btn-lg btn-primary margin-right-15">Просмотреть</a>
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
                                            <h3 class="light">Новые футболки</h3>
                                            <h2 class="small margin-bottom-25">Весенняя коллекция</h2>

                                            <div class="dots-color center margin-bottom-35">
                                                <span class="orange"></span>
                                                <span class="blue"></span>
                                                <span class="green"></span>
                                                <span class="red"></span>
                                                <span class="black"></span>
                                            </div>

                                            <div class="button">
                                                <a href="#" class="btn btn-lg btn-primary">Просмотреть</a>
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
                            <h2 class="upper margin-bottom-20">В тренде</h2>
                            <p>Стильные вещи для мужчин</p>
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
                                        <a href="#" title="New Collection For Man">Новая коллекция для мужчин</a>
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
                                        <a href="#" title="New Trending Shop">Модная обувь</a>
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
                                        <a href="#" title="New Fashion for Cafe Racer Boy">Лучшая одежда в мире</a>
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
                                        <a href="#" title="New Watch Style">Супер мега стиль</a>
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
                                <h2>Новые поступления</h2>
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
                                    <a href="#" title="Gin Lane Greenport Cotton Shirt">Модная вещь</a>
                                </h2>
                                        <!-- /.product-product -->

                                        <div class="product-category">
                                            <span>Short</span>
                                        </div>
                                        <!-- /.product-category -->

                                        <div class="product-price">

                                            <span class="amount">500 ₽</span>

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
                                    <a href="#" title="Goodale Rutledge Navy/White">Модная вещь</a>
                                </h2>
                                        <!-- /.product-product -->

                                        <div class="product-category">
                                            <span>Shirt</span>
                                        </div>
                                        <!-- /.product-category -->

                                        <div class="product-price">

                                            <span class="amount">500 ₽</span>

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
                                    <a href="#" title="Gin Lane Greenport Cotton Shirt">Модная вещь</a>
                                </h2>
                                        <!-- /.product-product -->

                                        <div class="product-category">
                                            <span>Shirt</span>
                                        </div>
                                        <!-- /.product-category -->

                                        <div class="product-price">

                                            <span class="amount">500 ₽</span>

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
                                    <a href="#" title="Gin Lane Greenport Cotton Shirt">Модная вещь</a>
                                </h2>
                                        <!-- /.product-product -->

                                        <div class="product-category">
                                            <span>Shirt</span>
                                        </div>
                                        <!-- /.product-category -->

                                        <div class="product-price">

                                            <span class="amount">500 ₽</span>

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
                                    <a href="#" title="Gin Lane Greenport Cotton Shirt">Модная вещь</a>
                                </h2>
                                        <!-- /.product-product -->

                                        <div class="product-category">
                                            <span>Shirt</span>
                                        </div>
                                        <!-- /.product-category -->

                                        <div class="product-price">

                                            <span class="amount">500 ₽</span>

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
            <!-- /section -->s

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
            </section>

@endsection
