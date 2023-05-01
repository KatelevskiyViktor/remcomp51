@extends('layouts.layout')

@section('title')@parent:: {{ $pages->title }} @endsection

@section('content')
    <div class="about">
        <div class="top_div">
            <div class="container">
                <div class="description_service">
                    <h1>О компании</h1>
                    <p>Квалифицированный специалист нашего сервиса избавит
                        Вас от сомнений, отремонтирует и настроит технику быстро и качественно,
                        ответит на все интересующие Вас вопросы</p>
                </div>
                <br>
                <div class="img_service center_ab">
                    <img src="{{ asset('storage/images/16.02.2022/pajka-plat.jpg') }}" alt="Ремонт платы, пайка">
                </div>
                <br>

            </div>

        </div>
        <div class="middle_div">
            <div class="container">
                <h2>Немного о нас</h2>

                <p>Наш сервис занимается профессиональным обслуживанием компьютеров
                    и другой вычислительной техники в Мурманске. Мы работаем как с частными лицами,
                    так и с корпоративными клиентами. Штат сотрудников фирмы состоит только
                    из мастеров своего дела: менеджеры находят общий язык и взаимопонимание
                    со всеми людьми, руководитель сервиса обладает
                    должными управленческими качествами, мастера по ремонту компетентны во
                    всех областях, связанными с компьютерной техникой.</p>

                <p>Наша сервис предоставит Вам по-настоящему качественные услуги по ремонту
                    и настройке компьютера!</p>

                <p>Квалифицированный специалист избавит
                    Вас от сомнений, произведет ремонт и настройку оборудования качественно,
                    быстро, ответит на все интересующие Вас вопросы.</p>

                <h2>Оборудование</h2>
                <p class="center_ab">
                    <img src="{{ asset('storage/images/16.02.2022/pajalnaja-stancija.jpg') }}"
                         alt="Пака микросхем"><br>
                    <span>Паяльная станция в действии</span>
                </p>
                <br>

                <p>В нашем арсенале есть все необходимое оборудование для профессионального
                    и самого сложного ремонта практически любой техники:</p>

                <ul>
                    <li><strong>Осциллограф и генератор сигналов</strong>. Проходят периодическую
                        калибровку и плановую поверку в «Ростест»;</li>
                    <li><strong>Паяльные станции</strong> разного калибра, в том числе инфракрасная для пайки BGA;</li>
                    <li><strong>Диагностические POST-карты</strong> для ноутбуков всех производителей;</li>
                    <li><strong>Тестовые запчасти</strong> для блочной диагностики;</li>
                    <li><strong>Цифровой микроскоп</strong> для детальной диагностики;</li>
                    <li><strong>Ультразвуковая ванна</strong> для борьбы с залитыми платами и окислением;</li>
                    <li><strong>Лабораторные блоки питания</strong>.</li>
                </ul>
            </div>

        </div>
        <div class="m-c-2 bottom_div">
            <div class="container">
                <h2>Наши фото</h2>
                <p>В нашем арсенале есть необходимое оборудование для профессионального и сложного ремонта практически любой техники</p>
            </div>
            <div id="block-for-slider">
                <div id="viewport">
                    <ul id="slidewrapper">
                        <li class="slide"><img src="{{ asset('storage/images/16.02.2022/foto_about_us_1.jpg') }}" alt="1" class="slide-img"></li>
                        <li class="slide"><img src="{{ asset('storage/images/16.02.2022/foto_about_us_2.jpg') }}" alt="2" class="slide-img"></li>
                        <li class="slide"><img src="{{ asset('storage/images/16.02.2022/foto_about_us_3.jpg') }}" alt="3" class="slide-img"></li>
                        <li class="slide"><img src="{{ asset('storage/images/16.02.2022/foto_about_us_4.jpg') }}" alt="4" class="slide-img"></li>
                        <li class="slide"><img src="{{ asset('storage/images/16.02.2022/foto_about_us_5.jpg') }}" alt="5" class="slide-img"></li>
                        <li class="slide"><img src="{{ asset('storage/images/16.02.2022/foto_about_us_6.jpg') }}" alt="6" class="slide-img"></li>
                    </ul>

                    <div id="prev-next-btns">
                        <div id="prev-btn"></div>
                        <div id="next-btn"></div>
                    </div>

                    <ul id="nav-btns">
                        <li class="slide-nav-btn"></li>
                        <li class="slide-nav-btn"></li>
                        <li class="slide-nav-btn"></li>
                        <li class="slide-nav-btn"></li>
                        <li class="slide-nav-btn"></li>
                        <li class="slide-nav-btn"></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
@endsection
