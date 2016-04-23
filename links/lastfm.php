<!-- LASTFM -->

<div class="block" id="lastfm">
  <div class="widget_header">
    <div class="widget_name"><a target='_blank' href="http://www.last.fm/user/pinguu9999">LAST.FM</a></div>
    <a target='_blank' href="http://www.last.fm/user/pinguu9999"><?php
      $lastfmUser = jsonToArray("http://ws.audioscrobbler.com/2.0/?method=user.getinfo&user=pinguu9999&format=json&api_key=", $config["LASTFM"]["apikey"]);
      echo "<img class='profile_pic' src='" . $lastfmUser["user"]["image"][2]["#text"] . "'>";
    ?></a>
  </div>
  <a target='_blank' href="http://www.last.fm/user/pinguu9999"><h2><?php
    echo $lastfmUser["user"]["name"];
  ?></h2></a>
  <div class="preview">
    <table><?php
          $lastTracks = jsonToArray("http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=pinguu9999&limit=5&format=json&api_key=", $config["LASTFM"]["apikey"], false);
          $last = 0;
          while ($last < 5) {
            echo "<tr><td>";
            echo $lastTracks->recenttracks->track[$last]->artist->{"#text"} . " - " . $lastTracks->recenttracks->track[$last]->name;
            echo "</td><td>";
            if (property_exists($lastTracks->recenttracks->track[$last], "date")) {
              echo $lastTracks->recenttracks->track[$last]->date->{"#text"};
            } else {
              echo "&#9835;Now Playing&#9835;";
            }
            echo "</td></tr>";
            $last++;
          }
        ?>
    </table>
  </div>
</div>
