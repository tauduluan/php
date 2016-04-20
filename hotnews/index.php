<?php include '../src/artis.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../src/meta.php'; ?>
    <title>TauDuluan</title>

    <!-- CSS -->
    <link href="../css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="../css/flat-ui.min.css" rel="stylesheet">

    <!-- Costum -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js" charset="utf-8"></script>

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="../js/vendor/html5shiv.js"></script>
      <script src="../js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include '../src/navbar.php'; ?>
    <div class="container">
          <div class="col-md-7">
            <img src="https://placehold.it/600x550?text=The Hottest News" alt="The Hottest News" />
            <h2>The Hottest News</h2>
            <button class="btn btn-primary">Read More</button>
          </div>
          <div class="row">
            <div class="col-md-5">
              <img src="https://placehold.it/400x200?text=Second+Hot+News" alt="Second Hot News" />
              <h2>The Hottest News</h2>
              <button class="btn btn-primary">Read More</button>
            </div>
            <div class="col-md-5">
              <br>
              <img src="https://placehold.it/400x200?text=Second+Hot+News" alt="Second Hot News" />
              <h2>The Hottest News</h2>
              <button class="btn btn-primary">Read More</button>
            </div>
          </div>
        <?php include '../src/footer.php'; ?>
    </div>

    <!-- JS -->
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/flat-ui.min.js"></script>
    <script src="../js/responsive.js" charset="utf-8"></script>
  </body>
</html>
