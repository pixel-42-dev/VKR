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
                <a class="nav-link {{ $page==1 ? 'active' : '' }}" data-toggle="tab" href="#sidebar-1-1" role="tab"  aria-controls="sidebar-1" aria-selected="true"><i class="fs-24 icon-box"></i> Заказы</a>
                <a class="nav-link {{ $page==2 ? 'active' : '' }}" data-toggle="tab" href="#sidebar-1-2" role="tab" aria-controls="sidebar-1-2" aria-selected="false"><i class="fs-24 icon-heart"></i> Избранное</a>
                <a class="nav-link {{ $page==3 ? 'active' : '' }}" data-toggle="tab" href="#sidebar-1-3" role="tab" aria-controls="sidebar-1-3" aria-selected="false"><i class="fs-24 icon-user"></i> Личные данные </a>
                <a class="nav-link {{ $page==4 ? 'active' : '' }}" data-toggle="tab" href="#sidebar-1-4" role="tab" aria-controls="sidebar-1-4" aria-selected="false"><i class="fs-24 icon-lock"></i> Сменить пароль</a>
                <a class="nav-link {{ $page==5 ? 'active' : '' }}" data-toggle="tab" href="#sidebar-1-5" role="tab" aria-controls="sidebar-1-5" aria-selected="false"><i class="fs-24 icon-home"></i> Адреса</a>
              </div>
            </aside>
          </div>
          <div class="col-lg-8">
            <div class="bg-white p-2 p-md-3">
              <div class="tab-content" id="myTabContent">

                <!-- orders -->
                <div class="tab-pane {{ $page==1 ? 'show active' : 'fade' }}" id="sidebar-1-1" role="tabpanel" aria-labelledby="sidebar-1-1">
                  <div class="row">
                    <div class="col">
                      <h2>Заказы</h2>
                    </div>
                  </div>
                  <div class="row gutter-2">
                    @foreach($orders as $order)
                    <div class="col-12">
                      <div class="card card-data bordered">
                        <div class="card-header">
                          <div class="row align-items-center">
                            <div class="col">
                              <h2 class="card-title fs-18"><a href="{{route('order-details', ['id' => $order->id])}}">Заказ номер {{$order->id}}</a></h2>
                            </div>
                            <div class="col text-right">
                              <span class="dropdown">
                                <button class="btn btn-lg btn-white btn-ico" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button"><i class="icon-more-vertical"></i></button>
                                <span class="dropdown-menu" aria-labelledby="dropdown-1">
                                  <a class="dropdown-item" href="#!">Отменить</a>
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                            <ul class="order-preview">
                                @foreach($order->products as $product)
                                    <li><a href="{{ route('product', ['number' => $product->id]) }}" title="{{$product->name}}" data-toggle="tooltip" data-placement="top"><img class="product-order-listing" src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt="{{$product->name}}"></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body">
                          <ul class="order-meta">
                            <li>
                              <h5 class="order-meta-title">Заказ #</h5>
                              <span>{{$order->id}}</span>
                            </li>
                            <li>
                              <h5 class="order-meta-title">Дата заказа</h5>
                              <span>{{$order->created_at->format('H:i d.m.Y')}}</span>
                            </li>
                            <li>
                              <h5 class="order-meta-title">Итого</h5>
                              <span>{{$order->calculatePrice()}} ₽</span>
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
                    @endforeach
                  </div>
                </div>

                <!-- favorites -->
                <div class="tab-pane {{ $page==2 ? 'show active' : 'fade' }}" id="sidebar-1-2" role="tabpanel" aria-labelledby="sidebar-1-2">
                  <div class="row align-items-end">
                    <div class="col">
                      <h2>Избранное</h2>
                    </div>
                    <div class="col text-right">
                        <form id="clearFavoritesForm" action="{{ route('favorites-clear') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="underline" style="border: none; background: none; padding: 0; cursor: pointer;">
                                <i class=""></i>Очистить
                            </button>
                        </form>

                    </div>
                  </div>
                  <div class="row gutter-2">
                      @foreach(Auth::user()->favorites as $favoriteProduct)
                          <div class="col-md-6" id="favorite-product-{{ $favoriteProduct->id }}">
                              <div class="card card-product">
                                  <figure class="card-image">
                                      <form action="{{ route('favorites-remove', ['product_id' => $favoriteProduct->id]) }}" method="POST">
                                          @csrf
                                          <button type="submit" class="action icon-cross-container favorite-del-container">
                                              <i class="icon-x"></i>
                                          </button>
                                      </form>
                                      <a href="{{ route('product', ['number' => $favoriteProduct->id]) }}">
                                          <img class="home-favorive-images" src="{{ \Illuminate\Support\Facades\Storage::url($favoriteProduct->image1) }}" alt="Image">
                                          <img class="home-favorive-images" src="{{ \Illuminate\Support\Facades\Storage::url($favoriteProduct->image2) }}" alt="Image">
                                      </a>
                                  </figure>
                                  <div class="card-footer">
                                      <h3 class="card-title"><a href="">{{ $favoriteProduct->name }}</a></h3>
                                      <span class="price">{{ $favoriteProduct->price }} ₽</span>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
                </div>

                <!-- Личные данные -->
                  <div class="tab-pane {{ $page==3 ? 'show active' : 'fade' }}" id="sidebar-1-3" role="tabpanel" aria-labelledby="sidebar-1-3">
                      <div class="row">
                          <div class="col">
                              <h2>Личные данные</h2>
                          </div>
                      </div>
                      <form action="{{ route('account-update') }}" method="POST">
                          @csrf
                          <fieldset class="mb-2">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="inputName2" class="form-control form-control-lg" placeholder="nickname" name="nickname" required value="{{ Auth::user()->nickname }}">
                                          <label for="inputName2">Никнейм</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="inputName3" class="form-control form-control-lg" placeholder="Имя" name="name" required value="{{ Auth::user()->name }}">
                                          <label for="inputName3">Имя</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="surname2" class="form-control form-control-lg" placeholder="Фамилия" name="surname" required value="{{ Auth::user()->surname }}">
                                          <label for="surname2">Фамилия</label>
                                      </div>
                                  </div>
                              </div>
                          </fieldset>
                          <fieldset class="mb-2">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-label-group">
                                          <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Почта" name="email" required value="{{ Auth::user()->email }}">
                                          <label for="inputEmail">Почта</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="mobilePhone" class="form-control form-control-lg" placeholder="Мобильный телефон" name="phone" required value="{{ Auth::user()->phone }}">
                                          <label for="mobilePhone">Мобильный телефон</label>
                                      </div>
                                  </div>
                              </div>
                          </fieldset>
                          <div class="row">
                              <div class="col">
                                  <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                              </div>
                          </div>
                      </form>
                  </div>


                  <!-- change password -->
                <div class="tab-pane {{ $page==4 ? 'show active' : 'fade' }}" id="sidebar-1-4" role="tabpanel" aria-labelledby="sidebar-1-4">
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
                <div class="tab-pane {{ $page==5 ? 'show active' : 'fade' }}" id="sidebar-1-5" role="tabpanel" aria-labelledby="sidebar-1-5">
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
