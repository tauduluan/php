<?php
// Headline config
$title = 'Headline Tauduluan';
$gambar = 'https://placeholdit.imgix.net/~text?txtsize=70&txt=Headline&w=750&h=500&txttrack=0';
$desc = 'Lorem ipsum dolor sit amet.';
$date = '2016-4-8';
 ?>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
     </ol>

     <!-- Wrapper for slides -->
     <div class="carousel-inner" role="listbox">
       <div class="item active">
         <img src="http://www.w3schools.com/bootstrap/img_chania.jpg" alt="Chania" width="460" height="345">
       </div>

       <div class="item">
         <img src="http://www.w3schools.com/bootstrap/img_chania2.jpg" alt="Chania" width="460" height="345">
       </div>

       <div class="item">
         <img src="http://www.w3schools.com/bootstrap/img_flower.jpg" alt="Flower" width="460" height="345">
       </div>

       <div class="item">
         <img src="http://www.w3schools.com/bootstrap/img_flower2.jpg" alt="Flower" width="460" height="345">
       </div>
     </div>

     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
<div class="row">
  <div class="headline col-md-8">
    <!-- <img src="<?php echo $gambar ?>" alt="" class="headline-img"/> -->
    <h2 class="headline-title"><?php echo $title ?></h2>
    <h4 class="headline-date"><?php echo $date; ?></h4>
    <h6>
      <?php echo $desc ?>
    </h6>
    <div class="row">
      <div class="col-md-6">
        <button class="btn facebook btn-hg"><i class="fa fa-facebook"></i> Like on Facebook</button>
      </div>
      <div class="col-md-6">
        <button class="btn twitter btn-hg"><i class="fa fa-twitter"></i> Follow on Twitter</button>
      </div><br>
    </div>
  </div>
  <div class="col-md-4">
  <!-- <h3>Ads</h3> -->
  <div class="row">
    <div class="col-md-6"><br>
      <img src="https://placehold.it/200x200/1abc9c/bdc3c7?text=Ads" alt="Ads" class="ads"><br><br>
    </div>
    <!-- <div class="col-md-6">
      <img src="https://placehold.it/200x200?text=Ads" alt="Ads" class="ads"><br><br>
    </div><br>
    <div class="col-md-6">
      <img src="https://placehold.it/200x200/1abc9c/bdc3c7?text=Ads" alt="Ads" class="ads"><br><br>
    </div>
    <div class="col-md-6">
      <img src="https://placehold.it/200x200?text=Ads" alt="Ads" class="ads"><br><br>
    </div><br>
    <div class="col-md-6">
      <img src="https://placehold.it/200x200/1abc9c/bdc3c7?text=Ads" alt="Ads" class="ads"><br><br>
    </div>
    <div class="col-md-6">
      <img src="https://placehold.it/200x200?text=Ads" alt="Ads" class="ads"><br><br>
    </div> -->
  </div>
  <!-- YOUR ADS HERE -->
</div>
</div>
