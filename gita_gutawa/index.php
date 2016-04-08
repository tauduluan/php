<?php include '../src/artis.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../src/meta.php'; ?>
    <title>TauDuluan</title>

    <!-- Loading Bootstrap -->
    <link href="../css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Loading Flat UI -->
    <link href="../css/flat-ui.min.css" rel="stylesheet">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- SweetAlert -->
    <link rel="stylesheet" href="../bower_components/sweetalert/dist/sweetalert.css">
    <script src="../bower_components/sweetalert/dist/sweetalert-dev.js" charset="utf-8"></script>
    <script src="../bower_components/sweetalert/dist/sweetalert.min.js" charset="utf-8"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include '../src/navbar.php'; ?>
  <div class="container">
      <div class="artis row">
        <div class="col-md-3">
          <img src="<?php echo $gita_gutawa[2] ?>" class="img-rounded artis-img"/>
        </div>
        <div class="col-md-6">
          <h3><?php echo $gita_gutawa[0]; ?></h3>
          <h4 class="artis-desc">Penyanyi dan Aktor</h4>
        </div>
        <div class="col-md-3 col-xs-12">
          <img src="https://placehold.it/190x190?text=Ads" class="img-rounded artis-ads" />
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-md-4">
          <img src="https://placehold.it/200x200?text=Image" class="img-rounded artis-image-post" />
          <figcaption class="image-caption">Caption</figcaption>
          </div>
          <div class="col-md-4">
          <img src="https://placehold.it/200x200?text=Image" class="img-rounded artis-image-post" />
          <figcaption class="image-caption">Caption</figcaption>
          </div>
          <div class="col-md-4">
          <img src="https://placehold.it/200x200?text=Image" class="img-rounded artis-image-post" />
          <figcaption class="image-caption">Caption</figcaption>
          </div>
      </div><br><br>
      <div class="row">
          <div class="col-md-4">
          <img src="https://placehold.it/200x200?text=Image" class="img-rounded artis-image-post" />
          <figcaption class="image-caption">Caption</figcaption>
          </div>
          <div class="col-md-4">
          <img src="https://placehold.it/200x200?text=Image" class="img-rounded artis-image-post" />
          <figcaption class="image-caption">Caption</figcaption>
          </div>
          <div class="col-md-4">
          <img src="https://placehold.it/200x200?text=Image" class="img-rounded artis-image-post" />
          <figcaption class="image-caption">Caption</figcaption>
          </div>
      </div><br><br>
      <div class="row">
          <div class="col-md-4">
          <img src="https://placehold.it/200x200?text=Image" class="img-rounded artis-image-post" />
          <figcaption class="image-caption">Caption</figcaption>
          </div>
          <div class="col-md-4">
          <img src="https://placehold.it/200x200?text=Image" class="img-rounded artis-image-post" />
          <figcaption class="image-caption">Caption</figcaption>
          </div>
          <div class="col-md-4">
          <img src="https://placehold.it/200x200?text=Image" class="img-rounded artis-image-post" />
          <figcaption class="image-caption">Caption</figcaption>
          </div>
      </div>
      <?php include '../src/footer.php' ?>
  </div>
  <!-- /.container -->
</body>

    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="../js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/flat-ui.min.js"></script>
    <!-- Responsive -->
    <script src="../js/responsive.js" charset="utf-8"></script>
</html>
