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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="../js/vendor/html5shiv.js"></script>
      <script src="../js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include '../src/navbar.php'; ?>
    <div class="container">
        <?php include '../src/trending.php' ?>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $title[0] ?></h3>
          </div>
          <div class="panel-body">
            <?php echo $desc[0]; ?>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $title[1] ?></h3>
          </div>
          <div class="panel-body">
            <?php echo $desc[1] ?>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $title[2] ?></h3>
          </div>
          <div class="panel-body">
            <?php echo $desc[2] ?>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $title[3] ?></h3>
          </div>
          <div class="panel-body">
            <?php echo $desc[3] ?>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $title[4] ?></h3>
          </div>
          <div class="panel-body">
            <?php echo $desc[4] ?>
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
