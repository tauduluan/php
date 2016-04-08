<?php
  function navigation($link, $title){
    echo "<li><a href=\"../../";
    echo $link;
    echo "\">";
    echo $title;
    echo "</a></li>";
  }
 ?>
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
      <span class="sr-only">Toggle navigation</span>
    </button>
    <a class="navbar-brand" href="https://tau-duluan.herokuapp.com">TauDuluan</a>
  </div>
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="nav navbar-nav">
      <?php navigation('trending', 'Trending') ?>
      <?php navigation('artis', 'Artis') ?>
      <?php navigation('hotnews', 'Hotnews') ?>
      <?php navigation('populer', 'Populer') ?>
      <?php navigation('wawancara', 'Wawancara') ?>
    </ul>
  </div>
</nav>
