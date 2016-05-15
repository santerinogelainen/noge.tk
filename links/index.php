<!doctype html>
<html lang="fi">
	<head>

	<!-- links -->
	<link rel="stylesheet" type="text/css" href='styles.css'/>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
	<!-- links end -->

	<script src="../jquery/jquery-1.12.0.min.js"></script>

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

			<a href="http://noge.tk/information/"><div id="information" class="menu_item"><?php
				echo strtolower(getSQL("title", "menu")[0]);
			?></div></a>
			<a href="https://github.com/santerinogelainen"><div id="github" class="menu_item"><?php
				echo strtolower(getSQL("title", "menu")[2]);
			?></div></a>
			<a href="http://noge.tk/photos"><div id="photos" class="menu_item"><?php
				echo strtolower(getSQL("title", "menu")[3]);
			?></div></a>
		</div>

		<h1>
		<?php
		echo "<span id='links'>" . getSQL("title", "menu")[1] . "</span>";
		?>
		</h1>

		<div id="content">
			<?php
				include "instagram.php";
				include "vsco.php";
				include "tumblr.php";
				include "twitter.php";
				include "twitch.php";
				include "osu.php";
				include "lastfm.php";
				include "facebook.php";
				include "snapchat.php";
				include "steam.php";
				include "soundcloud.php";
				include "youtube.php";
			?>
		</div>

		<script src="script.js"></script>
		<script src="../menu.js"></script>
	</body>
</html>
