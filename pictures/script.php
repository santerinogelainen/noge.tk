<?php

	include '../config.php';

	/* //CONNECT TO DATABASE


	$conn = mysqli_connect($config["MYSQL"]["ip"], $config["MYSQL"]["username"], $config["MYSQL"]["password"], $config["MYSQL"]["database"]);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error() . mysqli_connect_errno());
	}


	//GET DATA FROM TABLES


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
	}*/

	/*BASIC PARSER FROM JSON TO A PHP ASSOC ARRAY. ARGUMENTS ARE A LINK AND AN ACCESS TOKEN / CONSUMER KEY*/

	function jsonToArray($url, $access_token = "", $toAssoc = true) {
		if ($access_token === "") {
			@$content = file_get_contents($url);
		} else {
			@$content = file_get_contents($url . $access_token);
		}

		if ($content == false) {
			return false;
		}

		return $json = json_decode($content, $toAssoc);
	}

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
				// play button!
			}
			echo '<img class="igimg img img' . $nm . '" src="' . $json["data"][$nm]["images"]["thumbnail"]["url"] . '">';
			$nm++;
			$n--;
		}
	}

	ini_set("allow_url_fopen", 1);

	$file = file_get_contents("../json.json");
	$json = json_decode($file, true);
?>
