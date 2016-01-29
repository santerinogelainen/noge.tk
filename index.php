<!doctype html>
<html lang="fi">
	<head>
	
	<!-- links -->
	<link rel="stylesheet" type="text/css" href="jquery/jquery-ui/jquery-ui.theme.min.css"/>
	<link rel="stylesheet" type="text/css" href='styles.css'/>
	<!-- <link rel="stylesheet" type="css/layout.php" href="layout.php"/> -->
	<link href='https://fonts.googleapis.com/css?family=Geo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<!-- links end -->
	
	<script src="jquery/jquery-1.12.0.min.js"></script>
	<script src="jquery/jquery-ui/jquery-ui.min.js"></script>
	
	<?php
	include 'connect.php';
	include 'getSQL.php';
	?>
	</head>
	<body>
		<header>
		<span id="noge"><h1><?php echo getSQL("text", "text")[2]; ?></h1></span>
		
		<!-- MAKE THIS EASIER (FOR OR WHILE LOOP) -->
		<?php 
			$count = count(getSQL("title", "menu")) - 1;
			foreach (getSQL("title", "menu") as $value) {
				global $count;
				echo "<span class='link' id='link" . $value . "'><p>" . getSQL("title", "menu")[$count] . "</p></span>";
				$count--;
			}
		?>
		</header>
		
		<script src="script.js"></script>
	</body>
</html>