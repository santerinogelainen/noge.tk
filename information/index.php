<?php
include 'script.php';
?>

<!doctype html>
<html lang="fi">
	<head>

	<title>Information</title>

	<!-- links -->
	<link rel="stylesheet" type="text/css" href='styles.css'/>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
	<!-- links end -->

	<script src="../jquery/jquery-1.12.0.min.js"></script>

	<!-- metas -->

	<meta name="viewport" content="width=device-width, user-scalable=no" />

	</head>
	<body>

		<div id="hamburger"><img src="../svg/hamburger.svg" id="hamburger_svg"></div>
		<div id="expand"></div>
		<div id="menu">

			<a href="../"><img id="side_logo" src="../img/logo_white.png"></a>
			<a href="../links/"><div id="links" class="menu_item"><?php
				echo strtolower($json["menu"][1]);
			?></div></a>
			<a href="https://github.com/santerinogelainen"><div id="github" class="menu_item"><?php
				echo strtolower($json["menu"][2]);
			?></div></a>
			<a href="../pictures/"><div id="photos" class="menu_item"><?php
				echo strtolower($json["menu"][3]);
			?></div></a>
		</div>

		<h1>
		<?php
		echo "<span id='info'>" . substr($json["menu"][0], 0, 4) . "</span><span id='information'>" . substr($json["menu"][0], -7) . "</span>";
		?>
		</h1>

		<div id="content">
			<h2><?php
				echo $json["info"]["question_1"];
			?></h2>

			<hr>

			<div id="intro">
				<div id="profile">
				<img id="profile_photo" src="https://api.tumblr.com/v2/blog/ttypical.tumblr.com/avatar/512">
				<h3 id="profile_title"><?php
					echo $json["info"]["profile_pic"];
				?></h3>
				</div>
				<div id="introduction"><?php
					echo $json["info"]["description"];
				?></div>
			</div>

			<hr>

			<h2><?php
				echo $json["info"]["question_2"];
			?></h2>

			<hr>

			<div id="website_intro"><?php
				echo $json["info"]["website_description"];
			?></div>

			<div id="more">
				<table id="more_table">
					<tr>
						<td id="me" class="click_expand"><?php
							echo $json["info"]["more_me"];
						?></td>
						<td id="website" class="click_expand"><?php
							echo $json["info"]["more_web"];
						?></td>
					</tr>
				</table>
				<div id="me_c">
					<table id="me_table">
						<tr>
							<th colspan="2" id="me_table_header">
								<span id="full_title"><?php
									echo $json["about_me"]["title"];
								?></span>
							</th>
						</tr>
						<?php
							$c = 0;
							foreach ($json["about_me"]["questions"] as &$value) {
								echo "<tr class='me_row'>
								<td class='me_question'>" . $json["about_me"]["questions"][$c][0] . "</td>";
								if (!isset($json["about_me"]["questions"][$c][2])) {
									echo "<td class='me_answer'>" . $json["about_me"]["questions"][$c][1] . "</td>";
								} if (isset($json["about_me"]["questions"][$c][2])) {
									echo "<td class='me_answer'><a href='" . $json["about_me"]["questions"][$c][2] . "'>" . $json["about_me"]["questions"][$c][1] . "</a></td>";
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
									echo $json["about_web"]["title"];
								?>
							</th>
						</tr>
						<?php
							$c = 0;
							foreach ($json["about_web"]["questions"] as &$value) {
								echo "<tr class='website_row'>
								<td class='website_question'>" . $json["about_web"]["questions"][$c][0] . "</td>
								<td class='website_answer'>" . $json["about_web"]["questions"][$c][1] . "</td>
								</tr>";
								$c++;
							}
						?>
					</table>
				</div>
			</div>
		</div>

		<script src="script.js"></script>
		<script src="../menu.js"></script>
	</body>
</html>
