@extends('master/master')
@section('content')

<style type="text/css">
    body > section {
        padding: 10rem 0;
    }
    body {
        background-color: #f5f5f5 !important;
    }
</style>


    <!-- breadcrumbs -->
    <section class="breadcrumbs bg-light">
      <div class="container">
        <div class="row">
          <div class="col">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#!">Home</a></li>
                <li class="breadcrumb-item"><a href="#!">Women</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blouses</li>
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
              <div class="col-12">
                <div class="form-group">
                  <label>Размер</label>
                  <div class="btn-group-toggle btn-group-square" data-toggle="buttons">
                    <label class="btn active">
                      <input type="radio" name="customRadio" id="option-1"> xs
                    </label>
                    <label class="btn">
                      <input type="radio" name="customRadio" id="option-2"> s
                    </label>
                    <label class="btn">
                      <input type="radio" name="customRadio" id="option-3"> m
                    </label>
                    <label class="btn">
                      <input type="radio" name="customRadio" id="option-4"> l
                    </label>
                    <label class="btn">
                      <input type="radio" name="customRadio" id="option-5"> xl
                    </label>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label>Код продукта</label>
                  <small class="d-block text-dark">H182420Z</small>
                </div>
              </div>
              <div class="col-12">
                  <form action="{{ route('basketAdd', ['id' => $product->id]) }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-block btn-primary">В корзину</button>
                  </form>
              </div>
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
                        <ul class="list list--unordered">
                            <li>Белый цвет</li>
                            <li>Натуральный шёлк</li>
                            <li>Дышащий материал</li>
                            <li>Мужская</li>
                            <li>Сделано в Италии</li>
                            <li>Хит продаж</li>
                        </ul>
                        <p>Staged in Alyscamps in the city of Arles—an ancient Roman necropolis that also serves as a promenade—the Cruise 2019 explores the idea of hybridization.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="heading-1-2">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                          Shipping & Returns
                        </button>
                      </h5>
                    </div>
                    <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                      <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquam, assumenda dolor veritatis nesciunt numquam commodi quaerat. Pariatur debitis tenetur necessitatibus similique placeat id, voluptate nesciunt dolor dolorum quidem quae.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="heading-1-3">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                          <span>
                            Reviews (3)
                          </span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                      <div class="card-body">
                        <p class="text-muted fs-14">Check Cotton Shirt is rated <b class="text-dark">4.6</b> out of 5 by 3.</p>
                        <ul>
                          <li class="review">
                            <div class="review_meta">
                              <ul class="rating">
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star-o"></i></li>
                              </ul>
                              <span class="fs-12 text-uppercase text-muted ml-1">Juliet A. on may 31, 2018</span>
                            </div>
                            <h4 class="review_title">Love it.</h4>
                            <p>Nice jacket! Fits great. Looks good. Would buy again.</p>
                          </li>
                          <li class="review">
                            <div class="review_meta">
                              <ul class="rating">
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star-o"></i></li>
                              </ul>
                              <span class="fs-12 text-uppercase text-muted ml-1">Juliet A. on may 31, 2018</span>
                            </div>
                            <h4 class="review_title">Amazing fit.</h4>
                            <p>Nice jacket! Fits great. Looks good. Would buy again.</p>
                          </li>
                        </ul>
                        <a href="" class="underlined">Add a review</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Share this product</label>
              <div>
                <ul class="list list--horizontal">
                  <li><a href="#!" class="text-hover-facebook"><i class="fs-28 icon-facebook-square-brands"></i></a></li>
                  <li><a href="#!" class="text-hover-instagram"><i class="fs-28 icon-instagram-square-brands"></i></a></li>
                  <li><a href="#!" class="text-hover-twitter"><i class="fs-28 icon-twitter-square-brands"></i></a></li>
                  <li><a href="#!" class="text-hover-pinterest"><i class="fs-28 icon-pinterest-square-brands"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

@endsection
