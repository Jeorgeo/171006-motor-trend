var slideNow = 1;
var slideCount = $('.slick-slide').length;
var navBtnId = 0;
var translateWidth = 0;
var activeBtnSlide = document.querySelectorAll('.slick-li');

$(document).ready(function() {

    $('.slick-next').click(function() {
        nextSlide();
    });

    $('.slick-prev').click(function() {
        prevSlide();
    });

    $('.slick-li').click(function() {
        for (var i = 0; i < activeBtnSlide.length; i++) {
          activeBtnSlide[i].classList.remove('slick-active');
        }
        $(this).addClass('slick-active');
        navBtnId = $(this).index();




        if (navBtnId + 1 != slideNow) {
            translateWidth = -$('.slick-slide').width() * (navBtnId);
            $('.slick-track').css({
                'transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
                'transition': 'transform 500ms ease 0s',
                '-webkit-transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
                '-ms-transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
            });
            slideNow = navBtnId + 1;
        }
    });
});


function nextSlide() {
    if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
        $('.slick-track').css({
          'transform': 'translate3d(0, 0, 0)',
          'transition': 'transform 500ms ease 0s',
        });
        slideNow = 1;
    } else {
        translateWidth = -$('.slick-slide').width() * (slideNow);
        $('.slick-track').css({
            'transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
            'transition': 'transform 500ms ease 0s',
            '-webkit-transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
            '-ms-transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
        });
        slideNow++;
    }
}

function prevSlide() {
    if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
        translateWidth = -$('.slick-slide').width() * (slideCount - 1);
        $('.slick-track').css({
            'transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
            'transition': 'transform 500ms ease 0s',
            '-webkit-transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
            '-ms-transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
        });
        slideNow = slideCount;
    } else {
        translateWidth = -$('.slick-slide').width() * (slideNow - 2);
        $('.slick-track').css({
            'transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
            'transition': 'transform 500ms ease 0s',
            '-webkit-transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
            '-ms-transform': 'translate3d(' + translateWidth + 'px, 0, 0)',
        });
        slideNow--;
    }
}
