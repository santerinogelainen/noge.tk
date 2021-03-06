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
		
		<img class="fixedImg" src="svg/background3_BW_s.svg"/>
		<img class="fixedImg" src="svg/background3_BW.svg"/>
		<img class="fixedImg" src="svg/background3_BW.svg"/>
		
		<img id="goup" src="svg/up.svg"/>
		
		<div class="whitespace" id="whitespace_INFO">
		<h2><?php echo getSQL ("title", "menu")[0];?></h2>
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
		<div class="fixedImgView">
		</div>
		
		<div class="whitespace" id="whitespace_LINKS">
			<h2 id="link_title"><?php echo getSQL ("title", "menu")[1];?></h2>
			<div id="LINKS"></div>
			
			<div id="link_blocks">
			<?php 
				$cn = 0;
			foreach (getSQL("text", "links") as $value) {
				echo "<div class='link_block' id='" . getSQL("text", "links")[$cn] . "'>
							<a href='" . getSQL("link", "links")[$cn] . "'>
							<img src='/old/svg/" . getSQL("text", "links")[$cn] . ".svg' id='" . getSQL("text", "links")[$cn] . "_img'/>
							<p id='" . getSQL("text", "links")[$cn] . "_text'>" . getSQL("text", "links")[$cn] . "</p>
							</a>
						</div>";
				$cn++;
			}
			?></div>
			
			<hr>
			
			<div id="username_blocks">
			<?php 
				$cn = 0;
			foreach (getSQL("text", "usernames") as $value) {
				echo "<div class='username_block' id='" . getSQL("text", "usernames")[$cn] . "'>";
				if (getSQL("link", "usernames")[$cn] !== "nolink") {
					echo "<a href='" . getSQL("link", "usernames")[$cn] . "'>";
				}
				echo "<img src='/old/svg/" . getSQL("text", "usernames")[$cn] . ".svg' id='" . getSQL("text", "usernames")[$cn] . "_img'/>";
				echo "<p id='" . getSQL("text", "usernames")[$cn] . "_text'>" . getSQL("text", "usernames")[$cn] . "</p>";
				echo "<p class='ausername'>" . getSQL("username", "usernames")[$cn] . "</p>";
				if (getSQL("link", "usernames")[$cn] !== "nolink") {
					echo "</a>";
				}
				echo "</div>";
				$cn++;
			}
			?>
			</div>
		</div>
		
		<div class="fixedImgView">
		</div>
		
		<div class="whitespace" id="whitespace_PROJECTS">
		
			<div id="PROJECTS">
			</div>
			
			<h2 id="project_title"><?php echo getSQL ("title", "menu")[2];?></h2>
			
			<div id="soon">SOON&trade;</div>
			
		</div>
		
		<script src="script.js"></script>
	</body>
</html>
