@extends('master/master')
@section('content')

    <style type="text/css">
        body > section {
            padding: 2rem 0;
        }
        body {
            background-color: #f5f5f5 !important;
        }
        .breadcrumbs {
            padding-top: 5.5rem;
        }
    </style>

    <!-- breadcrumbs -->
    <section class="breadcrumbs bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index')  }}">Главная</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('listing', ['gender' => $product->category->forMen == 1 ? 'men' : 'women']) }}">
                                    @if($product->category->forMen == 1)
                                        Мужская одежда
                                    @else
                                        Женская одежда
                                    @endif
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('listingCategory', ['gender' => $product->category->forMen == 1 ? 'men' : 'women', 'categoryNumber' => $product->category->id]) }}">
                                    {{$product->category->name}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">{{$product->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- product -->
    <section class="hero">
        <div class="container">
            <div class="row gutter-2 gutter-md-4 justify-content-between">
                <!-- carousel -->
                <div class="col-lg-7">
                    <div class="row gutter-1 justify-content-between">
                        <div class="col-lg-10 order-lg-2">
                            <div class="owl-carousel owl-carousel--alt gallery" data-margin="0" data-slider-id="1" data-thumbs="true" data-nav="true">
                                <figure>
                                    <a class="product-main-size" href="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}"><img src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt="Image"></a>
                                </figure>
                                <figure>
                                    <a href="{{ \Illuminate\Support\Facades\Storage::url($product->image2) }}"><img src="{{ \Illuminate\Support\Facades\Storage::url($product->image2) }}" alt="Image"></a>
                                </figure>
                                <figure>
                                    <a href="{{ \Illuminate\Support\Facades\Storage::url($product->image3) }}"><img src="{{ \Illuminate\Support\Facades\Storage::url($product->image3) }}" alt="Image"></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-2 text-center text-lg-left order-lg-1">
                            <div class="owl-thumbs" data-slider-id="1">
                                <span class="owl-thumb-item"><img src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt=""></span>
                                <span class="owl-thumb-item"><img src="{{ \Illuminate\Support\Facades\Storage::url($product->image2) }}" alt=""></span>
                                <span class="owl-thumb-item"><img src="{{ \Illuminate\Support\Facades\Storage::url($product->image3) }}" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <!-- description -->
                    <div class="row">
                        <div class="col-12">
                            <span class="eyebrow text-muted">{{$product->brand->name}}</span>
                            <h1>{{$product->name}}</h1>
                            <span class="price fs-18">{{$product->price}}₽</span>
                        </div>
                    </div>
                    <div class="row gutter-2">

                        @if($isInCart)
                            <div class="row margin-row-1">
                                <div class="col-sm-6 mb-3">
                                    <a href="{{ route('cart') }}" class="btn btn-block btn-primary">Перейти в корзину</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ route('listing', ['gender' => 'all']) }}" class="btn btn-block btn-secondary">Продолжить покупки</a>
                                </div>
                            </div>
                        @else
                            <form action="{{ route('basketAdd', ['id' => $product->id]) }}" method="POST">
                                @csrf

                                @if ($product->category->code == 3)
                                    <!-- Если товар является аксессуаром, скрываем выбор размера -->
                                    <input type="hidden" name="size" value="a">
                                @else
                                    <!-- Если товар не является аксессуаром, отображаем выбор размера -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Размер</label>
                                            <div class="btn-group-toggle btn-group-square" data-toggle="buttons">
                                                @foreach($sizes as $size)
                                                    <label class="btn {{ $size->count == 0 ? 'disabled' : '' }}">
                                                        <input type="radio" name="size" value="{{ $size->clothes_size }}" {{ $size->count == 0 ? 'disabled' : '' }}> {{ $size->clothes_size }}
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <div class="col-12">
                                    <button type="submit" class="btn btn-block btn-primary btn-product-add">Добавить в корзину</button>
                                </div>
                            </form>

                        @endif
                    </div>

                    <!-- accordion -->
                    <div class="row">
                        <div class="col">
                            <div class="accordion" id="accordion-1">
                                <div class="card active">
                                    <div class="card-header" id="heading-1-1">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-1-1" aria-expanded="true" aria-controls="collapse-1-1">
                                                Детали
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse-1-1" class="collapse show" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                                        <div class="card-body">
                                            <pre>{{$product->description}}</pre>
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
