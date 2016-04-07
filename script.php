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
?>