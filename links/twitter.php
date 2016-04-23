<!-- TWITTER -->
<div class="block" id="twitter">
  <div class="widget_header">
    <div class="widget_name"><a target='_blank' href="https://twitter.com/@santerinog">TWITTER</a></div>
    <?php
      $user = $connection->get("users/show", ["user_id" => "245851179"]);
      echo "<a target='_blank' href='https://twitter.com/@santerinog'><img class='profile_pic' src='" . $user->profile_image_url . "'></a>";
    ?>
  </div>
  <a target='_blank' href="https://twitter.com/@santerinog"><h2><?php
    echo $user->screen_name;
  ?></h2></a>
  <?php
    if ($user->status->retweeted == "1") {
      echo "<a target='_blank' href='" . $user->status->entities->media[0]->url . "'>";
    } else {
      echo "<a target='_blank' href='https://twitter.com/@santerinog'>";
    }
    echo "<div class='preview'>";
    if (property_exists($user->status->entities, "media")) {
      echo "<img class='img' src='" . $user->status->entities->media[0]->media_url . ":thumb'>";
      echo "<div class='with_img'>";
    } else {
      echo "<div class='without_img'>";
    }
    if ($user->status->retweeted == "1") {
      echo "<img id='reblog' src='../img/reblog.png'>";
      echo "<p class='twitter_user'><span>" . $user->status->entities->user_mentions[0]->name . " </span><span>@" . $user->status->entities->user_mentions[0]->screen_name . "</span></p>";
      echo "<p class='tweet'>" . $user->status->retweeted_status->text . "</p>";
    } else {
      echo "<p class='twitter_user'><span>" . $user->name . " </span><span>@" . $user->screen_name . "</span></p>";
      echo "<p class='tweet'>" . $user->status->text . "</p>";
    }
    echo "</div></div></a>";
  ?>
</div>
