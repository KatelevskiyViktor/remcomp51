<div class="content m_c_3">
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
            <h2>{{ $pages->content_h }}</h2>
        </div>

        <div class="content">
            <div class="text">
                <div class="text_item">
                    <div class="text_item_wrapper">

                        {!! $pages->content !!}
                    </div>
                    <div class="text_item_button">
                        <button class="text_but"><span class="t_b">Читать дальше</span> <i class="fas fa-chevron-down"></i></button>
                    </div>
                </div>
            </div>
            <div class="call">
                <div class="small-form">
                    <div class="small-form__wrapper" >
                        <div class="small-form__title">
                            <i class="fas fa-laptop-medical"></i>
                            <span>Нужна консультация?</span>
                        </div>
                        <p>Специалист вам перезвонит</p>
                        <div>
                            <div class="uk-form-controls">
                                <img src="{{asset('/storage/images/russian-flag.png')}}" width="90%" alt="Флаг России">
                                <input type="text" class="uk-input phone-input phone" name="phone" placeholder="8 (999) 999-9999" required="">
                            </div>
                            @csrf
                            <button type="submit" class="uk-button uk-button-default">Отправить</button>
                        </div>
                    </div><div class="uk-sticky-placeholder" style="height: 329px; margin: 0px;" hidden=""></div>
                </div>
            </div>
        </div>


    </div>
</div>
