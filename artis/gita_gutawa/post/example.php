<?php include '../../../src/artis.php' ?>
<?php
  $post_name = "Judul Artikel";
  $post_desc = "Deskripsi Artikel";
  $post_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $post_1 = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut';
  $post_2 = 'Esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, suntin culpa qui officia deserunt mollit anim id est laborum.';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../../../src/meta.php'; ?>
    <meta property="og:site_name" content="TauDuluan" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $post_name ?>" />
    <meta property="og:description" content="<?php echo $post_desc; ?>" />
    <meta property="og:url" content="<?php echo $post_url; ?>" />
    <meta name="twitter:card" content="TauDuluan" />
    <meta name="twitter:title" content="<?php echo $post_name ?>" />
    <meta name="twitter:description" content="<?php echo $post_desc; ?>" />
    <meta name="twitter:url" content="<?php echo $post_url; ?>" />
    <title>TauDuluan</title>

    <!-- Loading Bootstrap -->
    <link href="../../../css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Loading Flat UI -->
    <link href="../../../css/flat-ui.min.css" rel="stylesheet">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="../../../css/style.css">

    <!-- SweetAlert -->
    <link rel="stylesheet" href="../../../bower_components/sweetalert/dist/sweetalert.css">
    <script src="../../../bower_components/sweetalert/dist/sweetalert-dev.js" charset="utf-8"></script>
    <script src="../../../bower_components/sweetalert/dist/sweetalert.min.js" charset="utf-8"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include '../../../src/navbar.php'; ?>
  <div class="container">
      <div class="artis row">
        <div class="col-md-3">
          <img src="https://placehold.it/250x180?text=Artis" class="img-rounded artis-img"/>
        </div>
        <div class="col-md-6">
          <h3><?php echo $gita_gutawa[0]; ?></h3>
          <h4 class="artis-desc">Penyanyi dan Aktor</h4>
        </div>
        <div class="col-md-3">
          <img src="https://placehold.it/200x200?text=Ads" class="img-rounded artis-img" />
        </div>
      </div>
      <hr>
      <div class="post">
        <h3><?php echo $post_name; ?></h3>
        <h6>
          <?php echo $post_1 ?>
          <br><br>
          <center>
            <img src="http://placehold.it/150x150?text=Caption" class="img-rounded"/><br><br>
            <span class="image-caption">Caption</span>
          </center>
          <br><br>
          <?php echo $post_2 ?>
      </div>
      <!-- <div class="col-md-8">
        <?php include '../../../src/comment.php'; ?>
      </div><br>
      <div class="pull-right col-md-4">
        <a class="btn btn-share facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url ?>"><i class="fa fa-facebook"></i> Share</a>
        <a class="btn btn-share twitter" href="https://twitter.com/share?text=<?php echo $post_desc?>&url=<?php echo $post_url ?>"><i class="fa fa-twitter"></i> Share</a>
      </div><br><br> -->
      <br><?php include '../../../src/footer.php' ?>
  </div>
  <!-- /.container -->

    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="../../../js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../js/flat-ui.min.js"></script>
    <!-- Responsive -->
    <script src="../../../js/responsive.js" charset="utf-8"></script>
    <!-- Costum -->
    <script src="../../../js/main.js" charset="utf-8"></script>
</html>
