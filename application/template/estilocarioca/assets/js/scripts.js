/*
 Author : Joao Ahmad
 Date   : 14/09/2014 11h
 */

// GLOBAL VARIABLES
'use strict';

var Common,
        Page;


Common = (function () {


    // -----------------
    // SLIDER
    // -----------------

    $('.slider-single').slick();

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        focusOnSelect: true
    });

    // -----------------
    // RATING
    // -----------------

    $('.rating').each(function () {
        var params = {
            path: 'assets/css/plugins/images'
        };

        if (this.getAttribute('data-read') == 'true')
            params.readOnly = true;

        $(this).raty(params);
    });

    // -----------------
    // SEARCH
    // -----------------

    $('.navbar-search .search').click(function (e) {
        e.preventDefault();
        $('body').toggleClass('search-open');
        setTimeout(function () {
            $('.search-popup-form .input').focus();
        }, 100);
    });

    $('.search-popup .popup-close').click(function () {
        $('body').removeClass('search-open');
    });
    $('.search-popup .search-popup-inner *:not(.popup-close)').click(function (e) {
        e.stopPropagation();
    });
    
    $('.hamburger').click(function(e){
        e.preventDefault();
        $('body').toggleClass('menu-open');
    });
});

function getMyFolderRoot() {
    return App.base_path;
}
new Common;
