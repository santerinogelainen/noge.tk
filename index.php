<!doctype html>
<html lang="fi">
	<head>
	
	<!-- links -->
	<link rel="stylesheet" type="text/css" href="jquery/jquery-ui/jquery-ui.theme.min.css"/>
	<link rel="stylesheet" type="text/css" href='rng.css'/>
	<link rel="stylesheet" type="text/css" href='styles.css'/>
	<!-- <link rel="stylesheet" type="css/layout.php" href="layout.php"/> -->
	<link href='https://fonts.googleapis.com/css?family=Geo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<!-- links end -->
	
	<script src="jquery/jquery-1.12.0.min.js"></script>
	<script src="jquery/jquery-ui/jquery-ui.min.js"></script>
	<script src="bowser/bowser.min.js"></script>
	<script src="instafeed/instafeed.min.js"></script>
	
	<?php
	include 'script.php';
	?>
	</head>
	<body>
		<header>
		<div id="logo">
		<a href="index.php" id="logo_link">
		<h1 class="noge"><?php echo getSQL("text", "text")[2]; ?></h1>
		<h1 class="noge"><?php echo getSQL("text", "text")[2]; ?></h1>
		</a>
		</div>
		<div id="links">
		<?php 
			$count = count(getSQL("title", "menu")) - 1;
			foreach (getSQL("title", "menu") as $value) {
				global $count;
				echo "<span class='link'>" . getSQL("title", "menu")[$count] . "</span>";
				$count--;
			}
		?>
		</div>
		</header>
		<div>
		<?php ?>
		</div>
		<div id="instafeed"></div>
		
		<script src="script.js"></script>
	</body>
</html>