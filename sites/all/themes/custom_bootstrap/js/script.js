jQuery(document).ready(function ($) {

    var win_h = $(window).height();
    var win_w = $(window).width();


    var userMenu = $('.navbar-nav.secondary');
    var menuToggle = $('button.navbar-toggle');
    userMenu.clone().appendTo('.region-top').addClass('user-top');
    menuToggle.clone().appendTo('.region-top').addClass('menu-top');

    var view_w = $('.view-partners').width();
    var partnersW = $('.view-partners.view-display-id-block').width();
    var $bxInit0 = $('.view-partners.view-display-id-block .views-field-field-partners .field-content');

    var bxInit0 = $bxInit0.bxSlider({
        hideControlOnEnd: true,
        pager: false,
        speed: 400,
        pause: 0,
        easing: 'linear',
        minSlides: 2,
        maxSlides: 5,
        moveSlides: 2,
        slideWidth: 150,
        /*slideMargin: 6,*/
        autoDirection: 'prev',
        onSliderLoad: function () {
            setTimeout(function() {
                slider_resp();
            }, 300);
        }
    });



    $('body:not(.node-type-page-tabs) .node.view-mode-full .field-name-field-visuel-milti .field-items').addClass('slider-nav');
    $('.slider-nav').clone().prependTo('.field-name-field-visuel-milti').addClass('slider-for').removeClass('slider-nav');
    $('.node .field-name-field-visuel-milti .field-items.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.node .field-name-field-visuel-milti .field-items.slider-nav').on('init', function(event, slick){
        if ($('.slider-nav').find('.slick-slide').length < 5) {
            $('.slider-nav').find('.slick-track').addClass('mini');
        }
    });
    $('.node .field-name-field-visuel-milti .field-items.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        centerMode: true,
        focusOnSelect: true
    });

    var place01 = $('#views-exposed-form-search-page .views-exposed-widgets .views-exposed-widget');
    var place01Text = place01.find('label').text();
    place01.find('input').attr('placeholder', place01Text.trim());

    var tabLi = $('.node-page-tabs.with-tabs .field-name-tabs-links ul li');
    var tabLiFirst = $('.node-page-tabs.with-tabs .field-name-tabs-links ul li.first');
    var tabContItem = $('.node-page-tabs.view-mode-full > .field-name-field-tabs > .field-items > .field-item');
    var tabLiItemCount = 1;
    var tabContItemCount = 1;
    tabLiFirst.addClass('active');

    tabLi.each(function () {
        $(this).attr('data-count', 'item-'+tabLiItemCount);
        tabLiItemCount++;
    });
    tabContItem.each(function () {
        $(this).attr('data-count', 'item-'+tabContItemCount);
        if ($(this).attr('data-count') == 'item-1') {
            $(this).addClass('vis');
        }
        tabContItemCount++;
    });
    tabLi.click(function () {
        var liItem = $(this).attr('data-count');
        tabLi.each(function () {
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        tabContItem.each(function () {
            $(this).removeClass('vis');
            if ($(this).attr('data-count') == liItem) {
                $(this).addClass('vis');
            }
        });
    });

    $(window).on('resize', function() {
        var view_w = $('.view-partners').width();
        // col_height();
        slider_resp();
    });


    function slider_resp() {
        var vp = $('.view-partners').find('.bx-viewport');
        var vpw = vp.parent().width();
        if ($(window).width() < 569 && $(window).width() > 320) {
            var slide_w = 190;
        } else if ($(window).width() == 320) {
            var slide_w = 130;
        } else {
            var slide_w = 150;
        }
        var vpresp = vpw / slide_w;
        vpresp = vpresp;
        vpresp = vpresp - (vpresp%1);
        var vp_w_rwsp = vpresp * slide_w;
        if ($(window).width() < 569 && $(window).width() > 320) {
            vp.width(vpw - 90);
            vp.css('left', 45);
        } else if ($(window).width() == 320) {
            vp.width(vpw - 20);
            vp.css('left', 10);
        } else {
            vp.width(vpw);
            vp.css('left', 0);
        }
        /*vp.width(vpw - 80);
        vp.css('left', 40);*/
    }

    
    if (window.location.hash) {
      if ( window.location.hash.search(/tab-/) != -1) {
        var tab = window.location.hash.match(/\d+/)[0];
        $('.field-name-tabs-links [data-count=item-' + tab + ']').click();
      }
    }

});

