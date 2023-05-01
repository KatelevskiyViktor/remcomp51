@extends('layouts.layout')

@section('uniq-css')
@endsection
@section('title')@parent:: {{ $pages->title }} @endsection

@section('content')
    <div class="shop">
        <div class="top_div">
            <div class="container">
                <div class="description_service">
                    <h1>{{ $pages->main_h1 }}</h1>
                    <p>{{$pages->content_h}}</p>
                </div>
                <br>
                <div class="price">
                <div class="prices-form uk-margin-top">
                    <h3>Узнать стоимость своей техники</h3>
                    <div class="uk-form-controls">
                        <img src="{{asset('storage/images/russian-flag.png')}}" alt="Флаг России">
                        <input type="text" class="uk-input phone-input phone" name="phone" placeholder="8 (999) 999-9999" required="">
                    </div>
                    @csrf
                    <button type="submit" class="uk-button uk-button-primary">Узнать стоимость</button>
                </div>
                </div>

            </div>

        </div>
        <div class="top_div_sec">
            <div class="container">
                <h2>Что в продаже:</h2>

                <hr class="upp">

                <br>
                <div class="products_div">
                    @foreach($products as $product)
                        <div class="product_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{$product->link_avito}}" target="_blank">
                                        <img class="pic-1" src="{{asset('/storage/images/'.$product->img)}}">
                                        <img class="pic-2" src="{{asset('/storage/images/'.$product->img_sec)}}">
                                    </a>
                                    @if($product->good_price === 1)
                                        <span class="product-trend-label">Хорошая цена</span>
                                    @elseif($product->good_price == 2)
                                        <span class="product-trend-label">Новинка</span>
                                    @elseif($product->good_price == 3)
                                        <span class="product-sold-label">Продано</span>
                                    @endif

                                    @if(!empty($product->discount))
                                        <span class="product-discount-label">-{{$product->discount}}%</span>
                                    @endif

                                    <ul class="social">
                                        <li><a href="{{$product->link_avito}}" target="_blank"
                                               data-tip="Подробнее на Авито"><i class="fas fa-store-alt"></i></a></li>
                                        <li><a href="{{$product->link_yula}}" target="_blank"
                                               data-tip="Подробнее на Юле"><i class="fas fa-store"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a target="_blank"
                                                         href="{{$product->link_avito}}">{{$product->description}}</a>
                                    </h3>
                                    @if(!empty($product->discount))
                                        <div class="price discount">
                                            <span>
                                                ₽{{ceil(($product->price - $product->discount / 100 * $product->price)/1000)*1000 }}
                                            </span>
                                            {{ $product->price }}
                                        </div>
                                    @else
                                        <div class="price">₽{{ $product->price }}</div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="pagi">
                        {{$products->appends(['pages' => $_GET['pages'] ?? 1])
                                    ->onEachSide(1)
                                    ->links('vendor.pagination.default') }}
                </div>
                <span class="triangle">🞁</span>
                <hr class="yel">
                <br>
                <br>

                <h2>Что уже продано:</h2>
                <hr class="upp">
                <br>
                <div class="products_div">
                    @foreach($products_arch as $product)
                        <div class="product_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{$product->link_avito}}" target="_blank">
                                        <img class="pic-1" src="{{asset('/storage/images/'.$product->img)}}">
                                        <img class="pic-2" src="{{asset('/storage/images/'.$product->img_sec)}}">
                                    </a>
                                    @if($product->good_price === 1)
                                        <span class="product-trend-label">Хорошая цена</span>
                                    @elseif($product->good_price == 2)
                                        <span class="product-trend-label">Новинка</span>
                                    @elseif($product->good_price == 3)
                                        <span class="product-sold-label">Продано</span>
                                    @endif

                                    @if(!empty($product->discount))
                                        <span class="product-discount-label">-{{$product->discount}}%</span>
                                    @endif

                                    <ul class="social">
                                        <li><a href="{{$product->link_avito}}"
                                               target="_blank" data-tip="Подробнее на Авито"><i class="fas fa-store-alt"></i></a></li>
                                        <li><a href="{{$product->link_yula}}"
                                               target="_blank" data-tip="Подробнее на Юле"><i class="fas fa-store"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a target="_blank"
                                                         href="{{$product->link_avito}}">{{$product->description}}</a></h3>
                                    @if(!empty($product->discount))
                                        <div class="price discount">
                                            <span>
                                                ₽{{ceil(($product->price - $product->discount / 100 * $product->price)/1000)*1000 }}
                                            </span>
                                            {{ $product->price }}
                                        </div>
                                    @else
                                        <div class="price">₽{{ $product->price }}</div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagi">
                    {{$products_arch->appends(['pagefs' => $_GET['pagefs'] ?? 1])
                                    ->onEachSide(1)
                                    ->links('vendor.pagination.default') }}
                </div>
                <span class="triangle">🞁</span>
                <hr class="yel">
                <br>
            </div>
        </div>

    </div>


@endsection
