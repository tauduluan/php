$(document).ready(function (){
    var width = $(window).width(),
        costumizedWith = width - 30,
        image = $('.artis-img');
        headline = $('.headline-img');
    image.css('width', costumizedWith);
    headline.css('width', costumizedWith);
});
