<!doctype html>
<html lang="fi">
	<head>
	
	<!-- links -->
	<link rel="stylesheet" type="text/css" href='rng.css'/>
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
		
		<div id="err_400" class="err">
			<div id="err_no">
			<?php 
			echo getSQL("error_no", "errors")[1];
			?>
			</div>
			<div id="err_message">
			<?php 
			echo getSQL("message", "errors")[1];
			?>
			</div>
			<a href="http://noge.tk" id="back_front">Back to frontpage!</a>
		</div>
		
		<script src="script.js"></script>
	</body>
</html>
