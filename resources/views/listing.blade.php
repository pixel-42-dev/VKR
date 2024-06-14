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
                                                        $gender = 'men';
                                                    } else {
                                                        $gender = 'women';
                                                    }
                                                @endphp
                                                <li class="nav-item"><a class="nav-link" href="{{ route('listingCategory', ['gender' => $gender, 'categoryNumber' => $category->id]) }}">{{ $category->name }}</a></li>
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
                                                        $gender = 'men';
                                                    } else {
                                                        $gender = 'women';
                                                    }
                                                @endphp
                                                <li class="nav-item"><a class="nav-link" href="{{ route('listingCategory', ['gender' => $gender, 'categoryNumber' => $category->id]) }}">{{ $category->name }}</a></li>
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
                                                        $gender = 'men';
                                                    } else {
                                                        $gender = 'women';
                                                    }
                                                @endphp
                                                <li class="nav-item"><a class="nav-link" href="{{ route('listingCategory', ['gender' => $gender, 'categoryNumber' => $category->id]) }}">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="widget">
                        <span class="widget-title">Filters <a href="" class="small text-red">clear</a></span>
                        <div class="accordion" id="accordion-1">
                            <div class="card">
                                <div class="card-header" id="heading-1-1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                            Style
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1">
                                    <div class="card-body">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Coats & Jackets</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Dresses</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Polo Shirts</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">Sweatshirts</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5">T-Shirts & Tops</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">Knitwear</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-1-2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                            Size
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2">
                                    <div class="card-body">
                                        <div class="btn-group-toggle btn-group-square" data-toggle="buttons">
                                            <label class="btn active">
                                                <input type="checkbox" name="options" id="option-1" checked> 35
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="options" id="option-2"> 35.5
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="options" id="option-3"> 36
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="options" id="option-4"> 36.5
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="options" id="option-5"> 37
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="options" id="option-6"> 38
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="options" id="option-7"> 38.5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-1-3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                            Color
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3">
                                    <div class="card-body">
                                        <div class="btn-group-toggle btn-group-square btn-group-colors" data-toggle="buttons">
                                            <label class="btn active text-red">
                                                <input type="checkbox" name="color-select" id="option-2-1" checked>
                                            </label>
                                            <label class="btn text-blue">
                                                <input type="checkbox" name="color-select" id="option-2-2">
                                            </label>
                                            <label class="btn text-yellow">
                                                <input type="checkbox" name="color-select" id="option-2-3">
                                            </label>
                                            <label class="btn text-green">
                                                <input type="checkbox" name="color-select" id="option-2-4">
                                            </label>
                                            <label class="btn text-white">
                                                <input type="checkbox" name="color-select" id="option-2-5">
                                            </label>
                                            <label class="btn text-dark">
                                                <input type="checkbox" name="color-select" id="option-2-6">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-1-4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                            Price Range
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4">
                                    <div class="card-body">
                                        <input type="text" class="rangeslider" name="Range Slider" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <span>15 from 90 items</span>
                                </li>
                                <li>
                      <span>Sort by
                      <span class="dropdown">
                        <a class="dropdown-toggle underline" href="#!" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Most popular
                        </a>

                        <span class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#!">Action</a>
                          <a class="dropdown-item" href="#!">Another action</a>
                          <a class="dropdown-item" href="#!">Something else here</a>
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
                                        <a href="#!" class="action"><i class="icon-heart"></i></a>
                                        <a href="{{ route('product', ['number' => $product->id]) }}">
{{--                                            <img src="{{ asset('images/demo/product-6.jpg') }}" alt="Image">--}}
{{--                                            <img src="{{ asset('images/demo/product-6-1.jpg') }}" alt="Image">--}}
                                            @if ($product->image)
                                                <img class="product-image-size" src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}" alt="Product Image">
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
                        <div class="col">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#!">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
