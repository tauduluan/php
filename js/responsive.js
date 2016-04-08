$(document).ready(function (){
    // Get window width
    var width = $(window).width(),
    // Minimized the width
        costumizedWidth = width - 30,
    // Get image by their class
        image = $('.artis-img'),
        headline = $('.headline-img'),
        ads = $('.ads');

    // Set the width css
    image.css('width', costumizedWidth);
    headline.css('width', costumizedWidth);
    ads.css('width', costumizedWidth);
});

function readPost(title) {
  window.location.href = 'post/' + title + '.php';
}
