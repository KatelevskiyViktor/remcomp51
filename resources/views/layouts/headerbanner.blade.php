<div class="m-c-1">
    <div class="container">

        <div class="m-c-1-left">
            <h1>
                {!! $pages->main_h1 !!}
            </h1>
            <div class="m-c-1-l-adv">
                <span><i class="fas fa-award"></i> Выезд и диагностика - бесплатно</span>
                <span><i class="fas fa-award"></i> Скидка пенсионерам</span>
                <span><i class="fas fa-award"></i> Гарантия качества</span>
                <span><i class="fas fa-award"></i> Профессиональный опыт мастеров от 10 лет</span>
                <div class="m-c-1-form">
                    @csrf
                    <input class="phone" size="11" type="text" placeholder="8(999) 999-9999">
                    <input class="but_call" type="submit" value="Заказать звонок">
                </div>
            </div>
        </div>
        <div class="m-c-1-right">
            {!! $pages->scoreboards->img !!}
        </div>
    </div>

</div>
