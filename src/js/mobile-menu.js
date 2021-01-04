var $ = require('jquery');

$(document).ready(function() {
    $('.menu-mobile__hamburger').click(function() {
        $('.menu-mobile__menu').addClass('active');
    })

    $('.menu-mobile__close-button').click(function() {
        $('.menu-mobile__menu').removeClass('active');
    })
});