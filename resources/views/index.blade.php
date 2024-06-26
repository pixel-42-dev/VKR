@extends('master/master')
@section('content')

    <!-- swiper -->
    <div class="swiper-container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show alert-index-auth" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image image--overlay" style="background-image:url({{ asset('images/demo/background-1.jpg') }})"></div>
                <div class="container">
                    <div class="row align-items-end vh-100">
                        <div class="col-lg-8 text-white" data-swiper-parallax-x="-100%">
                            <span class="eyebrow">Новые поступления</span>
                            <h1 class="mb-3 text-uppercase">Модная одежда</h1>
                            <a href="{{ route('listing-2', ['parameters' => 'clothes-trend']) }}" class="btn btn-outline-white">За покупками</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image image--overlay" style="background-image:url({{ asset('images/demo/background-2.jpg') }})"></div>
                <div class="container">
                    <div class="row align-items-end vh-100">
                        <div class="col-lg-8 text-white" data-swiper-parallax-x="-100%">
                            <span class="eyebrow">Новые поступления</span>
                            <h1>Стильная обувь</h1>
                            <a href="{{ route('listing-2', ['parameters' => 'shoes-trend']) }}" class="btn btn-outline-white">За покупками</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image image--overlay" style="background-image:url({{ asset('images/demo/background-3.jpg') }})"></div>
                <div class="container">
                    <div class="row align-items-end vh-100">
                        <div class="col-lg-8 text-white" data-swiper-parallax-x="-100%">
                            <span class="eyebrow">Новые поступления</span>
                            <h1>Красивые аксесуары</h1>
                            <a href="{{ route('listing-2', ['parameters' => 'accessories-trend']) }}" class="btn btn-outline-white">За покупками</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-footer">
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <div class="col-lg-6 text-right">
                        <div class="swiper-navigation">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 p-b-30">
                    <div class="block1 wrap-pic-w">
                        <img src="{{ asset('images/demo/banner-01.jpg') }}" alt="IMG-BANNER" class="img-fluid">

                        <a href="{{ route('listing', ['gender' => 'women']) }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-4 trans-03 respon3 index-card-image">
                            <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-2">
                                Женская
                            </span>
                            <br>
                            <span class="block1-name ltext-102 trans-04 p-b-2">
                                одежда
                            </span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30">
                    <div class="block1 wrap-pic-w">
                        <img src="{{ asset('images/demo/banner-02.jpg') }}" alt="IMG-BANNER" class="img-fluid">
                        <a href="{{ route('listing', ['gender' => 'men']) }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-4 trans-03 respon3 index-card-image">
                            <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-2">
                                Мужская
                            </span>
                                <br>
                                <span class="block1-name ltext-102 trans-04 p-b-2">
                                одежда
                            </span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30">
                    <div class="block1 wrap-pic-w">
                        <img src="{{ asset('images/demo/banner-03.jpg') }}" alt="IMG-BANNER" class="img-fluid">
                        <a href="{{ route('listing-2', ['parameters' => 'accessories-new']) }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-4 trans-03 respon3 index-card-image">
                            <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-2">
                                Новые
                            </span>
                                <br>
                                <span class="block1-name ltext-102 trans-04 p-b-2">
                                аксесуары
                            </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="section-popular-products">
        <div class="container">
            <h2 class="section-title text-center mb-4">Популярные товары</h2>

            <div class="row">
                @foreach ($trendingProducts as $product)
                    <div class="col-6 col-md-3 mb-4">
                        <div class="card card-product">
                            <figure class="card-image">
                                <a href="{{ route('product', ['number' => $product->id]) }}">
                                    @if ($product->image1)
                                        <img class="product-image-size" src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt="Product Image">
                                    @else
                                        <img class="product-image-size" src="{{ asset('images/demo/product-6.jpg') }}" alt="Default Image">
                                    @endif
                                </a>
                                @if(!is_null($product->created_at))
                                    @if($product->created_at->gt(\Carbon\Carbon::now()->subDays(10)))
                                        <span class="badge badge-success">New</span>
                                    @endif
                                @endif
                                @if($product->trend)
                                    <span class="badge badge-warning badge-position-absolute">Trending</span>
                                @endif
                            </figure>
                            <div class="card-footer">
                                <h3 class="card-title"><a href="{{ route('product', ['number' => $product->id]) }}">{{ $product->name }}</a></h3>
                                <span class="brand">{{ $product->brand->name }}</span>
                                <span class="price">{{ $product->price }}₽</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection
