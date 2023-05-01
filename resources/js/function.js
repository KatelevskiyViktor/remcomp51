/*---------------------------------------------------------*/

function hidden_up_menu() {
    $(window).scroll(function() {

        if ($(this).scrollTop()>0)
        {
            $('.top-menu').fadeOut();
        }
        else
        {
            $('.top-menu').fadeIn('medium', function () {
                    $(this).css('display','flex');
            });
        }
    });
}

/*---------------------------------------------------------*/

function underline_to_pressed_link_to_menu(what_listen) {
    let location = document.location.href;
    let cur_url = '/' + location.split('/').pop();
    $('.bm-ul li').each(function () {
        let link = $(this).find('a').attr('href');

        if (cur_url === link) {
            $(this).removeClass('bm-li').addClass('current');
        }
    });

}

/*---------------------------------------------------------*/


function open_close(click_class, toggle_class, swtch) {

    $(click_class).on('click', function () {
        let th = $(this);
        let icon = $('svg', this).attr('class');


        swtch === 1 ? th.siblings(toggle_class).slideToggle() : $(toggle_class).slideToggle('medium', function () {

            if (th.is(':visible')){
                th.css('display','flex');
            }

            $('.bm-sec-men').toggle();
        });

        if(icon === 'svg-inline--fa fa-bars fa-w-14'){
            $('svg', this).removeClass(icon).addClass('svg-inline--fa fa-times fa-w-11');
        }else{
            $('svg', this).removeClass(icon).addClass('svg-inline--fa fa-bars fa-w-14');
        }
    });
}


/*---------------------------------------------------------*/


function check_phone_form() {
    $(".phone").mask("8(999) 999-9999");
}

/*---------------------------------------------------------*/

function open_close_questions(open_el, click_el) {
    $(click_el).on('click',function () {
        let th = $(this);
        let open_e = th.children(open_el);
        let svg = th.find('svg');

        if(open_e.css('display') === 'none'){
            open_e.show('slow');
            svg.css("transform", "rotate(180deg)");

        }else{
            open_e.hide('slow');
            svg.css("transform", "rotate(0)");
        }
    });
}

/*---------------------------------------------------------*/

function toggle_content(){
    $('.text_but').on('click', function (){
        let tb = $('.t_b');
        let block = $(this).parent().prev();
        let svg = $(this).find('svg');

        if(block.css('height') === '400px'){
            block.css({'height' : 'auto', '-webkit-mask-image': 'unset'});
            svg.css("transform", "rotate(180deg)");
            tb.text('Свернуть');
        }else {
            block.css({'height' : '400px', '-webkit-mask-image':
                    '-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)))'});
            svg.css("transform", "rotate(0)");
            tb.text('Читать дальше');
        }
    });
}

/*---------------------------------------------------------*/

function gallery(){
    var slideNow = 1;
    var slideCount = $('#slidewrapper').children().length;
    var slideInterval = 3000;
    var navBtnId = 0;
    var translateWidth = 0;


        var switchInterval = setInterval(nextSlide, slideInterval);

        $('#viewport').hover(function() {
            clearInterval(switchInterval);
        }, function() {
            switchInterval = setInterval(nextSlide, slideInterval);
        });

        $('#next-btn').click(function() {
            nextSlide();
        });

        $('#prev-btn').click(function() {
            prevSlide();
        });

        $('.slide-nav-btn').click(function() {
            navBtnId = $(this).index();

            if (navBtnId + 1 != slideNow) {
                translateWidth = -$('#viewport').width() * (navBtnId);
                $('#slidewrapper').css({
                    'transform': 'translate(' + translateWidth + 'px, 0)',
                    '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                    '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
                });
                slideNow = navBtnId + 1;
            }
        });



    function nextSlide() {
        if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
            $('#slidewrapper').css('transform', 'translate(0, 0)');
            slideNow = 1;
        } else {
            translateWidth = -$('#viewport').width() * (slideNow);
            $('#slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow++;
        }
    }

    function prevSlide() {
        if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
            translateWidth = -$('#viewport').width() * (slideCount - 1);
            $('#slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow = slideCount;
        } else {
            translateWidth = -$('#viewport').width() * (slideNow - 2);
            $('#slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow--;
        }
    }
}

/*---------------------------------------------------------*/
function bpopOpenClose(text){
    $('.alertText').text(text);
    $('.bpopBlock').bPopup({
        speed: 650,
        transition: 'slideIn',
        transitionClose: 'slideBack',
        autoClose: 1500
    });
}
/*---------------------------------------------------------*/


function from_click_call_to_mail(){
    $('.but_call, .uk-button').on('click', function (){
        let numPh, token, th = $(this);

        if(th.hasClass('but_call')){
            numPh = th.siblings('.phone').val();
            token = th.siblings("input[name='_token']").val();
        }else{
            numPh = th.siblings('.uk-form-controls').children('.phone').val();
            token = th.siblings("input[name='_token']").val();
        }

        if(numPh){
                $.ajax({
                    type: 'POST',
                    url: '/send',
                    data: {
                        '_token': token,
                        "numPh" : numPh
                    },
                    success:function (res){
                        if(res){
                            if(th.hasClass('appy'))
                                $('.bpopApplication').bPopup().close()
                            bpopOpenClose('Письмо отправлено!');
                        }
                        else
                            bpopOpenClose('Ошибка! Введи номер правильно');
                    }
                })
        }else{
               bpopOpenClose('Ошибка! Введи номер правильно.');
            }

    })
}

/*---------------------------------------------------------*/


function open_close_application(){
    $('.mm-btn').on('click',function (){
        $('.bpopApplication').bPopup({
            speed: 650,
            transition: 'slideIn',
            transitionClose: 'slideBack'
        });
    })
}

/*---------------------------------------------------------*/


function close_ad(){
    $('.close_ad').on('click', function (){
        $('.bubay').css('display','none');
    });
}
