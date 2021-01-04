var $ = require('jquery');

require('./comments');
require('./doubts');
require('./mobile-menu');

var video_wrapper = $('.youtube-video-place');
//  Check to see if youtube wrapper exists
if(video_wrapper.length){
// If user clicks on the video wrapper load the video.
$('.play-youtube-video').on('click', function(){
/* Dynamically inject the iframe on demand of the user.
 Pull the youtube url from the data attribute on the wrapper element. */
video_wrapper.html('<iframe allowfullscreen frameborder="0" width="600" height="338" class="embed-responsive-item" src="' + video_wrapper.data('yt-url') + '"></iframe>');
});
}