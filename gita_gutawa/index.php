<?php include '../src/artis.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../src/meta.php'; ?>
    <title>TauDuluan</title>

    <!-- Loading Bootstrap -->
    <link href="../css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="../css/flat-ui.min.css" rel="stylesheet">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="../js/vendor/html5shiv.js"></script>
      <script src="../js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include '../src/navbar.php'; ?>
    <div class="container">
        <?php include '../src/headline.php' ?>
        <div class="row">
          <div class="col-md-4 ajr">
            <img src="<?php echo $artis[2] ?>" alt="" class="artis-img"/>
            <h3><?php echo $artis[0] ?></h3>
            <h6><?php echo $artis[1] ?></h6>
            <button class="btn btn-primary" onclick="readPost('sample-post')">Read More</button>
          </div>
          <div class="col-md-4 ajr">
            <img src="<?php echo $artis[2] ?>" alt="" class="artis-img"/>
            <h3><?php echo $artis[0] ?></h3>
            <h6><?php echo $artis[1] ?></h6>
            <button class="btn btn-primary" onclick="readPost('sample-post')">Read More</button>
          </div>
          <div class="col-md-4 ajr">
            <img src="<?php echo $artis[2] ?>" alt="" class="artis-img"/>
            <h3><?php echo $artis[0] ?></h3>
            <h6><?php echo $artis[1] ?></h6>
            <button class="btn btn-primary" onclick="readPost('sample-post')">Read More</button>
          </div>
        </div>
        <?php include '../src/footer.php'; ?>
    </div>
    <!-- /.container -->

    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="../js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/flat-ui.min.js"></script>
    <script src="../js/responsive.js" charset="utf-8"></script>
    <script src="../js/main.js" charset="utf-8"></script>
  </body>
</html>