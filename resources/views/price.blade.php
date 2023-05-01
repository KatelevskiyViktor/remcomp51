@extends('layouts.layout')

@section('title')@parent:: {{ $pages->title }} @endsection

@section('content')
    <div class="about us_price">
        <div class="top_div">
            <div class="container">
                <div class="description_service">
                    <h1>Наши цены</h1>
                    <p>Представляем вам прайс на компьютерные услуги нашего сервиса компании. В нем
                        подробно описаны основные типы услуг, которые предоставляют наши
                        мастера.</p>
                    <p>Если вы не нашли нужную услугу, обязательно позвоните нам, скорее
                        всего ее просто нет на сайте!</p>
                </div>
                <br>

            </div>

        </div>
        <div class="price">
            <div class="container">
                <h2>Цены на компьютерные услуги</h2>
                {!! $pages->content !!}
            </div>
        </div>
        <div class="text container">
            <div class="text_item">
                                {!! $pages->price !!}
            </div>
        </div>

    </div>


@endsection

