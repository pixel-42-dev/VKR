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
            <h1>Checkout</h1>
          </div>
        </div>
        <div class="row gutter-1">

          <div class="col">

            <!-- address -->
            <div class="bg-white p-2 p-lg-3 mb-1">
              <div class="row gutter-1 align-items-center">
                <div class="col-md-6">
                  <h2 class="text-uppercase fs-20">Delivery Address</h2>
                </div>
                <div class="col-md-6 text-md-right">
                  <a class="underline" data-toggle="modal" data-target="#adresses"><i class="icon-home"></i> Saved addresses</a>
                </div>
              </div>

              <fieldset class="mb-2">
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="inputName2" class="form-control form-control-lg" placeholder="Name" required="" value="Dumitru">
                      <label for="inputName">First Name</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="inputSurname2" class="form-control form-control-lg" placeholder="Surname" required="">
                      <label for="inputSurname">Surname</label>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset class="mb-2">
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="inputAddress" class="form-control form-control-lg" placeholder="Address" required="" value="">
                      <label for="inputAddress">Address</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="inputApt" class="form-control form-control-lg" placeholder="Apt, Suite, etc. (optional)" required="">
                      <label for="inputApt">Apt, Suite, etc. (optional)</label>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset class="mb-2">
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="inputCity" class="form-control form-control-lg" placeholder="City" required="">
                      <label for="inputCity">City</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="select-frame">
                      <select class="custom-select custom-select-lg" id="customSelect1" data-placeholder="State">
                        <option label="state"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-label-group">
                      <input type="text" id="inputZip" class="form-control form-control-lg" placeholder="Zip" required="">
                      <label for="inputZip">Zip</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="select-frame">
                      <select class="custom-select custom-select-lg" id="customSelect3" data-placeholder="Year">
                        <option label="year"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>

            <!-- options -->
            <div class="bg-white p-2 p-lg-3 mb-1">
              <h2 class="mb-3 text-uppercase fs-20">Delivery Options</h2>
              <div class="custom-control custom-choice">
                <input type="radio" name="choice-shipping" class="custom-control-input" id="custom-choice-1">
                <label class="custom-control-label text-dark d-flex justify-content-between align-items-center" for="custom-choice-1">
                  <span>
                    <h4 class="custom-choice-title">Standard</h4>
                    <span class="text-muted fs-14">Estimated delivery: Tue, 09/04</span>
                  </span>
                  <span class="text-uppercase">Free</span>
                </label>
              </div>
              <div class="custom-control custom-choice">
                <input type="radio" name="choice-shipping" class="custom-control-input" id="custom-choice-2">
                <label class="custom-control-label text-dark d-flex justify-content-between align-items-center" for="custom-choice-2">
                  <span>
                    <h4 class="custom-choice-title">Express</h4>
                    <span class="text-muted fs-14">Estimated delivery: Tue, 09/04</span>
                  </span>
                  <span class="text-uppercase">$8.00</span>
                </label>
              </div>
            </div>

            <!-- payment -->
            <div class="bg-white p-2 p-lg-3 mb-1">
              <h2 class="mb-2 text-uppercase fs-20">Payment</h2>

              <fieldset class="mb-2">
                <div class="row">
                  <div class="col">
                    <div class="select-frame">
                      <select class="custom-select custom-select-lg" id="customPayment">
                        <option value="1">Credit / Debit Card</option>
                        <option value="2">Paypal</option>
                      </select>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset class="mb-3">
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="inputCardNumber" class="form-control form-control-lg" placeholder="Card Number" required="">
                      <label for="inputCardNumber">Card Number</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-label-group">
                      <input type="text" id="inputExpiryDate" class="form-control form-control-lg" placeholder="Expiry Date (MM/YY)" required="">
                      <label for="inputExpiryDate">Expiry date (MM/YY)</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-label-group">
                      <input type="text" id="inputCvv" class="form-control form-control-lg" placeholder="CVV" required="">
                      <label for="inputCvv">CVV</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="inputCardName" class="form-control form-control-lg" placeholder="Name on card" required="">
                      <label for="inputCardName">Name on card</label>
                    </div>
                  </div>
                </div>
              </fieldset>

              <h3 class="mb-2 text-uppercase fs-16">We Accept</h3>
              <ul class="list list--horizontal">
                <li><img src="assets/images/demo/visa-1.svg" class="payment" alt="Image"></li>
                <li><img src="assets/images/demo/master-card-1.svg" class="payment" alt="Image"></li>
                <li><img src="assets/images/demo/amex-1.svg" class="payment" alt="Image"></li>
              </ul>
            </div>

            <!-- place order -->
            <div class="bg-white p-2 p-md-3">
              <a href="" class="btn btn-lg btn-primary btn-block mb-2">Place Order</a>
              <small class="text-muted">By placing your order you agree to our <a href="">Terms & Conditions</a>, privacy and returns policies. You also consent to some of your data being stored by SHOPY, which may be used to make future shopping experiences better for you.</small>
            </div>

          </div>


          <!-- sidebar -->
          <aside class="col-lg-5">
            <div class="bg-white p-2 p-lg-3">
              <h2 class="mb-3 text-uppercase fs-20">Order total</h2>
              <div class="cart-item">
                <a href="#!" class="cart-item-image"><img src="{{ asset('images/demo/product-1.jpg') }}" alt="Image"></a>
                <div class="cart-item-body">
                  <div class="row">
                    <div class="col-9">
                      <h5 class="cart-item-title">Blouse</h5>
                      <ul class="list list--horizontal fs-14">
                        <li><s>$29.00</s></li>
                        <li class="text-red">$19.00</li>
                      </ul>
                    </div>
                    <div class="col-3 text-right">
                      <ul class="cart-item-options">
                        <li><a href="" class="icon-x"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cart-item">
                <a href="#!" class="cart-item-image"><img src="{{ asset('images/demo/product-3.jpg') }}" alt="Image"></a>
                <div class="cart-item-body">
                  <div class="row">
                    <div class="col-9">
                      <h5 class="cart-item-title">Skirt</h5>
                      <ul class="list list--horizontal fs-14">
                        <li><s>$39.00</s></li>
                        <li class="text-red">$29.00</li>
                      </ul>
                    </div>
                    <div class="col-3 text-right">
                      <ul class="cart-item-options">
                        <li><a href="" class="icon-x"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
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
                  <span>$78.00</span>
                </li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </section>

@endsection
