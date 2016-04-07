<!doctype html>
<html lang="fi">
	<head>
	
	<!-- links -->
	<link rel="stylesheet" type="text/css" href='/styles.css'/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<!-- links end -->
	
	
	<!-- metas -->
	
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	
	<?php
	include '/script.php';
	?>
	</head>
	<body>
		
		<div id="err_500" class="err">
			<div id="err_no">
			<?php 
			echo getSQL("error_no", "errors")[2];
			?>
			</div>
			<div id="err_message">
			<?php 
			echo getSQL("message", "errors")[2];
			?>
			</div>
			<a href="http://noge.tk" id="back_front">Back to frontpage!</a>
		</div>
		
	</body>
</html>
