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
						echo "<a href='https://www.instagram.com/santerinogelainen/'><img class='profile_pic' src='" . $igUser["data"]["profile_picture"] . "'></a>";
					?>
				</div><a href="https://www.instagram.com/santerinogelainen/"><h2><?php 
					echo $igUser["data"]["username"];
				?></h2></a><div class="images"><?php 
					getIGPictures(3);
				?></div>
			</div>
			
			<!-- VSCO -->
			
			<div class="block" id="vsco">
				<div class="widget_header">
					<a href="http://vsco.co/santerinogelainen/grid/1"><img class="profile_pic" src="../vsco/profile.jpg"></a>
				</div>
				<a href="http://vsco.co/santerinogelainen/grid/1"><h2>santerinogelainen</h2></a>
				<div class="images">
					<a href="http://vsco.co/santerinogelainen/grid/1"><img class="img" src="../vsco/1.jpg"></a>
					<a href="http://vsco.co/santerinogelainen/grid/1"><img class="img" src="../vsco/2.jpg"></a>
					<a href="http://vsco.co/santerinogelainen/grid/1"><img class="img" src="../vsco/3.jpg"></a>
				</div>
			</div>
			
			<!-- TUMBLR -->
			
			<div class="block" id="tumblr">
				<div class="widget_header">
					<a href="http://ttypical.tumblr.com/"><img class="profile_pic" src="http://api.tumblr.com/v2/blog/ttypical.tumblr.com/avatar/128"></a>
				</div>
				<a href="http://ttypical.tumblr.com/"><h2><?php 
					$tumblr = jsonToArray("https://api.tumblr.com/v2/blog/ttypical.tumblr.com/posts/photo?api_key=", $config["TUMBLR"]["consumerkey"]);
					echo $tumblr["response"]["blog"]["name"];
				?></h2></a>
				<div class="images"><?php 
					$i = 0;
					while ($i < 3) {
						echo "<a href='" . $tumblr["response"]["posts"][$i]["post_url"] . "'><img class='img' src='" . $tumblr["response"]["posts"][$i]["photos"][0]["alt_sizes"][5]["url"] . "'></a>";
						$i++;
					}
				?></div>
			</div>
			
			<!-- TWITTER -->
			
			<div class="block" id="twitter">
				<div class="widget_header">
					<?php 
						$user = $connection->get("users/show", ["user_id" => "245851179"]);
						echo "<a href='https://twitter.com/@santerinog'><img class='profile_pic' src='" . $user->profile_image_url . "'></a>";
					?>
				</div>
				<a href="https://twitter.com/@santerinog"><h2><?php 
					echo $user->screen_name;
				?></h2></a>
				<?php
					if ($user->status->retweeted == "1") {
						echo "<a href='" . $user->status->entities->media[0]->url . "'>";
					} else {
						echo "<a href='https://twitter.com/@santerinog'>";
					}
					echo "<div class='preview'>";
					if (property_exists($user->status->entities, "media")) {
						echo "<img class='img' src='" . $user->status->entities->media[0]->media_url . ":thumb'>";
					}
					if ($user->status->retweeted == "1") {
						echo "<img id='reblog' src='../img/reblog.png'>";
						echo "<p class='twitter_user'><span>" . $user->status->entities->user_mentions[0]->name . " </span><span>@" . $user->status->entities->user_mentions[0]->screen_name . "</span></p>";
						echo "<p class='tweet'>" . $user->status->retweeted_status->text . "</p>";
					} else {
						echo "<p class='twitter_user'><span>" . $user->name . " </span><span>@" . $user->screen_name . "</span></p>";
						echo "<p class='tweet'>" . $user->status->text . "</p>";
					}
					echo "</div></a>";
				?>
			</div>
			
			<!-- TWITCH -->
			
			<div class="block" id="twitch">
				<div class="widget_header">
					<a href="https://www.twitch.tv/lizardsn/profile"><?php 
						$twitch = jsonToArray("https://api.twitch.tv/kraken/users/lizardsn");
						echo "<img class='profile_pic' src='" . $twitch["logo"] . "'>";
					?></a>
				</div>
				<a href="https://www.twitch.tv/lizardsn/profile"><h2><?php 
					echo $twitch["name"];
				?></h2></a>
				<div class="images"><?php 
					$twitchFollows = jsonToArray("https://api.twitch.tv/kraken/users/lizardsn/follows/channels");
					$t = 0;
					while ($t < 12) {
						echo "<a href='" . $twitchFollows["follows"][$t]["channel"]["url"] . "'><img class='tiny_img' src='" . $twitchFollows["follows"][$t]["channel"]["logo"] . "'></a>";
						$t++;
					}
				?></div>
			</div>
			
			<!-- FACEBOOK -->
			
			<div class="block" id="facebook">
				<div class="widget_header">
					<a href="https://www.facebook.com/santeri.nogelainen"><img class="profile_pic" src="http://graph.facebook.com/v2.5/100000139667386/picture?height=100"></a>
				</div>
				<a href="https://www.facebook.com/santeri.nogelainen"><h2>Santeri Nogelainen</h2></a>
				<a href="https://www.facebook.com/santeri.nogelainen"><div class="preview"><h3>Facebook Profile -></h3></div></a>
			</div>
			
			<!-- OSU -->
			
			<div class="block" id="osu">
				<h2>MORE SOON&trade;</h2>
			</div>
			
			<!-- SNAPCHAT -->
			
			<div class="block" id="snapchat">
				<h2>MORE SOON&trade;</h2>
			</div>
			
		</div>
		
		<script src="script.js"></script>
	</body>
</html>
