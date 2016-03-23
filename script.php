<?php
	
	include 'config.php';
	
	
	/* CONNECT TO DATABASE */
	
	
	$conn = mysqli_connect($config["MYSQL"]["ip"], $config["MYSQL"]["username"], $config["MYSQL"]["password"], $config["MYSQL"]["database"]);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error() . mysqli_connect_errno());
	}
	
	
	/* GET DATA FROM TABLES */
	
	
	function getSQL($x,$y,$z = null, $toString = false) {
		$sql = "SELECT " . $x . " FROM " . $y;
		if (!empty($z)) {
			$sql = $sql . " WHERE " . $z;
		}
		global $conn;
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {
			$array[] = $row[$x];
		}
		
		if ($toString) {
			$array = implode(" ", $array);
		}
		return $array;
	}
	
	
	/* SPAGHETTI MONSTER */
	/* GET LATEST IG PICTURES $n = HOW MANY */
	
	function getIGPictures($n) {
		global $keys;
		global $config;
		$content = file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token=' . $config["IG"]["IGtoken"]);
		$json = json_decode($content, true);
		$n = $n - 1;
		$nm = $n - $n;
		while ($n > -1) {
			if ($json["data"][$nm]["type"] == "video") {
				echo '<video class="igvideo ig" width="' . $json["data"][$nm]["videos"]["standard_resolution"]["width"] . '" height="' . $json["data"][$nm]["videos"]["standard_resolution"]["height"] . '" controls>';
				echo '<source class="igvideo_source ig" src="' . $json["data"][$nm]["videos"]["standard_resolution"]["url"] . '" type="video/mp4">';
				echo '</video>';
			} else {
				echo '<img class="igimg ig" src="' . $json["data"][$nm]["images"]["standard_resolution"]["url"] . '" width="' . $json["data"][$nm]["images"]["standard_resolution"]["width"] . '" height="' . $json["data"][$nm]["images"]["standard_resolution"]["height"] . '"/>';
			}
			$nm++;
			$n--;
		}
	}
?>