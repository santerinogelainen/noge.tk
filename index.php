<!doctype html>
<html lang="fi">
	<head>
	
	<!-- links -->
	<link rel="stylesheet" type="text/css" href='styles.css'/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<!-- links end -->
	
	<script src="jquery/jquery-1.12.0.min.js"></script>
	<script src="jquery/jquery-ui.min.js"></script>
	<script src="jquery/jquery.color-2.1.2.min.js"></script>
	<script src="jquery/jquery.mobile-1.4.5.min.js"></script>
	
	<!-- metas -->
	
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	
	<?php
	include 'script.php';
	?>
	</head>
	<body>
		
		<img src="img/logo.png" id="logo"/>
		<div id="hamburger"><img src="svg/hamburger.svg" id="hamburger_svg"></div>
		<div id="expand"></div>
		<div id="menu">
			<?php 
			$cn = 0;
			foreach (getSQL("title", "menu") as &$value) {
				echo "<a href='http://noge.tk/" . strtolower(getSQL("title", "menu")[$cn]) . "/'><div id='" . strtolower(getSQL("title", "menu")[$cn])[$cn] . "' class='menu_item'>" . strtolower(getSQL("title", "menu")[$cn]) . "</div></a>";
				$cn++;
			}
			?>
		</div>
		
		<script src="script.js"></script>
	</body>
</html>
