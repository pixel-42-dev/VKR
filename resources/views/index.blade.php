@extends('master/master')
@section('content')

    <!-- swiper -->
    <div class="swiper-container">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="image" style="background-image:url({{ asset('images/demo/background-2.jpg') }})"></div>

          <div class="container">
            <div class="row align-items-end vh-100">
              <div class="col-lg-8 text-white" data-swiper-parallax-x="-100%">
                <span class="eyebrow">New Collection</span>
                <h1 class="mb-3 text-uppercase">Summer is here</h1>
                <a href="listing-full.html" class="btn btn-outline-white">Shop Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="image image--overlay" style="background-image:url({{ asset('images/demo/background-1.jpg') }})"></div>
          <div class="container">
            <div class="row align-items-end vh-100">
              <div class="col-lg-8 text-white" data-swiper-parallax-x="-100%">
                <span class="eyebrow">Новая коллекция</span>
                <h1>Летние платья</h1>
                <a href="listing-full.html" class="btn btn-outline-white">К товарам</a>
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


    <!-- categories -->
    <section class="py-1">
      <div class="container-full">
        <div class="row gutter-1">
          <div class="col-md-6">
            <div class="card card-tile">
              <figure class="card-image equal vh-75">
                <span class="image" style="background-image: url({{ asset('images/demo/image-2.jpg') }})"></span>
              </figure>
              <div class="card-footer p-lg-5">
                <div class="bg-white d-inline-block p-3">
                  <h2 class="card-title"><span class="d-block text-gray">Feel the summer</span> New Bag 1913</h2>
                  <a href="" class="underlined">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-tile">
              <figure class="card-image equal vh-75">
                <span class="image" style="background-image: url({{ asset('images/demo/image-3.jpg') }})"></span>
              </figure>
              <div class="card-footer p-lg-5">
                <div class="bg-white d-inline-block p-3">
                  <h2 class="card-title"><span class="d-block text-gray">Feel the summer</span> New Collection</h2>
                  <a href="" class="underlined">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- carousel -->
    <section class="py-lg-0 no-overflow">
      <div class="container">
        <div class="row align-items-center gutter-1">
          <div class="col-lg-3">
            <div class="pr-lg-5">
              <div class="level-1">
                <span class="eyebrow text-muted">Hot Products</span>
                <h2>Top Sellers</h2>
                <div class="nav nav-tabs flex-lg-column mt-md-3 lavalamp">
                  <a class="nav-item nav-link active" data-filter="1">Women</a>
                  <a class="nav-item nav-link" data-filter="2">Men</a>
                  <a class="nav-item nav-link" data-filter="3">Kids</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row gutter-2 filtr-container imagesloaded">

              <!-- women -->
              <div class="col-12 filtr-item" data-category="1" data-sort="value">
                <div class="owl-carousel owl-carousel--mask visible" data-items="[2,2,2,1]" data-loop="true" data-margin="10" data-nav="true">
                  <div class="card card-product">
                    <figure class="card-image">
                      <a href="#!" class="action"><i class="icon-heart"></i></a>
                      <a href="#!">
                        <img src="{{ asset('images/demo/product-1.jpg') }}" alt="Image">
                        <img src="{{ asset('images/demo/product-1-3.jpg') }}" alt="Image">

                      </a>
                    </figure>
                    <a href="" class="card-body">
                      <h3 class="card-title">T-shirt</h3>
                      <span class="price">$19.00</span>
                    </a>
                  </div>
                  <div class="card card-product">
                    <figure class="card-image">
                      <a href="#!" class="action"><i class="icon-heart"></i></a>
                      <a href="#!">
                        <img src="{{ asset('images/demo/product-2.jpg') }}" alt="Image">
                        <img src="{{ asset('images/demo/product-2-2.jpg') }}" alt="Image">
                      </a>
                    </figure>
                    <a href="" class="card-body">
                      <h3 class="card-title">Swimwear</h3>
                      <span class="price">$39.00</span>
                    </a>
                  </div>
                  <div class="card card-product">
                    <figure class="card-image">
                      <a href="#!" class="action"><i class="icon-heart"></i></a>
                      <a href="#!">
                        <img src="{{ asset('images/demo/product-3.jpg') }}" alt="Image">
                        <img src="{{ asset('images/demo/product-3-3.jpg') }}" alt="Image">
                      </a>
                    </figure>
                    <a href="" class="card-body">
                      <h3 class="card-title">Skirt</h3>
                      <span class="price">$29.00</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- men -->
              <div class="col-12 filtr-item filteredOut" data-category="2" data-sort="value">
                <div class="owl-carousel owl-carousel--mask visible" data-items="[2,2,2,1]" data-loop="true" data-margin="10" data-nav="true">
                  <div class="card card-product">
                    <figure class="card-image">
                      <a href="#!" class="action"><i class="icon-heart"></i></a>
                      <a href="#!">
                        <img src="{{ asset('images/demo/product-1.jpg') }}" alt="Image">
                        <img src="{{ asset('images/demo/product-1-3.jpg') }}" alt="Image">
                      </a>
                    </figure>
                    <a href="" class="card-body">
                      <h3 class="card-title">T-shirt</h3>
                      <span class="price">$19.00</span>
                    </a>
                  </div>
                  <div class="card card-product">
                    <figure class="card-image">
                      <a href="#!" class="action"><i class="icon-heart"></i></a>
                      <a href="#!">
                        <img src="{{ asset('images/demo/product-2.jpg') }}" alt="Image">
                        <img src="{{ asset('images/demo/product-2-2.jpg') }}" alt="Image">
                      </a>
                    </figure>
                    <a href="" class="card-body">
                      <h3 class="card-title">Swimwear</h3>
                      <span class="price">$39.00</span>
                    </a>
                  </div>
                  <div class="card card-product">
                    <figure class="card-image">
                      <a href="#!" class="action"><i class="icon-heart"></i></a>
                      <a href="#!">
                        <img src="{{ asset('images/demo/product-3.jpg') }}" alt="Image">
                        <img src="{{ asset('images/demo/product-3-3.jpg') }}" alt="Image">
                      </a>
                    </figure>
                    <a href="" class="card-body">
                      <h3 class="card-title">Skirt</h3>
                      <span class="price">$29.00</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- kids -->
              <div class="col-12 filtr-item filteredOut" data-category="3" data-sort="value">
                <div class="owl-carousel owl-carousel--mask visible" data-items="[2,2,2,1]" data-loop="true" data-margin="10" data-nav="true">
                  <div class="card card-product">
                    <figure class="card-image">
                      <a href="#!" class="action"><i class="icon-heart"></i></a>
                      <a href="#!">
                        <img src="{{ asset('images/demo/product-1.jpg') }}" alt="Image">
                        <img src="{{ asset('images/demo/product-1-3.jpg') }}" alt="Image">
                      </a>
                    </figure>
                    <a href="" class="card-body">
                      <h3 class="card-title">T-shirt</h3>
                      <span class="price">$19.00</span>
                    </a>
                  </div>
                  <div class="card card-product">
                    <figure class="card-image">
                      <a href="#!" class="action"><i class="icon-heart"></i></a>
                      <a href="#!">
                        <img src="{{ asset('images/demo/product-2.jpg') }}" alt="Image">
                        <img src="{{ asset('images/demo/product-2-2.jpg') }}" alt="Image">
                      </a>
                    </figure>
                    <a href="" class="card-body">
                      <h3 class="card-title">Swimwear</h3>
                      <span class="price">$39.00</span>
                    </a>
                  </div>
                  <div class="card card-product">
                    <figure class="card-image">
                      <a href="#!" class="action"><i class="icon-heart"></i></a>
                      <a href="#!">
                        <img src="{{ asset('images/demo/product-3.jpg') }}" alt="Image">
                        <img src="{{ asset('images/demo/product-3-3.jpg') }}" alt="Image">
                      </a>
                    </figure>
                    <a href="" class="card-body">
                      <h3 class="card-title">Skirt</h3>
                      <span class="price">$29.00</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <!-- categories -->
    <section>
      <div class="container">
        <div class="row align-items-end">
          <div class="col-8 col-md-6">
            <span class="eyebrow text-muted">Shop by category</span>
            <h2>Trending Categories</h2>
          </div>
          <div class="col-4 col-md-6 text-right">
            <a href="" class="underlined">View More</a>
          </div>
        </div>
        <div class="row gutter-1">
          <div class="col-6 col-lg-3">
            <a href="">
              <figure class="category category--alt">
                <div class="equal"><span class="image" style="background-image: url({{ asset('images/demo/product-5.jpg') }})"></span></div>
                <figcaption>Dresses</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-lg-3">
            <a href="">
              <figure class="category category--alt">
                <div class="equal"><span class="image" style="background-image: url({{ asset('images/demo/product-6.jpg') }})"></span></div>
                <figcaption>Shoes</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-lg-3">
            <a href="">
              <figure class="category category--alt">
                <div class="equal"><span class="image" style="background-image: url({{ asset('images/demo/product-3.jpg') }})"></span></div>
                <figcaption>Skirt</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-lg-3">
            <a href="">
              <figure class="category category--alt">
                <div class="equal"><span class="image" style="background-image: url({{ asset('images/demo/product-4.jpg') }})"></span></div>
                <figcaption>Jewelery</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-lg-3">
            <a href="">
              <figure class="category category--alt">
                <div class="equal"><span class="image" style="background-image: url({{ asset('images/demo/product-1.jpg') }})"></span></div>
                <figcaption>Blouses</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-lg-3">
            <a href="">
              <figure class="category category--alt">
                <div class="equal"><span class="image" style="background-image: url({{ asset('images/demo/product-2.jpg') }})"></span></div>
                <figcaption>Swimwear</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-lg-3">
            <a href="">
              <figure class="category category--alt">
                <div class="equal"><span class="image" style="background-image: url({{ asset('images/demo/category-2.jpg') }})"></span></div>
                <figcaption>Bodysuit</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-lg-3">
            <a href="">
              <figure class="category category--alt">
                <div class="equal"><span class="image" style="background-image: url({{ asset('images/demo/category-1.jpg') }})"></span></div>
                <figcaption>Sunglass</figcaption>
              </figure>
            </a>
          </div>
        </div>
      </div>
    </section>


@endsection
