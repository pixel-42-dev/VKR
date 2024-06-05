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


    <!-- hero -->
    <section class="py-lg-0 no-overflow vh-100">
      <div class="image image-scroll" style="background-image:url({{ asset('images/demo/contact-bg.jpg') }})"
      data--100-bottom-top="transform: translateY(0%);"
      data-top-bottom="transform: translateY(25%);"></div>
      <div class="container">
        <div class="row align-items-lg-center justify-content-center vh-100 gutter-1">
          <div class="col-8 col-lg-4">
            <div class="card card-tile">
              <div class="equal bg-white">
                <div class="card-body text-center">
                  <i class="icon-phone-call fs-40 mb-4"></i>
                  <h3 class="mb-1">Call Us</h3>
                  <span class="fs-18 text-dark">1-888-963-8944</span>
                  <p class="mt-1">Monday - Friday 9am-5pm PST</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-8 col-lg-4">
            <div class="card card-tile">
              <div class="equal bg-white">
                <div class="card-body text-center">
                  <i class="icon-mail fs-40 mb-4"></i>
                  <h3 class="mb-1">Email Us</h3>
                  <a href="" class="fs-18 underlined">Send a message</a>
                  <p class="mt-1">We'll reply within 24 hours</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-8 col-lg-4">
            <div class="card card-tile">
              <div class="equal bg-white">
                <div class="card-body text-center">
                  <i class="icon-message-circle fs-40 mb-4"></i>
                  <h3 class="mb-1">FAQ</h3>
                  <a href="" class="fs-18 underlined">Find Your Answer</a>
                  <p class="mt-1">Find the answer you need in our FAQ.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
