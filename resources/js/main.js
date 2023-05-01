$(document).ready(function() {
    hidden_up_menu();
    underline_to_pressed_link_to_menu('.bm-ul>li>a');
    open_close('.menu-trigger','.to-row', 0);
    open_close('.menu-trigger2','.accordion-content', 1);
    open_close_questions(".qbody", '.question');
    check_phone_form();
    toggle_content();
    gallery();
    from_click_call_to_mail();
    open_close_application();
    close_ad();
});


