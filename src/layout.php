<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'meta.php'; ?>
    <title>TauDuluan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.min.css" rel="stylesheet">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Judul wawancara</h3>
            <h6>Lorem ipsum dolor sit amet.</h6>
          </div>
          <div class="col-md-6 videos">
            <iframe width="500" height="300" src="https://www.youtube.com/embed/jNQXAC9IVRw" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
    <!-- /.container -->

    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/vendor/video.js"></script>
    <script src="js/flat-ui.min.js"></script>

  </body>
</html>