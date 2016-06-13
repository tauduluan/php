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
        // Social buttons
        facebook = $('.facebook');
        twitter = $('.twitter');

    if(navigator.userAgent.toLowerCase().indexOf("android") > -1) {
      // Set the width css
      image.css('width', '100%');
      headline.css('width', '100%');
      ads.css('width', '100%');
      artisAds.css('height', minimizedHeight);
      artisAds.css('width', '100%');
      imagePost.css('width', '100%');
      hottest.css('width', '100%');
      secondHottest.css('width', '100%');
      thirdHottest.css('width', '100%');
      meme.css('width', '100%');
      tristan.css('width', '100%');
    }
    else if (navigator.userAgent.toLowerCase().indexOf("iphone") > -1 ){
      // Set the width css
      image.css('width', '100%');
      headline.css('width', '100%');
      ads.css('width', '100%');
      artisAds.css('height', minimizedHeight);
      artisAds.css('width', '100%');
      imagePost.css('width', '100%');
      hottest.css('width', '100%');
      secondHottest.css('width', '100%');
      thirdHottest.css('width', '100%');
      meme.css('width', '100%');
      tristan.css('width', '100%');
    }
});
