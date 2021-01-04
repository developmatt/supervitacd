var $ = require('jquery')
require('formstone/dist/js/core.js')
require('formstone/dist/js/mediaquery.js')
require('formstone/dist/js/touch.js')
require('formstone/dist/js/carousel.js')


$(".carousel").carousel({
    paged: true,
    show: {
        "940px": 1,
        "941px": 2,
    },
    pagination: false,
    controls: {
        "previous": ".comments__previous",
        "next": ".comments__next"
    },
});