<!-- YOUTUBE -->

<div class="block small_block" id="youtube">
  <div class="widget_header">
    <div class="widget_name"><a target='_blank' href="https://www.youtube.com/channel/UCPEtpMuMht91_aJkmE_acZg">YOUTUBE</a></div>
    <a href="https://www.youtube.com/channel/UCPEtpMuMht91_aJkmE_acZg"><?php
      $youtube = jsonToArray("https://www.googleapis.com/youtube/v3/channels?part=snippet&id=UCPEtpMuMht91_aJkmE_acZg&key=", $config["YOUTUBE"]["apikey"]);
      echo "<img class='profile_pic' src='" . $youtube["items"][0]["snippet"]["thumbnails"]["default"]["url"] . "'>";
    ?></a>
  </div>
  <a href="https://www.youtube.com/channel/UCPEtpMuMht91_aJkmE_acZg"><h2><?php
    echo $youtube["items"][0]["snippet"]["title"];
  ?></h2></a>
</div>
