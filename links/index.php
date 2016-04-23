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
	</body>
</html>
