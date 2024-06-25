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
                                <h3 class="mb-1">Позвоните нам</h3>
                                <span class="fs-18 text-dark">+7-930-822-87-84</span>
                                <p class="mt-1">Понедельник - пятница, с 9:00 до 17:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-lg-4">
                    <div class="card card-tile">
                        <div class="equal bg-white">
                            <div class="card-body text-center">
                                <i class="icon-mail fs-40 mb-4"></i>
                                <h3 class="mb-1">Напишите на почту</h3>
                                <a href="mailto:vadim.tkachev.42@gmail.com" class="fs-18 underlined">отправить письмо</a>
                                <p class="mt-1">Письма принимаются 24 часа</p>
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
                                <a href="{{route('FAQ')}}" class="fs-18 underlined">Найдите свой вопрос</a>
                                <p class="mt-1">Найдите ответ на интересующий вопрос в FAQ.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
