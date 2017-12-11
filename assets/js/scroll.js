$(window).scroll(function() {
    var vh = $(window).height();
    var scroll = $(window).scrollTop();
    var scrollTrigger = $('#footer-main').offset().top;
    if (scroll >= scrollTrigger - vh) {
        $('.bottomSlider').removeClass('fixed-bottom');
        $('#footer-main').css('margin-top', '0px');
    } else {
        $('.bottomSlider').addClass('fixed-bottom');
        $('#footer-main').css('margin-top', '95px');
    }
});