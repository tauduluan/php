<?php include '../../../src/artis.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../../../src/meta.php'; ?>
    <title>TauDuluan</title>

    <!-- CSS -->
    <link href="../../../css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/flat-ui.min.css" rel="stylesheet">

    <!-- Costum -->
    <link rel="stylesheet" href="../../../css/style.css">
    <script src="../../../js/main.js" charset="utf-8"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="../../../js/vendor/html5shiv.js"></script>
      <script src="../../../js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include '../../../src/navbar.php'; ?>
    <div class="container">
      <center>
        <img src="https://placehold.it/600x300" alt="" class="meme meme-img"/>
        <p class="meme-desc text-left">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="pagination pagination-success text-center">
          <a href="#" class="btn btn-success previous">Previous</a>

          <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>

          <a href="#" class="btn btn-success next">Next</a>
        </div>
      </center>
        <?php include '../../../src/footer.php'; ?>
    </div>

    <!-- JS -->
    <script src="../../../js/vendor/jquery.min.js"></script>
    <script src="../../../js/flat-ui.min.js"></script>
    <script src="../../../js/responsive.js" charset="utf-8"></script>
  </body>
</html>
