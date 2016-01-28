<!doctype html>
<html lang="fi">
	<head>
	
	<!-- links -->
	<link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.theme.min.css"/>
	<link rel="stylesheet" type="text/css" href='styles.css'/>
	<!-- <link rel="stylesheet" type="css/layout.php" href="layout.php"/> -->
	<link href='https://fonts.googleapis.com/css?family=Geo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<!-- links end -->
	
	<script src="jquery-1.12.0.js"></script>
	<script src="jquery-ui/jquery-ui.min.js"></script>
	
	<?php
	include 'connect.php';
	include 'getSQL.php';
	?>
	</head>
	<body>
		<header>
		<span id="noge"><h1><?php echo getSQL("text", "text")[2]; ?></h1></span>
		<span class="link" id="link1"><p><?php echo getSQL("title", "menu")[0];?></p></span>
		<span class="link" id="link2"><p><?php echo getSQL("title", "menu")[1];?></p></span>
		<span class="link" id="link3"><p><?php echo getSQL("title", "menu")[2];?></p></span>
		</header>
		
		<script src="script.js"></script>
	</body>
</html>