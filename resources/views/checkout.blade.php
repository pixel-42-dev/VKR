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


    <!-- checkout -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Оформление заказа</h1>
          </div>
        </div>
        <div class="row gutter-1">

          <div class="col">

            <!-- address -->
            <div class="bg-white p-2 p-lg-3 mb-1">
              <div class="row gutter-1 align-items-center">
                <div class="col-md-6">
                  <h2 class="text-uppercase fs-20">Адрес доставки</h2>
                </div>
              </div>

              <fieldset class="mb-2">
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="inputName2" class="form-control form-control-lg" placeholder="Name" required="" value="">
                      <label for="inputName">Имя</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="inputSurname2" class="form-control form-control-lg" placeholder="Surname" required="">
                      <label for="inputSurname">Фамилия</label>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset class="mb-2">
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="inputAddress" class="form-control form-control-lg" placeholder="Address" required="" value="">
                      <label for="inputAddress">Адрес</label>
                    </div>
                  </div>
                </div>
              </fieldset>

{{--              <fieldset class="mb-2">--}}
{{--                <div class="row">--}}
{{--                  <div class="col-12">--}}
{{--                    <div class="form-label-group">--}}
{{--                      <input type="text" id="inputCity" class="form-control form-control-lg" placeholder="City" required="">--}}
{{--                      <label for="inputCity">City</label>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                  <div class="col-6">--}}
{{--                    <div class="select-frame">--}}
{{--                      <select class="custom-select custom-select-lg" id="customSelect1" data-placeholder="State">--}}
{{--                        <option label="state"></option>--}}
{{--                        <option value="1">1</option>--}}
{{--                        <option value="2">2</option>--}}
{{--                        <option value="3">3</option>--}}
{{--                      </select>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-6">--}}
{{--                    <div class="form-label-group">--}}
{{--                      <input type="text" id="inputZip" class="form-control form-control-lg" placeholder="Zip" required="">--}}
{{--                      <label for="inputZip">Zip</label>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                  <div class="col-12">--}}
{{--                    <div class="select-frame">--}}
{{--                      <select class="custom-select custom-select-lg" id="customSelect3" data-placeholder="Year">--}}
{{--                        <option label="year"></option>--}}
{{--                        <option value="1">1</option>--}}
{{--                        <option value="2">2</option>--}}
{{--                        <option value="3">3</option>--}}
{{--                      </select>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </fieldset>--}}
            </div>

            <!-- payment -->
{{--            <div class="bg-white p-2 p-lg-3 mb-1">--}}
{{--              <h2 class="mb-2 text-uppercase fs-20">Payment</h2>--}}

{{--              <fieldset class="mb-2">--}}
{{--                <div class="row">--}}
{{--                  <div class="col">--}}
{{--                    <div class="select-frame">--}}
{{--                      <select class="custom-select custom-select-lg" id="customPayment">--}}
{{--                        <option value="1">Credit / Debit Card</option>--}}
{{--                        <option value="2">Paypal</option>--}}
{{--                      </select>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </fieldset>--}}

{{--              <fieldset class="mb-3">--}}
{{--                <div class="row">--}}
{{--                  <div class="col-12">--}}
{{--                    <div class="form-label-group">--}}
{{--                      <input type="text" id="inputCardNumber" class="form-control form-control-lg" placeholder="Card Number" required="">--}}
{{--                      <label for="inputCardNumber">Card Number</label>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                  <div class="col-6">--}}
{{--                    <div class="form-label-group">--}}
{{--                      <input type="text" id="inputExpiryDate" class="form-control form-control-lg" placeholder="Expiry Date (MM/YY)" required="">--}}
{{--                      <label for="inputExpiryDate">Expiry date (MM/YY)</label>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-6">--}}
{{--                    <div class="form-label-group">--}}
{{--                      <input type="text" id="inputCvv" class="form-control form-control-lg" placeholder="CVV" required="">--}}
{{--                      <label for="inputCvv">CVV</label>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                  <div class="col-12">--}}
{{--                    <div class="form-label-group">--}}
{{--                      <input type="text" id="inputCardName" class="form-control form-control-lg" placeholder="Name on card" required="">--}}
{{--                      <label for="inputCardName">Name on card</label>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </fieldset>--}}
{{--            </div>--}}

            <!-- place order -->
            <div class="bg-white p-2 p-md-3">
              <a href="" class="btn btn-lg btn-primary btn-block mb-2">Оформить заказ</a>
            </div>

          </div>


          <!-- sidebar -->
          <aside class="col-lg-5">
            <div class="bg-white p-2 p-lg-3">
              <h2 class="mb-3 text-uppercase fs-20">Order total</h2>
              @foreach($order->products as $product)
                    <div class="cart-item">
                        <a href="{{ route('product', ['number' => $product->id]) }}" class="cart-item-image"><img src="{{ asset('images/demo/product-1.jpg') }}" alt="Image"></a>
                        <div class="cart-item-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="cart-item-title">{{$product->name}}</h5>
                                    <ul class="list list--horizontal fs-14">
                                        <li>{{$product->price}}₽</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
              @endforeach
              <hr class="my-3"/>
              <ul class="list-group list-group-minimal">
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
                  <span>{{$order->calculatePrice()}}₽</span>
                </li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </section>

@endsection
