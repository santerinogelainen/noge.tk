<!doctype html>
<html lang="fi">
	<head>
	
	<!-- links -->
	<link rel="stylesheet" type="text/css" href='rng.css'/>
	<link rel="stylesheet" type="text/css" href='styles.css'/>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700' rel='stylesheet' type='text/css'>
	<!-- links end -->
	
	<script src="jquery/jquery-1.12.0.min.js"></script>
	<script src="jquery/jquery-ui.min.js"></script>
	
	<?php
	include 'script.php';
	?>
	</head>
	<body>
		<div id="pop-menu">
		<?php 
				$cm = 0;
				foreach (getSQL("title", "menu") as $value) {
					echo "<a href='#" . getSQL("title", "menu")[$cm] . "'><span class='pop-link'>" . getSQL("title", "menu")[$cm] . "</span></a>";
					$cm++;
				}
		?>
		</div>
		<div id="pop-back"></div>
		<header>
			<?php 
				$count = count(getSQL("title", "menu")) - 1;
				foreach (getSQL("title", "menu") as $value) {
					global $count;
					echo "<a href='#" . getSQL("title", "menu")[$count] . "'><span class='link'>" . getSQL("title", "menu")[$count] . "</span></a>";
					$count--;
				}
			?>
		<svg id="hamburger" width="10%" height="60%" viewBox="0 0 600 600">
			<rect x="77.5" y="95.5" width="445" height="109"/>
			<rect x="77.5" y="395.5" width="445" height="109"/>
			<rect x="77.5" y="245.5" width="445" height="109"/>
		</svg>
		</header>
		
		<a href="/" id="logo_link">
		<h1 class="noge"><?php echo getSQL("text", "text")[2]; ?></h1>
		</a>
		
		<img src="img/illuminati_s1.jpg" id="fixedImg"/>
		
		<div class="whitespace" id="whitespace_INFO">
		<a href="#TOP"><h2><?php echo getSQL ("title", "menu")[0];?></h2></a>
		<div id="INFO"></div>
		<div id="profile_title">
			<img id="profile_photo" src="https://api.tumblr.com/v2/blog/santerinogelainen.tumblr.com/avatar/512"/>
			<h3 id="title">
				<?php 
					echo getSQL("content", "info")[0];
				?>
			</h3>
		</div>
		<div id="desc_me">
			<div id="desc">
				<?php 
					echo getSQL("content", "info")[1];
				?>
			</div>
			<a href="about/aboutme.php"><button id="about_me" type="button">About Me!</button></a> <!-- json -->
		</div>
		</div>
		
		<img class="fixImg2" src="img/jarvi2.jpg"/>
		
		<div class="whitespace" id="whitespace_LINKS">
			<a href="#TOP"><h2><?php echo getSQL ("title", "menu")[1];?></h2></a>
			<div id="LINKS"></div>
			
			<div id="soon"><span>S</span><span>o</span><span>o</span><span>n</span><span>&trade;</span></div>
		</div>
		
		<script src="script.js">

		/*SPAGHETTI!!!! temporary but i like the animation so i might make this into a proper function that does this automatically*/
		
		setInterval(function () {
			$("span:nth-child(1)").animate({
				top: "-=3vh"
			}, 200);
			setTimeout(function(){
				$("span:nth-child(1)").animate({
					top: "+=3vh"
				}, 200);
			}, 200);
			setTimeout( function(){
				$("span:nth-child(2)").animate({
					top: "-=3vh"
				}, 200);
				setTimeout(function(){
					$("span:nth-child(2)").animate({
						top: "+=3vh"
					}, 200);
				}, 200);
			},100);
			setTimeout( function(){
				$("span:nth-child(3)").animate({
					top: "-=3vh"
				}, 200);
				setTimeout(function(){
					$("span:nth-child(3)").animate({
						top: "+=3vh"
					}, 200);
				}, 200);
			},200);
			setTimeout( function(){
				$("span:nth-child(4)").animate({
					top: "-=3vh"
				}, 200);
				setTimeout(function(){
					$("span:nth-child(4)").animate({
						top: "+=3vh"
					}, 200);
				}, 200);
			},300);
			setTimeout( function(){
				$("span:nth-child(5)").animate({
					top: "-=3vh"
				}, 200);
				setTimeout(function(){
					$("span:nth-child(5)").animate({
						top: "+=3vh"
					}, 200);
				}, 200);
			},400);
		},1500);
		
		</script>
	</body>
</html>
