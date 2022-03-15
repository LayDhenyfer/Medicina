$(document).ready(function () {
    var lastScrollTop = 0;

    $(window).scroll(function () {
        var st = $(this).scrollTop();

        if (st > lastScrollTop) {
            $('.header').addClass('hide');
        } else {
            $('.header').removeClass('hide');
        }

        if (st > $('.header').outerHeight()) {
            $('.header').addClass('scroll');
        } else {
            $('.header').removeClass('scroll');
        }

        lastScrollTop = st;
    });

    if ($(window).width() >= 1024) {
        $('.only-mobile').remove();
    } else if ($(window).width() < 1024) {
        $('.only-desk .header__nav').remove();
    }

    $('.hamburguer').click(function() {
        $(this).toggleClass('active');
        $('.only-mobile').toggleClass('active');
    });

    $('.banner__video-play').click(function() {
        let src = $(this).siblings('iframe').attr('src')
        src = src + "?autoplay=1"
        $(this).siblings('iframe').attr('src', src)
        $(this).parent().addClass('active')
    })
});