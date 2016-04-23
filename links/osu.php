<!-- OSU -->

<div class="block" id="osu">
  <div class="widget_header">
    <div class="widget_name"><a target='_blank' href="https://osu.ppy.sh/u/7197109">OSU</a></div>
    <a target='_blank' href="https://osu.ppy.sh/u/7197109"><img class="profile_pic" src="https://a.ppy.sh/7197109"></a>
  </div>
  <a target='_blank' href="https://osu.ppy.sh/u/7197109"><h2><?php
    $osu = jsonToArray("https://osu.ppy.sh/api/get_user?u=7197109&k=", $config["OSU"]["apikey"]);
    echo $osu[0]["username"];
  ?></h2></a>
  <div id="osu_preview">
    <h3>#<?php echo $osu[0]["pp_rank"]; ?></h3>
    <h3 id="country_rank"><img id="country_flag" src="../img/suomi.svg"> #<?php echo $osu[0]["pp_country_rank"]; ?></h3>
    <span id="osu_stats">
      Performance: <?php echo round($osu[0]["pp_raw"]);?>pp
      <br>Accuracy: <?php echo round($osu[0]["accuracy"], 2, PHP_ROUND_HALF_UP);?>%
      </br>
      Play Count: <?php echo $osu[0]["playcount"];?>
      <br>Level: <?php echo round($osu[0]["level"]);?>
      </br>Country: <?php echo $osu[0]["country"];?>
    </span>

  </div>
</div>
