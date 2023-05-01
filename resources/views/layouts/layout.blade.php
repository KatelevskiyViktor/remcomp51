<!doctype html>
<html lang="en">
<head>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(87970103, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/87970103" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $pages->description }}">
    <title>@section('title')Ремонт компьютеров и ноутбуков @show</title>
    <script src="{{asset('js/scripts.js')}}"></script>
    @yield('uniq-css')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>
<body>

    <header>
            <div class="top-menu">
                <div class="container">
                    <div class="tp-left">
                        <span><i class="fa fa-map-marker-alt"></i> Мурманск</span>
                    </div>
                    <div class="tp-right">
                        @include('layouts.menu_top')
                    </div>
                </div>
            </div>
            <div class="middle-menu">
                <div class="container">
                    <div class="mm-1 logo">
                        <a href="{{ route('home') }}" ><img class="mm-brand" src="{{asset('storage/images/logo.png')}}" alt="Ремонт компьютеров"></a>
                    </div>


                    <div class="mm-2">
                        <p><span class="phone_num">8 (950) 899-8686</span><span class="clock_num">C 9.00 до 21.00</span></p>
                    </div>


                    <div class="mm-3">
                        <button type="button" class="mm-btn">Оставить заявку</button>
                    </div>

                </div>
            </div>

            <div class="bottom-menu">

                    <span class="menu-trigger"><i class="fas fa-bars"></i></span>
                    <nav>
                        <ul class="bm-ul">
                            <div class="to-row">
                                    <div class="dropdown">
                                        <li class="bm-li">
                                            <a href="#" class="">Компьютеры</a>
                                        </li>
                                        <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                        <div class="accordion-content">
                                            <div class="dd_menu">
                                                <div class="div_col">
                                                    <a class="line-a" href="{{ route('remont', ['slug' => 'remont-kompyuterov']) }}"><i class="fas fa-desktop"></i> Ремонт компьютеров</a>
                                                    <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                    <div class="accordion-content ml">
                                                        <a class="" href="{{ route('problema', ['slug' => 'ne-vklyuchaetsya-kompyuter']) }}"><i class="fas fa-plug"></i> Не включается компьютер</a>
                                                        <a class="" href="{{ route('problema', ['slug' => 'siniy-ekran-na-kompyutere']) }}"><i class="fas fa-square"></i> Синий экран на компьютере</a>
                                                        <a class="" href="{{ route('problema', ['slug' => 'oshibki-na-kompyutere']) }}"><i class="fas fa-exclamation-triangle"></i> Ошибки в работе компьютера</a>
                                                        <a class="" href="{{ route('problema', ['slug' => 'zavisaet-kompyuter']) }}"><i class="fas fa-spinner"></i> Зависает компьютер</a>
                                                        <a class="" href="{{ route('problema', ['slug' => 'perezagrugaetsya-kompyuter']) }}"><i class="fas fa-redo"></i> Перезагружается компьютер</a>
                                                        <a class="" href="{{ route('problema', ['slug' => 'shumit-kompyuter']) }}"><i class="fas fa-bullhorn"></i> Шумит компьютер</a>
                                                        <a class="" href="{{ route('problema', ['slug' => 'peregrevaetsya-kompyuter']) }}"><i class="fas fa-thermometer-three-quarters"></i> Перегревается компьютер</a>
                                                        <a class="" href="{{ route('problema', ['slug' => 'problemi-s-kompyuterom']) }}"><i class="fas fa-question-circle"></i> Проблемы с компьютером</a>
                                                    </div>
                                                </div>

                                            <div class="div_col">
                                                <a class="line-a" href="{{ route('remont', ['slug' => 'kompyuternaya-pomoshch']) }}"><i class="fas fa-briefcase-medical"></i> Компьютерная помощь</a>
                                                <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                <div class="accordion-content ml">
                                                    <a class="" href="{{ route('problema', ['slug' => 'ustanovka-windows']) }}"><i class="fab fa-windows"></i> Установка windows</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'udalenie-virusov']) }}"><i class="fas fa-bug"></i> Удаление вирусов</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'ustanovka-program']) }}"><i class="fab fa-chrome"></i> Установка программ</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'ustanovka-antivirusa']) }}"><i class="fas fa-shield-alt"></i> Установка антивируса</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'ustanovka-drayverov']) }}"><i class="fab fa-usb"></i> Установка драйверов</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'nastroyka-kompyutera']) }}"><i class="fas fa-sliders-h"></i> Настройка компьютера</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'kompyuternie-uslugi']) }}"><i class="fas fa-tools"></i> Компьютерные услуги</a>
                                                </div>

                                            </div>
                                            <div class="div_col">
                                                <a class="line-a" href="{{ route('problema', ['slug' => 'sborka-kompyuterov-na-zakaz']) }}"><i class="fas fa-wrench"></i> Сборка компьютеров</a>
                                                <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                <div class="accordion-content ml">
                                                    <a class="" href="{{ route('usluga', ['slug' => 'modernizaciya-kompyutera']) }}"><i class="fas fa-sync"></i> Модернизация компьютеров</a>
                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <li class="bm-li">
                                            <a href="#" class="">Ноутбуки</a>
                                        </li>
                                        <span class="menu-trigger2 line-a"><i class="fas fa-bars"></i></span>
                                        <div class="accordion-content">
                                            <div class="dd_menu">
                                            <div class="div_col">
                                                <a class="line-a" href="{{ route('home_two', ['slug' => 'remont-noutbuka']) }}"><i class="fas fa-desktop"></i> Ремонт ноутбуков</a>
                                                <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                <div class="accordion-content ml">
                                                    <a class="" href="{{ route('usluga', ['slug' => 'ne-vklyuchaetsya-noutbuk']) }}"><i class="fas fa-plug"></i> Не включается ноутбук</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'siniy-ekran-na-noutbuke']) }}"><i class="fas fa-square"></i> Синий экран на ноутбуке</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'oshibki-v-rabote-noutbuka']) }}"><i class="fas fa-exclamation-triangle"></i> Ошибки в работе ноутбука</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'zavisaet-noutbuk']) }}"><i class="fas fa-spinner"></i> Зависает ноутбук</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'perezagruzhaetsya-noutbuk']) }}"><i class="fas fa-redo"></i> Перезагружается ноутбук</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'shumit-noutbuk']) }}"><i class="fas fa-bullhorn"></i> Шумит ноутбук</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'peregrevaetsya-noutbuk']) }}"><i class="fas fa-thermometer-three-quarters"></i> Перегревается ноутбук</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'problema-s-noutbukom']) }}"><i class="fas fa-question-circle"></i> Проблемы с ноутбуком</a>
                                                </div>
                                            </div>

                                            <div class="div_col">
                                                <a class="line-a" href="{{ route('remont', ['slug' => 'kompyuternaya-pomoshch']) }}"><i class="fas fa-briefcase-medical"></i> Компьютерная помощь</a>
                                                <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                <div class="accordion-content ml">
                                                    <a class="" href="{{ route('problema', ['slug' => 'ustanovka-windows']) }}"><i class="fab fa-windows"></i> Установка windows</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'udalenie-virusov']) }}"><i class="fas fa-bug"></i> Удаление вирусов</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'ustanovka-program']) }}"><i class="fab fa-chrome"></i> Установка программ</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'ustanovka-antivirusa']) }}"><i class="fas fa-shield-alt"></i> Установка антивируса</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'ustanovka-drayverov']) }}"><i class="fab fa-usb"></i> Установка драйверов</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'nastrojka-noutnuka']) }}"><i class="fas fa-sliders-h"></i> Настройка ноутбука</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'kompyuternie-uslugi']) }}"><i class="fas fa-tools"></i> Компьютерные услуги</a>
                                                </div>
                                            </div>
                                            <div class="div_col">
                                                <a class="line-a" href="{{ route('problema', ['slug' => 'modernizaciya-noutbuka']) }}"><i class="fas fa-layer-group"></i> Модернизация ноутбуков</a>
                                                <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                <div class="accordion-content ml">
                                                    <a class="" href="{{ route('problema', ['slug' => 'rasshirenie-pamyati-noutbuka']) }}"><i class="fas fa-memory"></i></i> Расширение памяти ноутбука</a>
                                                    <a class="" href="{{ route('problema', ['slug' => 'uvelichenie-proizvoditelnosti-noutbuka']) }}"><i class="fas fa-tachometer-alt"></i> Увеличение скорости ноутбука</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'obnovlenie-videocarti']) }}"><i class="fas fa-microchip"></i> Апгрейд видеокарты ноутбука</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <li class="bm-li">
                                            <a href="#" class="">Оргтехника</a>
                                        </li>
                                        <span class="menu-trigger2 line-a"><i class="fas fa-bars"></i></span>
                                        <div class="accordion-content">
                                            <div class="dd_menu">
                                            <div class="div_col">
                                                <a class="line-a" href="{{ route('usluga', ['slug' => 'remont-printera']) }}"><i class="fas fa-print"></i> Ремонт принтеров</a>
                                                <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                <div class="accordion-content ml">
                                                    <a class="" href="{{ route('usluga', ['slug' => 'nastroyka-printera']) }}"><i class="fas fa-sliders-h"></i> Настройка принтера</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'chistka-printera']) }}"><i class="fas fa-paint-brush"></i> Чистка принтера</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'profilaktika-printera']) }}"><i class="fas fa-tools"></i> Профилактика принтера</a>
                                                </div>
                                            </div>

                                            <div class="div_col">
                                                <a class="line-a" href="{{ route('usluga', ['slug' => 'remont-mfu']) }}"><i class="fas fa-print"></i> Ремонт МФУ</a>
                                                <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                <div class="accordion-content ml">
                                                    <a class="" href="{{ route('usluga', ['slug' => 'nastrojka-mfu']) }}"><i class="fas fa-sliders-h"></i> Настройка МФУ</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'chistka-mfu']) }}"><i class="fas fa-paint-brush"></i> Чистка МФУ</a>
                                                    <a class="" href="{{ route('usluga', ['slug' => 'profilaktika-printera']) }}"><i class="fas fa-tools"></i> Профилактика МФУ</a>
                                                </div>

                                            </div>
                                            <div class="div_col">
                                                <a class="line-a" href="{{ route('usluga', ['slug' => 'remont-scanera']) }}"><i class="far fa-copy"></i> Ремонт сканеров</a>
                                                <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                <div class="accordion-content ml">
                                                    <a class="" href="{{ route('usluga', ['slug' => 'nastrojka-skanera']) }}"><i class="fas fa-sliders-h"></i> Настройка сканера</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <li class="bm-li">
                                            <a href="#" class="">Сети и Интернет</a>
                                        </li>
                                        <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                        <div class="accordion-content">
                                            <div class="dd_menu">
                                                <div class="div_col">
                                                    <a class="line-a" href="{{ route('problema', ['slug' => 'nastrojka-routera']) }}"><i class="fas fa-wifi"></i> Настройка роутера</a>
                                                    <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                    <div class="accordion-content ml">
                                                        <a class="" href="{{ route('problema', ['slug' => 'ustanovka-routera']) }}"><i class="fas fa-download"></i> Установка роутера</a>
                                                        <a class="" href="{{ route('problema', ['slug' => 'nastrojka-wifi']) }}"><i class="fas fa-cogs"></i> Настройка WiFi</a>
                                                        <a class="" href="{{ route('usluga', ['slug' => 'remont-wifi-routera']) }}"><i class="fas fa-hammer"></i> Ремонт роутеров</a>
                                                        <a class="" href="{{ route('usluga', ['slug' => 'proshivka-routera']) }}"><i class="fas fa-redo"></i> Перепрошивка роутера</a>
                                                    </div>
                                                </div>

                                                <div class="div_col">
                                                    <a class="line-a" href="{{ route('problema', ['slug' => 'nastrojka-interneta']) }}"><i class="fab fa-internet-explorer"></i> Настройка Интернета</a>
                                                    <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                    <div class="accordion-content ml">
                                                        <a class="" href="{{ route('usluga', ['slug' => 'podklyuchenie-interneta']) }}"><i class="fas fa-sliders-h"></i> Подключение Интернета</a>
                                                        <a class="" href="{{ route('usluga', ['slug' => 'ustranenie-nepoladok-interneta']) }}"><i class="fas fa-tools"></i> Устранение неполадок <br> Интернета</a>
                                                        <a class="" href="{{ route('usluga', ['slug' => 'obzhim-internet-kabelya']) }}"><i class="fas fa-ethernet"></i> Обжим Интернет кабеля</a>
                                                    </div>

                                                </div>
                                                <div class="div_col">
                                                    <a class="line-a" href="{{ route('usluga', ['slug' => 'nastrojka-lokalnoj-seti']) }}"><i class="fas fa-network-wired"></i> Настройка локально сети</a>
                                                    <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                    <div class="accordion-content ml">
                                                        <a class="" href="{{ route('usluga', ['slug' => 'ustranenie-nepoladok']) }}"><i class="fas fa-server"></i> Устранение неполадок сети</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <li class="bm-li">
                                            <a href="#" class="">Данные и файлы</a>
                                        </li>
                                        <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                        <div class="accordion-content">
                                            <div class="dd_menu">
                                                <div class="div_col">
                                                    <a class="line-a" href="{{ route('usluga', ['slug' => 'vosstanovlenie-dannih']) }}"><i class="fas fa-database"></i> Восстановление данных</a>
                                                    <span class="menu-trigger2 line-a" href="#"><i class="fas fa-bars"></i></span>
                                                    <div class="accordion-content ml">
                                                        <a class="" href="{{ route('usluga', ['slug' => 'vosstanovlenie-dannih-hdd']) }}"><i class="fas fa-hdd"></i> C жёсткого диска</a>
                                                        <a class="" href="{{ route('usluga', ['slug' => 'vosstanovlenie-dannih-usb-flash']) }}"><i class="fab fa-usb"></i> С USB флешки</a>
                                                        <a class="" href="{{ route('usluga', ['slug' => 'vosstanovlenie-dannih-flash-card']) }}"><i class="fas fa-sd-card"></i> С карты памяти</a>
                                                        <a class="" href="{{ route('usluga', ['slug' => 'vosstanovlenie-dannih-ssd']) }}"><i class="far fa-hdd"></i> С SSD диска</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="bm-sec-men">
                                    @include('layouts.menu_top')
                                </div>
                            </div>


                        </ul>
                    </nav>

            </div>

    </header>
    <div class="main">
        <div class="bubay">
            <a href="{{ route('shop') }}" class="bu_tech ">Покупаем Б\У технику</a>
            <span class="close_ad">⮿</span>
        </div>
        <div class="bpopBlock">
            <p class="alertText"></p>
        </div>
        <div class="bpopApplication">
                    <div class="ba_div">
                        <div class="small-form__title">
                            <i class="fas fa-laptop-medical"></i>
                            <span>Укажите номер телефона</span>
                        </div>
                            <p>Специалист вам перезвонит</p>
                        <div>
                            <div class="uk-form-controls">
                                <img class="applic" src="{{asset('/storage/images/russian-flag.png')}}" width="90%" alt="Флаг России">
                                <input type="text" class="uk-input phone-input phone" name="phone" placeholder="8 (999) 999-9999" required="">
                            </div>
                            @csrf
                            <button type="submit" class="uk-button uk-button-default appy">Отправить</button>
                        </div>
                    </div>
        </div>
        @yield('content')

        <div class="m_c_3">
            <div class="mc3_line_up">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mc3_line_down">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="container">

                    <div class="section__header">
                        <h2>Наши преимущества</h2>
                    </div>

                    <div class="quick_repair">
                        <i class="far fa-clock"></i>
                        <p>Срочный ремонт на дому за 60 минут! Оперативно приедем домой или в офис.</p>
                    </div>

                    <div class="quick_repair_items">
                        <div class="qri_item">
                            <i class="fas fa-shipping-fast"></i>
                            <div class="item_content">
                                <span>Доставка техники</span>
                                <p>При сложном ремонте, доставим неисправную технику в сервис и обратно.</p>
                            </div>
                        </div>
                        <div class="qri_item">
                            <i class="fas fa-hammer"></i>
                            <div class="item_content">
                                <span>Покупаем БУ технику</span>
                                <p>Можно расчитаться БУ техникой или сделать себе скидку с помощью неё. Можно обменять
                                    свою нерабочую технику на рабочую с доплатой в обе стороны.</p>
                            </div>
                        </div>
                        <div class="qri_item">
                            <i class="fas fa-house-user"></i>
                            <div class="item_content">
                                <span>Работаем на дому</span><br>
                                <p>Не нужно вести габаритную, неудобную технику в сервис, большую часть проблем мы сможем
                                    поправить прямо у вас дома.</p>
                            </div>
                        </div>
                        <div class="qri_item">
                            <i class="fas fa-hand-holding-usd"></i>
                            <div class="item_content">
                                <span>Диагностика бесплатно</span><br>
                                <p>Если вы ремонтируетесь, то за диагностику вам не надо платить.</p>
                            </div>
                        </div>

                    </div>

            </div>
        </div>
        <div class="m_c_4">
            <div class="container">
                <div class="section__header">
                    <h2>Ответы на популярные вопросы</h2>
                </div>
                <div class="section_content">
                    <div class="question">
                        <div class="qheader">Как вызвать компьютерного мастера на дом или офис?
                            <i class="fas fa-caret-down"></i></div>
                        <div class="qbody">
                            <hr>
                            <p>1. Позвоните нам или оставьте заявку на обратный звонок.</p>
                            <p>2. Опишите Вашу проблему.</p>
                            <p>3. Назначьте удобное для вас время приезда мастера!</p>
                        </div>
                    </div>
                    <div class="question">
                        <div class="qheader">Где будут выполняться работы?
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <div class="qbody">
                            <hr>
                            <p>До 90% неисправностей мы устраняем на выезде. Благодаря современному
                                оборудованию и технической поддержке производителя, такие работы как замену жесткого диска,
                                ремонт экрана, устранение проблем с программным
                                обеспечением и другие типовые неисправности, мы выполним у вас на дому или в офисе
                                оперативно и качественно.</p>
                            <p>В редких случаях, когда могут потребоваться редкие запчасти и профессиональное
                                оборудование, мы выполним ремонт в нашем сервисном центре и бесплатно доставим
                                технику туда и обратно к вам.</p>
                        </div>
                    </div>
                    <div class="question">
                        <div class="qheader">Как скоро приедет мастер или курьер?
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <div class="qbody">
                            <hr>
                            <p>Обычно, либо в тот же день либо на следующий.</p>
                            <p>Вы можете назначить любое удобное время, в которое вы готовы принять мастера.</p>
                        </div>
                    </div>
                    <div class="question">
                        <div class="qheader">Все детали в наличии или нужно будет ждать?
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <div class="qbody">
                            <hr>
                            <p>У нас есть 80% необходимых комплектующих для большинства моделей.</p>
                            <p> В редких случаях необходима доставка запчастей. Это занимает не более 1−2 недель.</p>
                        </div>
                    </div>
                    <div class="question">
                        <div class="qheader">Сколько времени обычно нужно на ремонт?
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <div class="qbody">
                            <hr>
                            <p>Большинство неисправностей специалист решает в течение 1-2 часов.</p>
                            <p>Если же неисправность серьёзная и требуется ремонт в сервисном центре, то продолжительность
                            ремонта обычно составляет 1-2 недели в зависимости от наличия запчастей.</p>
                        </div>
                    </div>
                    <div class="question">
                        <div class="qheader">Может ли поменяться цена в процессе ремонта?
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <div class="qbody">
                            <hr>
                            <p>В 90% случаев - Нет, после проведения бесплатной диагностики (диагностика бесплатна только
                                если вы ремонтируетесь), специалист составит смету с
                                точным указанием перечня работ и стоимости. Решение о выполнении
                                ремонта принимаете вы!</p>
                            <p>В редких случаях бывает так, что есть неочевидные неисправности, которые выясняются после исправления
                            основной поломки. Скажем, как после залития техники жидкостями. В этом случае, с вами тоже
                                оговаривается стоимость и рентабельность поломки, и можно отказаться от всего ремонта,
                                если для вас это перестаёт иметь смысл, оплатив только диагностику.</p>
                        </div>
                    </div>
                    <div class="question">
                        <div class="qheader">Какую БУ технику покупаем, цена?
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <div class="qbody">
                            <hr>
                            <p>Покупаем в основном компьютеры(системные блоки), ноутбуки - почти все. Редко "свежие"(относительно
                                недавно купленные) планшеты и телефоны. Нерабочие тоже берём.</p>
                            <p>Цена от 1000р.</p>
                            <p>Ехать никуда не нужно, подъедим сами.</p>
                        </div>
                    </div>
                    <div class="question">
                        <div class="qheader">Есть ли скидки?
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <div class="qbody">
                            <hr>
                            <p>Пенсионерам и постоянным клиентам -10%.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m_c_5">
            <div class="container">
                <div class="mc5_item">
                    <img src="{{asset('storage/images/find_out_repair_cost.png')}}" alt="узнай стоимость ремонта">
                </div>
                <div class="mc5_item">

                        <span class="h-li call_you">Хотите узнать стоимость ремонта?</span><br>
                        <span class="h-li call_you">Звоните!</span>
                        <br>

                        <div class="mc2b4_form">
                            @csrf
                            <input class="phone" size="11" type="text" placeholder="8 (999) 999-9999"><br>
                            <input class="but_call" type="submit" value="Позвонить мне">
                        </div>

                </div>
            </div>
        </div>
        <div class="m_c_6">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae4b765270d6cb6e1677695207daa00fc86c110d94787c18e86d89f526f3077bf&amp;width=100%25&amp;height=379&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer_block">
                <div class="footblock_item">
                    <a href="/" ><img class="f-brand" src="{{ asset('storage/images/logo2.png') }}" alt="Ремонт компьютеров"></a><p>Ремонт компьютеров и ноутбуков
                        в Мурманске с выездом
                        на дом. Диагностика бесплатно.</p>
                    <hr>
                </div>
                <div class="footblock_item gf">
                    <img class="gfofa" src="{{ asset('storage/images/Galactic_Federation_of_Free_Alliances.png') }}" alt="Galactic Federation of Free Alliances">
                    <span>При поддержке Galactic Federation of Free Alliances</span>
                </div>
            </div>
            <div class="footer_block">
                @include('layouts.menu_top')
            </div>
            <div class="footer_block">
                <div class="fb_item">
                    <a class="f_tel" href="tel:+79508998686">8 (950) 899-8686</a><br>
                    <span>09.00 - 21.00 Вс - выходной</span><hr>
                </div>
                <div class="fb_item">
                    <a href="https://yandex.ru/maps/23/murmansk/house/ulitsa_starostina_
                    61k1/Z0oYdwdlQUcHQFhifXV2d3tlZw==/?ll=33.105819%2C68.976763&source=wizgeo&utm_medium=maps-
                    desktop&utm_source=serp&z=16"><i class="fa fa-map-marker-alt"></i>
Мурманск, ул. Старостина, д. 61, корп. 1</a><br>
                    <a href="mailto:remont.computerov.murmansk@gmail.com"><i class="fas fa-envelope"></i>
remont.<wbr>computerov.<wbr>murmansk<wbr>@<wbr>gmail.<wbr>com</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
