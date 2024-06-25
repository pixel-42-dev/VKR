@extends('master/master')
@section('content')

    <style type="text/css">
        body > section {
            padding-top: 7rem !important;
        }
        body {
            background-color: #f5f5f5 !important;
        }
        .padding-section {
            padding-top: 2rem !important;
            padding-bottom: 10rem !important;
        }
    </style>

    <div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="authModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="authModalLabel">Регистрация</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Пожалуйста, зарегистрируйтесь или войдите в свой аккаунт, чтобы добавить товар в избранное.
                </div>
                <div class="modal-footer">
                    <a href="{{ route('login') }}" class="btn btn-primary">Регистрация</a>
                    <a href="{{ route('login') }}" class="btn btn-primary">Войти</a>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumbs -->
    <section class="breadcrumbs bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index')  }}">Главная</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('listing', ['gender' => $gender]) }}">
                                    {{ $genderToRussian }}
                                </a>
                            </li>
                            @if(isset($categoryName))
                                <li class="breadcrumb-item active" aria-current="page">{{ $categoryName }}</li>
                            @endif
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <!-- listing -->
    <section class="pt-6 padding-section">
        <div class="container">

            <div class="row gutter-4">

                <!-- sidebar -->
                <aside class="col-lg-3 sidebar">
                    <div class="widget d-none d-lg-block">
                        <span class="widget-title">Категории</span>
                        <ul id="page-nav" class="nav flex-column nav-accordion">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="collapse" href="#menu-1" role="button" aria-expanded="false" aria-controls="menu-1">Одежда</a>
                                <div class="collapse" id="menu-1" data-parent="#page-nav">
                                    <div>
                                        <ul class="nav flex-column">
                                            @foreach($categoryObjects1 as $category)
                                                @php
                                                    if ($category->forMen == 1) {
                                                        $genderLink = 'men';
                                                    } else {
                                                        $genderLink = 'women';
                                                    }
                                                @endphp
                                                <li class="nav-item"><a class="nav-link" href="{{ route('listingCategory', ['gender' => $genderLink, 'categoryNumber' => $category->id]) }}">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="collapse" href="#menu-2" role="button" aria-expanded="false" aria-controls="menu-2">Обувь</a>
                                <div class="collapse" id="menu-2" data-parent="#page-nav">
                                    <div>
                                        <ul class="nav flex-column">
                                            @foreach($categoryObjects2 as $category)
                                                @php
                                                    if ($category->forMen == 1) {
                                                        $genderLink = 'men';
                                                    } else {
                                                        $genderLink = 'women';
                                                    }
                                                @endphp
                                                <li class="nav-item"><a class="nav-link" href="{{ route('listingCategory', ['gender' => $genderLink, 'categoryNumber' => $category->id]) }}">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="collapse" href="#menu-3" role="button" aria-expanded="false" aria-controls="menu-3">Аксессуары</a>
                                <div class="collapse" id="menu-3" data-parent="#page-nav">
                                    <div>
                                        <ul class="nav flex-column">
                                            @foreach($categoryObjects3 as $category)
                                                @php
                                                    if ($category->forMen == 1) {
                                                        $genderLink = 'men';
                                                    } else {
                                                        $genderLink = 'women';
                                                    }
                                                @endphp
                                                <li class="nav-item"><a class="nav-link" href="{{ route('listingCategory', ['gender' => $genderLink, 'categoryNumber' => $category->id]) }}">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="widget">
                        @if(isset($categoryNumber))
                            <form method="GET" action="{{ route('listingCategory', ['gender' => $gender, 'categoryNumber' => $categoryNumber]) }}">
                        @else
                            <form method="GET" action="{{ route('listing', ['gender' => $gender]) }}">
                        @endif
                            @csrf
                            <span class="widget-title">Фильтры <a href="" class="small text-red">clear</a></span>
                            <div class="accordion" id="accordion-1">
                                @if($categoryCode == 1)
                                    <div class="card">
                                        <div class="card-header" id="heading-1-2">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-1-2" aria-expanded="true" aria-controls="collapse-1-2">
                                                    Размер
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse-1-2" class="collapse show" aria-labelledby="heading-1-2">
                                            <div class="card-body">
                                                <div class="btn-group-toggle btn-group-square" data-toggle="buttons">
                                                    <label class="btn active">
                                                        <input type="checkbox" name="sizes[]" value="XS" id="option-1"> XS
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="S" id="option-2"> S
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="M" id="option-3"> M
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="L" id="option-4"> L
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="XL" id="option-5"> XL
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="XXL" id="option-6"> XXL
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($categoryCode == 2)
                                    <div class="card">
                                        <div class="card-header" id="heading-1-2">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-1-2" aria-expanded="true" aria-controls="collapse-1-2">
                                                    Размер
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse-1-2" class="collapse show" aria-labelledby="heading-1-2">
                                            <div class="card-body">
                                                <div class="btn-group-toggle btn-group-square" data-toggle="buttons">
                                                    <label class="btn active">
                                                        <input type="checkbox" name="sizes[]" value="37" id="option-1"> 37
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="38" id="option-2"> 38
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="39" id="option-3"> 39
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="40" id="option-4"> 40
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="41" id="option-5"> 41
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="42" id="option-6"> 42
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="43" id="option-7"> 43
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="44" id="option-8"> 44
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="45" id="option-9"> 45
                                                    </label>
                                                    <label class="btn">
                                                        <input type="checkbox" name="sizes[]" value="46" id="option-10"> 46
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @else
                                @endif
                                <div class="card">
                                    <div class="card-header" id="heading-1-4">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-1-4" aria-expanded="true" aria-controls="collapse-1-4">
                                                Цена
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse-1-4" class="collapse show" aria-labelledby="heading-1-4">
                                        <div class="card-body">
                                            <input type="text" class="rangeslider" name="Range Slider" value="" data-min="0" data-max="20000" data-from="0" data-to="20000"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm btn-block mt-3" id="apply-filters-btn">Применить фильтры</button>
                        </form>
                    </div>
                </aside>

                <!-- content -->
                <div class="col-lg-9">
                    <div class="row gutter-1 align-items-end">
                        <div class="col-md-6">

                            @if(isset($categoryName))
                                <h1>{{ $categoryName }}</h1>
                            @else
                                <h1>Каталог</h1>
                            @endif
                        </div>
                        <div class="col-md-6 text-md-right">
                            <ul class="list list--horizontal list--separated text-muted fs-14">
                                <li>
                                    <span> Товары {{ $products->firstItem() }} - {{ $products->lastItem() }} из {{ $products->total() }}</span>
                                </li>
                                <li>
                                  <span>Отсортировано:
                                      <span class="dropdown">
                                        <a class="dropdown-toggle underline" href="#!" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          По новизне
                                        </a>

                                        <span class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <a class="dropdown-item" href="#!">По новизне</a>
                                          <a class="dropdown-item" href="#!">По убыванию цены</a>
                                          <a class="dropdown-item" href="#!">По возрастанию цены</a>
                                          <a class="dropdown-item" href="#!">По алфавиту</a>
                                        </span>
                                      </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row gutter-1">
                        @foreach($products as $product)
                            <div class="col-6 col-md-4">
                                <div class="card card-product">
                                    <figure class="card-image">
                                        @guest
                                            <a href="#" class="action icon-heart-container"><i class="icon-heart"></i></a>
                                        @endguest
                                        @auth
                                            <a href="#" class="action icon-heart-container {{ Auth::user()->favorites->contains($product->id) ? 'is-favorite' : '' }}" data-product-id="{{ $product->id }}"><i class="icon-heart"></i></a>
                                        @endauth
                                        <a href="{{ route('product', ['number' => $product->id]) }}">
                                            @if ($product->image1)
                                                <img class="product-image-size" src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt="Product Image">
                                                <img class="product-image-size" src="{{ \Illuminate\Support\Facades\Storage::url($product->image2) }}" alt="Product Image">
                                            @else
                                                <img class="product-image-size" src="{{ asset('images/demo/product-6.jpg') }}" alt="Default Image">
                                            @endif
                                        </a>
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

                    <div class="row">
                        {{$products->links()}}
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.icon-heart-container').on('click', function(event) {
                event.preventDefault();
                var iconContainer = $(this);
                var productId = iconContainer.data('product-id');

                // Проверяем, содержит ли элемент класс is-favorite
                var isFavorite = iconContainer.hasClass('is-favorite');

                $.ajax({
                    url: '{{ route('favorites-toggle') }}',
                    method: 'POST',
                    data: {
                        product_id: productId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            if (isFavorite) {
                                // Если товар был в избранном, удаляем класс is-favorite и меняем иконку на обычную
                                iconContainer.removeClass('is-favorite');
                            } else {
                                // Если товар не был в избранном, добавляем класс is-favorite и меняем иконку на заполненное сердечко
                                iconContainer.addClass('is-favorite');
                            }
                        } else {
                            alert('Error occurred. Please try again later.');
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 401) {
                            // Отображение модального окна при статусе 401
                            $('#authModal').modal('show');
                        } else {
                            alert('Error occurred. Please try again later.');
                        }
                    }
                });
            });
        });
    </script>
@endsection
