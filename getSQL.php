<?php
	include "connect.php";
	function getSQL($x,$y) {
		$sql = "SELECT " . $x . " FROM " . $y;
		global $conn;
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {
			$array[] = $row[$x];
		}
		return $array;
	}
?>