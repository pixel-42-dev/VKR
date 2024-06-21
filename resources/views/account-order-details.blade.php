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

    <!-- content -->
    <section>
      <div class="container">
        <div class="row gutter-1 gutter-md-2">
          <div class="col-lg-4">
            <aside class="bg-white p-2 p-md-3">
                <h3 class="fs-20 text-uppercase text-muted mb-2">Добро пожаловать, {{Auth::user()->nickname}}</h3>
                <div class="nav nav-menu flex-column lavalamp" id="sidebar-1" role="tablist">
                    <a class="nav-link active" data-toggle="tab" href="#sidebar-1-1" role="tab"  aria-controls="sidebar-1" aria-selected="true"><i class="fs-24 icon-box"></i> Заказы</a>
                    <a class="nav-link" data-toggle="tab" href="#sidebar-1-2" role="tab" aria-controls="sidebar-1-2" aria-selected="false"><i class="fs-24 icon-heart"></i> Избранное</a>
                    <a class="nav-link" data-toggle="tab" href="#sidebar-1-3" role="tab" aria-controls="sidebar-1-3" aria-selected="false"><i class="fs-24 icon-user"></i> Личные данные </a>
                    <a class="nav-link" data-toggle="tab" href="#sidebar-1-4" role="tab" aria-controls="sidebar-1-4" aria-selected="false"><i class="fs-24 icon-lock"></i> Сменить пароль</a>
                    <a class="nav-link" data-toggle="tab" href="#sidebar-1-5" role="tab" aria-controls="sidebar-1-5" aria-selected="false"><i class="fs-24 icon-home"></i> Адреса</a>
                </div>
            </aside>
          </div>
          <div class="col-lg-8">
            <div class="bg-white p-2 p-md-3">
              <div class="tab-content" id="myTabContent">

                <!-- orders -->
                <div class="tab-pane fade show active" id="sidebar-1-1" role="tabpanel" aria-labelledby="sidebar-1-1">
                  <div class="row align-items-end">
                    <div class="col">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route('settings', ['page' => 1]) }}">Заказы</a></li>
                          <li class="breadcrumb-item active" aria-current="page">{{$order->id}}</li>
                        </ol>
                      </nav>
                    </div>
                  </div>

                  <!-- meta -->
                  <div class="row">
                    <div class="col">
                      <div class="bordered p-3">
                        <ul class="order-meta">
                          <li>
                            <h5 class="order-meta-title">Заказ #</h5>
                            <span>{{$order->id}}</span>
                          </li>
                          <li>
                            <h5 class="order-meta-title">Дата заказа</h5>
                            <span>{{$order->created_at->format('H:i d/m/y')}}</span>
                          </li>
                          <li>
                            <h5 class="order-meta-title">Стоимость</h5>
                            <span>{{$order->calculatePrice() + 200}}</span>
                          </li>
                          <li>
                            <h5 class="order-meta-title">Статус</h5>
                              <?php
                                if ($order->status == 1) {
                                    $status = "В обработке";
                                } elseif ($order->status == 2) {
                                    $status = "В пути";
                                } else {
                                    $status = "Получен";
                                }
                              ?>
                            <span class="text-muted">{{$status}}</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>



                  <!-- products -->
                  <div class="row">
                    <div class="col-12">
                      <h2 class="mb-1 text-uppercase fs-20">{{$order->products->count()}} товара(ов)</h2>
                    </div>
                    <div class="col-12">
                      <div class="bordered cart-item-list p-3">
                          @foreach($order->products as $product)
                              <div class="cart-item">
                                  <a href="{{ route('product', ['number' => $product->id]) }}" class="cart-item-image"><img src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt="Image"></a>
                                  <div class="cart-item-body">
                                      <div class="row">
                                          <div class="col">
                                              <h5 class="cart-item-title">{{$product->name}}</h5>
                                              <small class="cart-item-subtitle">{{$product->brand->name}}</small>
                                              <div>
                                                  <ul class="list list--horizontal list--separated fs-14 text-muted mt-1">
                                                      <li>Размер: <span class="text-dark">42</span></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <div class="col text-right">
                                              <ul class="cart-item-meta">
                                                  <li>{{$product->price}} ₽</li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                    </div>
                  </div>

                  <!-- order total -->
                  <div class="row">
                    <div class="col-12">
                      <h2 class="text-uppercase fs-20 mb-1">Итоговая стоимость</h2>
                    </div>
                    <div class="col-12">
                      <div class="bordered p-3">
                        <ul class="list-group list-group-minimal">
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                              Товары
                              <span>{{$order->calculatePrice()}} ₽</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                              Доставка
                              <span>200 ₽</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center text-red">
                              Скидка
                              <span class="text-red">0</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-bold">
                              Итого
                              <span>{{$order->calculatePrice() + 200}} ₽</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- delivery details -->
                  <div class="row">
                    <div class="col-12">
                      <h2 class="mb-1 text-uppercase fs-20">Информация о доставке</h2>
                    </div>
                    <div class="col-12">
                      <div class="bordered p-3">
                        <h5 class="eyebrow text-muted">Адрес доставки</h5>
                        <p>{{$order->userAddress}}</p>
                          <h5 class="eyebrow text-muted">Имя получателя</h5>
                          <p>{{$order->userName}}</p>
                          <h5 class="eyebrow text-muted">Телефон получателя</h5>
                          <p>{{$order->userPhone}}</p>
                        <h5 class="eyebrow text-muted">Способ доставки</h5>
                        <p class="card-text">Стандартная доставка курьером</p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- favorites -->
                <div class="tab-pane fade" id="sidebar-1-2" role="tabpanel" aria-labelledby="sidebar-1-2">
                  <div class="row align-items-end">
                    <div class="col">
                      <h2>Favourites</h2>
                    </div>
                    <div class="col text-right">
                      <a href="" class="underline"><i class="icon-plus"></i> add all to bag</a>
                    </div>
                  </div>
                  <div class="row gutter-2">
                    <div class="col-md-6">
                      <div class="card card-product">
                        <figure class="card-image">
                          <a href="#!" class="action"><i class="icon-x"></i></a>
                          <a href="#!">
                            <img src="{{ asset('images/demo/product-1.jpg') }}" alt="Image">
                            <img src="{{ asset('images/demo/product-1-2.jpg') }}" alt="Image">
                          </a>
                        </figure>
                        <div class="card-footer">
                          <h3 class="card-title"><a href="">Black IC Pendant Light</a></h3>
                          <span class="price">$410</span>
                        </div>
                      </div>
                      <fieldset class="my-1">
                        <div class="row">
                          <div class="col-12">
                            <div class="select-frame">
                              <select class="custom-select custom-select-lg" id="custom-select-1" data-placeholder="Select colour">
                                <option label="color"></option>
                                <option value="1">Red</option>
                                <option value="2">Green</option>
                                <option value="3">Blue</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="select-frame">
                              <select class="custom-select custom-select-lg" id="custom-select-1-2" data-placeholder="Size">
                                <option label="size"></option>
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <a href="" class="btn btn-block btn-primary">Add to Bag</a>
                    </div>
                    <div class="col-md-6">
                      <div class="card card-product">
                        <figure class="card-image">
                          <a href="#!" class="action"><i class="icon-x"></i></a>
                          <a href="#!">
                            <img src="{{ asset('images/demo/product-2.jpg') }}" alt="Image">
                            <img src="{{ asset('images/demo/product-2-2.jpg') }}" alt="Image">
                          </a>
                        </figure>
                        <div class="card-footer">
                          <h3 class="card-title"><a href="">Black IC Pendant Light</a></h3>
                          <span class="price">$410</span>
                        </div>
                      </div>
                      <fieldset class="my-1">
                        <div class="row">
                          <div class="col-12">
                            <div class="select-frame">
                              <select class="custom-select custom-select-lg" id="custom-select-2" data-placeholder="Select colour">
                                <option label="color"></option>
                                <option value="1">Red</option>
                                <option value="2">Green</option>
                                <option value="3">Blue</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="select-frame">
                              <select class="custom-select custom-select-lg" id="custom-select-2-2" data-placeholder="Size">
                                <option label="size"></option>
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <a href="" class="btn btn-block btn-primary">Add to Bag</a>
                    </div>
                  </div>
                </div>

                <!-- personal data -->
                <div class="tab-pane fade" id="sidebar-1-3" role="tabpanel" aria-labelledby="sidebar-1-3">
                  <div class="row">
                    <div class="col">
                      <h2>Personal Data</h2>
                    </div>
                  </div>

                  <fieldset class="mb-2">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-label-group">
                          <input type="text" id="inputName2" class="form-control form-control-lg" placeholder="Name" required="" value="Dumitru">
                          <label for="inputName2">First Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-label-group">
                          <input type="text" id="inputSurname2" class="form-control form-control-lg" placeholder="Surname" required="">
                          <label for="inputSurname2">Surname</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset class="mb-2">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-label-group">
                          <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email Address" required="" value="">
                          <label for="inputEmail">Email Address</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <span class="label">Date of birth</span>
                  <fieldset class="mb-2">
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="select-frame">
                          <select class="custom-select custom-select-lg" id="customSelect-1" data-placeholder="Day">
                            <option label="number"></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">...</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="select-frame">
                          <select class="custom-select custom-select-lg" id="customSelect-2" data-placeholder="Month">
                            <option label="number"></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">...</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="select-frame">
                          <select class="custom-select custom-select-lg" id="customSelect-3" data-placeholder="Year">
                            <option label="number"></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">...</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <div class="row">
                    <div class="col-12">
                      <span class="label">Gender</span>
                    </div>
                    <div class="col">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Men</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Women</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <a href="" class="btn btn-primary">Save Changes</a>
                    </div>
                  </div>
                </div>

                <!-- change password -->
                <div class="tab-pane fade" id="sidebar-1-4" role="tabpanel" aria-labelledby="sidebar-1-4">
                  <div class="row">
                    <div class="col">
                      <h2>Change Password</h2>
                    </div>
                  </div>

                  <fieldset class="mb-2">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-label-group">
                          <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Current Password" required="" value="$120-N<>&^9">
                          <label for="inputPassword">Current Password</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-label-group">
                          <input type="password" id="inputPassword2" class="form-control form-control-lg" placeholder="New Password" required="">
                          <label for="inputPassword2">New Password</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <div class="row">
                    <div class="col">
                      <a href="" class="btn btn-primary">Save Password</a>
                    </div>
                  </div>
                </div>

                <!-- addresses -->
                <div class="tab-pane fade" id="sidebar-1-5" role="tabpanel" aria-labelledby="sidebar-1-5">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <h2>Addresses</h2>
                    </div>
                    <div class="col-md-6 text-md-right">
                      <a href="" class="underline"><i class="icon-plus"></i> Add new address</a>
                    </div>
                  </div>
                  <div class="row gutter-2">
                    <div class="col-lg-6">
                      <div class="card card-data bordered">
                        <div class="card-header">
                          <div class="row align-items-center">
                            <div class="col-8">
                              <h2 class="card-title eyebrow">Main Delivery Address</h2>
                            </div>
                            <div class="col text-right">
                              <span class="dropdown">
                                <button class="btn btn-lg btn-white btn-ico" id="dropdown-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button"><i class="icon-more-vertical"></i></button>
                                <span class="dropdown-menu" aria-labelledby="dropdown-5">
                                  <a class="dropdown-item" href="#!">Action</a>
                                  <a class="dropdown-item" href="#!">Another action</a>
                                  <a class="dropdown-item" href="#!">Something else here</a>
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <p>
                            Jhon Doe <br/>
                            1620 East Ayre Str <br/>
                            Suite M3115662 <br/>
                            Wilmington, DE 19804 <br/>
                            United States
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="card card-data bordered">
                        <div class="card-header">
                          <div class="row align-items-center">
                            <div class="col-8">
                              <h2 class="card-title eyebrow">Main Delivery Address</h2>
                            </div>
                            <div class="col text-right">
                              <span class="dropdown">
                                <button class="btn btn-lg btn-white btn-ico" id="dropdown-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button"><i class="icon-more-vertical"></i></button>
                                <span class="dropdown-menu" aria-labelledby="dropdown-4">
                                  <a class="dropdown-item" href="#!">Action</a>
                                  <a class="dropdown-item" href="#!">Another action</a>
                                  <a class="dropdown-item" href="#!">Something else here</a>
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <p>
                            Jhon Doe <br/>
                            1620 East Ayre Str <br/>
                            Suite M3115662 <br/>
                            Wilmington, DE 19804 <br/>
                            United States
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="card card-data bordered">
                        <div class="card-header">
                          <div class="row align-items-center">
                            <div class="col-8">
                              <h2 class="card-title eyebrow">Main Delivery Address</h2>
                            </div>
                            <div class="col text-right">
                              <span class="dropdown">
                                <button class="btn btn-lg btn-white btn-ico" id="dropdown-8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button"><i class="icon-more-vertical"></i></button>
                                <span class="dropdown-menu" aria-labelledby="dropdown-8">
                                  <a class="dropdown-item" href="#!">Action</a>
                                  <a class="dropdown-item" href="#!">Another action</a>
                                  <a class="dropdown-item" href="#!">Something else here</a>
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <p>
                            Jhon Doe <br/>
                            1620 East Ayre Str <br/>
                            Suite M3115662 <br/>
                            Wilmington, DE 19804 <br/>
                            United States
                          </p>
                        </div>
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
