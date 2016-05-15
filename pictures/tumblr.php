<a href="http://ttypical.tumblr.com/"><div class='block' id='tumblr'>
  <?php
    $tumblr = jsonToArray("https://api.tumblr.com/v2/blog/ttypical.tumblr.com/posts/photo?api_key=", $config["TUMBLR"]["consumerkey"]);
    $i = 0;
    while ($i < 4) {
      $iReversed = 3 - $i;
      echo "<img class='img_style2 img_style2" . $i . "' src='" . $tumblr["response"]["posts"][$iReversed]["photos"][0]["alt_sizes"][2]["url"] . "' />";
      $i++;
    }
  ?>
  <div class="middle middle_style2">
    <img class="middle_logo" src="../img/tumblr.png" />
  </div>
</div></a>
