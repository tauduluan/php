<?php
// Headline config
$title = 'Headline Tauduluan';
$gambar = 'https://placeholdit.imgix.net/~text?txtsize=70&txt=Headline&w=750&h=500&txttrack=0';
$desc = 'Lorem ipsum dolor sit amet.';
$date = '2016-4-8';
 ?>
<div class="row">
  <div class="headline col-md-8">
    <!-- <img src="<?php echo $gambar ?>" alt="" class="headline-img"/> -->
    <h2 class="headline-title"><?php echo $title ?></h2>
    <h4 class="headline-date"><?php echo $date; ?></h4>
    <h6 class="headline-desc">
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
  <!-- YOUR ADS HERE -->
  <div class="row">
    <div class="col-md-6"><br>
      <img src="https://placehold.it/200x200/1abc9c/bdc3c7?text=Ads" alt="Ads" class="ads"><br><br>
    </div>
  </div>
</div>
</div>
