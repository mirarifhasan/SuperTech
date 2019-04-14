(function ($) {
    'use strict';
    $('.filter-button-group').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item'
        , percentPosition: true
        , masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: '.grid-item'
        }
    })
    $('.filter-button-group button').on('click', function () {
        $('.filter-button-group button').removeClass('active');
        $(this).addClass('active');
    })
    
    
    $('.owl-carousel').owlCarousel({
        loop: true
        , margin: 10
        , autoplay: true
        , autoplayTimeout: 2000
        , responsive: {
            0: {
                items: 1
            }
            , 600: {
                items: 3
            }
            , 1000: {
                items: 4
            }
        }
    })
    
    
    
    
    $(window).scroll(function () {
        var scrolling = $(window).scrollTop();
        if (scrolling > 200) {
            $('.arrow-top').fadeIn();
        }
        else {
            $('.arrow-top').fadeOut();
        }
    })
    $('.arrow-top').click(function () {
        $('html').animate({
            'scrollTop': '0'
        }, 2000);
    })
})(jQuery);