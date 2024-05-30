@extends('master/master')
@section('content')


<!-- breadcrumbs -->
<section class="breadcrumbs bg-light">
    <div class="container">
        <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#!">Home</a></li>
                <li class="breadcrumb-item"><a href="#!">Women</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dresses</li>
            </ol>
            </nav>
        </div>
        </div>
    </div>
    </section>


    <!-- listing -->
    <section class="pt-6">
    <div class="container">

        <div class="row gutter-4">

        <!-- sidebar -->
        <aside class="col-lg-3 sidebar">
            <div class="widget d-none d-lg-block widget-left">
                <span class="widget-title">Women</span>
                <ul id="page-nav" class="nav flex-column nav-accordion">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-1" role="button" aria-expanded="false" aria-controls="menu-1">Coats & Jackets</a>
                        <div class="collapse" id="menu-1" data-parent="#page-nav">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#!">Trench Coats</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Puffer Jackets</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Leather Jackets</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-3" role="button" aria-expanded="false" aria-controls="menu-3">Polo Shirts</a>
                        <div class="collapse" id="menu-3" data-parent="#page-nav">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#!">Short Sleeve</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Long Sleeve</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Striped</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-4" role="button" aria-expanded="false" aria-controls="menu-4">Sweatshirts</a>
                        <div class="collapse" id="menu-4" data-parent="#page-nav">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#!">Hoodies</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Crewneck</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-5" role="button" aria-expanded="false" aria-controls="menu-5">T-Shirts & Tops</a>
                        <div class="collapse" id="menu-5" data-parent="#page-nav">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#!">Short Sleeve</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Long Sleeve</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-6" role="button" aria-expanded="false" aria-controls="menu-6">Knitwear</a>
                        <div class="collapse" id="menu-6" data-parent="#page-nav">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#!">Cardigans</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Sweaters</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>



            <div class="widget widget-left">
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
                    <h1>Dresses</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <ul class="list list-horizontal">
                    <li id="catagory-first-li">
                        <span>15 from 90 items</span>
                    </li>
                    <li>
                        <span>Sort by
                        <span class="dropdown">
                            <a class="dropdown-toggle" href="#!" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

            <div class="col-6 col-md-4">
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="product-fullwidth.html" title="">
                                <img src="{{ asset('img/samples/products/index/featured/1.jpg') }}" alt="" class="current">
                            </a>
                        </div>
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
                    </div>
                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                        </h2>
                        <div class="product-category">
                            <span>Jackets</span>
                        </div>
                        <div class="product-price">
                            <span class="amount">$260</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="product-fullwidth.html" title="">
                                <img src="{{ asset('img/samples/products/index/featured/1.jpg') }}" alt="" class="current">
                            </a>
                        </div>
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
                    </div>
                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                        </h2>
                        <div class="product-category">
                            <span>Jackets</span>
                        </div>
                        <div class="product-price">
                            <span class="amount">$260</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="product-fullwidth.html" title="">
                                <img src="{{ asset('img/samples/products/index/featured/1.jpg') }}" alt="" class="current">
                            </a>
                        </div>
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
                    </div>
                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                        </h2>
                        <div class="product-category">
                            <span>Jackets</span>
                        </div>
                        <div class="product-price">
                            <span class="amount">$260</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="product-fullwidth.html" title="">
                                <img src="{{ asset('img/samples/products/index/featured/1.jpg') }}" alt="" class="current">
                            </a>
                        </div>
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
                    </div>
                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                        </h2>
                        <div class="product-category">
                            <span>Jackets</span>
                        </div>
                        <div class="product-price">
                            <span class="amount">$260</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="product-fullwidth.html" title="">
                                <img src="{{ asset('img/samples/products/index/featured/1.jpg') }}" alt="" class="current">
                            </a>
                        </div>
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
                    </div>
                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                        </h2>
                        <div class="product-category">
                            <span>Jackets</span>
                        </div>
                        <div class="product-price">
                            <span class="amount">$260</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="product-fullwidth.html" title="">
                                <img src="{{ asset('img/samples/products/index/featured/1.jpg') }}" alt="" class="current">
                            </a>
                        </div>
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
                    </div>
                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Gin Lane Greenport Cotton Shirt">Gin Lane Greenport Cotton Shirt</a>
                        </h2>
                        <div class="product-category">
                            <span>Jackets</span>
                        </div>
                        <div class="product-price">
                            <span class="amount">$260</span>
                        </div>
                    </div>
                </div>
            </div>

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
