$(document).ready(function (){
    var width = $(window).width(),
        costumizedWidth = width - 30,
        image = $('.artis-img'),
        headline = $('.headline-img'),
        ads = $('.ads');
    image.css('width', costumizedWidth);
    headline.css('width', costumizedWidth);
    ads.css('width', costumizedWidth);
});
