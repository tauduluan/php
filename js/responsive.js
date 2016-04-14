$(document).ready(function (){
    // Get window size
    var width = $(window).width(),
        height = $(window).height(),
    // Minimized the width
        costumizedWidth = width - 30,
        minimizedHeight = height -  300,
    // Get image by their class
        image = $('.artis-img'),
        headline = $('.headline-img'),
        ads = $('.ads');
        artisAds = $('.artis-ads')
        imagePost = $('.artis-image-post')

    if(navigator.userAgent.toLowerCase().indexOf("android") > -1) {
      // Set the width css
      image.css('width', costumizedWidth);
      headline.css('width', costumizedWidth);
      ads.css('width', costumizedWidth);
      artisAds.css('height', minimizedHeight);
      artisAds.css('width', costumizedWidth);
      imagePost.css('width', costumizedWidth)
    }
    else if (navigator.userAgent.toLowerCase().indexOf("iphone") > -1 ){
      // Set the width css
      image.css('width', costumizedWidth);
      headline.css('width', costumizedWidth);
      ads.css('width', costumizedWidth);
    }
});
