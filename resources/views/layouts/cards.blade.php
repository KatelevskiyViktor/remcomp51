<div class="m-c-2">
    <div class="container">
        <h1>Устраним любую неисправность</h1>
        <div class="m-c-2-top">

            <div class="m-c-2-t-1 chile">
                {!! $pages->scoreboards->s_one !!}
            </div>
            <div class="m-c-2-t-2 chile">
                {!! $pages->scoreboards->s_two !!}
            </div>

            <div class="m-c-2-b-4 chile">
                <div class="mc2t_svg">
                    <i class="fas fa-laptop-medical"></i><span class="h-li call_you">Позвонить вам?</span>
                </div>

                <div class="mc2b4_call">
                    <br>
                    <span>Наш консультант свяжется с вами!</span><br>
                    <span>Оставьте свой номер</span>
                    <div class="mc2b4_form">
                        @csrf
                        <input class="phone" size="11" type="text" placeholder="8(999) 999-9999"><br>
                        <input class="but_call" type="submit" value="Заказать звонок">
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
