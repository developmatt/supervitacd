var $ = require('jquery')
require('formstone/dist/js/core.js')
require('formstone/dist/js/mediaquery.js')
require('formstone/dist/js/touch.js')
require('formstone/dist/js/carousel.js')


$("#carousel-video").carousel({
    paged: true,
    show: {
        "940px": 1,
        "941px": 2,
    },
    pagination: false,
    controls: {
        "previous": "#comments__previous__video",
        "next": "#comments__next__video"
    },
});

$("#carousel-text").carousel({
    paged: true,
    show: {
        "940px": 1,
        "941px": 2,
    },
    pagination: false,
    controls: {
        "previous": "#comments__previous__text",
        "next": "#comments__next__text"
    },
});