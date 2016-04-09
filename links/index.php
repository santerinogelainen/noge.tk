<!doctype html>
<html lang="fi">
	<head>
	
	<!-- links -->
	<link rel="stylesheet" type="text/css" href='styles.css'/>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
	<!-- links end -->
	
	<script src="../jquery/jquery-1.12.0.min.js"></script>
	<script src="../jquery/jquery-ui.min.js"></script>
	<script src="../jquery/jquery.color-2.1.2.min.js"></script>
	<script src="../jquery/jquery.mobile-1.4.5.min.js"></script>
	
	<!-- metas -->
	
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	
	<?php
	include 'script.php';
	?>
	</head>
	<body>
	
		<div id="hamburger"><img src="../svg/hamburger.svg" id="hamburger_svg"></div>
		<div id="expand"></div>
		<div id="menu">
		
			<a href="http://noge.tk"><img id="side_logo" src="../img/logo_white.png"></a>
		
			<?php 
			$cn = 0;
			foreach (getSQL("title", "menu") as &$value) {
				echo "<a href='http://noge.tk/" . strtolower(getSQL("title", "menu")[$cn]) . "/'><div id='" . strtolower(getSQL("title", "menu")[$cn])[$cn] . "' class='menu_item'>" . strtolower(getSQL("title", "menu")[$cn]) . "</div></a>";
				$cn++;
			}
			?>
		</div>
		
		<h1>
		<?php 
		echo "<span id='links'>" . getSQL("title", "menu")[1] . "</span>";
		?>
		</h1>
		
		<div id="content">
			
			<!-- INSTAGRAM -->
			
			<div class="block" id="instagram">
				<div class="widget_header"><?php 
						$igUser = jsonToArray("https://api.instagram.com/v1/users/self/?access_token=", $config["IG"]["IGtoken"]);
						echo "<a target='_blank' href='https://www.instagram.com/santerinogelainen/'><img class='profile_pic' src='" . $igUser["data"]["profile_picture"] . "'></a>";
					?>
				</div><a target='_blank' href="https://www.instagram.com/santerinogelainen/"><h2><?php 
					echo $igUser["data"]["username"];
				?></h2></a><div class="images"><?php 
					getIGPictures(3);
				?></div>
			</div>
			
			<!-- VSCO -->
			
			<div class="block" id="vsco">
				<div class="widget_header">
					<a target='_blank' href="http://vsco.co/santerinogelainen/grid/1"><img class="profile_pic" src="../vsco/profile.jpg"></a>
				</div>
				<a target='_blank' href="http://vsco.co/santerinogelainen/grid/1"><h2>santerinogelainen</h2></a>
				<div class="images">
					<a target='_blank' href="http://vsco.co/santerinogelainen/grid/1"><img class="img" src="../vsco/1.jpg"></a>
					<a target='_blank' href="http://vsco.co/santerinogelainen/grid/1"><img class="img" src="../vsco/2.jpg"></a>
					<a target='_blank' href="http://vsco.co/santerinogelainen/grid/1"><img class="img" src="../vsco/3.jpg"></a>
				</div>
			</div>
			
			<!-- TUMBLR -->
			
			<div class="block" id="tumblr">
				<div class="widget_header">
					<a target='_blank' href="http://ttypical.tumblr.com/"><img class="profile_pic" src="http://api.tumblr.com/v2/blog/ttypical.tumblr.com/avatar/128"></a>
				</div>
				<a target='_blank' href="http://ttypical.tumblr.com/"><h2><?php 
					$tumblr = jsonToArray("https://api.tumblr.com/v2/blog/ttypical.tumblr.com/posts/photo?api_key=", $config["TUMBLR"]["consumerkey"]);
					echo $tumblr["response"]["blog"]["name"];
				?></h2></a>
				<div class="images"><?php 
					$i = 0;
					while ($i < 3) {
						echo "<a target='_blank' href='" . $tumblr["response"]["posts"][$i]["post_url"] . "'><img class='img' src='" . $tumblr["response"]["posts"][$i]["photos"][0]["alt_sizes"][5]["url"] . "'></a>";
						$i++;
					}
				?></div>
			</div>
			
			<!-- TWITTER -->
			
			<div class="block" id="twitter">
				<div class="widget_header">
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
			
			<!-- TWITCH -->
			
			<div class="block" id="twitch">
				<div class="widget_header">
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
			
			<!-- OSU -->
			
			<div class="block" id="osu">
				<div class="widget_header">
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
			
			<!-- LASTFM -->
			
			<div class="block" id="lastfm">
				<div class="widget_header">
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
			
			<!-- FACEBOOK -->
			
			<div class="block small_block" id="facebook">
				<div class="widget_header">
					<a target='_blank' href="https://www.facebook.com/santeri.nogelainen"><img class="profile_pic" src="http://graph.facebook.com/v2.5/100000139667386/picture?height=100"></a>
				</div>
				<a target='_blank' href="https://www.facebook.com/santeri.nogelainen"><h2>Santeri Nogelainen</h2></a>
			</div>
			
			<!-- SNAPCHAT -->
			
			<div class="block small_block" id="snapchat">
				<div class="widget_header">
					<a href="https://www.snapchat.com/add/santerinog"><img class="profile_pic" src="../img/snapchat.png"></a>
				</div>
				<a href="https://www.snapchat.com/add/santerinog"><h2><?php 
					echo getSQL("username", "usernames")[0];
				?></h2></a>
			</div>
			
			<!-- STEAM -->
			
			<div class="block small_block" id="steam">
				<div class="widget_header">
					<a href="http://steamcommunity.com/id/pinguu9999/"><?php 
						$steam = jsonToArray("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?steamids=76561198067134270&key=", $config["STEAM"]["apikey"]);
						echo "<img class='profile_pic' src='" . $steam["response"]["players"][0]["avatarfull"] . "'>";
					?></a>
				</div>
				<a href="http://steamcommunity.com/id/pinguu9999/"><h2><?php 
					echo $steam["response"]["players"][0]["personaname"];
				?></h2></a>
			</div>
			
			<!-- SOUNDCLOUD -->
			
			<div class="block small_block" id="soundcloud">
				<div class="widget_header">
					<a href="https://soundcloud.com/pinguu9999"><?php 
						$soundcloud = jsonToArray("http://api.soundcloud.com/users/124475820?client_id=", $config["SOUNDCLOUD"]["clientid"]);
						echo "<img class='profile_pic' src='" . $soundcloud["avatar_url"] . "'>";
					?></a>
				</div>
				<a href="https://soundcloud.com/pinguu9999"><h2><?php 
					echo $soundcloud["username"];
				?></h2></a>
			</div>
			
			<!-- YOUTUBE -->
			
			<div class="block small_block" id="youtube">
				<div class="widget_header">
					<a href="https://www.youtube.com/channel/UCPEtpMuMht91_aJkmE_acZg"><?php 
						$youtube = jsonToArray("https://www.googleapis.com/youtube/v3/channels?part=snippet&id=UCPEtpMuMht91_aJkmE_acZg&key=", $config["YOUTUBE"]["apikey"]);
						echo "<img class='profile_pic' src='" . $youtube["items"][0]["snippet"]["thumbnails"]["default"]["url"] . "'>";
					?></a>
				</div>
				<a href="https://www.youtube.com/channel/UCPEtpMuMht91_aJkmE_acZg"><h2><?php 
					echo $youtube["items"][0]["snippet"]["title"];
				?></h2></a>
			</div>
			
		</div>
		
		<script src="script.js"></script>
	</body>
</html>
