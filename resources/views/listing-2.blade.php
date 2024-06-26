@extends('master/master')
@section('content')
    <style type="text/css">
        .align-items-end {
            margin-top: 3rem !important;
        }
    </style>


<!-- listing -->
<section class="pt-6">
    <div class="container">

        <!-- sort -->
        <div class="row gutter-1 align-items-end">
            <div class="col-md-6">
                <h1>{{$title}}</h1>
            </div>
            <div class="col-md-6 text-md-right">
                <ul class="list list--horizontal list--separated text-muted fs-14">
                    <li>
                        @if($title != "Товаров не найдено")
                            <span> Товары {{ $products->firstItem() }} - {{ $products->lastItem() }} из {{ $products->total() }}</span>
                        @endif
                    </li>
                </ul>
            </div>
        </div>

        <!-- products -->
        <div class="row gutter-1">
            @foreach($products as $product)
                <div class="col-6 col-md-4">
                    <div class="card card-product">
                        <figure class="card-image">
                            @guest
                                <a href="#" class="action icon-heart-container"><i class="icon-heart"></i></a>
                            @endguest
                            @auth
                                <a href="#" class="action icon-heart-container-2 {{ Auth::user()->favorites->contains($product->id) ? 'is-favorite' : '' }}" data-product-id="{{ $product->id }}"><i class="icon-heart"></i></a>
                            @endauth
                                <a class="card-listing-height" href="{{ route('product', ['number' => $product->id]) }}">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image1) }}" alt="Product Image">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image2) }}" alt="Product Image">
                                </a>
                            </a>
                            @if(!is_null($product->created_at))
                                @if($product->created_at->gt(\Carbon\Carbon::now()->subDays(10)))
                                    <span class="badge badge-success">New</span>
                                @endif
                            @endif
                            @if($product->trend)
                                <span class="badge badge-warning badge-position-absolute-2">Trending</span>
                            @endif
                        </figure>
                        <div class="card-footer">
                            <h3 class="card-title"><a href="">{{$product->name}}</a></h3>
                            <span class="brand">{{ $product->brand->name }}</span>
                            <span class="price">{{ $product->price }}₽</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            {{$products->links()}}
        </div>
    </div>
</section>

    @if($products->total() == 0)
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.icon-heart-container').on('click', function(event) {
            event.preventDefault();
            var iconContainer = $(this);
            var productId = iconContainer.data('product-id');

            // Проверяем, содержит ли элемент класс is-favorite
            var isFavorite = iconContainer.hasClass('is-favorite');

            $.ajax({
                url: '{{ route('favorites-toggle') }}',
                method: 'POST',
                data: {
                    product_id: productId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        if (isFavorite) {
                            // Если товар был в избранном, удаляем класс is-favorite и меняем иконку на обычную
                            iconContainer.removeClass('is-favorite');
                        } else {
                            // Если товар не был в избранном, добавляем класс is-favorite и меняем иконку на заполненное сердечко
                            iconContainer.addClass('is-favorite');
                        }
                    } else {
                        alert('Error occurred. Please try again later.');
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 401) {
                        // Отображение модального окна при статусе 401
                        $('#authModal').modal('show');
                    } else {
                        alert('Error occurred. Please try again later.');
                    }
                }
            });
        });
    });
</script>
@endsection
