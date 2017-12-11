$(document).ready(function() {
    $('.sponsor__img').each(function () {
        var imgHeight = $('.sponsor__img').outerHeight();
        var imgWidth = $('.sponsor__img').outerWidth();
        var imgCalc = imgWidth - imgHeight;
        $(this).css({
            'padding-bottom': imgCalc + 'px'
        });
    });
});