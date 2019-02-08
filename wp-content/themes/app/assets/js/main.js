jQuery(document).ready(function ($) {
    $('.navbar-toggler').on('click', function (e) {
        e.preventDefault();
        $('.navbar-nav').toggleClass('showMenu');
    });

    $("button").on('click', (function (e) {
        e.preventDefault();
        $(".svg-toggle").toggle();
    }));

    $(".navbar-toggler").on('click', (function (e) {
        e.preventDefault();
        $(this).toggleClass("dark");
    }));

});