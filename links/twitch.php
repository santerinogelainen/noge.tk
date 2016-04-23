<!-- TWITCH -->

<div class="block" id="twitch">
  <div class="widget_header">
    <div class="widget_name"><a target='_blank' href="https://www.twitch.tv/lizardsn/profile">TWITCH</a></div>
    <a target='_blank' href="https://www.twitch.tv/lizardsn/profile"><?php
      $twitch = jsonToArray("https://api.twitch.tv/kraken/users/lizardsn");
      echo "<img class='profile_pic' src='" . $twitch["logo"] . "'>";
    ?></a>
  </div>
  <a target='_blank' href="https://www.twitch.tv/lizardsn/profile"><h2><?php
    echo $twitch["name"];
  ?></h2></a>
  <div class="images"><?php
    $twitchFollows = jsonToArray("https://api.twitch.tv/kraken/users/lizardsn/follows/channels");
    $t = 0;
    while ($t < 12) {
      echo "<a target='_blank' href='" . $twitchFollows["follows"][$t]["channel"]["url"] . "'><img class='tiny_img' src='" . $twitchFollows["follows"][$t]["channel"]["logo"] . "'></a>";
      $t++;
    }
  ?></div>
</div>
