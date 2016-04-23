<!-- SOUNDCLOUD -->

<div class="block small_block" id="soundcloud">
  <div class="widget_header">
    <div class="widget_name"><a target='_blank' href="https://soundcloud.com/pinguu9999">SOUNDCLOUD</a></div>
    <a href="https://soundcloud.com/pinguu9999"><?php
      $soundcloud = jsonToArray("http://api.soundcloud.com/users/124475820?client_id=", $config["SOUNDCLOUD"]["clientid"]);
      echo "<img class='profile_pic' src='" . $soundcloud["avatar_url"] . "'>";
    ?></a>
  </div>
  <a href="https://soundcloud.com/pinguu9999"><h2><?php
    echo $soundcloud["username"];
  ?></h2></a>
</div>
