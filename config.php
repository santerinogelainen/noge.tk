<?php 

	/* CONFIG FOR WEBSITE */

	$config = array(
			"IG" => array(
				"IGtoken" => "your_ig_token"
			),
			"MYSQL" => array(
					"ip" => "your_mysql_database_ip",
					"username" => "your_mysql_database_username",
					"password" => "your_mysql_database_password",
					"database" => "your_mysql_database"
			),
			"maintenance" => array(
					"on" => true,
					"message" => array (
							1 => "Coming soon...",
							2 => "This website is under maintanence :("
					)
			)
	);
?>