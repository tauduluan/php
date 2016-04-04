<?php
  function navbar($link, $title){
    echo "<li><a href=\"";
    echo $link;
    echo ".html\">";
    echo $title;
    echo "</a></li>";
  }
 ?>
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
      <span class="sr-only">Toggle navigation</span>
    </button>
    <a class="navbar-brand" href="index.php">TauDuluan</a>
  </div>
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="nav navbar-nav">      
      <?php navbar('trending', 'Trending') ?>
      <?php navbar('artis', 'Artis') ?>
      <?php navbar('hotnews', 'Hotnews') ?>
      <?php navbar('populer', 'Populer') ?>
      <?php navbar('wawancara', 'Wawancara') ?>
    </ul>
  </div>
</nav>
