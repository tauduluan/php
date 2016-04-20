$(document).ready(function (){
    // Get window size
    var width = $(window).width(),
        height = $(window).height(),
    // Minimized the width
        costumizedWidth = width - 32,
        minimizedHeight = height -  300,
    // Get image by their class
        image = $('.artis-img'),
        headline = $('.headline-img'),
        ads = $('.ads'),
        artisAds = $('.artis-ads'),
        imagePost = $('.artis-image-post'),
        hottest = $('.hottest'),
        secondHottest = $('.secondhot'),
        thirdHottest = $('.thirdhot'),
        meme = $('.meme'),
        tristan = $('.tristan');

    if(navigator.userAgent.toLowerCase().indexOf("android") > -1) {
      // Set the width css
      image.css('width', width - 35);
      headline.css('width', costumizedWidth);
      ads.css('width', costumizedWidth);
      artisAds.css('height', minimizedHeight);
      artisAds.css('width', costumizedWidth);
      imagePost.css('width', costumizedWidth);
      hottest.css('width', width - 57);
      secondHottest.css('width', costumizedWidth);
      thirdHottest.css('width', costumizedWidth);
      meme.css('width', costumizedWidth);
      tristan.css('width', costumizedWidth);
    }
    else if (navigator.userAgent.toLowerCase().indexOf("iphone") > -1 ){
      // Set the width css
      image.css('width', width - 35);
      headline.css('width', costumizedWidth);
      ads.css('width', costumizedWidth);
      artisAds.css('height', minimizedHeight);
      artisAds.css('width', costumizedWidth);
      imagePost.css('width', costumizedWidth);
      hottest.css('width', width - 57);
      secondHottest.css('width', costumizedWidth);
      thirdHottest.css('width', costumizedWidth);
      meme.css('width', costumizedWidth);
      tristan.css('width', costumizedWidth);
    }
});
