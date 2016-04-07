<!doctype html>
<html lang="fi">
	<head>
	
	<!-- links -->
	<link rel="stylesheet" type="text/css" href='styles.css'/>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
	<!-- links end -->
	
	<script src="../jquery/jquery-1.12.0.min.js"></script>
	<script src="../jquery/jquery-ui.min.js"></script>
	<script src="../jquery/jquery.color-2.1.2.min.js"></script>
	<script src="../jquery/jquery.mobile-1.4.5.min.js"></script>
	
	<!-- metas -->
	
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	
	<?php
	include 'script.php';
	?>
	</head>
	<body>
	
		<div id="hamburger"><img src="../svg/hamburger.svg" id="hamburger_svg"></div>
		<div id="expand"></div>
		<div id="menu">
		
			<a href="http://noge.tk"><img id="side_logo" src="../img/logo_white.png"></a>
		
			<?php 
			$cn = 0;
			foreach (getSQL("title", "menu") as &$value) {
				echo "<a href='http://noge.tk/" . strtolower(getSQL("title", "menu")[$cn]) . "/'><div id='" . strtolower(getSQL("title", "menu")[$cn])[$cn] . "' class='menu_item'>" . strtolower(getSQL("title", "menu")[$cn]) . "</div></a>";
				$cn++;
			}
			?>
		</div>
		
		<h1>
		<?php 
		echo "<span id='info'>" . substr(getSQL("title", "menu")[0], 0, 4) . "</span><span id='information'>" . substr(getSQL("title", "menu")[0], -7) . "</span>";
		?>
		</h1>
		
		<div id="content">
			<h2><?php 
				echo getSQL("content", "info")[1];
			?></h2>
			
			<hr>
			
			<div id="intro">
				<div id="profile">
				<img id="profile_photo" src="https://api.tumblr.com/v2/blog/ttypical.tumblr.com/avatar/512">
				<h3 id="profile_title"><?php 
					echo getSQL("content", "info")[6];
				?></h3>
				</div>
				<div id="introduction"><?php 
					echo getSQL("content", "info")[0];
				?></div>
			</div>
			
			<hr>
			
			<h2><?php 
				echo getSQL("content", "info")[2];
			?></h2>
			
			<hr>
			
			<div id="website_intro"><?php 
				echo getSQL("content", "info")[3];
			?></div>
			
			<div id="more">
				<table id="more_table">
					<tr>
						<td id="me" class="click_expand"><?php 
							echo getSQL("content", "info")[4];
						?></td>
						<td id="website" class="click_expand"><?php 
							echo getSQL("content", "info")[5];
						?></td>
					</tr>
				</table>
				<div id="me_c">
					<table id="me_table">
						<tr>
							<th colspan="2" id="me_table_header">
								<span id="abbr"><?php 
									echo getSQL("question", "about_me")[2];
								?></span>
								 - 
								<span id="full_title"><?php 
									echo getSQL("answer", "about_me")[2];
								?></span>
							</th>
						</tr>
						<?php 
							$c = 0;
							foreach (getSQL("id", "about_me", "id>0") as &$value) {
								echo "<tr class='me_row'>
								<td class='me_question'>" . getSQL("question", "about_me", "id>0")[$c] . "</td>";
								if (is_null(getSQL("link", "about_me", "id>0")[$c])) {
									echo "<td class='me_answer'>" . getSQL("answer", "about_me", "id>0")[$c] . "</td>";
								} if (!is_null(getSQL("link", "about_me", "id>0")[$c])) {
									echo "<td class='me_answer'><a href='" . getSQL("link", "about_me", "id>0")[$c] . "'>" . getSQL("answer", "about_me", "id>0")[$c] . "</a></td>";
								}
								echo "</tr>";
								$c++;
							}
						?>
					</table>
				</div>
				<div id="website_c">
					<table id="website_table">
						<tr>
							<th colspan="2" id="website_table_header">
								<?php 
									echo getSQL("answer", "about_website", "id=0", true);
								?>
							</th>
						</tr>
						<?php 
							$c = 0;
							foreach (getSQL("id", "about_website", "id>0") as &$value) {
								echo "<tr class='website_row'>
								<td class='website_question'>" . getSQL("what", "about_website", "id>0")[$c] . "</td>
								<td class='website_answer'>" . getSQL("answer", "about_website", "id>0")[$c] . "</td>
								</tr>";
								$c++;
							}
						?>
					</table>
				</div>
			</div>
		</div>
		
		<script src="script.js"></script>
	</body>
</html>
