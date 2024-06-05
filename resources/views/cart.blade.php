@extends('master/master')
@section('content')

    <section>
        <div class="container">
          <div class="row">
            <div class="col">
              <h1>Shopping Cart</h1>
            </div>
          </div>

          <div class="row gutter-3 gutter-lg-1">

            <!-- content -->
            <div class="col">
              <div class="bg-white cart-item-list p-2 p-lg-3 mb-1">

                <div class="cart-item">
                  <a href="#!" class="cart-item-image"><img src="{{ asset('img/samples/products/1/product-1.jpg') }}" alt="Image"></a>
                  <div class="cart-item-body">
                    <div class="row">
                      <div class="col-10">
                        <div class="row">
                          <div class="col-md-6">
                            <h5 class="cart-item-title">Black Blouse</h5>
                            <small class="cart-item-subtitle">Fred Perry</small>
                            <ul class="cart-item-meta">
                              <li><s>$29.00</s></li>
                              <li class="text-red">$19.00</li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <ul class="list list--horizontal">
                              <li class="mr-2">
                                <div class="dropdown">
                                  <a class="dropdown-toggle" href="#!" role="button" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Size <span>M</span>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdown-1">
                                    <a class="dropdown-item" href="#!">S</a>
                                    <a class="dropdown-item active">M</a>
                                    <a class="dropdown-item" href="#!">L</a>
                                    <a class="dropdown-item" href="#!">XL</a>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="dropdown">
                                  <a class="dropdown-toggle" href="#!" role="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    QTY <span>1</span>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdown-2">
                                    <a class="dropdown-item active" href="#!">1</a>
                                    <a class="dropdown-item" href="#!">2</a>
                                    <a class="dropdown-item" href="#!">3</a>
                                    <a class="dropdown-item" href="#!">4</a>
                                    <a class="dropdown-item" href="#!">5</a>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-2 text-right">
                        <ul class="cart-item-options">
                          <li><a href="" class="icon-x"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="cart-item">
                  <a href="#!" class="cart-item-image"><img src="{{ asset('img/samples/products/1/product-1.jpg') }}" alt="Image"></a>
                  <div class="cart-item-body">
                    <div class="row">
                      <div class="col-10">
                        <div class="row">
                          <div class="col-md-6">
                            <h5 class="cart-item-title">Skirt</h5>
                            <small class="cart-item-subtitle">Zara</small>
                            <ul class="cart-item-meta">
                              <li><s>$35.00</s></li>
                              <li class="text-red">$29.00</li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <ul class="list list--horizontal">
                              <li class="mr-2">
                                <div class="dropdown">
                                  <a class="dropdown-toggle" href="#!" role="button" id="dropdown-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Size <span>M</span>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdown-5">
                                    <a class="dropdown-item" href="#!">S</a>
                                    <a class="dropdown-item active">M</a>
                                    <a class="dropdown-item" href="#!">L</a>
                                    <a class="dropdown-item" href="#!">XL</a>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="dropdown">
                                  <a class="dropdown-toggle" href="#!" role="button" id="dropdown-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    QTY <span>1</span>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdown-6">
                                    <a class="dropdown-item active" href="#!">1</a>
                                    <a class="dropdown-item" href="#!">2</a>
                                    <a class="dropdown-item" href="#!">3</a>
                                    <a class="dropdown-item" href="#!">4</a>
                                    <a class="dropdown-item" href="#!">5</a>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-2 text-right">
                        <ul class="cart-item-options">
                          <li><a href="" class="icon-x"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="cart-item">
                  <a href="#!" class="cart-item-image"><img src="{{ asset('img/samples/products/1/product-1.jpg') }}" alt="Image"></a>
                  <div class="cart-item-body">
                    <div class="row">
                      <div class="col-10">
                        <div class="row">
                          <div class="col-md-6">
                            <h5 class="cart-item-title">Gorgeous Dress</h5>
                            <small class="cart-item-subtitle">Ralph Lauren</small>
                            <ul class="cart-item-meta">
                              <li><s>$129.00</s></li>
                              <li class="text-red">$69.00</li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <ul class="list list--horizontal">
                              <li class="mr-2">
                                <div class="dropdown">
                                  <a class="dropdown-toggle" href="#!" role="button" id="dropdown-8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Size <span>M</span>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdown-8">
                                    <a class="dropdown-item" href="#!">S</a>
                                    <a class="dropdown-item active">M</a>
                                    <a class="dropdown-item" href="#!">L</a>
                                    <a class="dropdown-item" href="#!">XL</a>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="dropdown">
                                  <a class="dropdown-toggle" href="#!" role="button" id="dropdown-9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    QTY <span>1</span>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdown-9">
                                    <a class="dropdown-item active" href="#!">1</a>
                                    <a class="dropdown-item" href="#!">2</a>
                                    <a class="dropdown-item" href="#!">3</a>
                                    <a class="dropdown-item" href="#!">4</a>
                                    <a class="dropdown-item" href="#!">5</a>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-2 text-right">
                        <ul class="cart-item-options">
                          <li><a href="" class="icon-x"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <a href="" class="underlined">Continue Shopping</a>
            </div>


            <!-- sidebar -->
            <aside class="col-lg-4">
              <div class="bg-white p-2 p-lg-3">
                <h2 class="mb-3 text-uppercase fs-20">Order total</h2>
                <div class="input-combined mb-2">
                  <input type="text" class="form-control" placeholder="Promo code" aria-label="Promo code" aria-describedby="button-addon2">
                  <button class="btn btn-white" type="button" id="button-addon2">Apply</button>
                  <span class="input-combined_indicator"></span>
                </div>
                <ul class="list-group list-group-minimal mb-3">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Items
                    <span>$84.00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Shipping
                    <span>$8.00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center text-red">
                    Discount
                    <span class="text-red">-$14.00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-bold">
                    Total to pay
                    <span>$78.00</span>
                  </li>
                </ul>
                <a href="" class="btn btn-primary btn-block">Checkout</a>
              </div>
            </aside>
          </div>
        </div>
      </section>

@endsection
