var $ = require('jquery')

$(document).ready(function() {
    $('.doubt').click(function() {
        $(this).toggleClass('closed');
        $(this).find('.doubt__description-body').slideToggle();
    })
})