<!-- STEAM -->

<?php
  $steam = jsonToArray("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?steamids=76561198067134270&key=", $config["STEAM"]["apikey"]);
  if ($steam !== false):
?>

<div class="block small_block" id="steam">
  <div class="widget_header">
    <div class="widget_name"><a target='_blank' href="http://steamcommunity.com/id/pinguu9999/">STEAM</a></div>
    <a href="http://steamcommunity.com/id/pinguu9999/"><?php
      echo "<img class='profile_pic' src='" . $steam["response"]["players"][0]["avatarfull"] . "'>";
    ?></a>
  </div>
  <a href="http://steamcommunity.com/id/pinguu9999/"><h2><?php
    echo $steam["response"]["players"][0]["personaname"];
  ?></h2></a>
</div>

<?php
endif;
?>
