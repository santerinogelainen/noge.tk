<!doctype html>
<html lang="fi">
	<head>
	
	<!-- links -->
	<link rel="stylesheet" type="text/css" href="jquery/jquery-ui/jquery-ui.theme.min.css"/>
	<link rel="stylesheet" type="text/css" href='rng.css'/>
	<link rel="stylesheet" type="text/css" href='styles.css'/>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<!-- links end -->
	
	<script src="jquery/jquery-1.12.0.min.js"></script>
	<script src="jquery/jquery-ui/jquery-ui.min.js"></script>
	<script src="bowser/bowser.min.js"></script>
	
	<?php
	include 'script.php';
	?>
	</head>
	<body>
		<div id="TOP"></div>
		<header>
		<?php 
			$count = count(getSQL("title", "menu")) - 1;
			foreach (getSQL("title", "menu") as $value) {
				global $count;
				echo "<a href='#" . getSQL("title", "menu")[$count] . "'><span class='link'>" . getSQL("title", "menu")[$count] . "</span></a>";
				$count--;
			}
		?>
		</header>
		<a href="index.php" id="logo_link">
		<h1 class="noge"><?php echo getSQL("text", "text")[2]; ?></h1>
		<h1 class="noge"><?php echo getSQL("text", "text")[2]; ?></h1>
		</a>
		<img src="img/illuminati_s1.jpg" id="fixedImg"/>
		<div id="whitespace_INFO">
		<a href="#TOP"><h2 id="info_T"><?php echo getSQL ("title", "menu")[0];?></h2></a>
		<div id="INFO"></div>
		<img id="profile_photo" src="https://api.tumblr.com/v2/blog/santerinogelainen.tumblr.com/avatar/512"/>
		</div>
		
		<script src="script.js"></script>
	</body>
</html>