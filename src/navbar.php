<?php
  $url = "https://tau-duluan.herokuapp.com/";
  function navigation($link, $title){
    // Global url variable
    global $url;
    // Fetch the text
    $text = "<li><a href=\"" . $url . $link . "\">" . $title . "</a></li>";

    // Return the text
    echo $text;
  }
 ?>
<nav class="navbar navbar-default navbar-embossed" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
      <span class="sr-only">Toggle navigation</span>
    </button>
    <a class="navbar-brand" href="<?php echo $url ?>">TauDuluan</a>
  </div>
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="nav navbar-nav">
      <?php
        navigation('trending', 'Trending');
        navigation('artis', 'Artis');
        navigation('hotnews', 'Hotnews');
        navigation('populer', 'Populer');
        navigation('wawancara', 'Wawancara');
        navigation('meme', 'Meme');
      ?>
    </ul>
  </div>
</nav>
