<!-- INSTAGRAM -->

<div class="block" id="instagram">
  <div class="widget_header">
    <div class="widget_name"><a target='_blank' href="https://www.instagram.com/santerinogelainen/">INSTAGRAM</a></div>
    <?php
      $igUser = jsonToArray("https://api.instagram.com/v1/users/self/?access_token=", $config["IG"]["IGtoken"]);
      echo "<a target='_blank' href='https://www.instagram.com/santerinogelainen/'><img class='profile_pic' src='" . $igUser["data"]["profile_picture"] . "'></a>";
    ?>
  </div><a target='_blank' href="https://www.instagram.com/santerinogelainen/"><h2><?php
    echo $igUser["data"]["username"];
  ?></h2></a><div class="images"><?php
    getIGPictures(3);
  ?></div>
</div>
