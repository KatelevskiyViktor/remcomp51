<div class="price">
    <div class="container">
        <div class="section__header">
            <h2>Что мы можем предложить?</h2>
        </div>

        <div class="table_price_overflow">
            {!! $pages->price !!}
        </div>

        <div class="prices-form uk-margin-top">
            <h3>Узнать точную стоимость ремонта</h3>
            <div class="uk-form-controls">
                <img src="{{asset('storage/images/russian-flag.png')}}" alt="Флаг России">
                <input type="text" class="uk-input phone-input phone" name="phone" placeholder="8 (999) 999-9999" required="">
            </div>
            @csrf
            <button type="submit" class="uk-button uk-button-primary">Узнать стоимость</button>
        </div>
    </div>
</div>
