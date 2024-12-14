 

"use strict"; // Start of use strict
function revolutionSlider() {
    if ($('.slider #slider1').length) {
        jQuery("#slider1").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            delay: 5000,
            navigation: {
                arrows: {
                    enable: true
                }
            },
            gridwidth: 1170,
            gridheight: 680
        });
    }
    if ($('.slider #slider2').length) {
        jQuery("#slider2").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                arrows: {
                    enable: true
                },
                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 800,
                    style: "zeus",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 10,
                    tmp: ''
                }
            },
            gridwidth: 1170,
            gridheight: 815
        });
    }
}

function countDown() {
    if ($('#count_down').length) {
        $('#count_down').countdown({
            date: '08/31/2017 23:59:59',
            offset: -8,
            day: 'Day',
            days: 'Days'
        });
    }
}

function galleryMember() {
    if ($('#gallery_member').length) {
        $('#gallery_member').lightGallery({
            pager: true
        });
    }
}

function galleryMasonry() {
    if ($('.gallery-masonry').length) {
        $('.gallery-masonry .grid').masonry({
            itemSelector: '.grid-item'
        });
    }
}

function showMenus() {
    if ($('#menu_primary_show').length) {
        $('#menu_primary_show').on('click', function () {
            $('#menu_primary').addClass('menu-primary-show');
            $('.overlay-menu').show();
            $('body').addClass('uk-offcanvas-page');
            return false;
        });
    }
}

function hideMenus() {
    if ($('#hide_menus').length) {
        $('#hide_menus').on('click', function () {
            $('#menu_primary').removeClass('menu-primary-show');
            $('.overlay-menu').hide();
            $('body').removeClass('uk-offcanvas-page');
            return false;
        });
        $('.overlay-menu').on('click', function () {
            $('#menu_primary').removeClass('menu-primary-show');
            $('.overlay-menu').hide();
            $('body').removeClass('uk-offcanvas-page');
            return false;
        });
    }
}

function menuToggle() {
    if ($('#menu_primary_toggle').length) {
        $('#menu_primary_toggle').on('click', function () {
            $('.menu-media').toggle(500, 'linear');
            return false;
        });
    }
}

function menuHomeTwo() {
    if ($('.nav-holder').length) {
        $('.nav-holder li.has-submenu').children('a').append(function () {
            return '<button class="dropdown-expander"><i class="uk-icon-angle-right"></i></button>';
        });
        $('.nav-holder .dropdown-expander').on('click', function () {
            $(this).parent().parent().children('.submenu').slideToggle();
            $(this).find('i').toggleClass('uk-icon-angle-right uk-icon-angle-down');
            $(this).parent('a').parent('li').toggleClass('active');
            return false;
        });
    }
}

function backToTop() {
    if ($('#kc_backtop').length) {
        var scrollTrigger = 500,
            backTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#kc_backtop').addClass('kc-show-backtop');
                } else {
                    $('#kc_backtop').removeClass('kc-show-backtop');
                }
            };
        $(window).on('scroll', function () {
            backTop();
        });
    }
}

function galleryDesign() {
    if (('#gallery-design').length) {
        $('#gallery-design li a').on('click', function () {
            $('#gallery-design li a').removeClass('uk-active');
            $(this).addClass('uk-active');
            $('.img-large-design').attr("src", $(this).attr('data-img'));
            $('#data-layout').html($(this).attr('data-layout'));
            $('#data-code').html($(this).attr('data-code'));
            $('#data-price').html($(this).attr('data-price'));
            $('#data-style').html($(this).attr('data-style'));
            return false;
        });
    }
}
// instance of fuction while Document ready event
jQuery(document).on('ready', function () {
    (function ($) {
        revolutionSlider();
        countDown();
        galleryMember();
        showMenus();
        hideMenus();
        menuToggle();
        commentFormValidation();
        menuHomeTwo();
        backToTop();
        galleryDesign();
    })(jQuery);
});
// instance of fuction while Window Load event
jQuery(window).on('load', function () {
    (function ($) {
        galleryMasonry();
    })(jQuery);
});