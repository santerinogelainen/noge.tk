<?php
include 'script.php';
?>

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
	</head>
	<body>

		<div id="hamburger"><img src="../svg/hamburger.svg" id="hamburger_svg"></div>
		<div id="expand"></div>
		<div id="menu">

			<a href="../"><img id="side_logo" src="../img/logo_white.png"></a>

			<a href="../information/"><div id="information" class="menu_item"><?php
				echo strtolower($json["menu"][0]);
			?></div></a>
			<a href="../links/"><div id="links" class="menu_item"><?php
				echo strtolower($json["menu"][1]);
			?></div></a>
			<a href="https://github.com/santerinogelainen"><div id="github" class="menu_item"><?php
				echo strtolower($json["menu"][2]);
			?></div></a>
		</div>

		<h1>
		<?php
		echo "<span class='pictures'>" . substr($json["menu"][3], 0, 3) . "</span><span class='pictures'>" . substr($json["menu"][3], 3, -1) . "</span><span class='pictures'>" . substr($json["menu"][3], -1) . "</span>";
		?>
		</h1>

		<div id="content">
			<?php
				include 'colors.php';
				include 'instagram.php';
				include 'vsco.php';
				include 'tumblr.php';
				include 'others.php';
			?>
		</div>

		<script src="script.js"></script>
		<script src="../menu.js"></script>
	</body>
</html>
