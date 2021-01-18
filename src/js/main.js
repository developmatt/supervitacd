var $ = require('jquery');

require('./comments');
require('./doubts');
require('./mobile-menu');

if($(window).innerWidth() <= 650) {
    resizeVideoAccordingScreenWidth();
}

$(window).resize(function() {
    if($(window).innerWidth() > 650) return false;
    resizeVideoAccordingScreenWidth();
})

function resizeVideoAccordingScreenWidth() {
    $('.video-container iframe').attr('width', $(window).innerWidth() - 50);
}