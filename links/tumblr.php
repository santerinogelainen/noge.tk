<!-- TUMBLR -->

<div class="block" id="tumblr">
  <div class="widget_header">
    <div class="widget_name"><a target='_blank' href="http://ttypical.tumblr.com/">TUMBLR</a></div>
    <a target='_blank' href="http://ttypical.tumblr.com/"><img class="profile_pic" src="http://api.tumblr.com/v2/blog/ttypical.tumblr.com/avatar/128"></a>
  </div>
  <a target='_blank' href="http://ttypical.tumblr.com/"><h2><?php
    $tumblr = jsonToArray("https://api.tumblr.com/v2/blog/ttypical.tumblr.com/posts/photo?api_key=", $config["TUMBLR"]["consumerkey"]);
    echo $tumblr["response"]["blog"]["name"];
  ?></h2></a>
  <div class="images"><?php
    $i = 0;
    while ($i < 3) {
      $end = end($tumblr["response"]["posts"][$i]["photos"][0]["alt_sizes"]);
      echo "<a target='_blank' href='" . $tumblr["response"]["posts"][$i]["post_url"] . "'><img class='img' src='" . $end["url"] . "'></a>";
      $i++;
    }
  ?></div>
</div>
