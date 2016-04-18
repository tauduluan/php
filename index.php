<?php include 'src/artis.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'src/meta.php'; ?>
    <title>TauDuluan</title>

    <!-- CSS -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/flat-ui.min.css" rel="stylesheet">

    <!-- Costum -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" charset="utf-8"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include 'src/navbar.php'; ?>
    <div class="container">
        <?php include 'src/headline.php' ?>
        <hr>
        <div class="row">
          <div class="col-md-4 ajr">
            <img src="<?php echo $gita_gutawa[2] ?>" alt="" class="artis-img"/>
            <h3><?php echo $gita_gutawa[0] ?></h3>
            <h6><?php echo $gita_gutawa[1] ?></h6>
            <button class="btn btn-primary" onclick="viewArtis('gita_gutawa')">Read More</button>
          </div>
          <div class="col-md-4 ajr">
            <img src="<?php echo $artis[2] ?>" alt="" class="artis-img"/>
            <h3><?php echo $artis[0] ?></h3>
            <h6><?php echo $artis[1] ?></h6>
            <button class="btn btn-primary" onclick="readPost('sample-post')">Read More</button>
          </div>
          <div class="col-md-4">
            <h3>Foto Artis</h3>
            <div class="row">
              <div class="col-md-7">
                <img src="https://placehold.it/200x200?text=Foto+Artis" alt="Foto Artis" />
              </div>
              <div class="col-md-5">
                <h4>Title</h4>
                <p>
                  Deskripsi
                </p>
              </div>
            </div>
          </div>
        </div>
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
          <div class="col-md-4">
            <h3>Now Playing</h3>
            <div class="row">
              <div class="col-md-7">
                <img src="https://placehold.it/200x200?text=Foto+Artis" alt="Foto Artis" />
              </div>
              <div class="col-md-5">
                <h4>Title</h4>
                <p>
                  Deskripsi
                </p>
              </div>
            </div>
          </div>
        </div>
        <?php include 'src/footer.php'; ?>
    </div>

    <!-- JS -->
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/flat-ui.min.js"></script>
    <script src="js/responsive.js" charset="utf-8"></script>
  </body>
</html>
