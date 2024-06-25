@extends('master/master')
@section('content')


    <section class="py-0 no-overflow vh-100 scroll-down">
        <div class="image image-scroll" style="background-image:url({{ asset('images/demo/about-bg.jpg') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <i class="icon-check"></i>
                </div>
            </div>
            <div class="row justify-content-center vh-100">
                <div class="col-md-4 align-self-center text-white text-center">
                    <h1 class="text-uppercase fs-60">О нас</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- article -->
    <article>
        <div class="container">
            <div class="row justify-content-center gutter-1">

                <!-- post -->
                <div class="col-lg-6">
                    <div class="bg-white p-4">
                        <h2 class="text-uppercase">Наша история</h2>
                        <p>Мы - интернет-магазин модной одежды, который предлагает широкий выбор стильных решений для вашего гардероба. Наша история началась с цели сделать моду доступной каждому, кто ценит качество и комфорт.</p>
                        <p>Мы гордимся тем, что предлагаем нашим клиентам только лучшие товары от ведущих брендов и дизайнеров. Наша команда работает каждый день, чтобы удовлетворить ваши модные потребности и предложить вам самые актуальные коллекции.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bg-white p-4">
                        <h2 class="text-uppercase">Наши принципы</h2>
                        <p>Мы ценим каждого нашего клиента и стремимся к обеспечению высокого уровня обслуживания. Наша философия - это простота, удобство и надежность. Мы делаем все возможное, чтобы ваш опыт покупок в нашем интернет-магазине был приятным и беззаботным.</p>
                        <p>Мы гордимся тем, что предлагаем прозрачные условия покупки, быструю доставку и отличное обслуживание клиентов. Наша цель - сделать вашу жизнь стильной и удобной с помощью наших продуктов.</p>
                    </div>
                </div>

            </div>
        </div>
    </article>

@endsection
